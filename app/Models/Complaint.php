<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'subject',
        'category',
        'description',
        'status',
        'admin_remarks'
    ];

    // Status constants
    const STATUS_PENDING = 'Pending';
    const STATUS_IN_PROGRESS = 'In Progress';
    const STATUS_RESOLVED = 'Resolved';
    const STATUS_REJECTED = 'Rejected';

    public static function statuses()
    {
        return [
            self::STATUS_PENDING,
            self::STATUS_IN_PROGRESS,
            self::STATUS_RESOLVED,
            self::STATUS_REJECTED,
        ];
    }

    /**
     * Get the user that owns the complaint.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function documents()
    {
        return $this->hasMany(ComplaintDocument::class);
    }

    public function statusUpdates()
    {
        return $this->hasMany(ComplaintStatusUpdate::class);
    }
    /**
     * Get the responses for the complaint.
     */
    public function responses()
    {
        return $this->hasMany(Response::class);
    }
}
