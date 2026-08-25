<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerVolunteerSubmission extends Model
{
    use HasFactory;

    protected $table = 'partner_volunteer_submissions';

    protected $fillable = [
        'type',
        'full_name',
        'email',
        'phone',
        'location',
        'organization_name',
        'website',
        'partnership_type',
        'skills_or_interests',
        'availability',
        'previous_experience',
        'message',
        'status',
    ];

    // Status options
    public const STATUS_NEW = 'new';
    public const STATUS_CONTACTED = 'contacted';
    public const STATUS_IN_PROGRESS = 'in_progress';
    public const STATUS_COMPLETED = 'completed';
    public const STATUS_REJECTED = 'rejected';

    // Type options
    public const TYPE_PARTNER = 'partner';
    public const TYPE_VOLUNTEER = 'volunteer';
}
