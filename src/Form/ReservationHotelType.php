<?php

namespace App\Form;

use App\Entity\ReservationHotel;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReservationHotelType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nbNuitees')
            ->add('nbPersonnes')
            ->add('prix')
            ->add('idc')
            ->add('dateDepart')
            ->add('dateArrivee')
            ->add('idu')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ReservationHotel::class,
        ]);
    }
}
