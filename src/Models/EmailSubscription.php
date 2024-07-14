<?php
namespace HossainVendor\EmailSubscription\Models;
use Illuminate\Database\Eloquent\Model;

class EmailSubscription extends Model
{
    protected $fillable = [
        'email',
        'status'
    ];
}
