<?php

namespace Ndewez\WebHome\CalendarApiBundle\V0\Model;

use JMS\Serializer\Annotation\Type;

/**
 * Class Calendar.
 */
class Calendar
{
    /**
     * @var int
     *
     * @Type("integer")
     */
    private $id;

    /**
     * @var string
     *
     * @Type("string")
     */
    private $title;

    /**
     * @var bool
     *
     * @Type("boolean")
     */
    private $active;

    public function __construct()
    {
        $this->active = true;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return Calendar
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return Calendar
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * @param boolean $active
     *
     * @return Calendar
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }
}
