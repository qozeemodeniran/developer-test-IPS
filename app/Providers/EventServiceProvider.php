<?php

namespace App\Providers;

use App\Events\LessonWatched;
use App\Events\CommentWritten;

use App\Listeners\FirstCommentWritten;
use App\Listeners\ThreeCommentsWritten;
use App\Listeners\FiveCommentsWritten;
use App\Listeners\TenCommentWritten;
use App\Listeners\TwentyCommentWritten;

use App\Listeners\FirstLessonWatched;
use App\Listeners\FiveLessonsWatched;
use App\Listeners\TenLessonsWatched;
use App\Listeners\TwentyFiveLessonsWatched;
use App\Listeners\FiftyLessonsWatched;

use App\Listeners\Beginner;
use App\Listeners\Intermediate;
use App\Listeners\Advanced;
use App\Listeners\Master;


use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        CommentWritten::class => [
            //
            FirstCommentWritten::class,
            ThreeCommentsWritten::class,
            FiveCommentsWritten::class,
            TenCommentWritten::class,
            TwentyCommentWritten::class,
        ],
        LessonWatched::class => [
            //
            FirstLessonWatched::class,
            FiveLessonsWatched::class,
            TenLessonsWatched::class,
            TwentyFiveLessonsWatched::class,
            FiftyLessonsWatched::class,
        ],
        Badges::class => [
            //
            Beginner::class,
            Intermediate::class,
            Advanced::class,
            Master::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
