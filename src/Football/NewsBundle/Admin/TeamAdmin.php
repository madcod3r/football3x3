<?php

namespace Football\NewsBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class TeamAdmin extends Admin
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
            ->add('league')
            ->add('_action', 'actions', array(
            'actions' => array(
                'edit' => array(),
                'delete' => array()
            )
        ))
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
            ->add('league')
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name')
            ->add('image', 'sonata_type_model')
            ->add('description')
            ->add('league', 'sonata_type_model')
        ;
    }
}
