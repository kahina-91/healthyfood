<?php

namespace App\Form;
use Symfony\Component\Form\AbstractType;

class ApplicationType extends AbstractType 
{
    /**
     * have base configuration of field
     *
     * @param [string] $label
     * @param [string] $placeholder
     * @param array $options
     * @return array
     */
    protected function getConfiguration($label, $placeholder, $options = [])
    {
        return array_merge_recursive([
            'label' => $label,
            'attr' => [
                'placeholder' => $placeholder
            ]
        ], $options);
    }
}