<?php

namespace App\Form;

use App\Entity\Adresse;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdresseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('rue',TextType::class,[
                // 'label'=>false,
                'attr'=>[
                    'placeholder'=>'Street *',
                ]
            ])
            ->add('city',TextType::class,[
                // 'label'=>'Ville',
                'attr'=>[
                    'placeholder'=>'City *',
                ]
            ])
            ->add('tel',TextType::class,[
                // 'label'=>false,
                'attr'=>[
                    'data-inputmask'=>'"mask": "+221 99 999 99 99"',
                    'data-mask'=>"",
                    'placeholder'=>'Téléphone *',
                ]
            ])
            ->add('pays',TextType::class,[
                // 'label'=>false,
                'attr'=>[
                    'placeholder'=>'Country *',
                ]
            ])
            ->add('codePostal',TextType::class,[
                // 'label'=>false,
                'attr'=>[
                    'placeholder'=>'Postal code *',
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Adresse::class,
        ]);
    }
}
