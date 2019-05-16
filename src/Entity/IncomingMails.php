<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IncomingMails
 *
 * @ORM\Table(name="incoming_mails", indexes={@ORM\Index(name="index_incoming_mails_on_target_id_and_target_type", columns={"target_id", "target_type"})})
 * @ORM\Entity
 */
class IncomingMails
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
     * @var bool|null
     *
     * @ORM\Column(name="encrypted", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $encrypted = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="signed", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $signed = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="signature_valid", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $signatureValid = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="signers", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $signers = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="spam", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $spam = 'NULL';

    /**
     * @var float|null
     *
     * @ORM\Column(name="spam_score", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $spamScore = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="target_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $targetId = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="target_type", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $targetType = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="signed_by_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $signedById = 'NULL';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     */
    private $updatedAt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="from", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $from = 'NULL';


}
