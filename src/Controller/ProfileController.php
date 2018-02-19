<?php
namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends AbstractController {

	/**
	 * @Route("/profile/{id}")
	 */
	public function profile($id) {
		return $this->render('profile/show.html.twig', ['id' => $id]);
	}

}

