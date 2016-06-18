<?php

namespace ReregistrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class InscriptionController extends Controller
{
    public function indexAction()
    {
        return $this->render('ReregistrationBundle:Inscription:indexInscription.html.twig', [
            
        ]);
    }

    public function deugAction()
    {
        return $this->render('ReregistrationBundle:Inscription:deugInscription.html.twig', [

        ]);
    }

    public function licenceAction()
    {
        return $this->render('ReregistrationBundle:Inscription:licenceInscription.html.twig', [

        ]);
    }

    public function masterAction()
    {
        return $this->render('ReregistrationBundle:Inscription:masterInscription.html.twig', [

        ]);
    }

    public function doctoratAction()
    {
        return $this->render('ReregistrationBundle:Inscription:doctoratInscription.html.twig', [

        ]);
    }
}
