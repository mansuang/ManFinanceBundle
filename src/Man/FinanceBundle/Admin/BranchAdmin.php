<?php
// src/Man/FinanceBundle/Admin/PostAdmin.php

namespace Man\FinanceBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class BranchAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('branch_name', null, array(
				'label' => 'Branch Name'
			))

        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper	
            ->add('branch_name', null, array(
				'label' => 'Branch Name'
			))
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper	
            ->add('branch_name', null, array(
				'label' => 'Branch Name'
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