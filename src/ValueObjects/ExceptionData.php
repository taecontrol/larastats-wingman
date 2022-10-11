<?php

namespace Taecontrol\LarastatsWingman\ValueObjects;

use Throwable;
use Illuminate\Support\Carbon;

class ExceptionData
{
    public function __construct(
        public readonly string $message,
        public readonly string $type,
        public readonly array $trace,
        public readonly int $line,
        public readonly Carbon $thrown_at,
    ) {
    }

    public static function from(Throwable $e): ExceptionData
    {
        return new self(
            message: $e->getMessage(),
            type: $e->getFile(),
            trace: $e->getTrace(),
            line: $e->getLine(),
            thrown_at: now(),
        );
    }
}
