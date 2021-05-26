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
                    'Grande' => 'Grande',
                    'Mediano' => 'Mediano',
                    'Pequeño' => 'Pequeño',
                ]
            ])
            ->add('imagen', FileType::class, ['label' => 'Inserta una imagen del tatuaje deseado', 'mapped' => false, 'required' => true])
            ->add('descripcion', TextareaType::class)
            ->add('fechaInicio', DateTimeType::class, [
                'data' => new \DateTime("now"),
                'widget' => 'choice',
                'html5' => false,



            ])
            //->add('fechaFinal', DateTimeType::class)
            ->add('Reserva', SubmitType::class)

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Reserva::class,
        ]);
    }
}
