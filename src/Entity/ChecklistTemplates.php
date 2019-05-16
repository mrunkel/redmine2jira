<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChecklistTemplates
 *
 * @ORM\Table(name="checklist_templates", indexes={@ORM\Index(name="index_checklist_templates_on_tracker_id", columns={"tracker_id"})})
 * @ORM\Entity
 */
class ChecklistTemplates
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
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $name = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="project_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $projectId = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="category_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $categoryId = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $userId = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_public", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $isPublic = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="template_items", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $templateItems = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_default", type="boolean", nullable=true)
     */
    private $isDefault = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="tracker_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $trackerId = 'NULL';


}
