<?php

namespace App\Controller;

use App\Entity\Evenements;
use App\Form\EvenementsFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('/evenements', name: 'evenements_')]
class EvenementController extends AbstractController
{
    #[Route('/ajout', name: 'ajout')]
    public function ajout(Request $request, EntityManagerInterface $em, SluggerInterface $slugger)
    {
        $evenement = new Evenements();

        $evenementForm = $this->createForm(EvenementsFormType::class, $evenement);

        $evenementForm->handleRequest($request);

        // dd($evenementForm);
        if($evenementForm->isSubmitted() && $evenementForm->isValid()) {
            $slug = $slugger->slug($evenement->getLibelle());
            $evenement->setSlug($slug);

            $em->persist($evenement);
            $em->flush();

            $this->addFlash('success', 'L\'événement a bien été ajouté');

            return $this->redirectToRoute('categories_list', array('slug' => $evenement->getCategorie()->getSlug()));
        }


        return $this->render('evenement/ajout.html.twig', [
            'evenementForm' => $evenementForm->createView()
        ]);

    }
    #[Route('/{slug}', name: 'details')]
    public function index(Evenements $evenement): Response
    {
        return $this->render('evenement/details.html.twig', compact('evenement')
        );
    }
}
