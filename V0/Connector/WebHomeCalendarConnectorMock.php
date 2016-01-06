<?php

namespace Ndewez\WebHome\CalendarApiBundle\V0\Connector;

use Ndewez\WebHome\CalendarApiBundle\Tests\V0\Utils\CalendarBuilder;
use Ndewez\WebHome\CalendarApiBundle\Tests\V0\Utils\JobBuilder;

/**
 * Class WebHomeCalendarConnectorMock.
 */
class WebHomeCalendarConnectorMock implements WebHomeCalendarConnectorInterface
{
    /** @var CalendarBuilder */
    private $calendarBuilder;

    /** @var JobBuilder */
    private $jobBuilder;

    /**
     * @param CalendarBuilder $calendarBuilder
     * @param JobBuilder      $jobBuilder
     */
    public function __construct(CalendarBuilder $calendarBuilder, JobBuilder $jobBuilder)
    {
        $this->calendarBuilder = $calendarBuilder;
        $this->jobBuilder = $jobBuilder;
    }

    /**
     * {@inheritDoc}
     */
    public function calendars()
    {
        return $this->calendarBuilder->createCalendars(2);
    }

    /**
     * {@inheritDoc}
     */
    public function jobs()
    {
        return $this->jobBuilder->createJobs(3);
    }
}
