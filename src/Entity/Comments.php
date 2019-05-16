<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comments
 *
 * @ORM\Table(name="comments", indexes={@ORM\Index(name="index_comments_on_author_id", columns={"author_id"}), @ORM\Index(name="index_comments_on_commented_id_and_commented_type", columns={"commented_id", "commented_type"})})
 * @ORM\Entity
 */
class Comments
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
     * @ORM\Column(name="commented_type", type="string", length=30, nullable=false, options={"default"="''"})
     */
    private $commentedType = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="commented_id", type="integer", nullable=false)
     */
    private $commentedId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="author_id", type="integer", nullable=false)
     */
    private $authorId = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="comments", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $comments = 'NULL';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_on", type="datetime", nullable=false)
     */
    private $createdOn;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_on", type="datetime", nullable=false)
     */
    private $updatedOn;


}
