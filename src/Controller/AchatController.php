<?php

namespace App\Controller;

use App\Entity\Evenements;
use App\Repository\EvenementsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/achat', name: 'achat_')]
class AchatController extends AbstractController
{

    #[Route('/', name: 'index')]
    public function index(SessionInterface $session, EvenementsRepository $evenementsRepository)
    {
        $panier = $session->get('pannier', []);
        $data = [];
        $total = 0;

        foreach ($panier as $id => $quantite) {
            $evenement = $evenementsRepository->find($id);
            if($evenement){
                $data[] = [
                    'evenement' => $evenement,
                    'quantite' => $quantite,
                ];         
            }
        }
        $this->addFlash('success', 'Votre billet a bien été acheter');
        if(!$this->getUser()) {
            $this->addFlash('danger', 'Vous devez vous connecter ou vous inscrire pour être enregistré');
            return $this->redirectToRoute('app_register');
        }
        return $this->render('achat/panier.html.twig', compact('data', 'total'));
    }

    #[Route('/achat/{id}/{prix}', name: 'ajouter')]
    public function ajouter(Evenements $evenement, SessionInterface $session, Request $request)
    {
            $id = $evenement->getId();
            $prix = $request->get('prix');

            $panier = $session->get('pannier', []);
            
            if(empty($panier[$id])) {
                $panier[$id] = 1;
                $panier[$prix] = 1;
            } else {
                $panier[$id]++;
                if(isset($panier[$prix])) {
                    $panier[$prix]++;
                } else {
                    $panier[$prix] = 1;
                }
            }
            $session->set('pannier', $panier);

            return $this->redirectToRoute('achat_index');
    }
}
