<?php

namespace LandValidator\Exception;

use InvalidArgumentException;
use Throwable;

class NotExpectedDataFormatException extends InvalidArgumentException
{
    /** @var array|string */
    public $data;

    public array $info;

    public string $rules;

    public function __construct($data, array $info, string $rules)
    {
        $this->data = $data;
        $this->info = $info;
        $this->rules = $rules;
        parent::__construct();
    }
}