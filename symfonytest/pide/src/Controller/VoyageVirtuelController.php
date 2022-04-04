<?php

namespace App\Controller;

use App\Entity\VoyageVirtuel;
use App\Form\VoyageVirtuelType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/voyage/virtuel")
 */
class VoyageVirtuelController extends AbstractController
{
    /**
     * @Route("/", name="app_voyage_virtuel_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $voyageVirtuels = $entityManager
            ->getRepository(VoyageVirtuel::class)
            ->findAll();

        return $this->render('voyage_virtuel/index.html.twig', [
            'voyage_virtuels' => $voyageVirtuels,
        ]);
    }

    /**
     * @Route("/new", name="app_voyage_virtuel_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $voyageVirtuel = new VoyageVirtuel();
        $form = $this->createForm(VoyageVirtuelType::class, $voyageVirtuel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($voyageVirtuel);
            $entityManager->flush();

            return $this->redirectToRoute('app_voyage_virtuel_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('voyage_virtuel/new.html.twig', [
            'voyage_virtuel' => $voyageVirtuel,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idvv}", name="app_voyage_virtuel_show", methods={"GET"})
     */
    public function show(VoyageVirtuel $voyageVirtuel): Response
    {
        return $this->render('voyage_virtuel/show.html.twig', [
            'voyage_virtuel' => $voyageVirtuel,
        ]);
    }

    /**
     * @Route("/{idvv}/edit", name="app_voyage_virtuel_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, VoyageVirtuel $voyageVirtuel, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(VoyageVirtuelType::class, $voyageVirtuel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_voyage_virtuel_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('voyage_virtuel/edit.html.twig', [
            'voyage_virtuel' => $voyageVirtuel,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idvv}", name="app_voyage_virtuel_delete", methods={"POST"})
     */
    public function delete(Request $request, VoyageVirtuel $voyageVirtuel, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$voyageVirtuel->getIdvv(), $request->request->get('_token'))) {
            $entityManager->remove($voyageVirtuel);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_voyage_virtuel_index', [], Response::HTTP_SEE_OTHER);
    }
}
