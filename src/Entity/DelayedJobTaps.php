<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DelayedJobTaps
 *
 * @ORM\Table(name="delayed_job_taps")
 * @ORM\Entity
 */
class DelayedJobTaps
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
     * @ORM\Column(name="job_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $jobId = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="tapped_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $tappedId = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="tapped_type", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $tappedType = 'NULL';

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


}
