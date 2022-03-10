<?php

namespace App\Form;

use App\Entity\Movement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class MovementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Object', TextType::class, array(
                'attr' => array('class' => 'form-control')))
            ->add('Value', IntegerType::class, array(
                'attr' => array('class' => 'form-control')))
            ->add('Date')
            ->add('Credit', CheckboxType::class, array(
                'attr' => array('class' => 'form-check-input form-switch')
            ))
            ->add('Reccurent')
            ->add('Recurrence', TextType::class, array(
                'attr' => array('class' => 'form-control')))
            ->add('Comment', TextareaType::class, array(
              'required' => false,
              'attr' => array('class' => 'form-control h-25')))
            ->add('Valued')
            ->add('Method', ChoiceType::class, array(
              'choices' => [
                'Bancontact' => 'bc',
                'CC Thomas' => 'ccthom',
                'CC Virginie' => 'ccvirgi',
                'CASH' => 'cash'],
              'attr' => array('class' => 'form-control')))
            ->add('Account')
            ->add('Category')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Movement::class,
        ]);
    }
}
