<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Changesets
 *
 * @ORM\Table(name="changesets", uniqueConstraints={@ORM\UniqueConstraint(name="changesets_repos_rev", columns={"repository_id", "revision"})}, indexes={@ORM\Index(name="index_changesets_on_user_id", columns={"user_id"}), @ORM\Index(name="changesets_repos_scmid", columns={"repository_id", "scmid"}), @ORM\Index(name="index_changesets_on_committed_on", columns={"committed_on"}), @ORM\Index(name="index_changesets_on_repository_id", columns={"repository_id"})})
 * @ORM\Entity
 */
class Changesets
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
     * @ORM\Column(name="repository_id", type="integer", nullable=false)
     */
    private $repositoryId;

    /**
     * @var string
     *
     * @ORM\Column(name="revision", type="string", length=255, nullable=false)
     */
    private $revision;

    /**
     * @var string|null
     *
     * @ORM\Column(name="committer", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $committer = 'NULL';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="committed_on", type="datetime", nullable=false)
     */
    private $committedOn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comments", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $comments = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="commit_date", type="date", nullable=true, options={"default"="NULL"})
     */
    private $commitDate = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="scmid", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $scmid = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $userId = 'NULL';


}
