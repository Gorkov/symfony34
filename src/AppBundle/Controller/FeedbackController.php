<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FeedbackController extends Controller
{
    /**
     * @Route("/feedback", name="feedbackList")
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function feedbackAction(Request $request)
    {
        return $this->render('@App/feedback/index.html.twig');
    }
}