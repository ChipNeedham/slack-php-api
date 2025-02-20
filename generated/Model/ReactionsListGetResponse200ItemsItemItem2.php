<?php

namespace JoliCode\Slack\Api\Model;

class ReactionsListGetResponse200ItemsItemItem2
{
    /**
     * 
     *
     * @var ObjsComment|null
     */
    protected $comment;
    /**
     * 
     *
     * @var ObjsFile|null
     */
    protected $file;
    /**
     * 
     *
     * @var string|null
     */
    protected $type;
    /**
     * 
     *
     * @return ObjsComment|null
     */
    public function getComment() : ?ObjsComment
    {
        return $this->comment;
    }
    /**
     * 
     *
     * @param ObjsComment|null $comment
     *
     * @return self
     */
    public function setComment(?ObjsComment $comment) : self
    {
        $this->comment = $comment;
        return $this;
    }
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
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type) : self
    {
        $this->type = $type;
        return $this;
    }
}