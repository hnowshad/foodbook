<?php
namespace Site\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
	public function indexAction()
	{
		return $this->render('SitePageBundle:Page:index.html.twig');
	}
}