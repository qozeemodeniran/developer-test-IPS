<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class TenCommentWritten
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
        if($comments == 10){
            array_push('unlocked_achievements', '10 comments written');
            array_push('next_available_achievements', '20 comments written');
            
            // echo "Congratulations!!!"  . Auth::user()->name . " You just uncloked an achievement for writing your tenth comment!";
        }
    }
}
