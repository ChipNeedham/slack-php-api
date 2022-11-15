<?php

namespace JoliCode\Slack\Api\Model;

class ObjsFile
{
    /**
     * 
     *
     * @var string[]|null
     */
    protected $channels;
    /**
     * 
     *
     * @var int|null
     */
    protected $commentsCount;
    /**
     * 
     *
     * @var int|null
     */
    protected $created;
    /**
     * 
     *
     * @var int|null
     */
    protected $dateDelete;
    /**
     * 
     *
     * @var string|null
     */
    protected $deanimateGif;
    /**
     * 
     *
     * @var bool|null
     */
    protected $displayAsBot;
    /**
     * 
     *
     * @var bool|null
     */
    protected $editable;
    /**
     * 
     *
     * @var string|null
     */
    protected $editor;
    /**
     * 
     *
     * @var string|null
     */
    protected $externalId;
    /**
     * 
     *
     * @var string|null
     */
    protected $externalType;
    /**
     * 
     *
     * @var string|null
     */
    protected $externalUrl;
    /**
     * 
     *
     * @var string|null
     */
    protected $filetype;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $groups;
    /**
     * 
     *
     * @var bool|null
     */
    protected $hasRichPreview;
    /**
     * 
     *
     * @var string|null
     */
    protected $id;
    /**
     * 
     *
     * @var int|null
     */
    protected $imageExifRotation;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $ims;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isExternal;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isPublic;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isStarred;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isTombstoned;
    /**
     * 
     *
     * @var string|null
     */
    protected $lastEditor;
    /**
     * 
     *
     * @var string|null
     */
    protected $mimetype;
    /**
     * 
     *
     * @var string|null
     */
    protected $mode;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var bool|null
     */
    protected $nonOwnerEditable;
    /**
     * 
     *
     * @var int|null
     */
    protected $numStars;
    /**
     * 
     *
     * @var int|null
     */
    protected $originalH;
    /**
     * 
     *
     * @var int|null
     */
    protected $originalW;
    /**
     * 
     *
     * @var string|null
     */
    protected $permalink;
    /**
     * 
     *
     * @var string|null
     */
    protected $permalinkPublic;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $pinnedInfo;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $pinnedTo;
    /**
     * 
     *
     * @var string|null
     */
    protected $pjpeg;
    /**
     * 
     *
     * @var string|null
     */
    protected $prettyType;
    /**
     * 
     *
     * @var string|null
     */
    protected $preview;
    /**
     * 
     *
     * @var bool|null
     */
    protected $publicUrlShared;
    /**
     * 
     *
     * @var ObjsReaction[]|null
     */
    protected $reactions;
    /**
     * 
     *
     * @var ObjsFileShares|null
     */
    protected $shares;
    /**
     * 
     *
     * @var int|null
     */
    protected $size;
    /**
     * 
     *
     * @var string|null
     */
    protected $sourceTeam;
    /**
     * 
     *
     * @var string|null
     */
    protected $state;
    /**
     * 
     *
     * @var string|null
     */
    protected $thumb1024;
    /**
     * 
     *
     * @var int|null
     */
    protected $thumb1024H;
    /**
     * 
     *
     * @var int|null
     */
    protected $thumb1024W;
    /**
     * 
     *
     * @var string|null
     */
    protected $thumb160;
    /**
     * 
     *
     * @var string|null
     */
    protected $thumb360;
    /**
     * 
     *
     * @var string|null
     */
    protected $thumb360Gif;
    /**
     * 
     *
     * @var int|null
     */
    protected $thumb360H;
    /**
     * 
     *
     * @var int|null
     */
    protected $thumb360W;
    /**
     * 
     *
     * @var string|null
     */
    protected $thumb480;
    /**
     * 
     *
     * @var int|null
     */
    protected $thumb480H;
    /**
     * 
     *
     * @var int|null
     */
    protected $thumb480W;
    /**
     * 
     *
     * @var string|null
     */
    protected $thumb64;
    /**
     * 
     *
     * @var string|null
     */
    protected $thumb720;
    /**
     * 
     *
     * @var int|null
     */
    protected $thumb720H;
    /**
     * 
     *
     * @var int|null
     */
    protected $thumb720W;
    /**
     * 
     *
     * @var string|null
     */
    protected $thumb80;
    /**
     * 
     *
     * @var string|null
     */
    protected $thumb800;
    /**
     * 
     *
     * @var int|null
     */
    protected $thumb800H;
    /**
     * 
     *
     * @var int|null
     */
    protected $thumb800W;
    /**
     * 
     *
     * @var string|null
     */
    protected $thumb960;
    /**
     * 
     *
     * @var int|null
     */
    protected $thumb960H;
    /**
     * 
     *
     * @var int|null
     */
    protected $thumb960W;
    /**
     * 
     *
     * @var string|null
     */
    protected $thumbTiny;
    /**
     * 
     *
     * @var int|string|null
     */
    protected $timestamp;
    /**
     * 
     *
     * @var string|null
     */
    protected $title;
    /**
     * 
     *
     * @var int|null
     */
    protected $updated;
    /**
     * 
     *
     * @var string|null
     */
    protected $urlPrivate;
    /**
     * 
     *
     * @var string|null
     */
    protected $urlPrivateDownload;
    /**
     * 
     *
     * @var string|null
     */
    protected $user;
    /**
     * 
     *
     * @var string|null
     */
    protected $userTeam;
    /**
     * 
     *
     * @var string|null
     */
    protected $username;
    /**
     * 
     *
     * @return string[]|null
     */
    public function getChannels() : ?array
    {
        return $this->channels;
    }
    /**
     * 
     *
     * @param string[]|null $channels
     *
     * @return self
     */
    public function setChannels(?array $channels) : self
    {
        $this->channels = $channels;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getCommentsCount() : ?int
    {
        return $this->commentsCount;
    }
    /**
     * 
     *
     * @param int|null $commentsCount
     *
     * @return self
     */
    public function setCommentsCount(?int $commentsCount) : self
    {
        $this->commentsCount = $commentsCount;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getCreated() : ?int
    {
        return $this->created;
    }
    /**
     * 
     *
     * @param int|null $created
     *
     * @return self
     */
    public function setCreated(?int $created) : self
    {
        $this->created = $created;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDateDelete() : ?int
    {
        return $this->dateDelete;
    }
    /**
     * 
     *
     * @param int|null $dateDelete
     *
     * @return self
     */
    public function setDateDelete(?int $dateDelete) : self
    {
        $this->dateDelete = $dateDelete;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDeanimateGif() : ?string
    {
        return $this->deanimateGif;
    }
    /**
     * 
     *
     * @param string|null $deanimateGif
     *
     * @return self
     */
    public function setDeanimateGif(?string $deanimateGif) : self
    {
        $this->deanimateGif = $deanimateGif;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getDisplayAsBot() : ?bool
    {
        return $this->displayAsBot;
    }
    /**
     * 
     *
     * @param bool|null $displayAsBot
     *
     * @return self
     */
    public function setDisplayAsBot(?bool $displayAsBot) : self
    {
        $this->displayAsBot = $displayAsBot;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getEditable() : ?bool
    {
        return $this->editable;
    }
    /**
     * 
     *
     * @param bool|null $editable
     *
     * @return self
     */
    public function setEditable(?bool $editable) : self
    {
        $this->editable = $editable;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getEditor() : ?string
    {
        return $this->editor;
    }
    /**
     * 
     *
     * @param string|null $editor
     *
     * @return self
     */
    public function setEditor(?string $editor) : self
    {
        $this->editor = $editor;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getExternalId() : ?string
    {
        return $this->externalId;
    }
    /**
     * 
     *
     * @param string|null $externalId
     *
     * @return self
     */
    public function setExternalId(?string $externalId) : self
    {
        $this->externalId = $externalId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getExternalType() : ?string
    {
        return $this->externalType;
    }
    /**
     * 
     *
     * @param string|null $externalType
     *
     * @return self
     */
    public function setExternalType(?string $externalType) : self
    {
        $this->externalType = $externalType;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getExternalUrl() : ?string
    {
        return $this->externalUrl;
    }
    /**
     * 
     *
     * @param string|null $externalUrl
     *
     * @return self
     */
    public function setExternalUrl(?string $externalUrl) : self
    {
        $this->externalUrl = $externalUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFiletype() : ?string
    {
        return $this->filetype;
    }
    /**
     * 
     *
     * @param string|null $filetype
     *
     * @return self
     */
    public function setFiletype(?string $filetype) : self
    {
        $this->filetype = $filetype;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getGroups() : ?array
    {
        return $this->groups;
    }
    /**
     * 
     *
     * @param string[]|null $groups
     *
     * @return self
     */
    public function setGroups(?array $groups) : self
    {
        $this->groups = $groups;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getHasRichPreview() : ?bool
    {
        return $this->hasRichPreview;
    }
    /**
     * 
     *
     * @param bool|null $hasRichPreview
     *
     * @return self
     */
    public function setHasRichPreview(?bool $hasRichPreview) : self
    {
        $this->hasRichPreview = $hasRichPreview;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getImageExifRotation() : ?int
    {
        return $this->imageExifRotation;
    }
    /**
     * 
     *
     * @param int|null $imageExifRotation
     *
     * @return self
     */
    public function setImageExifRotation(?int $imageExifRotation) : self
    {
        $this->imageExifRotation = $imageExifRotation;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getIms() : ?array
    {
        return $this->ims;
    }
    /**
     * 
     *
     * @param string[]|null $ims
     *
     * @return self
     */
    public function setIms(?array $ims) : self
    {
        $this->ims = $ims;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsExternal() : ?bool
    {
        return $this->isExternal;
    }
    /**
     * 
     *
     * @param bool|null $isExternal
     *
     * @return self
     */
    public function setIsExternal(?bool $isExternal) : self
    {
        $this->isExternal = $isExternal;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsPublic() : ?bool
    {
        return $this->isPublic;
    }
    /**
     * 
     *
     * @param bool|null $isPublic
     *
     * @return self
     */
    public function setIsPublic(?bool $isPublic) : self
    {
        $this->isPublic = $isPublic;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsStarred() : ?bool
    {
        return $this->isStarred;
    }
    /**
     * 
     *
     * @param bool|null $isStarred
     *
     * @return self
     */
    public function setIsStarred(?bool $isStarred) : self
    {
        $this->isStarred = $isStarred;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsTombstoned() : ?bool
    {
        return $this->isTombstoned;
    }
    /**
     * 
     *
     * @param bool|null $isTombstoned
     *
     * @return self
     */
    public function setIsTombstoned(?bool $isTombstoned) : self
    {
        $this->isTombstoned = $isTombstoned;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLastEditor() : ?string
    {
        return $this->lastEditor;
    }
    /**
     * 
     *
     * @param string|null $lastEditor
     *
     * @return self
     */
    public function setLastEditor(?string $lastEditor) : self
    {
        $this->lastEditor = $lastEditor;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getMimetype() : ?string
    {
        return $this->mimetype;
    }
    /**
     * 
     *
     * @param string|null $mimetype
     *
     * @return self
     */
    public function setMimetype(?string $mimetype) : self
    {
        $this->mimetype = $mimetype;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getMode() : ?string
    {
        return $this->mode;
    }
    /**
     * 
     *
     * @param string|null $mode
     *
     * @return self
     */
    public function setMode(?string $mode) : self
    {
        $this->mode = $mode;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getNonOwnerEditable() : ?bool
    {
        return $this->nonOwnerEditable;
    }
    /**
     * 
     *
     * @param bool|null $nonOwnerEditable
     *
     * @return self
     */
    public function setNonOwnerEditable(?bool $nonOwnerEditable) : self
    {
        $this->nonOwnerEditable = $nonOwnerEditable;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getNumStars() : ?int
    {
        return $this->numStars;
    }
    /**
     * 
     *
     * @param int|null $numStars
     *
     * @return self
     */
    public function setNumStars(?int $numStars) : self
    {
        $this->numStars = $numStars;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOriginalH() : ?int
    {
        return $this->originalH;
    }
    /**
     * 
     *
     * @param int|null $originalH
     *
     * @return self
     */
    public function setOriginalH(?int $originalH) : self
    {
        $this->originalH = $originalH;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOriginalW() : ?int
    {
        return $this->originalW;
    }
    /**
     * 
     *
     * @param int|null $originalW
     *
     * @return self
     */
    public function setOriginalW(?int $originalW) : self
    {
        $this->originalW = $originalW;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPermalink() : ?string
    {
        return $this->permalink;
    }
    /**
     * 
     *
     * @param string|null $permalink
     *
     * @return self
     */
    public function setPermalink(?string $permalink) : self
    {
        $this->permalink = $permalink;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPermalinkPublic() : ?string
    {
        return $this->permalinkPublic;
    }
    /**
     * 
     *
     * @param string|null $permalinkPublic
     *
     * @return self
     */
    public function setPermalinkPublic(?string $permalinkPublic) : self
    {
        $this->permalinkPublic = $permalinkPublic;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getPinnedInfo()
    {
        return $this->pinnedInfo;
    }
    /**
     * 
     *
     * @param mixed $pinnedInfo
     *
     * @return self
     */
    public function setPinnedInfo($pinnedInfo) : self
    {
        $this->pinnedInfo = $pinnedInfo;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getPinnedTo() : ?array
    {
        return $this->pinnedTo;
    }
    /**
     * 
     *
     * @param string[]|null $pinnedTo
     *
     * @return self
     */
    public function setPinnedTo(?array $pinnedTo) : self
    {
        $this->pinnedTo = $pinnedTo;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPjpeg() : ?string
    {
        return $this->pjpeg;
    }
    /**
     * 
     *
     * @param string|null $pjpeg
     *
     * @return self
     */
    public function setPjpeg(?string $pjpeg) : self
    {
        $this->pjpeg = $pjpeg;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPrettyType() : ?string
    {
        return $this->prettyType;
    }
    /**
     * 
     *
     * @param string|null $prettyType
     *
     * @return self
     */
    public function setPrettyType(?string $prettyType) : self
    {
        $this->prettyType = $prettyType;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPreview() : ?string
    {
        return $this->preview;
    }
    /**
     * 
     *
     * @param string|null $preview
     *
     * @return self
     */
    public function setPreview(?string $preview) : self
    {
        $this->preview = $preview;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getPublicUrlShared() : ?bool
    {
        return $this->publicUrlShared;
    }
    /**
     * 
     *
     * @param bool|null $publicUrlShared
     *
     * @return self
     */
    public function setPublicUrlShared(?bool $publicUrlShared) : self
    {
        $this->publicUrlShared = $publicUrlShared;
        return $this;
    }
    /**
     * 
     *
     * @return ObjsReaction[]|null
     */
    public function getReactions() : ?array
    {
        return $this->reactions;
    }
    /**
     * 
     *
     * @param ObjsReaction[]|null $reactions
     *
     * @return self
     */
    public function setReactions(?array $reactions) : self
    {
        $this->reactions = $reactions;
        return $this;
    }
    /**
     * 
     *
     * @return ObjsFileShares|null
     */
    public function getShares() : ?ObjsFileShares
    {
        return $this->shares;
    }
    /**
     * 
     *
     * @param ObjsFileShares|null $shares
     *
     * @return self
     */
    public function setShares(?ObjsFileShares $shares) : self
    {
        $this->shares = $shares;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSize() : ?int
    {
        return $this->size;
    }
    /**
     * 
     *
     * @param int|null $size
     *
     * @return self
     */
    public function setSize(?int $size) : self
    {
        $this->size = $size;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSourceTeam() : ?string
    {
        return $this->sourceTeam;
    }
    /**
     * 
     *
     * @param string|null $sourceTeam
     *
     * @return self
     */
    public function setSourceTeam(?string $sourceTeam) : self
    {
        $this->sourceTeam = $sourceTeam;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getState() : ?string
    {
        return $this->state;
    }
    /**
     * 
     *
     * @param string|null $state
     *
     * @return self
     */
    public function setState(?string $state) : self
    {
        $this->state = $state;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getThumb1024() : ?string
    {
        return $this->thumb1024;
    }
    /**
     * 
     *
     * @param string|null $thumb1024
     *
     * @return self
     */
    public function setThumb1024(?string $thumb1024) : self
    {
        $this->thumb1024 = $thumb1024;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getThumb1024H() : ?int
    {
        return $this->thumb1024H;
    }
    /**
     * 
     *
     * @param int|null $thumb1024H
     *
     * @return self
     */
    public function setThumb1024H(?int $thumb1024H) : self
    {
        $this->thumb1024H = $thumb1024H;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getThumb1024W() : ?int
    {
        return $this->thumb1024W;
    }
    /**
     * 
     *
     * @param int|null $thumb1024W
     *
     * @return self
     */
    public function setThumb1024W(?int $thumb1024W) : self
    {
        $this->thumb1024W = $thumb1024W;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getThumb160() : ?string
    {
        return $this->thumb160;
    }
    /**
     * 
     *
     * @param string|null $thumb160
     *
     * @return self
     */
    public function setThumb160(?string $thumb160) : self
    {
        $this->thumb160 = $thumb160;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getThumb360() : ?string
    {
        return $this->thumb360;
    }
    /**
     * 
     *
     * @param string|null $thumb360
     *
     * @return self
     */
    public function setThumb360(?string $thumb360) : self
    {
        $this->thumb360 = $thumb360;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getThumb360Gif() : ?string
    {
        return $this->thumb360Gif;
    }
    /**
     * 
     *
     * @param string|null $thumb360Gif
     *
     * @return self
     */
    public function setThumb360Gif(?string $thumb360Gif) : self
    {
        $this->thumb360Gif = $thumb360Gif;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getThumb360H() : ?int
    {
        return $this->thumb360H;
    }
    /**
     * 
     *
     * @param int|null $thumb360H
     *
     * @return self
     */
    public function setThumb360H(?int $thumb360H) : self
    {
        $this->thumb360H = $thumb360H;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getThumb360W() : ?int
    {
        return $this->thumb360W;
    }
    /**
     * 
     *
     * @param int|null $thumb360W
     *
     * @return self
     */
    public function setThumb360W(?int $thumb360W) : self
    {
        $this->thumb360W = $thumb360W;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getThumb480() : ?string
    {
        return $this->thumb480;
    }
    /**
     * 
     *
     * @param string|null $thumb480
     *
     * @return self
     */
    public function setThumb480(?string $thumb480) : self
    {
        $this->thumb480 = $thumb480;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getThumb480H() : ?int
    {
        return $this->thumb480H;
    }
    /**
     * 
     *
     * @param int|null $thumb480H
     *
     * @return self
     */
    public function setThumb480H(?int $thumb480H) : self
    {
        $this->thumb480H = $thumb480H;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getThumb480W() : ?int
    {
        return $this->thumb480W;
    }
    /**
     * 
     *
     * @param int|null $thumb480W
     *
     * @return self
     */
    public function setThumb480W(?int $thumb480W) : self
    {
        $this->thumb480W = $thumb480W;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getThumb64() : ?string
    {
        return $this->thumb64;
    }
    /**
     * 
     *
     * @param string|null $thumb64
     *
     * @return self
     */
    public function setThumb64(?string $thumb64) : self
    {
        $this->thumb64 = $thumb64;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getThumb720() : ?string
    {
        return $this->thumb720;
    }
    /**
     * 
     *
     * @param string|null $thumb720
     *
     * @return self
     */
    public function setThumb720(?string $thumb720) : self
    {
        $this->thumb720 = $thumb720;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getThumb720H() : ?int
    {
        return $this->thumb720H;
    }
    /**
     * 
     *
     * @param int|null $thumb720H
     *
     * @return self
     */
    public function setThumb720H(?int $thumb720H) : self
    {
        $this->thumb720H = $thumb720H;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getThumb720W() : ?int
    {
        return $this->thumb720W;
    }
    /**
     * 
     *
     * @param int|null $thumb720W
     *
     * @return self
     */
    public function setThumb720W(?int $thumb720W) : self
    {
        $this->thumb720W = $thumb720W;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getThumb80() : ?string
    {
        return $this->thumb80;
    }
    /**
     * 
     *
     * @param string|null $thumb80
     *
     * @return self
     */
    public function setThumb80(?string $thumb80) : self
    {
        $this->thumb80 = $thumb80;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getThumb800() : ?string
    {
        return $this->thumb800;
    }
    /**
     * 
     *
     * @param string|null $thumb800
     *
     * @return self
     */
    public function setThumb800(?string $thumb800) : self
    {
        $this->thumb800 = $thumb800;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getThumb800H() : ?int
    {
        return $this->thumb800H;
    }
    /**
     * 
     *
     * @param int|null $thumb800H
     *
     * @return self
     */
    public function setThumb800H(?int $thumb800H) : self
    {
        $this->thumb800H = $thumb800H;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getThumb800W() : ?int
    {
        return $this->thumb800W;
    }
    /**
     * 
     *
     * @param int|null $thumb800W
     *
     * @return self
     */
    public function setThumb800W(?int $thumb800W) : self
    {
        $this->thumb800W = $thumb800W;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getThumb960() : ?string
    {
        return $this->thumb960;
    }
    /**
     * 
     *
     * @param string|null $thumb960
     *
     * @return self
     */
    public function setThumb960(?string $thumb960) : self
    {
        $this->thumb960 = $thumb960;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getThumb960H() : ?int
    {
        return $this->thumb960H;
    }
    /**
     * 
     *
     * @param int|null $thumb960H
     *
     * @return self
     */
    public function setThumb960H(?int $thumb960H) : self
    {
        $this->thumb960H = $thumb960H;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getThumb960W() : ?int
    {
        return $this->thumb960W;
    }
    /**
     * 
     *
     * @param int|null $thumb960W
     *
     * @return self
     */
    public function setThumb960W(?int $thumb960W) : self
    {
        $this->thumb960W = $thumb960W;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getThumbTiny() : ?string
    {
        return $this->thumbTiny;
    }
    /**
     * 
     *
     * @param string|null $thumbTiny
     *
     * @return self
     */
    public function setThumbTiny(?string $thumbTiny) : self
    {
        $this->thumbTiny = $thumbTiny;
        return $this;
    }
    /**
     * 
     *
     * @return int|string|null
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }
    /**
     * 
     *
     * @param int|string|null $timestamp
     *
     * @return self
     */
    public function setTimestamp($timestamp) : self
    {
        $this->timestamp = $timestamp;
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
     * @return int|null
     */
    public function getUpdated() : ?int
    {
        return $this->updated;
    }
    /**
     * 
     *
     * @param int|null $updated
     *
     * @return self
     */
    public function setUpdated(?int $updated) : self
    {
        $this->updated = $updated;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUrlPrivate() : ?string
    {
        return $this->urlPrivate;
    }
    /**
     * 
     *
     * @param string|null $urlPrivate
     *
     * @return self
     */
    public function setUrlPrivate(?string $urlPrivate) : self
    {
        $this->urlPrivate = $urlPrivate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUrlPrivateDownload() : ?string
    {
        return $this->urlPrivateDownload;
    }
    /**
     * 
     *
     * @param string|null $urlPrivateDownload
     *
     * @return self
     */
    public function setUrlPrivateDownload(?string $urlPrivateDownload) : self
    {
        $this->urlPrivateDownload = $urlPrivateDownload;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUser() : ?string
    {
        return $this->user;
    }
    /**
     * 
     *
     * @param string|null $user
     *
     * @return self
     */
    public function setUser(?string $user) : self
    {
        $this->user = $user;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUserTeam() : ?string
    {
        return $this->userTeam;
    }
    /**
     * 
     *
     * @param string|null $userTeam
     *
     * @return self
     */
    public function setUserTeam(?string $userTeam) : self
    {
        $this->userTeam = $userTeam;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUsername() : ?string
    {
        return $this->username;
    }
    /**
     * 
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setUsername(?string $username) : self
    {
        $this->username = $username;
        return $this;
    }
}