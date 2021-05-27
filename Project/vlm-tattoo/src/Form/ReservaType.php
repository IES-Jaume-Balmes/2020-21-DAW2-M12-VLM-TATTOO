<?php

namespace App\Form;

use App\Entity\Reserva;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReservaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('talla', ChoiceType::class, [
                'choices'  => [
                    'Pequeño - 1h' => 'Pequeño',
                    'Mediano - 2h' => 'Mediano',
                    'Grande - 3h' => 'Grande',
                ]
            ])
            ->add('imagen', FileType::class, ['label' => 'Inserta una imagen del tatuaje deseado', 'mapped' => false, 'required' => false])
            ->add('descripcion', TextareaType::class)
            ->add('fechaInicio', DateTimeType::class, [
                'data' => new \DateTime("now"),
                'widget' => 'choice',
                'html5' => false,
            ],)
            ->add('Pagar', SubmitType::class)

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Reserva::class,
        ]);
    }
}
