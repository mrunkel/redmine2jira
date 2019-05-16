<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChangesetParents
 *
 * @ORM\Table(name="changeset_parents", indexes={@ORM\Index(name="changeset_parents_parent_ids", columns={"parent_id"}), @ORM\Index(name="changeset_parents_changeset_ids", columns={"changeset_id"})})
 * @ORM\Entity
 */
class ChangesetParents
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
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
     * @var int
     *
     * @ORM\Column(name="parent_id", type="integer", nullable=false)
     */
    private $parentId;


}
