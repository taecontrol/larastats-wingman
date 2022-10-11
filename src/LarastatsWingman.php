<?php

namespace Taecontrol\LarastatsWingman;

use Illuminate\Support\Facades\Http;
use Taecontrol\LarastatsWingman\ValueObjects\ExceptionData;
use Throwable;

class LarastatsWingman
{
    public function captureException(Throwable $exception)
    {
        $exceptionLoggerUrl = config('larastats-wingman.larastats.domain') . config('larastats-wingman.larastats.exception_logger.endpoint');
        $exceptionData = ExceptionData::from($exception);

        Http::post($exceptionLoggerUrl, (array)$exceptionData);
    }
}
