<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use App\Entity\Usuario;

/**
 * @Route("/usuario")
 */

class UserController extends AbstractController{

    /**
     * @Route("/alta",name="alta_usuario")
     */
    public function altaUsuario(Request $request){

        $em = $this->getDoctrine()->getManager();

        $usuario = $em->getRepository(Usuario::class)->findByNombre('Garcia');
                                    
        return $this->render('usuario/alta_usuario.html.twig');

/*
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
        }
 */      
    }


    /**
     * @Route("/lista", name="lista_usuarios")
     */
    
    public function listaUsuario(Request $request)
    /*public function listaUsuarios(Question $question)*/
    {
        $em = $this->getDoctrine()->getManager();

        $usuarios = $em->getRepository(Usuario::class)->findAll();
                                    
        return $this->render('usuario/lista_usuario.html.twig',["users" => $usuarios]);
       
    }
}