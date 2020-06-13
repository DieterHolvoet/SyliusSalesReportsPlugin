<?php

namespace MonsieurBiz\SyliusSalesReportsPlugin\Menu;

use Knp\Menu\ItemInterface;
use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;

class AdminMenuListener
{
    /**
     * Add reports link in sales menu
     *
     * @param MenuBuilderEvent $event
     */
    public function addAdminMenuItem(MenuBuilderEvent $event): void
    {
        $menu = $event->getMenu();

        $salesMenu = $menu->getChild('sales');

        if ($salesMenu instanceof ItemInterface) {
            $salesMenu
                ->addChild('monsieurbiz.sales_reports', ['route' => 'monsieurbiz_sylius_sales_reports_admin_index'])
                ->setLabel('monsieurbiz.sales_reports.ui.title')
                ->setLabelAttribute('icon', 'list alternate')
            ;
        }
    }
}
