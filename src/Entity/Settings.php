<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Settings
 *
 * @ORM\Table(name="settings", indexes={@ORM\Index(name="index_settings_on_name", columns={"name"})})
 * @ORM\Entity
 */
class Settings
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
     * @ORM\Column(name="name", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $name = '\'\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="value", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $value = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_on", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $updatedOn = 'NULL';


}
