<?php

namespace Man\FinanceBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Man\FinanceBundle\Entity\Branch;
use Man\FinanceBundle\Form\BranchType;

/**
 * Branch controller.
 *
 */
class BranchController extends Controller
{

    /**
     * Lists all Branch entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ManFinanceBundle:Branch')->findAll();

        return $this->render('ManFinanceBundle:Branch:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Branch entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Branch();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('finance_branch_show', array('id' => $entity->getId())));
        }

        return $this->render('ManFinanceBundle:Branch:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Branch entity.
    *
    * @param Branch $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Branch $entity)
    {
        $form = $this->createForm(new BranchType(), $entity, array(
            'action' => $this->generateUrl('finance_branch_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Branch entity.
     *
     */
    public function newAction()
    {
        $entity = new Branch();
        $form   = $this->createCreateForm($entity);

        return $this->render('ManFinanceBundle:Branch:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Branch entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ManFinanceBundle:Branch')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Branch entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ManFinanceBundle:Branch:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Branch entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ManFinanceBundle:Branch')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Branch entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ManFinanceBundle:Branch:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Branch entity.
    *
    * @param Branch $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Branch $entity)
    {
        $form = $this->createForm(new BranchType(), $entity, array(
            'action' => $this->generateUrl('finance_branch_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Branch entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ManFinanceBundle:Branch')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Branch entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('finance_branch_edit', array('id' => $id)));
        }

        return $this->render('ManFinanceBundle:Branch:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Branch entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ManFinanceBundle:Branch')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Branch entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('finance_branch'));
    }

    /**
     * Creates a form to delete a Branch entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('finance_branch_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
