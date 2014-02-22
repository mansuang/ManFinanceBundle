<?php

namespace Man\FinanceBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Man\FinanceBundle\Entity\Owner;
use Man\FinanceBundle\Form\OwnerType;

/**
 * Owner controller.
 *
 */
class OwnerController extends Controller
{

    /**
     * Lists all Owner entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ManFinanceBundle:Owner')->findAll();

        return $this->render('ManFinanceBundle:Owner:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Owner entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Owner();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('finance_owner_show', array('id' => $entity->getId())));
        }

        return $this->render('ManFinanceBundle:Owner:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Owner entity.
    *
    * @param Owner $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Owner $entity)
    {
        $form = $this->createForm(new OwnerType(), $entity, array(
            'action' => $this->generateUrl('finance_owner_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Owner entity.
     *
     */
    public function newAction()
    {
        $entity = new Owner();
        $form   = $this->createCreateForm($entity);

        return $this->render('ManFinanceBundle:Owner:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Owner entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ManFinanceBundle:Owner')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Owner entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ManFinanceBundle:Owner:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Owner entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ManFinanceBundle:Owner')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Owner entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ManFinanceBundle:Owner:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Owner entity.
    *
    * @param Owner $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Owner $entity)
    {
        $form = $this->createForm(new OwnerType(), $entity, array(
            'action' => $this->generateUrl('finance_owner_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Owner entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ManFinanceBundle:Owner')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Owner entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('finance_owner_edit', array('id' => $id)));
        }

        return $this->render('ManFinanceBundle:Owner:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Owner entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ManFinanceBundle:Owner')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Owner entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('finance_owner'));
    }

    /**
     * Creates a form to delete a Owner entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('finance_owner_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
