<?php

namespace Ens\JobeetBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

use Ens\JobeetBundle\Entity\Category;

class CategoryAdmin extends Admin
{
    // setup the default sort column and order
    protected $datagridValues = array(
        '_sort_by'    => 'name',
        '_sort_order' => 'ASC',
    );
    
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
          ->add('name')
          ->add('slug')
        ;
    }
    
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
          ->add('name')
        ;
    }
    
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
          ->addIdentifier('name')
          ->add('slug')
        ;
    }
}