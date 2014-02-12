<?php

namespace Man\FinanceBundle\Form\Dec;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\HttpFoundation\Response;
use Man\FinanceBundle\Form\AddressType;

class DecNewCardType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id_card',null, array(
				'label'   => 'ID Card',	
			))
            ->add('title_name',null, array(
				'label'   => 'Title Name',	
			))
            ->add('first_name',null, array(
				'label'   => 'First Name',	
			))
            ->add('last_name',null, array(
				'label'   => 'Last Name',	
			))
            ->add('nick_name',null, array(
				'label'   => 'Nick Name',	
			))
            ->add('phone',null, array(
				'label'   => 'Phone',	
			))
            ->add('birth_date',null, array(
				'label'   => 'Birth Date',	
				'years'	  => range( date('Y')-100, date('Y')),
			))
			->add('address', 'collection', array(
				'type'	  => new AddressType(),
				'allow_add'=> true,
			))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Man\FinanceBundle\Entity\Customer'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'dec_newcard';
    }
}
