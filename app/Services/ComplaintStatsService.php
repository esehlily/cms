<?php

namespace App\Services;

use App\Models\Complaint;
use App\Models\User;

class ComplaintStatsService
{
    public function getUserStats(User $user)
    {
        return [
            'total' => $user->complaints()->count(),
            'active' => $user->complaints()->whereIn('status', [Complaint::STATUS_PENDING, Complaint::STATUS_IN_PROGRESS])->count(),
            'resolved' => $user->complaints()->where('status', Complaint::STATUS_RESOLVED)->count()
        ];
    }

    public function getAdminStats()
    {
        return [
            'total' => Complaint::count(),
            'active' => Complaint::whereIn('status', [Complaint::STATUS_PENDING, Complaint::STATUS_IN_PROGRESS])->count(),
            'resolved' => Complaint::where('status', Complaint::STATUS_RESOLVED)->count(),
            'rejected' => Complaint::where('status', Complaint::STATUS_REJECTED)->count()
        ];
    }
}
