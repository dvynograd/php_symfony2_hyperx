<?php
namespace Kingston\HyperxBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Kingston\HyperxBundle\Entity\News;

class LoadUserData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i <10; $i++) {
            $news = new News();
            $news->setDate(new \DateTime());
            $news->setTitle('Турнир по StarCraft II от Kingston с призовым фондом $15 тысяч');
            $news->setContent('Компания Kingston Technology организовывает международный онлайн-турнир по'
                . ' StarCraft II в честь десятой годовщины существования линейки игровых продуктов под маркой HyperX,'
                . ' которые пользуются неизменной популярностью игроков и компьютерных энтузиастов.'
                . ' Открытая для всех регистрация на участие в соревновании уже началась, а завершится 27 сентября.'
                . ' Отборочный онлайн-тур будет проходить в течение месяца с 1 октября по 30 ноября. Финал состоится'
                . ' в 7 и 8 января следующего года в Лас-Вегасе на выставке потребительской электроники CES 2013.'
                . ' На отборочном этапе будет выявлено 8 лучших игроков, ещё столько же профессиональных геймеров будут'
                . ' приглашены на финал. Общий призовой фонд размером $15 тысяч будет разделён среди 4 призовых мест'
                . ' по следующей градации: $7000, $4500, $2500 и $1000. Победитель будет назван "первым в мире'
                . ' чемпионом HyperX".'
                . ' "Мы поддерживали индустрию компьютерных игр в течение 10 лет, предлагая модули памяти HyperX,'
                . ' и все это время игроки поддерживали нас, — сказала Дара Сан (Dara Sun), руководитель подразделения'
                . ' HyperX компании Kingston. — Мы хотели организовать интересное мероприятие, чтобы поблагодарить'
                . ' поклонников нашей продукции. Этот турнир станет отличной возможностью для них побороться с другими'
                . ' игроками и выиграть классные призы".'
                . ' Условия участия в соревновании и дополнительная информация о правилах, организационной структуре,'
                . ' картах и призах представлена на сайте мероприятия .источник: www.3dnews.ru');
            $news->setDescription('Компания Kingston Technology организовывает международный онлайн-турнир по '
                . 'StarCraft II в честь десятой годовщины HyperX...');
            $news->setIsActive(true);
            $manager->persist($news);
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