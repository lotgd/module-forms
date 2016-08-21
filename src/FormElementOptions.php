<?php
declare(strict_types=1);

namespace LotGD\Modules\Forms;

class FormElementOptions
{
    const None     = 0 << 0;
    const Disabled = 1 << 0;

    protected $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public static function None(): FormElementOptions
    {
        return new self(self::None);
    }

    public static function Disabled(): FormElementOptions
    {
        return new self(self::Disabled);
    }

    public function get(int $v): bool
    {
        return $this->value & $v;
    }

    public function set(int $v): bool
    {
        return $this->value | $v;
    }
}
