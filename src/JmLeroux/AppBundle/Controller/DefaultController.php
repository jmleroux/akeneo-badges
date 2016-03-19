<?php

namespace JmLeroux\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    public function versionAction()
    {
        $version = $this->get('jmleroux.micro_rest.version');
        $response = new JsonResponse([
            'version' => $version->getVersion(),
        ]);

        return $response;
    }
}
