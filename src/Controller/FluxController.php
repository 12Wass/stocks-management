<?php

namespace App\Controller;

use App\Repository\FluxRepository;
use App\Repository\UserRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FluxController extends AbstractController
{
    /**
     * @Route("/flux", name="flux")
     * @Security("is_granted('ROLE_ADMIN')")
     * @param FluxRepository $fluxRepository
     * @param UserRepository $userRepository
     * @return Response
     */
    public function index(FluxRepository $fluxRepository, UserRepository $userRepository): Response
    {
        $fluxes = $fluxRepository->findAll();

        return $this->render('flux/index.html.twig', [
            'controller_name' => 'FluxController',
            'enterprise' => 'Eiffage',
            'fluxes' => $fluxes
        ]);
    }
}
