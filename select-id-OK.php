<?php

use DoctrineBug\Model;

$em = require __DIR__ . '/em.php';

$results = $em->createQueryBuilder()
    ->select('n.id AS networkId', 'm.currencyCode', 'SUM(c.amount) AS amount')
    ->from(Model\Network::class, 'n')
    ->join(Model\Merchant::class, 'm', 'WITH' ,'m.network = n')
    ->join(Model\Commission::class,'c', 'WITH', 'c.merchant = m')
    ->groupBy('n')
    ->addGroupBy('m.currencyCode')
    ->orderBy('n.name')
    ->addOrderBy('m.currencyCode')
    ->getQuery()
    ->getResult();

foreach ($results as $result) {
    printf("Network=%d, currency=%s, amount=%d\n",
        $result['networkId'],
        $result['currencyCode'],
        $result['amount']
    );
}
