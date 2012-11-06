<?php

namespace Kingston\HyperxBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\DependencyInjection\ContainerAware;

class AdminMenu extends ContainerAware
{
    private $factory;

    /**
     * @param \Knp\Menu\FactoryInterface $factory
     */
    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    /**
     * @param Request $request
     * @param Router $router
     */
    public function createAdminMenu(Request $request)
    {
        $menu = $this->factory->createItem('root');

        $menu->setchildrenAttributes(array('id' => 'main_navigation', 'class'=>'menu'));

        //Help
        $help = $menu->addChild('Section', array('uri' => '#'));
        $help->setLinkAttributes(array('class'=>'sub main'));
        $help->addChild('News', array('route' => 'Kingston_HyperxBundle_News_list'));
        $help->addChild('Actions', array('route' => 'Kingston_HyperxBundle_Action_list'));
        $help->addChild('Review', array('route' => 'Kingston_HyperxBundle_Review_list'));
        $help->addChild('Product', array('route' => 'Kingston_HyperxBundle_Product_list'));
        $help->addChild('Category', array('route' => 'Kingston_HyperxBundle_Category_list'));
        return $menu;
    }
}

