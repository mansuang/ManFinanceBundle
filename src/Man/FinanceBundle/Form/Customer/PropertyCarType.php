<?php

namespace Man\FinanceBundle\Form\Customer;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PropertyCarType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('car_type',null, array(
				'label'   => 'Car Type',	
			))
            ->add('brand')
            ->add('model')
            ->add('license_letter',null, array(
				'label'   => 'License Letter',	
			))
            ->add('license_number',null, array(
				'label'   => 'License Number',	
			))
            ->add('license_province',null, array(
				'label'   => 'License Province',	
			))
            ->add('register_date',null, array(
				'label'   => 'Register Date',	
			))
            ->add('serial')
            ->add('note')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(\Symfony\Component\OptionsResolver\OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Man\FinanceBundle\Entity\PropertyCar'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'property_car';
    }
}
