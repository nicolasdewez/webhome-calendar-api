<?php

namespace Ndewez\WebHome\CalendarApiBundle\V0\Model;

use JMS\Serializer\Annotation as Serializer;

class JobCalendar
{
    /**
     * @var int
     *
     * @Serializer\Type("integer")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @Serializer\Type("DateTime")
     */
    private $date;

    /**
     * @var Job
     *
     * @Serializer\Type("Ndewez\WebHome\CalendarApiBundle\V0\Model\Job")
     */
    private $job;

    /**
     * @var Job
     *
     * @Serializer\Type("Ndewez\WebHome\CalendarApiBundle\V0\Model\Calendar")
     */
    private $calendar;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return JobCalendar
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set date.
     *
     * @param \DateTime $date
     *
     * @return JobCalendar
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date.
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set job.
     *
     * @param Job $job
     *
     * @return JobCalendar
     */
    public function setJob(Job $job)
    {
        $this->job = $job;

        return $this;
    }

    /**
     * Get job.
     *
     * @return Job
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Set calendar.
     *
     * @param Calendar $calendar
     *
     * @return JobCalendar
     */
    public function setCalendar(Calendar $calendar)
    {
        $this->calendar = $calendar;

        return $this;
    }

    /**
     * Get calendar.
     *
     * @return Calendar
     */
    public function getCalendar()
    {
        return $this->calendar;
    }
}
