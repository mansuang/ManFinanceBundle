<?php
// src/Man/FinanceBundle/Admin/PostAdmin.php

namespace Man\FinanceBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class OwnerAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('owner_name', null, array(
				'label' => 'ชื่อเจ้าของสัญญา'
			))
            ->add('is_default', null, array(
				'label' => 'ชื่อหลัก',
				'required'  => false,
			))			
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('owner_name', null, array(
				'label' => 'ชื่อเจ้าของสัญญา'
			))
            ->add('is_default', null, array(
				'label' => 'ชื่อหลัก'
			))		
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('owner_name', null, array(
				'label' => 'ชื่อเจ้าของสัญญา'
			))
            ->add('is_default', null, array(
				'label' => 'ชื่อหลัก'
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