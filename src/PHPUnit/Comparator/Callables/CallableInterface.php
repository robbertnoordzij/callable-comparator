<?php

namespace BerryGoudswaard\PHPUnit\Comparator\Callables;

interface CallableInterface
{
    public function __invoke($actual);
    public function isValid($actual);
    public function __toString();
}
