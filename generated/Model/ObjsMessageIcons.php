<?php

namespace JoliCode\Slack\Api\Model;

class ObjsMessageIcons
{
    /**
     * 
     *
     * @var string|null
     */
    protected $emoji;
    /**
     * 
     *
     * @var string|null
     */
    protected $image64;
    /**
     * 
     *
     * @return string|null
     */
    public function getEmoji() : ?string
    {
        return $this->emoji;
    }
    /**
     * 
     *
     * @param string|null $emoji
     *
     * @return self
     */
    public function setEmoji(?string $emoji) : self
    {
        $this->emoji = $emoji;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getImage64() : ?string
    {
        return $this->image64;
    }
    /**
     * 
     *
     * @param string|null $image64
     *
     * @return self
     */
    public function setImage64(?string $image64) : self
    {
        $this->image64 = $image64;
        return $this;
    }
}