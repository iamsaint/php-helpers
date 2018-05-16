<?php

namespace php\helpers\interfaces;

interface Arrayable
{
    public function fields();
    public function extraFields();
    public function toArray(array $fields = [], array $expand = [], $recursive = true);
}