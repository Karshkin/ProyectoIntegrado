<?php

namespace PIGBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class ClienteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cIF',TextType::class)
            ->add('domicilioFiscal',TextType::class)
            ->add('cP',IntegerType::class)
            ->add('municipio',TextType::class)
            ->add('provincia',TextType::class)
            ->add('noCuentaBancaria',IntegerType::class)
            ->add('personaContacto',TextType::class)
            ->add('telefonoContacto',TextType::class)
            ->add('telefonoMovilContacto',TextType::class)
            ->add('razonSocial',TextType::class)
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
