<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class File extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    /**
     * The data type of the primary key.
     *
     * @var string
     */
    protected $keyType = 'int';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'versao',
        'codigo',
        'id_macro',
        'id_setor',
        'id_empresa',
        'file_path',
    ];
    
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
    
    public function company(){
        return $this->belongsTo(Company::class, 'id_empresa');
    }

    public function macro(){
        return $this->belongsTo(Macro::class, 'id_macro');
    }

    public function sector(){
        return $this->belongsTo(Sector::class, 'id_setor');
    }
}
