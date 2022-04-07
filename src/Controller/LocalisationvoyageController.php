<?php

namespace App\Controller;

use App\Entity\Localisationvoyage;
use App\Form\LocalisationvoyageType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/localisationvoyage")
 */
class LocalisationvoyageController extends AbstractController
{
    /**
     * @Route("/", name="app_localisationvoyage_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $localisationvoyages = $entityManager
            ->getRepository(Localisationvoyage::class)
            ->findAll();

        return $this->render('localisationvoyage/index.html.twig', [
            'localisationvoyages' => $localisationvoyages,
        ]);
    }

    /**
     * @Route("/new", name="app_localisationvoyage_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $localisationvoyage = new Localisationvoyage();
        $form = $this->createForm(LocalisationvoyageType::class, $localisationvoyage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($localisationvoyage);
            $entityManager->flush();

            return $this->redirectToRoute('app_localisationvoyage_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('localisationvoyage/new.html.twig', [
            'localisationvoyage' => $localisationvoyage,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idlocalisation}", name="app_localisationvoyage_show", methods={"GET"})
     */
    public function show(Localisationvoyage $localisationvoyage): Response
    {
        return $this->render('localisationvoyage/show.html.twig', [
            'localisationvoyage' => $localisationvoyage,
        ]);
    }

    /**
     * @Route("/{idlocalisation}/edit", name="app_localisationvoyage_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Localisationvoyage $localisationvoyage, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(LocalisationvoyageType::class, $localisationvoyage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_localisationvoyage_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('localisationvoyage/edit.html.twig', [
            'localisationvoyage' => $localisationvoyage,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idlocalisation}", name="app_localisationvoyage_delete", methods={"POST"})
     */
    public function delete(Request $request, Localisationvoyage $localisationvoyage, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$localisationvoyage->getIdlocalisation(), $request->request->get('_token'))) {
            $entityManager->remove($localisationvoyage);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_localisationvoyage_index', [], Response::HTTP_SEE_OTHER);
    }
}
