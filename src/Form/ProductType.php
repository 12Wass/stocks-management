<?php

namespace App\Form;

use App\Entity\Product;
use App\Entity\Provider;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Libellé',

            ])
            ->add('barcode', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'maxlength' => 12
                ],
                'label' => 'Code-barre',

            ])
            ->add('provider', EntityType::class, [
                'class' => Provider::class,
                'choice_label' => 'name',
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Fournisseur',

            ])
            ->add('stock', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Stock',
            ])
            ->add('min_alert', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Seuil d\'alerte minimum',
            ])
            ->add('max_alert', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Seuil d\'alerte maximum',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
