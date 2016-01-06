<?php

namespace Ndewez\WebHome\CalendarApiBundle\Tests\V0\Utils;

use Ndewez\WebHome\CalendarApiBundle\V0\Model\Job;

/**
 * Class JobBuilder.
 */
class JobBuilder
{
    /**
     * @param int $nbJobs
     *
     * @return Job[]
     */
    public function createJobs($nbJobs)
    {
        $start = new \DateTime('midnight');
        $start->add(new \DateInterval('P8H'));
        $end = new \DateTime('midnight');
        $end->add(new \DateInterval('P16H'));

        $jobs = [];
        for ($i = 1; $i <= $nbJobs; $i++) {
            $job = new Job();
            $job
                ->setId($i)
                ->setCode('code'.$i)
                ->setTitle('job '.$i)
                ->setStartTime($start)
                ->setEndTime($end)
                ->setDuration(8)
            ;

            $jobs[] = $job;
        }

        return $jobs;
    }
}
