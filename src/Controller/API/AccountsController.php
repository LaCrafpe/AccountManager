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
                '1400',
                '1450',
                '1184',
                '1523',
                '1484',
                '1647',
                '1362',
                '1285',
                '1584',
                '1447',
                '844'
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

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     * @Route("/project/accounting/table")
     */
    public function getStatement(Request $request)
    {

        $aData = [
            'salaire' => [
                'type' => 'income',
                'yearly' => '20000',
                'average' => '24000'
            ],
            'loyer' => [
                'type' => 'outcome',
                'yearly' => '-7200',
                'average' => '-7200'
            ],
            'Internet' => [
                'type' => 'outcome',
                'yearly' => '-348',
                'average' => '-348'
            ],
            'EDF' => [
                'type' => 'outcome',
                'yearly' => '-900',
                'average' => '-864'
            ],
            'Total' => [
                'type' => 'total',
                'yearly' => '11552',
                'average' => '15588'
            ]
        ];

        return $this->json($aData);
    }

}