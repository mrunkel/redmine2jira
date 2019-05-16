<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CordovaAppDevices
 *
 * @ORM\Table(name="cordova_app_devices", indexes={@ORM\Index(name="index_cordova_app_devices_on_user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class CordovaAppDevices
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
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=255, nullable=false)
     */
    private $token;

    /**
     * @var string
     *
     * @ORM\Column(name="provider", type="string", length=255, nullable=false)
     */
    private $provider;

    /**
     * @var string|null
     *
     * @ORM\Column(name="environment", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $environment = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     */
    private $updatedAt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $description = 'NULL';


}
