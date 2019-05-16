<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PidocoKeys
 *
 * @ORM\Table(name="pidoco_keys", indexes={@ORM\Index(name="index_pidoco_keys_on_project_id", columns={"project_id"}), @ORM\Index(name="index_pidoco_keys_on_prototype_id", columns={"prototype_id"})})
 * @ORM\Entity
 */
class PidocoKeys
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
     * @ORM\Column(name="key", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $key = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="project_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $projectId = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="prototype_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $prototypeId = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="request_cache", type="text", length=16777215, nullable=true, options={"default"="NULL"})
     */
    private $requestCache = 'NULL';


}
