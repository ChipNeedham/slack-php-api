<?php

namespace JoliCode\Slack\Api\Model;

class FilesListGetResponse200
{
    /**
     * 
     *
     * @var ObjsFile[]|null
     */
    protected $files;
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
     * @return ObjsFile[]|null
     */
    public function getFiles() : ?array
    {
        return $this->files;
    }
    /**
     * 
     *
     * @param ObjsFile[]|null $files
     *
     * @return self
     */
    public function setFiles(?array $files) : self
    {
        $this->files = $files;
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
}