<?php
namespace App\Controller;


use App\Entity\Profiles;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends AbstractController {

	/**
	 * @Route("/profile/{id}")
	 */
	public function profile($id) {
		$em = $this->getDoctrine()->getManager();
		$profile = $em->getRepository(Profiles::class)->findOneBy(array('tag' => $id));

		if (!$profile) {
			//throw $this->createNotFoundException('No product found for id '.$id);
			$id_found = false;
		} else {
			$id_found = true;
		}

		return $this->render('profile/show.html.twig', ['id' => $id, 'idfound' => $id_found, 'profile' => $profile]);
	}

}

