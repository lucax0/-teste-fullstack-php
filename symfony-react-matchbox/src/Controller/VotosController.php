<?php

namespace App\Controller;
    
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VotosController extends AbstractController
{
    /**
     * @Route("/{reactRouting}", name="home", defaults={"reactRouting": null})
     */
    public function index()
    {
        return $this->render('votos/index.html.twig',[
            'controller_name' => 'VotosController',
        ]);
    }

    /**
     * @Route("/api/votos", name="votos")
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getUsers()
    {
        $users = [
            [
                "__id" => "f8c3500f39017602234a031caa64a8b4",
                "name" => "Caio Diego Henrique Moreira",
                "description" => "Product Designer",
                "picture" => "https://storage-matchboxbrasil.sfo2.digitaloceanspaces.com/diversos/frontend-test/f8c3500f39017602234a031caa64a8b4.png",
                "positive" => 51638022,
                "negative" => 18143089
            ],
            [
                "__id"=> "7b1dd3f58be97715e9e06475bb58fce5",
                "name"=> "Isabella Esther Carolina da Mata",
                "description"=> "Marketing",
                "picture"=> "https://storage-matchboxbrasil.sfo2.digitaloceanspaces.com/diversos/frontend-test/7b1dd3f58be97715e9e06475bb58fce5.png",
                "positive"=> 23249923,
                "negative"=> 39587707
            ],
            [
                "__id" => "70580002438b08c63286d08b7c43fb4c",
                "name" => "Alessandra Teresinha Fernandes",
                "description" => "Recruitment Marketing",
                "picture" => "https://storage-matchboxbrasil.sfo2.digitaloceanspaces.com/diversos/frontend-test/70580002438b08c63286d08b7c43fb4c.png",
                "positive" => 59089056,
                "negative" => 14772265
            ],
            [
                "__id" => "3404c4a70e7704009cd1915a349189f4",
                "name" => "Emilly Olivia das Neves",
                "description" => "Comunication",
                "picture" => "https://storage-matchboxbrasil.sfo2.digitaloceanspaces.com/diversos/frontend-test/3404c4a70e7704009cd1915a349189f4.png",
                "positive" => 0,
                "negative" => 32
            ],
            [
                "__id" => "c97686edbeb8df774a567e9884f4d490",
                "name" => "Kevin Ruan Cauê Corte Real",
                "description" => "Data Scientist",
                "picture" => "https://storage-matchboxbrasil.sfo2.digitaloceanspaces.com/diversos/frontend-test/c97686edbeb8df774a567e9884f4d490.png",
                "positive" => 69274684,
                "negative" => 9446548
            ]
        ];
    
        $response = new Response();

        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        $response->setContent(json_encode($users));
        
        return $response;
    }
}