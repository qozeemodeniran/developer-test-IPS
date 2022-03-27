<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class FirstCommentWritten
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
    public function handle(CommentWritten $event)
    {
        $comments = Comment::count();
        if($comments == 1){
            array_push('unlocked_achievements', 'first comment written');
            array_push('next_available_achievements', '3 comments written');

            // echo "Congratulations!!!"  . Auth::user()->name . " You just uncloked an achievement for writing your first comment!";
        }
        
    }
}
