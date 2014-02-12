<?php

namespace Man\FinanceBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Man\FinanceBundle\Entity\Customer;
use Man\FinanceBundle\Form\Customer\CustomerType;

use Man\FinanceBundle\Entity\Address;
use Man\FinanceBundle\Form\Customer\AddressType;

use Man\FinanceBundle\Entity\PropertyLand;
use Man\FinanceBundle\Form\Customer\PropertyLandType;

use Man\FinanceBundle\Entity\PropertyCar;
use Man\FinanceBundle\Form\Customer\PropertyCarType;

use Doctrine\Common\Collections\ArrayCollection;

//APY Data Grid
use APY\DataGridBundle\Grid\Source\Entity;
use APY\DataGridBundle\Grid\Export\ExcelExport;
use APY\DataGridBundle\Grid\Action\RowAction;
/**
 * Customer controller.
 *
 */
class CustomerController extends Controller
{

    /**
     * Lists all Customer entities.
     *
     */
    public function indexAction()
    {
		/*
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ManFinanceBundle:Customer')->findAll();

        return $this->render('ManFinanceBundle:Customer:index.html.twig', array(
            'entities' => $entities,
        ));
		*/
		
		$source = new Entity('ManFinanceBundle:Customer');
		$grid = $this->get('grid');
		
		$grid->setSource($source);
		$grid->hideFilters();
				
		$grid->setActionsColumnTitle('default_actions_column');

		// Attach a rowAction to the Actions Column
		$rowAction1 = new RowAction('Show', 'man_finance_customer_show');
		$grid->addRowAction($rowAction1);
		$rowAction2 = new RowAction('Edit', 'man_finance_customer_edit');
		$grid->addRowAction($rowAction2);		
		$rowAction3 = new RowAction('Delete', 'man_finance_customer_delete');
		$grid->addRowAction($rowAction3);
		
		$grid->addExport(new ExcelExport('Excel Export', 'export'));
		return $grid->getGridResponse('ManFinanceBundle:Customer:index.html.twig');		
    }
    /**
     * Creates a new Customer entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Customer();

        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
			
            $em = $this->getDoctrine()->getManager();
			
			// Address
			foreach( $entity->getAddress() as $address)
			{				
				$address->setCustomer($entity);
				$em->persist($address);					
			}
			
			// Property land
			foreach( $entity->getPropertyLand() as $property_land)
			{				
				$property_land->setCustomer($entity);
				$em->persist($address);					
			}			
			
			// Property car
			foreach( $entity->getPropertyCar() as $property_car)
			{				
				$property_car->setCustomer($entity);
				$em->persist($address);					
			}			
			
            $em->persist( $entity );
            $em->flush();

            return $this->redirect($this->generateUrl('man_finance_customer_show', array('id' => $entity->getId())));
        }

        return $this->render('ManFinanceBundle:Customer:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Customer entity.
    *
    * @param Customer $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Customer $entity)
    {
        $form = $this->createForm(new CustomerType(), $entity, array(
            'action' => $this->generateUrl('man_finance_customer_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Customer entity.
     *
     */
    public function newAction()
    {
        $entity = new Customer();
		$address = new Address();
		$entity->getAddress()->add($address);
		
		$property_land = new PropertyLand();
		$entity->getPropertyLand()->add($property_land);
		
		$property_car = new PropertyCar();
		$entity->getPropertyCar()->add($property_car);
		
		
        $form   = $this->createCreateForm($entity);

        return $this->render('ManFinanceBundle:Customer:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Customer entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ManFinanceBundle:Customer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Customer entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ManFinanceBundle:Customer:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Customer entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ManFinanceBundle:Customer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Customer entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ManFinanceBundle:Customer:new.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Customer entity.
    *
    * @param Customer $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Customer $entity)
    {
        $form = $this->createForm(new CustomerType(), $entity, array(
            'action' => $this->generateUrl('man_finance_customer_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Customer entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ManFinanceBundle:Customer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Customer entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('man_finance_customer_edit', array('id' => $id)));
        }

        return $this->render('ManFinanceBundle:Customer:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Customer entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ManFinanceBundle:Customer')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Customer entity.');
            }

            $em->remove($entity);
            $em->flush();
        }
		else
		{
			die('isValid = false');	
		}

        return $this->redirect($this->generateUrl('man_finance_customer'));
    }

    /**
     * Creates a form to delete a Customer entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('man_finance_customer_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
