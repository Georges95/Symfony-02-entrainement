<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use App\Entity\Famille;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AnimalFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $c1 = new Famille();
        $c1->setLibelle('mammifères');
        $c1->setDescription('Animaux vertébrés nourrissant leurs petits avec du lait');
        $manager->persist($c1);

        $c2 = new Famille();
        $c2->setLibelle('reptiles');
        $c2->setDescription('Animaux vertébrés qui rampent');
        $manager->persist($c2);

        $c3 = new Famille();
        $c3->setLibelle('poissons');
        $c3->setDescription('Animaux invertébrés du monde aquatique');
        $manager->persist($c3);

        $a1 = new Animal();
        $a1->setNom('Chien');
        $a1->setDescription('Animal domestique');
        $a1->setImage('chien.png');
        $a1->setPoids(10);
        $a1->setDangereux(false);
        $a1->setFamille($c1);
        $manager->persist($a1);

        $a2 = new Animal();
        $a2->setNom('Cochon');
        $a2->setDescription('Animal de la ferme');
        $a2->setImage('cochon.png');
        $a2->setPoids(300);
        $a2->setDangereux(false);
        $a2->setFamille($c1);
        $manager->persist($a2);

        $a3 = new Animal();
        $a3->setNom('Serpent');
        $a3->setDescription('Animal dangereux');
        $a3->setImage('Serpent.png');
        $a3->setPoids(5);
        $a3->setDangereux(true);
        $a3->setFamille($c2);
        $manager->persist($a3);

        $a4 = new Animal();
        $a4->setNom('Crocodile');
        $a4->setDescription('Animal très dangereux');
        $a4->setImage('croco.png');
        $a4->setPoids(500);
        $a4->setDangereux(true);
        $a4->setFamille($c2);
        $manager->persist($a4);

        $a5 = new Animal();
        $a5->setNom('Requin');
        $a5->setDescription('Animal marin très dangereux');
        $a5->setImage('requin.png');
        $a5->setPoids(800);
        $a5->setDangereux(true);
        $a5->setFamille($c3);
        $manager->persist($a5);
        

        $manager->flush();
    }
}