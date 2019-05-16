<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users", indexes={@ORM\Index(name="index_users_on_auth_source_id", columns={"auth_source_id"}), @ORM\Index(name="index_users_on_id_and_type", columns={"id", "type"}), @ORM\Index(name="index_users_on_type", columns={"type"})})
 * @ORM\Entity
 */
class Users
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
     * @ORM\Column(name="login", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $login = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="hashed_password", type="string", length=40, nullable=false, options={"default"="''"})
     */
    private $hashedPassword = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=30, nullable=false, options={"default"="''"})
     */
    private $firstname = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $lastname = '\'\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="admin", type="boolean", nullable=false)
     */
    private $admin = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false, options={"default"="1"})
     */
    private $status = '1';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_login_on", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $lastLoginOn = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="language", type="string", length=5, nullable=true, options={"default"="''"})
     */
    private $language = '\'\'';

    /**
     * @var int|null
     *
     * @ORM\Column(name="auth_source_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $authSourceId = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_on", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $createdOn = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_on", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $updatedOn = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $type = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="identity_url", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $identityUrl = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="mail_notification", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $mailNotification = '\'\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="salt", type="string", length=64, nullable=true, options={"default"="NULL"})
     */
    private $salt = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="openpgp_key", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $openpgpKey = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="password_changed_at", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $passwordChangedAt = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_chatted_at", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $lastChattedAt = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="passwd_changed_on", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $passwdChangedOn = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="must_change_passwd", type="boolean", nullable=false)
     */
    private $mustChangePasswd = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_activity_at", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $lastActivityAt = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="twofa_scheme", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $twofaScheme = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="twofa_totp_key", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $twofaTotpKey = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="twofa_totp_last_used_at", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $twofaTotpLastUsedAt = 'NULL';


}
