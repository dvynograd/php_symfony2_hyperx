<?php
namespace Kingston\HyperxBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Kingston\HyperxBundle\Entity\Action;

class LoadActionData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i <10; $i++) {
            $review = new Action();
            $review->setDate(new \DateTime());
            $review->setTitle('С 8 по 30 октября!');
            $review->setContent('Акция! Получи гипер-скидку к десятилетию Kingston HyperX! Фантастические скидки на всю'
                . ' линейку HyperX. Гипер-пространство, ультра-звук — все это детский смех по сравнению со сверх-быстрой'
                . ' оперативной памятью и SSD накопителями HyperX!'
                . ' Скорее! Пока не поздно! Получи свою супер-скидку на ультра-скоростную память HyperX!'
                . ' Испытать гипер-ускорение теперь проще простого! Все что тебе необходимо это — сверх-внимание к деталям.'
                . ' Ищи специальные символы на сайте Rozetka.ua, сохраняй акционные коды, используй их при покупке'
                . ' продукции HyperX, получай скидку до 70%!'
                . ' Быстрее скорости света?! Только с HyperX!'
            );
            $review->setDescription('Невероятные скидки к десятилетию HyperX!');
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