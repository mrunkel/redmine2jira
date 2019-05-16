<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AgileColors
 *
 * @ORM\Table(name="agile_colors", indexes={@ORM\Index(name="index_agile_colors_on_container_type", columns={"container_type"}), @ORM\Index(name="index_agile_colors_on_container_id", columns={"container_id"})})
 * @ORM\Entity
 */
class AgileColors
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
     * @var int|null
     *
     * @ORM\Column(name="container_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $containerId = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="container_type", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $containerType = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="color", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $color = 'NULL';


}
