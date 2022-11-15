<?php

namespace JoliCode\Slack\Api\Model;

class ObjsMessageAttachmentsItem extends \ArrayObject
{
    /**
     * 
     *
     * @var ObjsMessageAttachmentsItemActionsItem[]|null
     */
    protected $actions;
    /**
     * 
     *
     * @var string|null
     */
    protected $authorIcon;
    /**
     * 
     *
     * @var string|null
     */
    protected $authorLink;
    /**
     * 
     *
     * @var string|null
     */
    protected $authorName;
    /**
     * 
     *
     * @var string|null
     */
    protected $callbackId;
    /**
     * 
     *
     * @var string|null
     */
    protected $color;
    /**
     * 
     *
     * @var string|null
     */
    protected $fallback;
    /**
     * 
     *
     * @var ObjsMessageAttachmentsItemFieldsItem[]|null
     */
    protected $fields;
    /**
     * 
     *
     * @var string|null
     */
    protected $footer;
    /**
     * 
     *
     * @var string|null
     */
    protected $footerIcon;
    /**
     * 
     *
     * @var int|null
     */
    protected $id;
    /**
     * 
     *
     * @var int|null
     */
    protected $imageBytes;
    /**
     * 
     *
     * @var int|null
     */
    protected $imageHeight;
    /**
     * 
     *
     * @var string|null
     */
    protected $imageUrl;
    /**
     * 
     *
     * @var int|null
     */
    protected $imageWidth;
    /**
     * 
     *
     * @var string|null
     */
    protected $pretext;
    /**
     * 
     *
     * @var string|null
     */
    protected $text;
    /**
     * 
     *
     * @var string|null
     */
    protected $thumbUrl;
    /**
     * 
     *
     * @var string|null
     */
    protected $title;
    /**
     * 
     *
     * @var string|null
     */
    protected $titleLink;
    /**
     * 
     *
     * @var float|string|null
     */
    protected $ts;
    /**
     * 
     *
     * @return ObjsMessageAttachmentsItemActionsItem[]|null
     */
    public function getActions() : ?array
    {
        return $this->actions;
    }
    /**
     * 
     *
     * @param ObjsMessageAttachmentsItemActionsItem[]|null $actions
     *
     * @return self
     */
    public function setActions(?array $actions) : self
    {
        $this->actions = $actions;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAuthorIcon() : ?string
    {
        return $this->authorIcon;
    }
    /**
     * 
     *
     * @param string|null $authorIcon
     *
     * @return self
     */
    public function setAuthorIcon(?string $authorIcon) : self
    {
        $this->authorIcon = $authorIcon;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAuthorLink() : ?string
    {
        return $this->authorLink;
    }
    /**
     * 
     *
     * @param string|null $authorLink
     *
     * @return self
     */
    public function setAuthorLink(?string $authorLink) : self
    {
        $this->authorLink = $authorLink;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAuthorName() : ?string
    {
        return $this->authorName;
    }
    /**
     * 
     *
     * @param string|null $authorName
     *
     * @return self
     */
    public function setAuthorName(?string $authorName) : self
    {
        $this->authorName = $authorName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCallbackId() : ?string
    {
        return $this->callbackId;
    }
    /**
     * 
     *
     * @param string|null $callbackId
     *
     * @return self
     */
    public function setCallbackId(?string $callbackId) : self
    {
        $this->callbackId = $callbackId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getColor() : ?string
    {
        return $this->color;
    }
    /**
     * 
     *
     * @param string|null $color
     *
     * @return self
     */
    public function setColor(?string $color) : self
    {
        $this->color = $color;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFallback() : ?string
    {
        return $this->fallback;
    }
    /**
     * 
     *
     * @param string|null $fallback
     *
     * @return self
     */
    public function setFallback(?string $fallback) : self
    {
        $this->fallback = $fallback;
        return $this;
    }
    /**
     * 
     *
     * @return ObjsMessageAttachmentsItemFieldsItem[]|null
     */
    public function getFields() : ?array
    {
        return $this->fields;
    }
    /**
     * 
     *
     * @param ObjsMessageAttachmentsItemFieldsItem[]|null $fields
     *
     * @return self
     */
    public function setFields(?array $fields) : self
    {
        $this->fields = $fields;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFooter() : ?string
    {
        return $this->footer;
    }
    /**
     * 
     *
     * @param string|null $footer
     *
     * @return self
     */
    public function setFooter(?string $footer) : self
    {
        $this->footer = $footer;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFooterIcon() : ?string
    {
        return $this->footerIcon;
    }
    /**
     * 
     *
     * @param string|null $footerIcon
     *
     * @return self
     */
    public function setFooterIcon(?string $footerIcon) : self
    {
        $this->footerIcon = $footerIcon;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getImageBytes() : ?int
    {
        return $this->imageBytes;
    }
    /**
     * 
     *
     * @param int|null $imageBytes
     *
     * @return self
     */
    public function setImageBytes(?int $imageBytes) : self
    {
        $this->imageBytes = $imageBytes;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getImageHeight() : ?int
    {
        return $this->imageHeight;
    }
    /**
     * 
     *
     * @param int|null $imageHeight
     *
     * @return self
     */
    public function setImageHeight(?int $imageHeight) : self
    {
        $this->imageHeight = $imageHeight;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getImageUrl() : ?string
    {
        return $this->imageUrl;
    }
    /**
     * 
     *
     * @param string|null $imageUrl
     *
     * @return self
     */
    public function setImageUrl(?string $imageUrl) : self
    {
        $this->imageUrl = $imageUrl;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getImageWidth() : ?int
    {
        return $this->imageWidth;
    }
    /**
     * 
     *
     * @param int|null $imageWidth
     *
     * @return self
     */
    public function setImageWidth(?int $imageWidth) : self
    {
        $this->imageWidth = $imageWidth;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPretext() : ?string
    {
        return $this->pretext;
    }
    /**
     * 
     *
     * @param string|null $pretext
     *
     * @return self
     */
    public function setPretext(?string $pretext) : self
    {
        $this->pretext = $pretext;
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
    /**
     * 
     *
     * @return string|null
     */
    public function getThumbUrl() : ?string
    {
        return $this->thumbUrl;
    }
    /**
     * 
     *
     * @param string|null $thumbUrl
     *
     * @return self
     */
    public function setThumbUrl(?string $thumbUrl) : self
    {
        $this->thumbUrl = $thumbUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
     * 
     *
     * @param string|null $title
     *
     * @return self
     */
    public function setTitle(?string $title) : self
    {
        $this->title = $title;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTitleLink() : ?string
    {
        return $this->titleLink;
    }
    /**
     * 
     *
     * @param string|null $titleLink
     *
     * @return self
     */
    public function setTitleLink(?string $titleLink) : self
    {
        $this->titleLink = $titleLink;
        return $this;
    }
    /**
     * 
     *
     * @return float|string|null
     */
    public function getTs()
    {
        return $this->ts;
    }
    /**
     * 
     *
     * @param float|string|null $ts
     *
     * @return self
     */
    public function setTs($ts) : self
    {
        $this->ts = $ts;
        return $this;
    }
}