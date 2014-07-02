<?php

namespace Lapaillasse\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        // My custom fields
        $builder->add('state', 'text');
        $builder->add('street', 'text');
        $builder->add('postal_code', 'number');
        $builder->add('lat', 'hidden');
        $builder->add('lng', 'hidden');
    }

    public function getName()
    {
        return 'lapaillasse_user_registration';
    }
}