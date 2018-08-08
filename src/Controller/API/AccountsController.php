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

class AccountsController extends AbstractController
{
    /**
     * @return Response
     * @throws \Exception
     * @Route("/chart")
     */
    public function getChartData()
    {
        return 'toto';
    }

}