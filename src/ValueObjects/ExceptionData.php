<?php

namespace Taecontrol\LarastatsWingman\ValueObjects;

use Illuminate\Support\Carbon;
use Illuminate\Contracts\Support\Arrayable;

class ExceptionData implements Arrayable
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

    public function toArray(): array
    {
        return [
            'message' => $this->message,
            'type' => $this->type,
            'trace' => $this->trace,
            'line' => $this->line,
            'thrown_at' => $this->thrown_at->utc(),
        ];
    }
}
