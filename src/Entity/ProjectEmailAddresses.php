<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProjectEmailAddresses
 *
 * @ORM\Table(name="project_email_addresses", uniqueConstraints={@ORM\UniqueConstraint(name="index_project_email_addresses_on_project_id_and_address", columns={"project_id", "address"})}, indexes={@ORM\Index(name="index_project_email_addresses_on_project_id", columns={"project_id"}), @ORM\Index(name="index_project_email_addresses_on_token", columns={"token"})})
 * @ORM\Entity
 */
class ProjectEmailAddresses
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
     * @ORM\Column(name="address", type="string", length=255, nullable=false)
     */
    private $address;

    /**
     * @var string|null
     *
     * @ORM\Column(name="token", type="string", length=40, nullable=true, options={"default"="NULL"})
     */
    private $token = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="warnings", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $warnings = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="project_id", type="integer", nullable=false)
     */
    private $projectId;

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
     * @var \DateTime|null
     *
     * @ORM\Column(name="confirmed_at", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $confirmedAt = 'NULL';


}
