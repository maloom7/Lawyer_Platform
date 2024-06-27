<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = ['client_id', 'amount', 'due_date', 'paid'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}