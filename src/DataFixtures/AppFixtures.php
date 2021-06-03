<?php

namespace App\DataFixtures;
use App\Entity\Usuario;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
         $usuario = new Usuario();
	 $usuario
		->setNombre('Juan')
	 	->setApellido('Garcia')
		->setClave('pepe')
		->setEmail('garcia@ejemplo.com');
        $manager->persist($usuario);
        $manager->flush();
		$usuario2 = new Usuario();
    $usuario2
		->setNombre('Alicia')
	 	->setApellido('Gomez')
		->setClave('pepa')
		->setEmail('gomeza@ejemplo.com');
        $manager->persist($usuario2);
        $manager->flush(); 
		$usuario3 = new Usuario();   
    $usuario3
		->setNombre('Fernanda')
	 	->setApellido('Frias')
		->setClave('pipa')
		->setEmail('friasf@ejemplo.com');
        $manager->persist($usuario3);
        $manager->flush();
		$usuario4 = new Usuario();   
    $usuario4
		->setNombre('Gustavo')
	 	->setApellido('Baez')
		->setClave('pipo')
		->setEmail('baezg@ejemplo.com');
        $manager->persist($usuario4);
        $manager->flush();                
    }
}
