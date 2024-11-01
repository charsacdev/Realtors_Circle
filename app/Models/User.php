<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    //Relationship for the user having many testimonials
    public function testimonials(): HasMany
    {
        return $this->hasMany(Testimonial::class);
    }

    // Accessor to get the average rating of the user
    public function getAverageRatingAttribute()
    {
        return $this->testimonials()->avg('client_rating');
    }

    //Relationship for the user having many schedules
    public function schedules(): HasMany
    {
        return $this->hasMany(Schedule::class);
    }

    //Relationship for the user having many customers
    public function customers(): HasMany
    {
        return $this->hasMany(Customer::class);
    }

    //Relationship for the user having many properties
    public function properties(): HasMany
    {
        return $this->hasMany(Property::class);
    }

    //Relationship for the user having many available properties
    public function availableProperties(): HasMany
    {
        return $this->hasMany(Property::class)->where('status', 1);
    }

    //Relationship for the user having many notifications
    public function notifications()
    {
        return $this->hasMany(Notification::class)->orderBy('id', 'DESC');
    }


     // Relationship for the agency having many realtors
     public function realtors()
     {
         return $this->belongsToMany(User::class, 'agency_realtors', 'agency_id', 'realtor_id')
                    ->withTimestamps();
     }
 
     // Relationship for the realtor belonging to one agency
     public function agency()
     {
         return $this->belongsToMany(User::class, 'agency_realtors', 'realtor_id', 'agency_id')
                    ->withTimestamps();
     }



     //Relationship for the agency having many realtors application
     public function realtorApplications()
     {
        return $this->belongsToMany(User::class, 'realtor_applications', 'agency_id', 'realtor_id')
                    ->withPivot('is_seen')
                    ->withTimestamps();
     }


     //Relationship for the agency having many faqs
     public function faqs()
     {
        return $this->hasMany(Faq::class);
     }

     //Relationship for the agency color palette
     public function colorPalettes()
     {
        return $this->hasMany(ColorPalette::class);
     }
     

     //Relationship for agency website settings 
     public function settings()
     {
        return $this->hasOne(WebsiteSetting::class);
     }

     //Relationship for agency contact us messages
     public function messages()
     {
        return $this->hasMany(ContactMessage::class);
     }


     //Relationship for agency teams
     public function teams()
     {
        return $this->hasMany(Team::class);
     }

}
