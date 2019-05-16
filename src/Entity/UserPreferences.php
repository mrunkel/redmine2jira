<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserPreferences
 *
 * @ORM\Table(name="user_preferences", indexes={@ORM\Index(name="index_user_preferences_on_user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class UserPreferences
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
     * @var string|null
     *
     * @ORM\Column(name="others", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $others = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hide_mail", type="boolean", nullable=true, options={"default"="1"})
     */
    private $hideMail = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="time_zone", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $timeZone = 'NULL';


}
