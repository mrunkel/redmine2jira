<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Changes
 *
 * @ORM\Table(name="changes", indexes={@ORM\Index(name="changesets_changeset_id", columns={"changeset_id"})})
 * @ORM\Entity
 */
class Changes
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
     * @ORM\Column(name="changeset_id", type="integer", nullable=false)
     */
    private $changesetId;

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=1, nullable=false, options={"default"="''"})
     */
    private $action = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="text", length=65535, nullable=false)
     */
    private $path;

    /**
     * @var string|null
     *
     * @ORM\Column(name="from_path", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $fromPath = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="from_revision", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $fromRevision = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="revision", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $revision = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="branch", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $branch = 'NULL';


}
