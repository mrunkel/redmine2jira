<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contacts
 *
 * @ORM\Table(name="contacts", indexes={@ORM\Index(name="index_contacts_on_company_id", columns={"company_id"})})
 * @ORM\Entity
 */
class Contacts
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
     * @ORM\Column(name="firstname", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $firstname = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="lastname", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $lastname = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="gender", type="boolean", nullable=true, options={"default"="1"})
     */
    private $gender = '1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="lock_version", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $lockVersion = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="company_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $companyId = 'NULL';

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
     * @ORM\Column(name="mails", type="text", length=16777215, nullable=true, options={"default"="NULL"})
     */
    private $mails = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="phones", type="text", length=16777215, nullable=true, options={"default"="NULL"})
     */
    private $phones = 'NULL';


}
