<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IssueRelations
 *
 * @ORM\Table(name="issue_relations", uniqueConstraints={@ORM\UniqueConstraint(name="index_issue_relations_on_issue_from_id_and_issue_to_id", columns={"issue_from_id", "issue_to_id"})}, indexes={@ORM\Index(name="index_issue_relations_on_issue_from_id", columns={"issue_from_id"}), @ORM\Index(name="index_issue_relations_on_issue_to_id", columns={"issue_to_id"})})
 * @ORM\Entity
 */
class IssueRelations
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
     * @ORM\Column(name="issue_from_id", type="integer", nullable=false)
     */
    private $issueFromId;

    /**
     * @var int
     *
     * @ORM\Column(name="issue_to_id", type="integer", nullable=false)
     */
    private $issueToId;

    /**
     * @var string
     *
     * @ORM\Column(name="relation_type", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $relationType = '\'\'';

    /**
     * @var int|null
     *
     * @ORM\Column(name="delay", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $delay = 'NULL';


}
