<?php

namespace Man\FinanceBundle\Form\Dec;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DecCardType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('contract_date')
			->add('last_payment_date')
            ->add('begin_cost')
            ->add('contract_style', 'choice', array(
					'choices'	=> array('จำนอง','เขียนสัญญา','เซ็นต์สัญญา'),
					'expanded'	=> true,
					'required'	=> true,
				))
            ->add('interest_percent',null, array(

				))
            ->add('allow_day_late')
            ->add('interest_late_percent',null, array(

				))		
            ->add('owner')
            ->add('finish_contract_date')
            ->add('branch')
            ->add('employee')
            ->add('note')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Man\FinanceBundle\Entity\Card'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'man_financebundle_dec_card';
    }
}
