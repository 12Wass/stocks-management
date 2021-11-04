<?php

namespace App\Controller;

use CodeItNow\BarcodeBundle\Utils\BarcodeGenerator;
use PhpOffice\PhpWord\Exception\Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Style\Font;
use App\Repository\ProductRepository;

class LabelController extends AbstractController
{
    /**
     * @Route("/label", name="label_index")
     * @param ProductRepository $productRepository
     * @return Response
     */
    public function index(ProductRepository $productRepository): Response
    {
        $products = $productRepository->findAll();
        return $this->render('word/index.html.twig', [
            'controller_name' => 'WordController',
            'enterprise' => 'Eiffage',
            'products' => $products
        ]);
    }


    /**
     * @Route("/label/generateWord", name="generate_word")
     * @param ProductRepository $productRepository
     * @param Request $request
     * @return Response
     * @throws Exception
     */
    public function generateWordFile(ProductRepository $productRepository, Request $request): Response
    {
        if ($request->isXmlHttpRequest()){
            $data = json_decode($request->request->get('data'), true);
            $phpWord = new PhpWord();
            $section = $phpWord->addSection();
            foreach ($data as $d){
                if ($d['productQuantity'] > 0){
                    for ($i = 0; $i <= $d['productQuantity']; $i++) {
                        $p = $productRepository->find($d['productId']);

                        $barcode = new BarcodeGenerator();

                        $section->addText($p->getName());

                        $barcode->setText($p->getBarcode());
                        $barcode->setType(BarcodeGenerator::Ean13);
                        $barcode->setScale(2);
                        $barcode->setThickness(25);
                        $barcode->setFontSize(7);
                        $section->addImage(base64_decode($barcode->generate()));
                    }
                }
            }

            // Enregistrement du document au format OOXML
            $objWriter = IOFactory::createWriter($phpWord, 'Word2007');
            $objWriter->save('etiquettes/etiquettes.docx');

            return new JsonResponse([
                'success' => true
            ]);
        } else {
            return new JsonResponse([
                'success' => false
            ]);
        }
    }

    /**
     * @Route("/label/download", name="download_label")
     */
    public function downloadLabels(){
        header('Content-type: application/octet-stream');
        header('Content-Disposition: attachment; filename="etiquettes.docx"');
        header('Content-Transfer-Encoding: binary');
        readfile('etiquettes/etiquettes.docx');
    }
}
