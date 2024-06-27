<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaseModel extends Model
{
    use HasFactory;

    protected $fillable = ['case_number', 'client_id', 'status'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function sessions()
    {
        return $this->hasMany(Session::class);
    }
}
