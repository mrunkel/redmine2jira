<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmailAddresses
 *
 * @ORM\Table(name="email_addresses", indexes={@ORM\Index(name="index_email_addresses_on_user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class EmailAddresses
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=false)
     */
    private $address;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_default", type="boolean", nullable=false)
     */
    private $isDefault = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="notify", type="boolean", nullable=false)
     */
    private $notify = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_on", type="datetime", nullable=false)
     */
    private $createdOn;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_on", type="datetime", nullable=false)
     */
    private $updatedOn;


}
