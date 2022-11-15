<?php

namespace JoliCode\Slack\Api\Model;

class ChatUpdatePostResponse200Message
{
    /**
     * 
     *
     * @var mixed[]|null
     */
    protected $attachments;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $blocks;
    /**
     * 
     *
     * @var string|null
     */
    protected $text;
    /**
     * 
     *
     * @return mixed[]|null
     */
    public function getAttachments() : ?array
    {
        return $this->attachments;
    }
    /**
     * 
     *
     * @param mixed[]|null $attachments
     *
     * @return self
     */
    public function setAttachments(?array $attachments) : self
    {
        $this->attachments = $attachments;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getBlocks()
    {
        return $this->blocks;
    }
    /**
     * 
     *
     * @param mixed $blocks
     *
     * @return self
     */
    public function setBlocks($blocks) : self
    {
        $this->blocks = $blocks;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getText() : ?string
    {
        return $this->text;
    }
    /**
     * 
     *
     * @param string|null $text
     *
     * @return self
     */
    public function setText(?string $text) : self
    {
        $this->text = $text;
        return $this;
    }
}