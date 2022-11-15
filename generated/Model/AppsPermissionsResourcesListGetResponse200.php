<?php

namespace JoliCode\Slack\Api\Model;

class AppsPermissionsResourcesListGetResponse200 extends \ArrayObject
{
    /**
     * 
     *
     * @var bool|null
     */
    protected $ok;
    /**
     * 
     *
     * @var AppsPermissionsResourcesListGetResponse200ResourcesItem[]|null
     */
    protected $resources;
    /**
     * 
     *
     * @var AppsPermissionsResourcesListGetResponse200ResponseMetadata|null
     */
    protected $responseMetadata;
    /**
     * 
     *
     * @return bool|null
     */
    public function getOk() : ?bool
    {
        return $this->ok;
    }
    /**
     * 
     *
     * @param bool|null $ok
     *
     * @return self
     */
    public function setOk(?bool $ok) : self
    {
        $this->ok = $ok;
        return $this;
    }
    /**
     * 
     *
     * @return AppsPermissionsResourcesListGetResponse200ResourcesItem[]|null
     */
    public function getResources() : ?array
    {
        return $this->resources;
    }
    /**
     * 
     *
     * @param AppsPermissionsResourcesListGetResponse200ResourcesItem[]|null $resources
     *
     * @return self
     */
    public function setResources(?array $resources) : self
    {
        $this->resources = $resources;
        return $this;
    }
    /**
     * 
     *
     * @return AppsPermissionsResourcesListGetResponse200ResponseMetadata|null
     */
    public function getResponseMetadata() : ?AppsPermissionsResourcesListGetResponse200ResponseMetadata
    {
        return $this->responseMetadata;
    }
    /**
     * 
     *
     * @param AppsPermissionsResourcesListGetResponse200ResponseMetadata|null $responseMetadata
     *
     * @return self
     */
    public function setResponseMetadata(?AppsPermissionsResourcesListGetResponse200ResponseMetadata $responseMetadata) : self
    {
        $this->responseMetadata = $responseMetadata;
        return $this;
    }
}