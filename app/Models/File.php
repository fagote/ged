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
        'id_empresa1',
        'id_empresa2',
        'id_empresa3',
        'id_empresa4',
        'id_setor1',
        'id_setor2',
        'id_setor3',
        'id_setor4',
        'id_setor5',
        'id_setor6',
        'id_setor7',
        'id_setor8',
        'id_setor9',
        'id_setor10',
        'id_setor11',
        'id_setor12',
        'id_setor13',
        'id_setor14',
        'id_setor15',
        'id_setor16',
        'id_setor17',
        'id_setor18',
        'id_setor19',
        'id_setor20',
        'id_setor21',
        'id_setor22',
        'id_setor23',
        'id_setor24',
        'id_setor25',
        'id_setor26',
        'id_setor27',
        'id_setor28',
        'id_setor29',
        'id_setor30',
        'id_setor31',
        'id_setor32',
        'id_setor33',
        'id_setor34',
        'id_setor35',
        'id_setor36',
        'id_setor37',
        'id_setor38',
        'file_path',
        'motivoReprovacao',
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
