<?php
/**
 * Модуль веб-приложения GearMagic.
 * 
 * @link https://gearmagic.ru
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

namespace Gm\Frontend\Tags;

/**
 * Модуль вывода материалов сайта по указаной метки.
 * 
 * @author Anton Tivonenko <anton.tivonenko@gmail.com>
 * @package Gm\Frontend\Tags
 */
class Module extends \Gm\Mvc\Module\FrontendModule
{
    /**
     * {@inheritdoc}
     */
    public string $id = 'gm.fe.tags';

    /**
     * {@inheritdoc}
     */
    public function controllerMap(): array
    {
        return [
            'info' => 'Info',
            '*'    => 'IndexController'
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getThemePath(): string
    {
        return '';
    }

    /**
     * Возвращает маршрут модуля.
     * 
     * Маршрут модуля указывается в конфигурации установки модуля ".install.php" в 
     * параметре "route" или в свойстве класса.
     * 
     * @see Module::getInstalledParam()
     *
     * @return string
     */
    public function getRoute(): string
    {
        if (!isset($this->route)) {
            $this->route = $this->getInstalledParam('route', '');
        }
        return $this->route;
    }
}
