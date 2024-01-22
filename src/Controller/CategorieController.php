<?php

namespace App\Controller;

use App\Entity\Categories;
use App\Form\CategoriesFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('/categories', name: 'categories_')]
class CategorieController extends AbstractController
{
    #[ROUTE('/ajout', name: 'ajout')]
    public function ajouter(Request $request, EntityManagerInterface $em, SluggerInterface $slugger): Response
    {
        // Category creation
        $categorie = new Categories();

        // Form creation
        $categorieForm = $this->createForm(CategoriesFormType::class, $categorie);

        // Form query treatement
        $categorieForm->handleRequest($request);

        // If the form is submited and valid

        if($categorieForm->isSubmitted() && $categorieForm->isValid()) {
            // We generate the slug
            $slug = $slugger->slug($categorie->getLibelle());
            $categorie->setSlug($slug);

            $em->persist($categorie);
            $em->flush();

            $this->addFlash('success', 'La catégorie a bien été ajouté');
            return $this->redirectToRoute('acceuil_index');

        }


        return $this->render('categorie/ajout.html.twig',[
            'categorieForm' => $categorieForm->createView()
        ]);
    }

    #[Route('/{slug}', name: 'list')]
    public function list(Categories $categorie): Response
    {
        $evenements = $categorie->getEvenements();
        return $this->render('categorie/list.html.twig', compact('categorie', 'evenements'));
    }

}
