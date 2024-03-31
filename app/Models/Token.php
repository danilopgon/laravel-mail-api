<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;

class Token extends Model
{
    use HasFactory;

    protected $fillable = [
        'token',
        'expires_at',
    ];

    protected $dates = ['expires_at'];

    // Generate a new token
    public static function generateToken()
    {
        return Str::random(60); // Generate a random string for token
    }

    // Define validation rules
    public static function rules()
    {
        return [
            'token' => 'required|unique:tokens',
            'expires_at' => 'required|date',
        ];
    }

    // Check if the token is valid
    public function isValid()
    {

        if (!$this->expires_at instanceof Carbon) {
            $this->expires_at = Carbon::parse($this->expires_at);
        }
        if ($this->expires_at === null || $this->expires_at->isFuture()) {
            return true;
        } else {
            $this->delete();
            return false;
        }
    }
}
