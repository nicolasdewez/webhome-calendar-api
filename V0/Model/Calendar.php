<?php

namespace Ndewez\WebHome\CalendarApiBundle\V0\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Calendar.
 */
class Calendar
{
    /**
     * @var int
     *
     * @Serializer\Type("integer")
     */
    private $id;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    private $title;

    /**
     * @var GoogleConnection[]
     *
     * @Serializer\Type("array<Ndewez\WebHome\CalendarApiBundle\V0\Model\GoogleConnection>")
     */
    private $googleConnections;

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
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
     * @return GoogleConnection[]
     */
    public function getGoogleConnections()
    {
        return $this->googleConnections;
    }

    /**
     * @param GoogleConnection[] $googleConnections
     *
     * @return Calendar
     */
    public function setGoogleConnections(array $googleConnections)
    {
        $this->googleConnections = $googleConnections;

        return $this;
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * @param bool $active
     *
     * @return Calendar
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }
}
