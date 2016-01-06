<?php

namespace Ndewez\WebHome\CalendarApiBundle\Tests\V0\Utils;

use Ndewez\WebHome\CalendarApiBundle\V0\Model\Calendar;

/**
 * Class CalendarBuilder.
 */
class CalendarBuilder
{
    /**
     * @param int $nbCalendars
     *
     * @return Calendar[]
     */
    public function createCalendars($nbCalendars)
    {
        $calendars = [];
        for ($i = 1; $i <= $nbCalendars; $i++) {
            $calendar = new Calendar();
            $calendar->setId($i)
                ->setTitle('calendar '.$i);

            $calendars[] = $calendar;
        }

        return $calendars;
    }
}
