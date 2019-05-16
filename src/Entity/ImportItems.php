<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImportItems
 *
 * @ORM\Table(name="import_items", indexes={@ORM\Index(name="index_import_items_on_import_id_and_unique_id", columns={"import_id", "unique_id"})})
 * @ORM\Entity
 */
class ImportItems
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
     * @ORM\Column(name="import_id", type="integer", nullable=false)
     */
    private $importId;

    /**
     * @var int
     *
     * @ORM\Column(name="position", type="integer", nullable=false)
     */
    private $position;

    /**
     * @var int|null
     *
     * @ORM\Column(name="obj_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $objId = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="message", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $message = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="unique_id", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $uniqueId = 'NULL';


}
