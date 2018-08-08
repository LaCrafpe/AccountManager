<?php
/**
 * Created by PhpStorm.
 * User: lucasjob
 * Date: 03/08/2018
 * Time: 16:11
 */

namespace App\Controller\API;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccountsController extends AbstractController
{
    /**
     * @return Response
     * @throws \Exception
     * @Route("/project/accounting/chart")
     */
    public function getChartData(Request $request)
    {
        $aData = [
            'labels' => [
                'Janvier',
                'Février',
                'Mars',
                'Avril',
                'Mai',
                'Juin',
                'Juillet',
                'Août',
                'Septembre',
                'Octobre',
                'Novembre',
                'Décembre'
            ],
            'solde' => [
                '800',
                '900',
                '850',
                '1200',
                '1100',
                '1300',
                '1000',
                '1200',
                '1400',
                '1500',
                '1300',
                '1800'
            ],
            'depenses' => [
                '700',
                '600',
                '550',
                '334',
                '1100',
                '1300',
                '1000',
                '1200',
                '1400',
                '1500',
                '1300',
                '1800'
            ],
            'revenus' => [
                '1500',
                '1500',
                '1400',
                '1534',
                '1423',
                '1684',
                '1347',
                '1562',
                '1485',
                '1684',
                '1247',
                '1344'
            ],
        ];

        return $this->json($aData);
    }

}