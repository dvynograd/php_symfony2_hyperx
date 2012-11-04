<?php
namespace Kingston\HyperxBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Kingston\HyperxBundle\Entity\Product;

class LoadProductData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i <20; $i++) {
            $product = new Product();
            $product->setName('HYPERX PREDATOR');
            $product->setDescription('ПРЕДОСТЕРЕЖЕНИЕ: Пользователи могут испытывать сильное укачивание и/или полную'
                . ' потерю ориентации из-за чрезвычайно высоких скоростей работы, достигаемых при помощи модулей'
                . ' HyperX® Predator. Они не предназначены для детей, слабых духом людей, людей, которые никуда'
                . ' не торопятся, и для всех тех, кто может довольствоваться малым. Модули памяти имеют частоту до'
                . ' 2666МГц, новый теплоотвод для улучшенного рассеивания тепла, поддерживают Intel XMP,'
                . ' совместимы с системными платами всех основных производителей и отличаются легендарной надежностью'
                . ' Kingston. Мы бы даже порекомендовали использовать шлем.'
                . ' ПРЕИМУЩЕСТВА'
                . ' Емкость 4ГБ–32ГБ (комплекты по 4ГБ, 8ГБ, 16ГБ и 32ГБ)'
            );
            $product->setCategory($this->getReference((rand(0,1) ? 'category-ssd' : 'category-memory')));
            $manager->persist($product);
        }
        $manager->flush();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 2; // the order in which fixtures will be loaded
    }
}