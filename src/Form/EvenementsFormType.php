<?php

namespace App\Form;

use App\Entity\Categories;
use App\Entity\Evenements;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EvenementsFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('libelle', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Nom'
            ])
            ->add('description')
            ->add('date_e', DateTimeType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Date et heure de l\'événement'
            ])
            ->add('places', IntegerType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Nombre de places'
            ])
            ->add('prix_V', IntegerType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Prix VIP'
            ])
            ->add('prix_SV', IntegerType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Prix Semi-VIP'
            ])
            ->add('prix_N', IntegerType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Prix Normal'
            ])
            ->add('categorie', EntityType::class, [
                'class' => Categories::class,
                'choice_label' => 'libelle',
                'label' => 'Catégorie',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Evenements::class,
        ]);
    }
}
