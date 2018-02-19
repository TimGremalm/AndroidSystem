<?php
/**
 * Created by PhpStorm.
 * User: ExxoZ
 * Date: 2018-02-18
 * Time: 23:28
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class DefaultController {
	public function index() {
		return new Response("Yo");
	}
}