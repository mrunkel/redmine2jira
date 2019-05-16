<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Workflows
 *
 * @ORM\Table(name="workflows", indexes={@ORM\Index(name="index_workflows_on_new_status_id", columns={"new_status_id"}), @ORM\Index(name="index_workflows_on_role_id", columns={"role_id"}), @ORM\Index(name="wkfs_role_tracker_old_status", columns={"role_id", "tracker_id", "old_status_id"}), @ORM\Index(name="index_workflows_on_old_status_id", columns={"old_status_id"})})
 * @ORM\Entity
 */
class Workflows
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
     * @ORM\Column(name="tracker_id", type="integer", nullable=false)
     */
    private $trackerId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="old_status_id", type="integer", nullable=false)
     */
    private $oldStatusId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="new_status_id", type="integer", nullable=false)
     */
    private $newStatusId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="role_id", type="integer", nullable=false)
     */
    private $roleId = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="assignee", type="boolean", nullable=false)
     */
    private $assignee = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="author", type="boolean", nullable=false)
     */
    private $author = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=30, nullable=true, options={"default"="NULL"})
     */
    private $type = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="field_name", type="string", length=30, nullable=true, options={"default"="NULL"})
     */
    private $fieldName = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="rule", type="string", length=30, nullable=true, options={"default"="NULL"})
     */
    private $rule = 'NULL';


}
