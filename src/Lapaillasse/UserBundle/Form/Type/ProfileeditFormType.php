<?php

namespace Lapaillasse\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\ResettingFormType as BaseType;

class ProfileeditFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        // My custom fields
        $builder->add('state', 'text');
    }

    public function getName()
    {
        return 'lapaillasse_user_registration';
    }
}