<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trackers
 *
 * @ORM\Table(name="trackers")
 * @ORM\Entity
 */
class Trackers
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
     * @ORM\Column(name="name", type="string", length=30, nullable=false, options={"default"="''"})
     */
    private $name = '\'\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="is_in_chlog", type="boolean", nullable=false)
     */
    private $isInChlog = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="position", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $position = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="is_in_roadmap", type="boolean", nullable=false, options={"default"="1"})
     */
    private $isInRoadmap = '1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fields_bits", type="integer", nullable=true)
     */
    private $fieldsBits = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="default_status_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $defaultStatusId = 'NULL';


}
