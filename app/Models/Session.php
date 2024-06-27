<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;

    protected $fillable = ['case_id', 'session_date', 'notes'];

    public function case()
    {
        return $this->belongsTo(CaseModel::class);
    }
}
