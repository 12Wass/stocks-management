<?php

namespace App\Service;

use App\Repository\ProductRepository;

class Ean13Generator
{
    public function generateEan13(ProductRepository $productRepository): string
    {
        $products = $productRepository->findAll();

        $code = "365854";
        for($i = 0; $i < 6; $i++){
            $code .= mt_rand(0, 9);
        }

        foreach($products as $p){
            if ($p->getBarcode() == $code){
                $this->generateEan13($productRepository);
            }
        }

        return $code;
    }
}