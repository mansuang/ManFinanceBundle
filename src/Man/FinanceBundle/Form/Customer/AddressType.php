<?php

namespace Man\FinanceBundle\Form\Customer;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AddressType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('address_type','choice', array(
				'label' => 'Address Type',
				'choices' => array('ที่อยู่บ้าน'=>'ที่อยู่บ้าน', 'ที่อยู่ปัจจุบัน'=>'ที่อยู่ปัจจุบัน','ที่ทำงาน'=>'ที่ทำงาน')
			))
            ->add('line_1')
            ->add('mooban')
            ->add('tambol')
            ->add('ampher')
            ->add('province')
            ->add('postcode')
            ->add('phone')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(\Symfony\Component\OptionsResolver\OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Man\FinanceBundle\Entity\Address'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'address';
    }
}
