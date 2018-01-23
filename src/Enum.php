<?php
namespace unapi\helper\types;

abstract class Enum
{
    final public function __construct($value)
    {
        $c = new \ReflectionClass($this);
        if (!array_key_exists($value, $c->getConstants())) {
            throw new \InvalidArgumentException($value);
        }
        $this->value = $c->getConstant($value);
    }

    final public function __toString()
    {
        return $this->value;
    }
}