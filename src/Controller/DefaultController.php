<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     */
    public function index()
    {
    	$form = $this->createFormBuilder()
		    ->add('parent', TextType::class)
		    ->getForm();

        return $this->render('default/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
