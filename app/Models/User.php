<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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
        'id_permission',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function isAdm(): bool {
        return in_array($this->email, config('custom.admins'));
    }

    public function files(){
        return $this->hasMany(File::class, 'user_id');
    }

    public function company(){
        return $this->belongsTo(Company::class, 'id_empresa');
    }

    public function sector(){
        return $this->belongsTo(Sector::class, 'id_setor');
    }

    public function permission(){
        return $this->belongsTo(Permission::class, 'id_permission');
    }
}
