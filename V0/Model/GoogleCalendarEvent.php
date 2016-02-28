<?php

namespace Ndewez\WebHome\CalendarApiBundle\V0\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class GoogleCalendarEvent.
 */
class GoogleCalendarEvent
{
    /**
     * @var GoogleConnection
     *
     * @Serializer\Type("Ndewez\WebHome\CalendarApiBundle\V0\Model\GoogleConnection")
     */
    private $connection;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    private $title;

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     */
    private $allDay;

    /**
     * @var \DateTime
     *
     * @Serializer\Type("DateTime")
     */
    private $start;

    /**
     * @var \DateTime
     *
     * @Serializer\Type("DateTime")
     */
    private $end;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     */
    private $linkId;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    private $typeEvent;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     */
    private $calendarId;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     */
    private $internalId;

    /**
     * @return GoogleConnection
     */
    public function getConnection()
    {
        return $this->connection;
    }

    /**
     * @param GoogleConnection $connection
     *
     * @return GoogleCalendarEvent
     */
    public function setConnection($connection)
    {
        $this->connection = $connection;

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
     * @return GoogleCalendarEvent
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return bool
     */
    public function isAllDay()
    {
        return $this->allDay;
    }

    /**
     * @param bool $allDay
     *
     * @return GoogleCalendarEvent
     */
    public function setAllDay($allDay)
    {
        $this->allDay = $allDay;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * @param \DateTime $start
     *
     * @return GoogleCalendarEvent
     */
    public function setStart($start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * @param \DateTime $end
     *
     * @return GoogleCalendarEvent
     */
    public function setEnd($end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * @return int
     */
    public function getLinkId()
    {
        return $this->linkId;
    }

    /**
     * @param int $linkId
     *
     * @return GoogleCalendarEvent
     */
    public function setLinkId($linkId)
    {
        $this->linkId = $linkId;

        return $this;
    }

    /**
     * @return string
     */
    public function getTypeEvent()
    {
        return $this->typeEvent;
    }

    /**
     * @param string $typeEvent
     *
     * @return GoogleCalendarEvent
     */
    public function setTypeEvent($typeEvent)
    {
        $this->typeEvent = $typeEvent;

        return $this;
    }

    /**
     * @return int
     */
    public function getCalendarId()
    {
        return $this->calendarId;
    }

    /**
     * @param int $calendarId
     *
     * @return GoogleCalendarEvent
     */
    public function setCalendarId($calendarId)
    {
        $this->calendarId = $calendarId;

        return $this;
    }

    /**
     * @return int
     */
    public function getInternalId()
    {
        return $this->internalId;
    }

    /**
     * @param int $internalId
     *
     * @return GoogleCalendarEvent
     */
    public function setInternalId($internalId)
    {
        $this->internalId = $internalId;

        return $this;
    }
}
