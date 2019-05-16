<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomFields
 *
 * @ORM\Table(name="custom_fields", indexes={@ORM\Index(name="index_custom_fields_on_id_and_type", columns={"id", "type"})})
 * @ORM\Entity
 */
class CustomFields
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
     * @ORM\Column(name="type", type="string", length=30, nullable=false, options={"default"="''"})
     */
    private $type = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=30, nullable=false, options={"default"="''"})
     */
    private $name = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="field_format", type="string", length=30, nullable=false, options={"default"="''"})
     */
    private $fieldFormat = '\'\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="possible_values", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $possibleValues = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="regexp", type="string", length=255, nullable=true, options={"default"="''"})
     */
    private $regexp = '\'\'';

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_length", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $minLength = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="max_length", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $maxLength = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="is_required", type="boolean", nullable=false)
     */
    private $isRequired = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="is_for_all", type="boolean", nullable=false)
     */
    private $isForAll = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="is_filter", type="boolean", nullable=false)
     */
    private $isFilter = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="position", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $position = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="searchable", type="boolean", nullable=true)
     */
    private $searchable = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="default_value", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $defaultValue = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="editable", type="boolean", nullable=true, options={"default"="1"})
     */
    private $editable = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="visible", type="boolean", nullable=false, options={"default"="1"})
     */
    private $visible = '1';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="multiple", type="boolean", nullable=true)
     */
    private $multiple = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="show_on_issue", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $showOnIssue = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="format_store", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $formatStore = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $description = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="show_in_list", type="boolean", nullable=false)
     */
    private $showInList = '0';


}
