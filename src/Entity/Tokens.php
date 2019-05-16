<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tokens
 *
 * @ORM\Table(name="tokens", uniqueConstraints={@ORM\UniqueConstraint(name="tokens_value", columns={"value"})}, indexes={@ORM\Index(name="index_tokens_on_user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class Tokens
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
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=30, nullable=false, options={"default"="''"})
     */
    private $action = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=40, nullable=false, options={"default"="''"})
     */
    private $value = '\'\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_on", type="datetime", nullable=false)
     */
    private $createdOn;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_on", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $updatedOn = 'NULL';


}
