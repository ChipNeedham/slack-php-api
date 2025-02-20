<?php

namespace JoliCode\Slack\Api\Model;

class ObjsPaging
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
     * @var int|null
     */
    protected $page;
    /**
     * 
     *
     * @var int|null
     */
    protected $pages;
    /**
     * 
     *
     * @var int|null
     */
    protected $perPage;
    /**
     * 
     *
     * @var int|null
     */
    protected $spill;
    /**
     * 
     *
     * @var int|null
     */
    protected $total;
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
     * @return int|null
     */
    public function getPage() : ?int
    {
        return $this->page;
    }
    /**
     * 
     *
     * @param int|null $page
     *
     * @return self
     */
    public function setPage(?int $page) : self
    {
        $this->page = $page;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPages() : ?int
    {
        return $this->pages;
    }
    /**
     * 
     *
     * @param int|null $pages
     *
     * @return self
     */
    public function setPages(?int $pages) : self
    {
        $this->pages = $pages;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPerPage() : ?int
    {
        return $this->perPage;
    }
    /**
     * 
     *
     * @param int|null $perPage
     *
     * @return self
     */
    public function setPerPage(?int $perPage) : self
    {
        $this->perPage = $perPage;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSpill() : ?int
    {
        return $this->spill;
    }
    /**
     * 
     *
     * @param int|null $spill
     *
     * @return self
     */
    public function setSpill(?int $spill) : self
    {
        $this->spill = $spill;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTotal() : ?int
    {
        return $this->total;
    }
    /**
     * 
     *
     * @param int|null $total
     *
     * @return self
     */
    public function setTotal(?int $total) : self
    {
        $this->total = $total;
        return $this;
    }
}