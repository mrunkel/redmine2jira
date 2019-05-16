<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OpenIdAuthenticationAssociations
 *
 * @ORM\Table(name="open_id_authentication_associations")
 * @ORM\Entity
 */
class OpenIdAuthenticationAssociations
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
     * @var int|null
     *
     * @ORM\Column(name="issued", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $issued = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="lifetime", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $lifetime = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="handle", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $handle = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="assoc_type", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $assocType = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="server_url", type="blob", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $serverUrl = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="secret", type="blob", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $secret = 'NULL';


}
