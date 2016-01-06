<?php

namespace Ndewez\WebHome\CalendarApiBundle\V0\Connector;

use Ndewez\WebHome\CalendarApiBundle\V0\Model\Calendar;
use Ndewez\WebHome\CalendarApiBundle\V0\Model\Job;

/**
 * Interface WebHomeCalendarConnectorInterface.
 */
interface WebHomeCalendarConnectorInterface
{
    /**
     * @return Calendar[]
     */
    public function calendars();

    /**
     * @return Job[]
     */
    public function jobs();
}
