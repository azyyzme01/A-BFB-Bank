<?php

namespace App\Form;

use App\Entity\Rdv;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class Rdv1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date')
            ->add('raison')
            ->add('heure', ChoiceType::class, [
                'choices' => [
                    '10h30min' =>'10h30min',
                    '12h30min' => '12h30min',
                    '16h30min' => '16h30min',
                ],
                'choice_attr' => [
                    '10h30min' => ['data-color' => '10h30min'],
                    '12h30min' => ['data-color' =>  '12h30min'],
                    '16h30min' => ['data-color' =>  '16h30min'],
                ],
            ])
            ->add('services')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Rdv::class,
        ]);
    }
}
