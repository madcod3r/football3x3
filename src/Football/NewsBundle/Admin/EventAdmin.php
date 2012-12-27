<?php

namespace Football\NewsBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EventAdmin extends Admin
{
  /**
   * {@inheritdoc}
   */
  protected function configureListFields(ListMapper $listMapper)
  {
    $listMapper
      ->add('name')
      ->add('image')
      ->add('description')
      ->add('order')
    ;
  }

  /**
   * {@inheritdoc}
   */
  protected function configureDatagridFilters(DatagridMapper $filterMapper)
  {
    $filterMapper
      ->add('id')
      ->add('name')
      ->add('image')
      ->add('description')
      ->add('order')
    ;
  }

  /**
   * {@inheritdoc}
   */
  protected function configureFormFields(FormMapper $formMapper)
  {
    $formMapper
      ->add('name')
      ->add('image', 'file')
      ->add('description')
      ->add('order')
    ;
  }
}
