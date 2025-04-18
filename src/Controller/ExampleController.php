<?php

/**
 * This file is part of the sfExampleComponent project.
 *
 * (c) Festim Kolgeci <festim.kolgei@pm.me>
 *
 * For complete copyright and license details, please refer
 * to the LICENSE file distributed with this source code.
 */

namespace FesKol\SfExampleComponent\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ExampleController extends AbstractController
{
    #[Route('/example', name: 'app_example')]
    public function example(): Response
    {
        return $this->render('example.html.twig', [
            'controller_name' => 'Component Example Controller'
        ]);
    }
}
