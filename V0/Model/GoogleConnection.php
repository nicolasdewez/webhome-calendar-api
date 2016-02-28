<?php

namespace Ndewez\WebHome\CalendarApiBundle\V0\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class GoogleConnection.
 */
class GoogleConnection
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
     * @var string
     *
     * @Serializer\Type("string")
     */
    private $clientId;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    private $clientSecret;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    private $projectId;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    private $internalId;

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     */
    private $jobDayComplete;

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     */
    private $nurseryDayComplete;

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
     * @return GoogleConnection
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
     * @return GoogleConnection
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * @param string $clientId
     *
     * @return GoogleConnection
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * @return string
     */
    public function getClientSecret()
    {
        return $this->clientSecret;
    }

    /**
     * @param string $clientSecret
     *
     * @return GoogleConnection
     */
    public function setClientSecret($clientSecret)
    {
        $this->clientSecret = $clientSecret;

        return $this;
    }

    /**
     * @return string
     */
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * @param string $projectId
     *
     * @return GoogleConnection
     */
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;

        return $this;
    }

    /**
     * @return string
     */
    public function getInternalId()
    {
        return $this->internalId;
    }

    /**
     * @param string $internalId
     *
     * @return GoogleConnection
     */
    public function setInternalId($internalId)
    {
        $this->internalId = $internalId;

        return $this;
    }

    /**
     * @return bool
     */
    public function isJobDayComplete()
    {
        return $this->jobDayComplete;
    }

    /**
     * @param bool $jobDayComplete
     *
     * @return GoogleConnection
     */
    public function setJobDayComplete($jobDayComplete)
    {
        $this->jobDayComplete = $jobDayComplete;

        return $this;
    }

    /**
     * @return bool
     */
    public function isNurseryDayComplete()
    {
        return $this->nurseryDayComplete;
    }

    /**
     * @param bool $nurseryDayComplete
     *
     * @return GoogleConnection
     */
    public function setNurseryDayComplete($nurseryDayComplete)
    {
        $this->nurseryDayComplete = $nurseryDayComplete;

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
     * @return GoogleConnection
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }
}
