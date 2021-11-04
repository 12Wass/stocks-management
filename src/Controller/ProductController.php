<?php

namespace App\Controller;

use App\Entity\Flux;
use App\Entity\Product;
use App\Entity\User;
use App\Form\ESType;
use App\Form\ProductType;
use App\Repository\FluxRepository;
use App\Repository\ProductRepository;
use App\Service\Ean13Generator;
use CodeItNow\BarcodeBundle\Utils\BarcodeGenerator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

/**
 * @Route("/product")
 */
class ProductController extends AbstractController
{
    /**
     * @Route("/", name="product_index", methods={"GET"})
     * @param ProductRepository $productRepository
     * @param AuthorizationCheckerInterface $authChecker
     * @return Response
     */
    public function index(ProductRepository $productRepository,  AuthorizationCheckerInterface $authChecker): Response
    {

        $barcode = new BarcodeGenerator();

        $products = $productRepository->findAll();
        foreach($products as $product){
            $barcode->setText($product->getBarcode());
            $barcode->setType(BarcodeGenerator::Ean13);
            $barcode->setScale(2);
            $barcode->setThickness(25);
            $barcode->setFontSize(10);
            $product->setEan13($barcode->generate());

            if (empty($product->getStock())){
                $product->setStock(0);
            }
            if (empty($product->getEntries())){
                $product->setEntries(0);
            }
            if (empty($product->getExits())){
                $product->setExits(0);
            }

        }

        if ($authChecker->isGranted('ROLE_ADMIN')){
            return $this->render('product/index.html.twig', [
                'products' => $products,
                'enterprise' => 'Eiffage',
                'actions' => true
            ]);
        } else if ($authChecker->isGranted('ROLE_USER') || $authChecker->isGranted('ROLE_MAG')){
            return $this->render('product/index.html.twig', [
                'products' => $products,
                'enterprise' => 'Eiffage',
                'actions' => false
            ]);
        }
    }

    /**
     * @Route("/entries_exits", name="product_es", methods={"GET", "POST"})
     * @param Request $request
     * @param ProductRepository $productRepository
     * @param Flux $flux
     * @return Response
     */
    public function es(Request $request, ProductRepository $productRepository): Response
    {
        $form = $this->createForm(ESType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $formValues = $request->request->get('es');
            $product = $productRepository->find($formValues['id']);
            $dateTimeImmutable = new \DateTime('now');
            $user = $this->getUser();
            $flux = new Flux();
            if ($formValues['flow_type'] === "entry"){
                $product->setEntries($product->getEntries() + $formValues['quantity']);
                $product->setStock($product->getStock() + $formValues['quantity']);
                $flux->setUser($user);
                $flux->setBarcode($formValues['barcode']);
                $flux->setDatetime($dateTimeImmutable);
                $flux->setName($product->getName());
                $flux->setQuantity($formValues['quantity']);
                $flux->setType('Entrée');
            } else if ($formValues['flow_type'] === 'exit'){
                $product->setExits($product->getExits() + $formValues['quantity']);
                $product->setStock($product->getStock() - $formValues['quantity']);
                $flux->setUser($user);
                $flux->setBarcode($formValues['barcode']);
                $flux->setDatetime($dateTimeImmutable);
                $flux->setName($product->getName());
                $flux->setQuantity($formValues['quantity']);
                $flux->setType('Sortie');
            }

            $this->getDoctrine()->getManager()->persist($product);
            $this->getDoctrine()->getManager()->persist($flux);
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('product_index');
        }

        return $this->render('product/es.html.twig', [
            'form' => $form->createView(),
            'enterprise' => 'Eiffage',
        ]);
    }

    /**
     * @Route("/new", name="product_new", methods={"GET","POST"})
     * @param Request $request
     * @param Flux $flux
     * @return Response
     */

    public function new(Request $request): Response
    {
        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($product);
            $entityManager->flush();

            return $this->redirectToRoute('product_index');
        }

        return $this->render('product/new.html.twig', [
            'product' => $product,
            'form' => $form->createView(),
            'enterprise' => 'Eiffage'
        ]);
    }

    /**
     * @Route("/search", name="product_search", methods={"POST", "GET"})
     * @param Request $request
     * @param ProductRepository $productRepository
     * @return JsonResponse
     */
    public function searchByBarcode(Request $request, ProductRepository $productRepository): JsonResponse
    {
        if ($request->isXmlHttpRequest()){
            $barcode = $request->request->get('searchValue');
            $product = $productRepository->findOneBy(['barcode' => $barcode]);
            $response = new JsonResponse([
                'name' => $product->getName(),
                'id' => $product->getId()
            ]);
            $response->headers->set('Content-Type', 'application/json');
            $response->headers->set('Access-Control-Allow-Origin', '*');

            return $response;
        }
    }

    /**
     * @Route("/generate_barcode", name="generate_barcode", methods={"POST", "GET"})
     * @param Request $request
     * @param ProductRepository $productRepository
     * @param Ean13Generator $ean13Generator
     * @return Response
     */
    public function generateBarcode(Request $request, ProductRepository $productRepository, Ean13Generator $ean13Generator): Response
    {
        if ($request->isXmlHttpRequest()){
            $barcode = new BarcodeGenerator();
            $code = false;
            if ($request->request->get('isEdit')){
                $barcode->setText($request->request->get('searchValue'));
            } else {
                $code = $ean13Generator->generateEan13($productRepository);
                $barcode->setText($code);
            }
            $barcode->setType(BarcodeGenerator::Ean13);
            $barcode->setScale(2);
            $barcode->setThickness(25);
            $barcode->setFontSize(10);
            $response = new JsonResponse([
                'image' => '<p>EAN13 : <img src="data:image/png;base64,' . $barcode->generate() . '"/></p>',
                'code' => $code
            ]);
            $response->headers->set('Content-Type', 'application/json');
            $response->headers->set('Access-Control-Allow-Origin', '*');

            return $response;
        }
    }


    /**
     * @Route("/{id}", name="product_show", methods={"GET"})
     */
    public function show(Product $product): Response
    {
        return $this->render('product/show.html.twig', [
            'product' => $product,
            'enterprise' => 'Eiffage'
        ]);
    }

    /**
     * @Route("/{id}/edit", name="product_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Product $product): Response
    {
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('product_index');
        }
        return $this->render('product/edit.html.twig', [
            'product' => $product,
            'form' => $form->createView(),
            'enterprise' => 'Eiffage'
        ]);
    }

    /**
     * @Route("/{id}", name="product_delete", methods={"POST"})
     */
    public function delete(Request $request, Product $product): Response
    {
        if ($this->isCsrfTokenValid('delete'.$product->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($product);
            $entityManager->flush();
        }

        return $this->redirectToRoute('product_index');
    }

}
