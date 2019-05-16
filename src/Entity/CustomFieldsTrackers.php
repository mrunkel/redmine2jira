<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomFieldsTrackers
 *
 * @ORM\Table(name="custom_fields_trackers", uniqueConstraints={@ORM\UniqueConstraint(name="index_custom_fields_trackers_on_custom_field_id_and_tracker_id", columns={"custom_field_id", "tracker_id"})})
 * @ORM\Entity
 */
class CustomFieldsTrackers
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
     * @var int
     *
     * @ORM\Column(name="custom_field_id", type="integer", nullable=false)
     */
    private $customFieldId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="tracker_id", type="integer", nullable=false)
     */
    private $trackerId = '0';


}
