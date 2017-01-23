<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 12/7/16
 * Time: 5:33 PM
 */

namespace AppBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UpdateProgrammerType extends ProgrammerType
{

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        parent::setDefaultOptions($resolver);

        $resolver->setDefaults(array(
            'is_edit' => true,
        ));
    }

    public function getName()
    {
        return 'programmer_edit';
    }

}