<?php

namespace App\Controller;

use App\Entity\Blagues;
use App\Form\BlaguesType;
use App\Repository\BlaguesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/blagues')]
class BlaguesController extends AbstractController
{
    #[Route('/', name: 'app_blagues_index', methods: ['GET'])]
    public function index(BlaguesRepository $blaguesRepository): Response
    {
        return $this->render('blagues/index.html.twig', [
            'blagues' => $blaguesRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_blagues_new', methods: ['GET', 'POST'])]
    public function new(Request $request, BlaguesRepository $blaguesRepository): Response
    {
        $blague = new Blagues();
        $form = $this->createForm(BlaguesType::class, $blague);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $blaguesRepository->save($blague, true);

            return $this->redirectToRoute('app_blagues_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('blagues/new.html.twig', [
            'blague' => $blague,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_blagues_show', methods: ['GET'])]
    public function show(Blagues $blague): Response
    {
        return $this->render('blagues/show.html.twig', [
            'blague' => $blague,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_blagues_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Blagues $blague, BlaguesRepository $blaguesRepository): Response
    {
        $form = $this->createForm(BlaguesType::class, $blague);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $blaguesRepository->save($blague, true);

            return $this->redirectToRoute('app_blagues_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('blagues/edit.html.twig', [
            'blague' => $blague,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_blagues_delete', methods: ['POST'])]
    public function delete(Request $request, Blagues $blague, BlaguesRepository $blaguesRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$blague->getId(), $request->request->get('_token'))) {
            $blaguesRepository->remove($blague, true);
        }

        return $this->redirectToRoute('app_blagues_index', [], Response::HTTP_SEE_OTHER);
    }
}
