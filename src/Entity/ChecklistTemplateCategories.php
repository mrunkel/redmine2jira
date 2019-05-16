<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChecklistTemplateCategories
 *
 * @ORM\Table(name="checklist_template_categories")
 * @ORM\Entity
 */
class ChecklistTemplateCategories
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
     * @ORM\Column(name="position", type="integer", nullable=true, options={"default"="1"})
     */
    private $position = '1';


}
