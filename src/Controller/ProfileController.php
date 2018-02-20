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
			$android_warning = "idnotfound";
		} else {
			$id_found = true;
			$android_warning = "maybeandroid";
			if (preg_match('/disproven/i', $profile->getAndroid()) == true) {
				$android_warning = "disprovenandroid";
			}
			if (preg_match('/confirmed/i', $profile->getAndroid()) == true) {
				$android_warning = "confirmedandroid";
			}
		}

		return $this->render('profile/show.html.twig', ['id' => $id, 'idfound' => $id_found, 'profile' => $profile, 'android_warning' => $android_warning]);
	}

}

