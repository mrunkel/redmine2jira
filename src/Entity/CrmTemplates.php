<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CrmTemplates
 *
 * @ORM\Table(name="crm_templates", indexes={@ORM\Index(name="index_crm_templates_on_crm_template_category_id", columns={"crm_template_category_id"}), @ORM\Index(name="index_crm_templates_on_usage_count", columns={"usage_count"}), @ORM\Index(name="index_crm_templates_on_project_id", columns={"project_id"})})
 * @ORM\Entity
 */
class CrmTemplates
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
     * @ORM\Column(name="title", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $title = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="content", type="text", length=16777215, nullable=true, options={"default"="NULL"})
     */
    private $content = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="project_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $projectId = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="position", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $position = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_for_all", type="boolean", nullable=true)
     */
    private $isForAll = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="lock_version", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $lockVersion = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $createdAt = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $updatedAt = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="question", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $question = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="usage_log", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $usageLog = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="usage_count", type="integer", nullable=true)
     */
    private $usageCount = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="crm_template_category_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $crmTemplateCategoryId = 'NULL';


}
