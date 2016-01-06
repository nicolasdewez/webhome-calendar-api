<?php

namespace Ndewez\WebHome\CalendarApiBundle\V0\Service;

use Ndewez\WebHome\CalendarApiBundle\V0\Connector\WebHomeCalendarConnectorInterface;
use Ndewez\WebHome\CalendarApiBundle\V0\Model\Calendar;
use Ndewez\WebHome\CalendarApiBundle\V0\Model\Job;

/**
 * Class WebHomeCalendarClient.
 */
class WebHomeCalendarClient
{
    /** @var WebHomeCalendarConnectorInterface */
    private $connector;

    /**
     * @param WebHomeCalendarConnectorInterface $connector
     */
    public function __construct(WebHomeCalendarConnectorInterface $connector)
    {
        $this->connector = $connector;
    }

    /**
     * @return Calendar[]
     */
    public function calendars()
    {
        return $this->connector->calendars();
    }

    /**
     * @return Job[]
     */
    public function jobs()
    {
        return $this->connector->jobs();
    }
}
