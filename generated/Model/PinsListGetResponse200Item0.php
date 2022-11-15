<?php

namespace JoliCode\Slack\Api\Model;

class PinsListGetResponse200Item0
{
    /**
     * 
     *
     * @var PinsListGetResponse200Item0ItemsItem0[]|PinsListGetResponse200Item0ItemsItem1[]|null
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
     * @return PinsListGetResponse200Item0ItemsItem0[]|PinsListGetResponse200Item0ItemsItem1[]|null
     */
    public function getItems()
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param PinsListGetResponse200Item0ItemsItem0[]|PinsListGetResponse200Item0ItemsItem1[]|null $items
     *
     * @return self
     */
    public function setItems($items) : self
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
}