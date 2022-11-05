<?php

namespace Taecontrol\LarastatsWingman;

use Throwable;
use Illuminate\Support\Facades\Http;
use Taecontrol\LarastatsWingman\ValueObjects\ExceptionData;

class LarastatsWingman
{
    public function captureException(Throwable $exception)
    {
        $exceptionLoggerUrl = config('larastats-wingman.larastats.domain') . config('larastats-wingman.larastats.exception_logger.endpoint');
        $exceptionData = ExceptionData::from($exception);

        $data = array_merge(
            $exceptionData->toArray(),
            ['api_token' => config('larastats-wingman.site.api_token')],
        );

        Http::post($exceptionLoggerUrl, $data);
    }
}
