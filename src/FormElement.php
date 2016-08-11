<?php
declare(strict_types=1);

namespace LotGD\Modules\Forms;

class FormElement
{
    protected $key;
    protected $type;
    protected $label;
    protected $value;
    protected $options;

    public function __construct(
      string $key,
      FormElementType $type,
      string $label,
      mixed $value,
      FormElementOptions $options = null)
    {
        $this->key = $key;
        $this->type = $type;
        $this->label = $label;
        $this->value = $value;
        $this->options = $options ?? new FormElementOptions(FormElementOptions::NONE);
    }

    public function getKey(): string
    {
      return $this->key;
    }

    public function getType(): FormElementType
    {
      return $this->type;
    }

    public function getLabel(): string
    {
      return $this->label;
    }

    public function getValue()
    {
      return $this->value;
    }

    public function getOptions(): FormElementOptions
    {
      return $this->options;
    }
}
