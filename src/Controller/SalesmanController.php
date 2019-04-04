<?php

namespace App\Controller;

use App\Entity\Salesman;
use App\Form\SalesmanType;
use App\Repository\SalesmanRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/salesman")
 */
class SalesmanController extends AbstractController
{
    /**
     * @Route("/", name="salesman_index", methods={"GET"})
     */
    public function index(SalesmanRepository $salesmanRepository): Response
    {
        return $this->render('salesman/index.html.twig', [
            'salesmen' => $salesmanRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="salesman_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $salesman = new Salesman();
        $form = $this->createForm(SalesmanType::class, $salesman);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($salesman);
            $entityManager->flush();

            return $this->redirectToRoute('salesman_index');
        }

        return $this->render('salesman/new.html.twig', [
            'salesman' => $salesman,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="salesman_show", methods={"GET"})
     */
    public function show(Salesman $salesman): Response
    {
        return $this->render('salesman/show.html.twig', [
            'salesman' => $salesman,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="salesman_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Salesman $salesman): Response
    {
        $form = $this->createForm(SalesmanType::class, $salesman);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('salesman_index', [
                'id' => $salesman->getId(),
            ]);
        }

        return $this->render('salesman/edit.html.twig', [
            'salesman' => $salesman,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="salesman_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Salesman $salesman): Response
    {
        if ($this->isCsrfTokenValid('delete'.$salesman->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($salesman);
            $entityManager->flush();
        }

        return $this->redirectToRoute('salesman_index');
    }
}
