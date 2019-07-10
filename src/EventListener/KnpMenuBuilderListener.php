<?php
/**
 * Created by PhpStorm.
 * User: smartworld
 * Date: 7/10/19
 * Time: 2:50 PM
 */

namespace App\EventListener;

use KevinPapst\AdminLTEBundle\Event\KnpMenuEvent;

class KnpMenuBuilderListener
{
    public function onSetupMenu(KnpMenuEvent $event)
    {
        $menu = $event->getMenu();

        $menu->addChild('MainNavigationMenuItem', [
            'label' => 'ADMIN',
            'childOptions' => $event->getChildOptions()
        ])->setAttribute('class', 'header');

        $menu->addChild('hotel', [
            'route' => 'hotel',
            'label' => 'HOTEL',
            'childOptions' => $event->getChildOptions()
        ])->setLabelAttribute('icon', 'fas fa-tachometer-alt');

       $menu->getChild('hotel')->addChild('hotel', [
            'route' => 'hotel_edit',
            'label' => 'ChildOneDisplayName1',
            'childOptions' => $event->getChildOptions()
        ])->setLabelAttribute('icon', 'fas fa-rss-square');
        $menu->getChild('hotel')->addChild('hotel_edit', [
            'route' => 'hotel_edit',
            'label' => 'ChildOneDisplayName',
            'childOptions' => $event->getChildOptions()
        ])->setLabelAttribute('icon', 'fas fa-rss-square');
 /*
        $menu->getChild('blogId')->addChild('ChildTwoItemId', [
            'route' => 'child_2_route',
            'label' => 'ChildTwoDisplayName',
            'childOptions' => $event->getChildOptions()
        ]);*/
    }
}