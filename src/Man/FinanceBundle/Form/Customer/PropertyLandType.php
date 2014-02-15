<?php

namespace Man\FinanceBundle\Form\Customer;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PropertyLandType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('land_type',null, array(
				'label'   => 'Land Type',	
			))
            ->add('doc_number',null, array(
				'label'   => 'Doc Number',	
			))
            ->add('land_number',null, array(
				'label'   => 'Land Number',	
			))
            ->add('page_number',null, array(
				'label'   => 'Page Number',	
			))
            ->add('area',null, array(
				'label'   => 'Area',	
				//'help' => 'Example: 15-30-36',
			))
            ->add('tambol')
            ->add('ampher')
            ->add('province')
            ->add('note')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(\Symfony\Component\OptionsResolver\OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Man\FinanceBundle\Entity\PropertyLand'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'property_land';
    }
}
