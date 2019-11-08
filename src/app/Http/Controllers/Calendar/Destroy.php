<?php

namespace LaravelEnso\Calendar\app\Http\Controllers\Calendar;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Routing\Controller;
use LaravelEnso\Calendar\app\Models\Calendar;

class Destroy extends Controller
{
    use AuthorizesRequests;

    public function __invoke(Calendar $calendar)
    {
        $this->authorize('handle', $calendar);

        $calendar->delete();

        return ['message' => __('The calendar was successfully deleted')];
    }
}
