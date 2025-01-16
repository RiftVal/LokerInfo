<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'status';
    protected $guarded = ['id'];

    public function jobApplicants()
    {
        return $this->hasMany(JobApplicant::class);
    }
}
