<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 12/7/16
 * Time: 5:33 PM
 */

namespace AppBundle\Form;


use AppBundle\Entity\Programmer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProgrammerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nickname', TextType::class, array(
                'disabled' => $options['is_edit']
            ))
            ->add('avatarNumber', ChoiceType::class, [
                'choices' => [
                    1,
                    2,
                    3,
                    4,
                    5,
                    6,
                ],
            ])
            ->add('tagLine', TextareaType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Programmer::class,
            'is_edit' => false,
            'csrf_protection' => false
        ));
    }
}