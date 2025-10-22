<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nome',
        'telefone',
        'email',
        'senha'
    ];

    //Traz o usuário
    public function user()
    {
        return $this->BelongsTo(User::class);//Retorna este objeto que pertence a classe usuário (Cliente pertence a um usuario)
    }


}
