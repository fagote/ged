<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $table = 'user_files';

    protected $fillable = ['file_path', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
