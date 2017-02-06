<?php

namespace PIGBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClienteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cIF')
            ->add('domicilioFiscal')
            ->add('cP')
            ->add('municipio')
            ->add('provincia')
            ->add('noCuentaBancaria')
            ->add('personaContacto')
            ->add('telefonoContacto')
            ->add('telefonoMovilContacto')
            ->add('razonSocial')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PIGBundle\Entity\Cliente'
        ));
    }
}
