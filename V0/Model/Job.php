<?php

namespace Ndewez\WebHome\CalendarApiBundle\V0\Model;

use JMS\Serializer\Annotation\Type;

/**
 * Class Job.
 */
class Job
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
    private $code;

    /**
     * @var string
     *
     * @Type("string")
     */
    private $title;

    /**
     * @var \DateTime
     *
     * @Type("DateTime<'H:i:s'>")
     */
    private $startTime;

    /**
     * @var \DateTime
     *
     * @Type("DateTime<'H:i:s'>")
     */
    private $endTime;

    /**
     * @var int
     *
     * @Type("integer")
     */
    private $duration;

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
     * @return Job
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     *
     * @return Job
     */
    public function setCode($code)
    {
        $this->code = $code;

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
     * @return Job
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param \DateTime $startTime
     *
     * @return Job
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param \DateTime $endTime
     *
     * @return Job
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;

        return $this;
    }

    /**
     * @return int
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param int $duration
     *
     * @return Job
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

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
     * @return Job
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }
}
