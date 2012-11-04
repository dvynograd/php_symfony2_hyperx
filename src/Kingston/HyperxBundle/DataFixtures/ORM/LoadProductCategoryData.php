<?php
namespace Kingston\HyperxBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Kingston\HyperxBundle\Entity\ProductCategory;

class LoadProductCategoryData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $category = new ProductCategory();
        $category->setName('Модули памяти Kingston HyperX');
        $category->setShortName('ПАМЯТЬ');
        $category->setUrl('memory');
        $manager->persist($category);
        $this->addReference('category-memory', $category);

        $category = new ProductCategory();
        $category->setName('Твердотельные накопители Kingston HyperX');
        $category->setShortName('SSD');
        $category->setUrl('ssd');
        $manager->persist($category);
        $this->addReference('category-ssd', $category);

        $manager->flush();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }
}