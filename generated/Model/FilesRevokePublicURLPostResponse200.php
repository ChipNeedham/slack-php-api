<?php

namespace JoliCode\Slack\Api\Model;

class FilesRevokePublicURLPostResponse200
{
    /**
     * 
     *
     * @var ObjsFile|null
     */
    protected $file;
    /**
     * 
     *
     * @var bool|null
     */
    protected $ok;
    /**
     * 
     *
     * @return ObjsFile|null
     */
    public function getFile() : ?ObjsFile
    {
        return $this->file;
    }
    /**
     * 
     *
     * @param ObjsFile|null $file
     *
     * @return self
     */
    public function setFile(?ObjsFile $file) : self
    {
        $this->file = $file;
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