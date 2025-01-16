<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class jobModel extends Model
{
    protected $table = 'job';
    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
}
 