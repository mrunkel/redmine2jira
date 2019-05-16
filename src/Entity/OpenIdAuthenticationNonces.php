<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OpenIdAuthenticationNonces
 *
 * @ORM\Table(name="open_id_authentication_nonces")
 * @ORM\Entity
 */
class OpenIdAuthenticationNonces
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
     * @ORM\Column(name="timestamp", type="integer", nullable=false)
     */
    private $timestamp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="server_url", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $serverUrl = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=255, nullable=false)
     */
    private $salt;


}
