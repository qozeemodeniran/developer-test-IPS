<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AchievementsController extends Controller
{
    public function index(User $user)
    {
        return response()->json([
            $unlocked_achievements = 'unlocked_achievements' => [],
            $next_available_achievements = 'next_available_achievements' => [],
            $current_badge = 'current_badge' => '',
            $next_badge = 'next_badge' => '',
            $remaing_to_unlock_next_badge = 'remaing_to_unlock_next_badge' => 0
        ]);
    }

    public function store(Request $request)
    {
        CommentWritten::dispatch($comment);
        LessonWatched::dispatch($lesson);
    }
}
