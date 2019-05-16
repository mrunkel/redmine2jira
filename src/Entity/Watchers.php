<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Watchers
 *
 * @ORM\Table(name="watchers", indexes={@ORM\Index(name="index_watchers_on_user_id", columns={"user_id"}), @ORM\Index(name="watchers_user_id_type", columns={"user_id", "watchable_type"}), @ORM\Index(name="index_watchers_on_watchable_id_and_watchable_type", columns={"watchable_id", "watchable_type"})})
 * @ORM\Entity
 */
class Watchers
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
     * @ORM\Column(name="watchable_type", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $watchableType = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="watchable_id", type="integer", nullable=false)
     */
    private $watchableId = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $userId = 'NULL';


}
