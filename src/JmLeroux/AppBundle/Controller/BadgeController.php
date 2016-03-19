<?php

namespace JmLeroux\AppBundle\Controller;

use Akeneo\Badge\BadgeFactoryInterface;
use Akeneo\Badge\BadgeRendererInterface;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class BadgeController extends Controller
{
    public function indexAction($imageName)
    {
        try {
            $factory = $this->getBadgeFactory();
            $renderer = $this->getBadgeRenderer();
            $badge = $factory->createFromString($imageName);
            $image = $renderer->render($badge);

            $response = new Response($image->__toString());
            $response->headers->set('Content-Type', 'image/svg+xml; charset=UTF-8');

            return $response;
        } catch (Exception $e) {
            throw $this->createNotFoundException($e->getMessage());
        }
    }

    /**
     * @return BadgeFactoryInterface
     */
    protected function getBadgeFactory()
    {
        return $this->get('akeneo.badge.factory');
    }

    /**
     * @return BadgeRendererInterface
     */
    protected function getBadgeRenderer()
    {
        return $this->get('akeneo.badge.renderer');
    }
}
