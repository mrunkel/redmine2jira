<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Companies
 *
 * @ORM\Table(name="companies")
 * @ORM\Entity
 */
class Companies
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
     * @var string|null
     *
     * @ORM\Column(name="address1", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $address1 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="address2", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $address2 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="zip", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $zip = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="town", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $town = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="state", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $state = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="lock_version", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $lockVersion = 'NULL';

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

    /**
     * @var int|null
     *
     * @ORM\Column(name="issue_priority_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $issuePriorityId = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="country_code", type="string", length=2, nullable=true, options={"default"="NULL"})
     */
    private $countryCode = 'NULL';


}
