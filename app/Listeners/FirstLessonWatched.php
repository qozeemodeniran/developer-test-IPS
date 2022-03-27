<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class FirstLessonWatched
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
        $lessons = DB::table('lesson_users')->where('lesson_id', '=', 1)->where('watched', '=', 1);
        array_push('unlocked_achievements', 'First lessons watched');
        array_push('next_available_achievements', '5 lessons watched');
        
        // echo "Congratulations!!!"  . Auth::user()->name . " You just uncloked an achievement for wathing your first lesson!";
    }
}
