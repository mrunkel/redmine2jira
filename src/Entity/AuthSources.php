<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AuthSources
 *
 * @ORM\Table(name="auth_sources", indexes={@ORM\Index(name="index_auth_sources_on_id_and_type", columns={"id", "type"})})
 * @ORM\Entity
 */
class AuthSources
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
     * @ORM\Column(name="name", type="string", length=60, nullable=false, options={"default"="''"})
     */
    private $name = '\'\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="host", type="string", length=60, nullable=true, options={"default"="NULL"})
     */
    private $host = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="port", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $port = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="account", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $account = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="account_password", type="string", length=255, nullable=true, options={"default"="''"})
     */
    private $accountPassword = '\'\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="base_dn", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $baseDn = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="attr_login", type="string", length=30, nullable=true, options={"default"="NULL"})
     */
    private $attrLogin = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="attr_firstname", type="string", length=30, nullable=true, options={"default"="NULL"})
     */
    private $attrFirstname = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="attr_lastname", type="string", length=30, nullable=true, options={"default"="NULL"})
     */
    private $attrLastname = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="attr_mail", type="string", length=30, nullable=true, options={"default"="NULL"})
     */
    private $attrMail = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="onthefly_register", type="boolean", nullable=false)
     */
    private $ontheflyRegister = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="tls", type="boolean", nullable=false)
     */
    private $tls = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="filter", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $filter = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="timeout", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $timeout = 'NULL';


}
