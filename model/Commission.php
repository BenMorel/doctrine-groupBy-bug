<?php

namespace DoctrineBug\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Commission
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     *
     * @var int
     */
    private $year;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     *
     * @var int
     */
    private $month;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Merchant")
     * @ORM\JoinColumn(name="merchantId", nullable=false)
     *
     * @var Merchant
     */
    private $merchant;

    /**
     * @ORM\Column(type="integer")
     *
     * @var int
     */
    private $amount;
}
