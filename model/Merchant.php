<?php

namespace DoctrineBug\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Merchant
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
     * @ORM\ManyToOne(targetEntity="Network")
     * @ORM\JoinColumn(name="networkId", nullable=false)
     *
     * @var Merchant
     */
    public $network;

    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    public $name;

    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    public $currencyCode;
}
