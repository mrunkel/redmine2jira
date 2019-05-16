<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AgileData
 *
 * @ORM\Table(name="agile_data", indexes={@ORM\Index(name="index_agile_data_on_position", columns={"position"}), @ORM\Index(name="index_agile_data_on_issue_id", columns={"issue_id"})})
 * @ORM\Entity
 */
class AgileData
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
     * @ORM\Column(name="issue_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $issueId = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="position", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $position = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="story_points", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $storyPoints = 'NULL';


}
