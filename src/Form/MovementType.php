<?php

namespace App\Form;
use App\Entity\Account;
use App\Entity\Movement;
use App\Entity\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class MovementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Object', TextType::class, array(
              'label' => 'Objet'
            ))
            ->add('Value', IntegerType::class, array(
              'label' => 'Montant'
            ))
            ->add('Date')
            ->add('Credit', CheckboxType::class, array(
              'label_attr'=> array('class' => 'checkbox-inline checkbox-switch'),
              'label' => 'Créditer!',
              'required' => false
            ))
            ->add('Reccurent', CheckboxType::class, array(
              'label_attr'=> array('class' => 'checkbox-inline checkbox-switch'),
              'label' => 'Dépense récurente',
              'required' => false,
            ))
            ->add('Recurrence', TextType::class, array(
              'label' => 'Recurrence',
              'required' => false,
            ))
            ->add('Comment', TextareaType::class, array(
              'required' => false,
              'attr' => array('class' => 'form-control h-25'),
              'label' => 'Commentaire',
              'required' => false,
            ))
            ->add('Valued', CheckboxType::class, array(
              'label_attr'=> array('class' => 'checkbox-inline checkbox-switch'),
              'label' => 'Dépense prévisionnelle',
              'required' => false,
            ))
            ->add('Method', ChoiceType::class, array(
              'label' => 'Moyen de paiement',
              'choices' => [
                'Bancontact' => 'bc',
                'CC Thomas' => 'ccthom',
                'CC Virginie' => 'ccvirgi',
                'CASH' => 'cash'],
              'attr' => array()))
            ->add('Account',EntityType::class, array(
              'placeholder' => 'Choisissez un compte',
              'label' => 'Compte',
              'class' => Account::class,
              'attr' => array('class' => 'form-control'),
              'choice_label' => "Name"))
            ->add('Category',EntityType::class, array(
              'placeholder' => 'Choisissez une catégorie',
              'label' => 'Catégorie',
              'class' => Category::class,
              'attr' => array('class' => 'form-control'),
              'choice_label' => "Name"))

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Movement::class,
        ]);
    }
}
