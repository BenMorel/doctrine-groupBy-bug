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
     * @ORM\GeneratedValue
     *
     * @var int
     */
    public $id;

    /**
     * @ORM\ManyToOne(targetEntity="Merchant")
     * @ORM\JoinColumn(name="merchantId", nullable=false)
     *
     * @var Merchant
     */
    public $merchant;

    /**
     * @ORM\Column(type="integer")
     *
     * @var int
     */
    public $amount;
}
