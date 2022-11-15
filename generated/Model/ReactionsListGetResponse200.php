<?php

namespace JoliCode\Slack\Api\Model;

class ReactionsListGetResponse200
{
    /**
     * 
     *
     * @var mixed[]|null
     */
    protected $items;
    /**
     * 
     *
     * @var bool|null
     */
    protected $ok;
    /**
     * 
     *
     * @var ObjsPaging|null
     */
    protected $paging;
    /**
     * 
     *
     * @var ObjsResponseMetadata|null
     */
    protected $responseMetadata;
    /**
     * 
     *
     * @return mixed[]|null
     */
    public function getItems() : ?array
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param mixed[]|null $items
     *
     * @return self
     */
    public function setItems(?array $items) : self
    {
        $this->items = $items;
        return $this;
    }
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
     * @return ObjsPaging|null
     */
    public function getPaging() : ?ObjsPaging
    {
        return $this->paging;
    }
    /**
     * 
     *
     * @param ObjsPaging|null $paging
     *
     * @return self
     */
    public function setPaging(?ObjsPaging $paging) : self
    {
        $this->paging = $paging;
        return $this;
    }
    /**
     * 
     *
     * @return ObjsResponseMetadata|null
     */
    public function getResponseMetadata() : ?ObjsResponseMetadata
    {
        return $this->responseMetadata;
    }
    /**
     * 
     *
     * @param ObjsResponseMetadata|null $responseMetadata
     *
     * @return self
     */
    public function setResponseMetadata(?ObjsResponseMetadata $responseMetadata) : self
    {
        $this->responseMetadata = $responseMetadata;
        return $this;
    }
}