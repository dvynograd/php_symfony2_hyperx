<?php

namespace Kingston\HyperxBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Kingston\HyperxBundle\Entity\ProductCategory;
use Kingston\HyperxBundle\Form\ProductCategoryType;

/**
 * ProductCategory controller.
 *
 * @Route("/productcategory")
 */
class ProductCategoryController extends Controller
{
    /**
     * Lists all ProductCategory entities.
     *
     * @Route("/", name="productcategory")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('KingstonHyperxBundle:ProductCategory')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a ProductCategory entity.
     *
     * @Route("/{id}/show", name="productcategory_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('KingstonHyperxBundle:ProductCategory')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ProductCategory entity.');
        }

        $em = $this->getDoctrine()->getManager();

        $products = $em->getRepository('KingstonHyperxBundle:Product')->findAll();

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
            'products' => $products
        );
    }

    /**
     * Displays a form to create a new ProductCategory entity.
     *
     * @Route("/new", name="productcategory_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new ProductCategory();
        $form   = $this->createForm(new ProductCategoryType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new ProductCategory entity.
     *
     * @Route("/create", name="productcategory_create")
     * @Method("POST")
     * @Template("KingstonHyperxBundle:ProductCategory:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new ProductCategory();
        $form = $this->createForm(new ProductCategoryType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('productcategory_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing ProductCategory entity.
     *
     * @Route("/{id}/edit", name="productcategory_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('KingstonHyperxBundle:ProductCategory')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ProductCategory entity.');
        }

        $editForm = $this->createForm(new ProductCategoryType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing ProductCategory entity.
     *
     * @Route("/{id}/update", name="productcategory_update")
     * @Method("POST")
     * @Template("KingstonHyperxBundle:ProductCategory:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('KingstonHyperxBundle:ProductCategory')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ProductCategory entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ProductCategoryType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('productcategory_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a ProductCategory entity.
     *
     * @Route("/{id}/delete", name="productcategory_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('KingstonHyperxBundle:ProductCategory')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ProductCategory entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('productcategory'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }

    /**
     * Finds and displays a ProductCategory entity.
     *
     * @Route("/{id}/product", name="productcategory_product")
     * @Template()
     */
    public function productAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('KingstonHyperxBundle:Product')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Product entity.');
        }

        $em = $this->getDoctrine()->getManager();

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }
}
