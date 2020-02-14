<?php

namespace CommandeBundle\Controller;


use ClubBundle\Entity\Club;
use CommandeBundle\Entity\Commande;
use CommandeBundle\Form\CommandeType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CommandeController extends Controller
{
    public function ajouterAction(Request $request) //ne pas oublier l'include !!
    {
        $commande = new Commande() ;//on instancie une variable qui va contenir les valeurs à ajouter
        $form = $this->createForm(CommandeType::class,$commande); //génération
        $form = $form->handleRequest($request); //semblabe à un submit (propre à doctrine)
        //Si on clique sur le bouton Valider on a ce traitement :
        if($form->isValid())
        {
            $em = $this->getDoctrine()->getManager();//appel de l'entity manager
            $em->persist($commande);//L'em enregistre les données dans la BD
            $em->flush(); //commit de l'ajout
            return $this->redirectToRoute("commande_afficher");

        }
        return $this->render('@Commande/Commande/add.html.twig', array('f' => $form->createView()));
    }
    public function modifierAction(Request $request,$id)
    {

        $em = $this->getDoctrine()->getManager();
        $commande = $this->getDoctrine()->getRepository(Commande::class)->find($id);
        $form = $this->createForm(CommandeType::class,$commande);
        $form = $form->handleRequest($request);

        if($form->isValid())
        {
            $em->persist($commande);
            $em->flush();
            return $this->redirectToRoute("commande_afficher");

        }
        return $this->render('@Commande/Commande/update.html.twig', array('form' => $form->createView()));



    }
    public function afficherAction()
    {
        $em=$this->getDoctrine();
        $tabs = $em->getRepository(Commande::class)->findAll();
        return $this->render('@Commande/Commande/list.html.twig',array("commandes"=>$tabs
        ));
    }
    public function supprimerAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $commande= $this->getDoctrine()->getRepository(Commande::class)->find($id);
        $em->remove($commande);
        $em->flush(); //c'est un commit !!
        return $this->redirectToRoute("commande_afficher");
    }

}
