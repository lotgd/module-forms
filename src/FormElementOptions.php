<?php
declare(strict_types=1);

namespace LotGD\Modules\Forms;

class FormElementOptions
{
    const NONE     = 0 << 0;
    const DISABLED = 1 << 0;

    protected $value;

    public function __construct(int $value)
    {
        $this->value = $value;
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
