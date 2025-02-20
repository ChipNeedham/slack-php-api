<?php

namespace JoliCode\Slack\Api\Model;

class ObjsTeamProfileField
{
    /**
     * 
     *
     * @var string|null
     */
    protected $fieldName;
    /**
     * 
     *
     * @var string|null
     */
    protected $hint;
    /**
     * 
     *
     * @var string|null
     */
    protected $id;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isHidden;
    /**
     * 
     *
     * @var string|null
     */
    protected $label;
    /**
     * 
     *
     * @var ObjsTeamProfileFieldOption|null
     */
    protected $options;
    /**
     * 
     *
     * @var float|null
     */
    protected $ordering;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $possibleValues;
    /**
     * 
     *
     * @var string|null
     */
    protected $type;
    /**
     * 
     *
     * @return string|null
     */
    public function getFieldName() : ?string
    {
        return $this->fieldName;
    }
    /**
     * 
     *
     * @param string|null $fieldName
     *
     * @return self
     */
    public function setFieldName(?string $fieldName) : self
    {
        $this->fieldName = $fieldName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getHint() : ?string
    {
        return $this->hint;
    }
    /**
     * 
     *
     * @param string|null $hint
     *
     * @return self
     */
    public function setHint(?string $hint) : self
    {
        $this->hint = $hint;
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
     * @return bool|null
     */
    public function getIsHidden() : ?bool
    {
        return $this->isHidden;
    }
    /**
     * 
     *
     * @param bool|null $isHidden
     *
     * @return self
     */
    public function setIsHidden(?bool $isHidden) : self
    {
        $this->isHidden = $isHidden;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLabel() : ?string
    {
        return $this->label;
    }
    /**
     * 
     *
     * @param string|null $label
     *
     * @return self
     */
    public function setLabel(?string $label) : self
    {
        $this->label = $label;
        return $this;
    }
    /**
     * 
     *
     * @return ObjsTeamProfileFieldOption|null
     */
    public function getOptions() : ?ObjsTeamProfileFieldOption
    {
        return $this->options;
    }
    /**
     * 
     *
     * @param ObjsTeamProfileFieldOption|null $options
     *
     * @return self
     */
    public function setOptions(?ObjsTeamProfileFieldOption $options) : self
    {
        $this->options = $options;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getOrdering() : ?float
    {
        return $this->ordering;
    }
    /**
     * 
     *
     * @param float|null $ordering
     *
     * @return self
     */
    public function setOrdering(?float $ordering) : self
    {
        $this->ordering = $ordering;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getPossibleValues() : ?array
    {
        return $this->possibleValues;
    }
    /**
     * 
     *
     * @param string[]|null $possibleValues
     *
     * @return self
     */
    public function setPossibleValues(?array $possibleValues) : self
    {
        $this->possibleValues = $possibleValues;
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