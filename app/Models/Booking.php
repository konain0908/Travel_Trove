<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\offer;
use App\Models\User;


class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'offer_id', 'phoneno', 'num_of_person'
    ];
    public function offer()
{
    return $this->belongsTo(offer::class);
}





}
