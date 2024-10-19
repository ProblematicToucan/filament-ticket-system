<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ticket extends Model
{
    const STATUS = [
        'open' => 'Open',
        'closed' => 'Closed',
        'archived' => 'Archived',
    ];

    const PRIORITY = [
        'low' => 'Low',
        'medium' => 'Medium',
        'high' => 'High',
    ];

    protected $fillable = [
        'title',
        'description',
        'status',
        'priority',
        'is_resolved',
        'comment',
        'assigned_to',
        'assigned_by',
    ];

    public function assignedTo(): BelongsTo
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }

    public function assignedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'assigned_by');
    }
}
