<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use App\Entity\Dispose;
use App\Entity\Famille;
use App\Entity\Personne;
use App\Entity\Continent;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AnimalFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $p1 = new Personne();
        $p1->setNom('Milo');
        $manager->persist($p1);

        $p2 = new Personne();
        $p2->setNom('Tya');
        $manager->persist($p2);

        $p3 = new Personne();
        $p3->setNom('Lili');
        $manager->persist($p3);
        
        $continent1= new Continent();
        $continent1->setLibelle('Europe');
        $manager->persist($continent1);

        $continent2= new Continent();
        $continent2->setLibelle('Asie');
        $manager->persist($continent2);

        $continent3= new Continent();
        $continent3->setLibelle('Afrique');
        $manager->persist($continent3);

        $continent4= new Continent();
        $continent4->setLibelle('Océanie');
        $manager->persist($continent4);

        $continent5= new Continent();
        $continent5->setLibelle('Amérique');
        $manager->persist($continent5);
        
                
        
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
        $a1->addContinent($continent1);
        $a1->addContinent($continent2);
        $a1->addContinent($continent3);
        $a1->addContinent($continent4);
        $a1->addContinent($continent5);
        $manager->persist($a1);

        $a2 = new Animal();
        $a2->setNom('Cochon');
        $a2->setDescription('Animal de la ferme');
        $a2->setImage('cochon.png');
        $a2->setPoids(300);
        $a2->setDangereux(false);
        $a2->setFamille($c1);
        $a2->addContinent($continent1);
        $a2->addContinent($continent5);
        $manager->persist($a2);

        $a3 = new Animal();
        $a3->setNom('Serpent');
        $a3->setDescription('Animal dangereux');
        $a3->setImage('Serpent.png');
        $a3->setPoids(5);
        $a3->setDangereux(true);
        $a3->setFamille($c2);
        $a3->addContinent($continent2);
        $a3->addContinent($continent3);
        $a3->addContinent($continent4);
        $manager->persist($a3);

        $a4 = new Animal();
        $a4->setNom('Crocodile');
        $a4->setDescription('Animal très dangereux');
        $a4->setImage('croco.png');
        $a4->setPoids(500);
        $a4->setDangereux(true);
        $a4->setFamille($c2);
        $a4->addContinent($continent3);
        $a4->addContinent($continent4);
        $manager->persist($a4);

        $a5 = new Animal();
        $a5->setNom('Requin');
        $a5->setDescription('Animal marin très dangereux');
        $a5->setImage('requin.png');
        $a5->setPoids(800);
        $a5->setDangereux(true);
        $a5->setFamille($c3);
        $a5->addContinent($continent4);
        $a5->addContinent($continent5);
        $manager->persist($a5);

        $d1 = new Dispose();
        $d1->setAnimal($a3);
        $d1->setPersonne($p1);
        $d1->setNb(30);
        $manager->persist($d1);

        $d2 = new Dispose();
        $d2->setAnimal($a2);
        $d2->setPersonne($p2);
        $d2->setNb(10);
        $manager->persist($d2);

        $d3 = new Dispose();
        $d3->setAnimal($a3);
        $d3->setPersonne($p1);
        $d3->setNb(2);
        $manager->persist($d3);

        $d4 = new Dispose();
        $d4->setAnimal($a3);
        $d4->setPersonne($p2);
        $d4->setNb(5);
        $manager->persist($d4);

        $d5 = new Dispose();
        $d5->setAnimal($a4);
        $d5->setPersonne($p2);
        $d5->setNb(10);
        $manager->persist($d5);

        $d6 = new Dispose();
        $d6->setAnimal($a5);
        $d6->setPersonne($p3);
        $d6->setNb(20);
        $manager->persist($d6);
        

        $manager->flush();
    }
}