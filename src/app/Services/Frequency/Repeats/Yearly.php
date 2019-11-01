<?php

namespace LaravelEnso\Calendar\app\Services\Frequency\Repeats;

use Carbon\Carbon;
use Illuminate\Support\Collection;

class Yearly extends Repeat
{
    public function dates(): Collection
    {
        return $this->interval()
            ->filter(function (Carbon $date) {
                return $date->month === $this->event->start_date->month
                    && $date->day === $this->event->start_date->day;
            });
    }
}