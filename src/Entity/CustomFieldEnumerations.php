<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomFieldEnumerations
 *
 * @ORM\Table(name="custom_field_enumerations")
 * @ORM\Entity
 */
class CustomFieldEnumerations
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
     * @ORM\Column(name="custom_field_id", type="integer", nullable=false)
     */
    private $customFieldId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="position", type="integer", nullable=false, options={"default"="1"})
     */
    private $position = '1';


}
