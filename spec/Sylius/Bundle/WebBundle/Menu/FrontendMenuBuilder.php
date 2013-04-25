<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\Sylius\Bundle\WebBundle\Menu;

use PHPSpec2\ObjectBehavior;

/**
 * Frontend menu builder spec.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
class FrontendMenuBuilder extends ObjectBehavior
{
    /**
     * @param Knp\Menu\FactoryInterface                                $factory
     * @param Symfony\Component\Security\Core\SecurityContextInterface $securityContext
     * @param Symfony\Component\Translation\TranslatorInterface        $translator
     * @param Sylius\Bundle\ResourceBundle\Model\RepositoryInterface   $taxonomyRepository
     */
    public function let($factory, $securityContext, $translator, $taxonomyRepository)
    {
        $this->beConstructedWith($factory, $securityContext, $translator, $taxonomyRepository);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType('Sylius\Bundle\WebBundle\Menu\FrontendMenuBuilder');
    }

    public function it_extends_base_menu_builder()
    {
        $this->shouldHaveType('Sylius\Bundle\WebBundle\Menu\MenuBuilder');
    }
}
