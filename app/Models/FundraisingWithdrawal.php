<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FundraisingWithdrawal extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'fundraising_id',
        'fundraiser_id',
        'has_received',
        'has_sent',
        'amount_requested',
        'proof',
        'amount_received',
        'bank_account_name',
        'bank_name',
        'bank_account_number',
    ];

    public function fundraiser(){
        return $this->belongsTo(Fundraiser::class);
    }

    public function fundraising(){
        return $this->belongsTo(Fundraising::class);
    }
}
