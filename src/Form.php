<?php
declare(strict_types=1);

namespace LotGD\Modules\Forms;

use LotGD\Core\Attachment;
use LotGD\Core\Action;

class Form extends Attachment
{
    protected $elements;
    protected $action;
    protected $submit;

    public function __construct(array $elements, $submit, Action $action)
    {
        $this->elements = $elements;
        $this->submit = $submit;
        $this->action = $action;
    }

    public function getElements(): array
    {
      return $this->elements;
    }

    public function getSubmitText()
    {
      return $this->submit;
    }

    public function getAction(): Action
    {
      return $this->action;
    }
}
