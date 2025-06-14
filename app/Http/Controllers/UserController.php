<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Services\ComplaintStatsService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user()
    {
        return view('layouts.user');
    }

    public function userdashboard()
    {
        $user = auth()->user();
        $complaints = Complaint::where('user_id', $user->id)->latest()->get();

        // Get statistics using the ComplaintStatsService
        $stats = app(ComplaintStatsService::class)->getUserStats($user);

        return view('cms-pages.dashboard.user.user', [
            'complaints' => $complaints,
            'stats' => $stats,
            'isAdmin' => false // Since it's a user dashboard
        ]);
    }
}
