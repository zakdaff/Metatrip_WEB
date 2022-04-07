<?php

namespace App\Controller;

use App\Entity\ReservationVoyage;
use App\Form\ReservationVoyageType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/reservation/voyage")
 */
class ReservationVoyageController extends AbstractController
{
    /**
     * @Route("/", name="app_reservation_voyage_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $reservationVoyages = $entityManager
            ->getRepository(ReservationVoyage::class)
            ->findAll();

        return $this->render('reservation_voyage/index.html.twig', [
            'reservation_voyages' => $reservationVoyages,
        ]);
    }

    /**
     * @Route("/new", name="app_reservation_voyage_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reservationVoyage = new ReservationVoyage();
        $form = $this->createForm(ReservationVoyageType::class, $reservationVoyage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reservationVoyage);
            $entityManager->flush();

            return $this->redirectToRoute('app_reservation_voyage_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reservation_voyage/new.html.twig', [
            'reservation_voyage' => $reservationVoyage,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idrv}", name="app_reservation_voyage_show", methods={"GET"})
     */
    public function show(ReservationVoyage $reservationVoyage): Response
    {
        return $this->render('reservation_voyage/show.html.twig', [
            'reservation_voyage' => $reservationVoyage,
        ]);
    }

    /**
     * @Route("/{idrv}/edit", name="app_reservation_voyage_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, ReservationVoyage $reservationVoyage, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReservationVoyageType::class, $reservationVoyage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_reservation_voyage_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reservation_voyage/edit.html.twig', [
            'reservation_voyage' => $reservationVoyage,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idrv}", name="app_reservation_voyage_delete", methods={"POST"})
     */
    public function delete(Request $request, ReservationVoyage $reservationVoyage, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservationVoyage->getIdrv(), $request->request->get('_token'))) {
            $entityManager->remove($reservationVoyage);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reservation_voyage_index', [], Response::HTTP_SEE_OTHER);
    }
}
