<?php
// src/Man/FinanceBundle/Admin/PostAdmin.php

namespace Man\FinanceBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Man\FinanceBundle\Form\Customer\AddressType;
use Man\FinanceBundle\Form\Customer\PropertyLandType;
use Man\FinanceBundle\Form\Customer\PropertyCarType;

class CustomerAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
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
			->add('address', 'sonata_type_collection', array(
				'label'	  => 'Address',
				'type'	  => new AddressType(),
			))					
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
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
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
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
            // add custom action links
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
					'delete' => array(),
                )
            ))				
        ;
    }
}