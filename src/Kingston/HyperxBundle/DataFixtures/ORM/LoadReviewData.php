<?php
namespace Kingston\HyperxBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Kingston\HyperxBundle\Entity\Review;

class LoadReviewData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i <10; $i++) {
            $review = new Review();
            $review->setDate(new \DateTime());
            $review->setTitle('Память Kingston HyperX Predator DDR3 для самых требовательных');
            $review->setContent('Компания Kingston Technology анонсировала 240-контактные модули DIMM оперативной '
                . 'памяти DDR3 из новой линейки HyperX Predator Series, ориентированные на наиболее взыскательных'
                . ' пользователей из числа компьютерных энтузиастов и геймеров.'
                . 'Данные изделия оборудованы усовершенствованными фирменными радиаторами с агрессивным дизайном,'
                . ' поддерживают профили Intel XMP и доступны в виде двухканальных либо четырёхканальных комплектов.'
                . ' При этом полный перечень выпускаемых продуктов, их спецификации и рекомендованные цены для рынка'
                . 'США представлены в приведённой ниже таблице.'
                . ' Напоследок сообщим, что все перечисленные наборы обеспечиваются пожизненной гарантией качества от'
                . ' изготовителя. источник: www.3dnews.ru');
            $review->setDescription('Компания Kingston Technology анонсировала 240-контактные модули DIMM оперативной'
                . ' памяти DDR3 из новой линейки HyperX Predator Series, ориентированные...');
            $review->setIsActive(true);
            $manager->persist($review);
        }
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