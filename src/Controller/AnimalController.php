<?php

namespace App\Controller;

use App\Entity\Animal;
use App\Repository\AnimalRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; // Import the necessary class

class AnimalController extends AbstractController
{
          #[Route('/', name: 'animaux')]
            public function index(AnimalRepository $repository): Response
            {
                $animaux = $repository->findAll();
                
                return $this->render('animal/index.html.twig',[
                    'animaux' => $animaux
                ]);
            }
            
          #[Route('/animal/{id}', name: 'afficher_animal')]
            public function afficherAnimal( Animal $animal): Response
            {
                
               
                return $this->render('animal/afficherAnimal.html.twig',[
                    'animal' => $animal
                ]);
            }
}
               
        
    