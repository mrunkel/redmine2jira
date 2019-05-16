<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomValues
 *
 * @ORM\Table(name="custom_values", indexes={@ORM\Index(name="index_custom_values_on_custom_field_id", columns={"custom_field_id"}), @ORM\Index(name="custom_values_customized", columns={"customized_type", "customized_id"})})
 * @ORM\Entity
 */
class CustomValues
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
     * @ORM\Column(name="customized_type", type="string", length=30, nullable=false, options={"default"="''"})
     */
    private $customizedType = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="customized_id", type="integer", nullable=false)
     */
    private $customizedId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="custom_field_id", type="integer", nullable=false)
     */
    private $customFieldId = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="value", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $value = 'NULL';


}
