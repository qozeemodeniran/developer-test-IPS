<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class FiveLessonsWatched
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(LessonWatched $event)
    {
        $lessons = DB::table('lesson_users')->withCount('lesson_id', '=', 5)->having('watched', '=', 1);
        array_push('unlocked_achievements', '5 lessons watched');
        array_push('next_available_achievements', '10 lessons watched');

        // echo "Congratulations!!!"  . Auth::user()->name . " You just uncloked an achievement for wathing your fifth lesson!";
    }
}
