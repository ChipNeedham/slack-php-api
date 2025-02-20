<?php

namespace JoliCode\Slack\Api\Model;

class TeamAccessLogsGetResponse200LoginsItem
{
    /**
     * 
     *
     * @var int|null
     */
    protected $count;
    /**
     * 
     *
     * @var string|null
     */
    protected $country;
    /**
     * 
     *
     * @var int|null
     */
    protected $dateFirst;
    /**
     * 
     *
     * @var int|null
     */
    protected $dateLast;
    /**
     * 
     *
     * @var string|null
     */
    protected $ip;
    /**
     * 
     *
     * @var string|null
     */
    protected $isp;
    /**
     * 
     *
     * @var string|null
     */
    protected $region;
    /**
     * 
     *
     * @var string|null
     */
    protected $userAgent;
    /**
     * 
     *
     * @var string|null
     */
    protected $userId;
    /**
     * 
     *
     * @var string|null
     */
    protected $username;
    /**
     * 
     *
     * @return int|null
     */
    public function getCount() : ?int
    {
        return $this->count;
    }
    /**
     * 
     *
     * @param int|null $count
     *
     * @return self
     */
    public function setCount(?int $count) : self
    {
        $this->count = $count;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCountry() : ?string
    {
        return $this->country;
    }
    /**
     * 
     *
     * @param string|null $country
     *
     * @return self
     */
    public function setCountry(?string $country) : self
    {
        $this->country = $country;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDateFirst() : ?int
    {
        return $this->dateFirst;
    }
    /**
     * 
     *
     * @param int|null $dateFirst
     *
     * @return self
     */
    public function setDateFirst(?int $dateFirst) : self
    {
        $this->dateFirst = $dateFirst;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDateLast() : ?int
    {
        return $this->dateLast;
    }
    /**
     * 
     *
     * @param int|null $dateLast
     *
     * @return self
     */
    public function setDateLast(?int $dateLast) : self
    {
        $this->dateLast = $dateLast;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getIp() : ?string
    {
        return $this->ip;
    }
    /**
     * 
     *
     * @param string|null $ip
     *
     * @return self
     */
    public function setIp(?string $ip) : self
    {
        $this->ip = $ip;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getIsp() : ?string
    {
        return $this->isp;
    }
    /**
     * 
     *
     * @param string|null $isp
     *
     * @return self
     */
    public function setIsp(?string $isp) : self
    {
        $this->isp = $isp;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRegion() : ?string
    {
        return $this->region;
    }
    /**
     * 
     *
     * @param string|null $region
     *
     * @return self
     */
    public function setRegion(?string $region) : self
    {
        $this->region = $region;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUserAgent() : ?string
    {
        return $this->userAgent;
    }
    /**
     * 
     *
     * @param string|null $userAgent
     *
     * @return self
     */
    public function setUserAgent(?string $userAgent) : self
    {
        $this->userAgent = $userAgent;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUserId() : ?string
    {
        return $this->userId;
    }
    /**
     * 
     *
     * @param string|null $userId
     *
     * @return self
     */
    public function setUserId(?string $userId) : self
    {
        $this->userId = $userId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUsername() : ?string
    {
        return $this->username;
    }
    /**
     * 
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setUsername(?string $username) : self
    {
        $this->username = $username;
        return $this;
    }
}