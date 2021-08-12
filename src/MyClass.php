<?php

namespace Philippe\Phpstan;

use Exception;

class MyClass
{
    public function throwIf(bool $condition): self
    {
        if ($condition) {
            throw new Exception();
        }

        return $this;
    }

    public function singleCalls(?string $string): void
    {
        $this->throwIf($string === null);
        $this->throwIf(strlen($string) > 10);
    }

    public function chainedCalls(?string $string): void
    {
        $this
            ->throwIf($string === null)
            ->throwIf(strlen($string) > 10);
    }
}
