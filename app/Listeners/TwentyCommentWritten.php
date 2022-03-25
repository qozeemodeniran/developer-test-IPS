<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class TwentyCommentWritten
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
        if($comments == 20){
            echo "Congratulations!!!"  . Auth::user()->name . " You just uncloked an achievement for writing your twentieth comment!";
        }
    }
}
