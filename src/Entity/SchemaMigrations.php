<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SchemaMigrations
 *
 * @ORM\Table(name="schema_migrations", uniqueConstraints={@ORM\UniqueConstraint(name="unique_schema_migrations", columns={"version"})})
 * @ORM\Entity
 */
class SchemaMigrations
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="version", type="string", length=255, nullable=false)
     */
    private $version;


}
