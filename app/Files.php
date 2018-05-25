<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Files extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'files';
    
    protected $fillable = [
        'upload_by', 'file_name', 'original_name', 'remarks', 'category_id', 'sub_category_id'
    ];
    
    
    
}
