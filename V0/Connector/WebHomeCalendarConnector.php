<?php

namespace Ndewez\WebHome\CalendarApiBundle\V0\Connector;

use GuzzleHttp\Client;
use Ndewez\WebHome\CommonBundle\Client\AbstractClient;

/**
 * Class WebHomeCalendarConnector.
 */
class WebHomeCalendarConnector extends AbstractClient implements WebHomeCalendarConnectorInterface
{
    const URL_CALENDARS = '/calendars';
    const URL_JOBS = '/jobs';

    /**
     * @param Client $client
     * @param string $baseUrl
     * @param int    $version
     */
    public function __construct(Client $client, $baseUrl, $version)
    {
        parent::__construct($client, $baseUrl, $version);
    }

    /**
     * {@inheritdoc}
     */
    public function calendars()
    {
        $response = $this->client->get($this->generateUrl(self::URL_CALENDARS));

        return $this->deserialize($response, 'array<Ndewez\WebHome\CalendarApiBundle\V0\Model\Calendar>');
    }

    /**
     * {@inheritdoc}
     */
    public function jobs()
    {
        $response = $this->client->get($this->generateUrl(self::URL_JOBS));

        return $this->deserialize($response, 'array<Ndewez\WebHome\CalendarApiBundle\V0\Model\Job>');
    }
}
