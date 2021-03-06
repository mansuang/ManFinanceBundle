<?php

namespace Man\FinanceBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Man\FinanceBundle\Entity\Card;
use Man\FinanceBundle\Form\Dec\DecCardType;

/**
 * Card controller.
 *
 */
class DecController extends Controller
{

    /**
     * Lists all Card entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ManFinanceBundle:Card')->findAll();

        return $this->render('ManFinanceBundle:Card:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Card entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Card();

        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
			
			// Set vars
			$entity->setDisplayId( $entity->getBranch()->getId().$entity->getOwner()->getId().$entity->getEmployee()->getId().date("ymdHis") );
			$entity->setCardType('effective');
			$entity->setCardStatus('new');
			$entity->setCycleDay( $entity->getContractDate()->format('d') );
			
            $em->persist($entity);
            $em->flush();

            //return $this->redirect($this->generateUrl('man_finance_dec_new', array('id' => $entity->getId())));
            return $this->redirect($this->generateUrl('man_finance_dec_new'));
        }

        return $this->render('ManFinanceBundle:Dec:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Card entity.
    *
    * @param Card $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Card $entity)
    {
        $form = $this->createForm(new DecCardType(), $entity, array(
            'action' => $this->generateUrl('man_finance_dec_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Card entity.
     *
     */
    public function newAction()
    {
        $entity = new Card();
		
		// default values
		$entity->setContractDate(new \DateTime());
		$entity->setLastPaymentDate(new \DateTime());
		$entity->setInterestPercent(3);
		$entity->setInterestLatePercent(2);
		$entity->setAllowDayLate(31);
		
		
        $form   = $this->createCreateForm($entity);

        return $this->render('ManFinanceBundle:Dec:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Card entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ManFinanceBundle:Card')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Card entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ManFinanceBundle:Card:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Card entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ManFinanceBundle:Card')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Card entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ManFinanceBundle:Card:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Card entity.
    *
    * @param Card $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Card $entity)
    {
        $form = $this->createForm(new CardType(), $entity, array(
            'action' => $this->generateUrl('finance_card_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Card entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ManFinanceBundle:Card')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Card entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('finance_card_edit', array('id' => $id)));
        }

        return $this->render('ManFinanceBundle:Card:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Card entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ManFinanceBundle:Card')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Card entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('finance_card'));
    }

    /**
     * Creates a form to delete a Card entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('finance_card_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
