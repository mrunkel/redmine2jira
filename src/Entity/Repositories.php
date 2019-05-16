<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Repositories
 *
 * @ORM\Table(name="repositories", indexes={@ORM\Index(name="index_repositories_on_project_id", columns={"project_id"})})
 * @ORM\Entity
 */
class Repositories
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
     * @ORM\Column(name="project_id", type="integer", nullable=false)
     */
    private $projectId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $url = '\'\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="login", type="string", length=60, nullable=true, options={"default"="''"})
     */
    private $login = '\'\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=true, options={"default"="''"})
     */
    private $password = '\'\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="root_url", type="string", length=255, nullable=true, options={"default"="''"})
     */
    private $rootUrl = '\'\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $type = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="path_encoding", type="string", length=64, nullable=true, options={"default"="NULL"})
     */
    private $pathEncoding = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="log_encoding", type="string", length=64, nullable=true, options={"default"="NULL"})
     */
    private $logEncoding = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="extra_info", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $extraInfo = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="identifier", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $identifier = '\'\'';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_default", type="boolean", nullable=true)
     */
    private $isDefault = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="mirror_from_url", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $mirrorFromUrl = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="mirror_private_key", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $mirrorPrivateKey = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="mirror_public_key", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $mirrorPublicKey = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="disksize", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $disksize = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="webhook_url", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $webhookUrl = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_on", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $createdOn = 'NULL';


}
