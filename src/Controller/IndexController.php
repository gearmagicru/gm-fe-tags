<?php
/**
 * Этот файл является частью модуля веб-приложения GearMagic.
 * 
 * @link https://gearmagic.ru
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

namespace Gm\Frontend\Tags\Controller;

use Gm;
use Gm\Http\Response;
use Gm\Mvc\Controller\Controller;

/**
 * Контроллер вывода материалов сайта по указанной метки.
 * 
 * @author Anton Tivonenko <anton.tivonenko@gmail.com>
 * @package Gm\Frontend\Tags\Controller
 * @since 1.0
 */
class IndexController extends Controller
{
    /**
     * Действие "index" выводит материалы сайта по указанной метки.
     * 
     * @return Response|string
     */
    public function indexAction(): Response|string
    {
        /** @var string $slug Метка материала */
        $slug = Gm::$app->router->get('slug', '');
        // если метка не указан явно
        if (empty($slug)) {
            return $this->render('pages/404');
        }

        
        /** @var \Gm\Tagger\Tag|null $tag */
        $tag = Gm::$app->tagger->getTagBySlug($slug);
        if ($tag === null || !$tag->isVisible()) {
            return $this->render('pages/404');
        }
        Gm::tempPut('tag', $tag);
        return $this->render('pages/tags-list', ['tag' => $tag]);
    }
}
