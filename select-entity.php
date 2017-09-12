<?php

use DoctrineBug\Model;

$em = require __DIR__ . '/em.php';

$query = $em->createQueryBuilder()
    ->select('n AS network', 'm.currencyCode', 'SUM(c.amount) AS amount')
    ->from(Model\Network::class, 'n')
    ->join(Model\Merchant::class, 'm', 'WITH' ,'m.network = n')
    ->join(Model\Commission::class,'c', 'WITH', 'c.merchant = m')
    ->groupBy('n')
    ->addGroupBy('m.currencyCode')
    ->orderBy('n.name')
    ->addOrderBy('m.currencyCode')
    ->getQuery();

echo $query->getDQL() . "\n\n";

echo "HYDRATE_ARRAY:\n";

foreach ($query->getArrayResult() as $result) {
    printf("Network=%d, currency=%s, amount=%d\n",
        $result['network']['id'],
        $result['currencyCode'],
        $result['amount']
    );
}

echo "\nHYDRATE_OBJECT:\n";

foreach ($query->getResult() as $result) {
    printf("Network=%d, currency=%s, amount=%d\n",
        $result['network']->id,
        $result['currencyCode'],
        $result['amount']
    );
}