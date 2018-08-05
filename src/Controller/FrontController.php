<?php
/**
 * Created by PhpStorm.
 * User: lucasjob
 * Date: 03/08/2018
 * Time: 16:11
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
    /**
     * @return Response
     * @throws \Exception
     * @Route("/project/accounting")
     */
    public function index()
    {
        $number = random_int(0, 100);

        return $this->render('index.html.twig', [
            'number' => $number
        ]);
    }

    /**
     * @return Response
     * @Route("/playground")
     */
    public function playground()
    {
        return $this->render('base.html.twig');
    }

}