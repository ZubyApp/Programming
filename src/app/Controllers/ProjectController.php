<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Services\Gen1Service;
use App\Services\SpousesService;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;

class ProjectController
{
    public function __construct(private readonly Twig $twig, private readonly SpousesService $spousesService, private readonly Gen1Service $gen1service)
    {
    }
    public function index(Request $request, Response $response, $args): Response
    {
        return $this->twig->render(
            $response,
            'oldproject/index.twig',
            [
                'descs' => $this->gen1service->getGen1(),
                'spouses' => $this->spousesService->getSpouses(),
            ]
        );
    }

    public function index2(Request $request, Response $response, $args)
    {
        return $this->twig->render($response, 'oldproject/index.twig', ['spouses' => $this->spousesService->getSpouses()]);
    }
}
