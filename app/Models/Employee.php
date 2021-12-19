<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    /**
     * Permitido
     *
     * @var array
     */
    protected $fillable = ['nome', 'cpf', 'data_contratacao'];

    /**
     * Nao permitido
     */
    //protected $guarded = ['created_at', 'updated_at','id'];

    /**
     * Permite tudo
     *
     * @var array
     */
    protected $guarded =[];


    /**
     * Define o endereço
     *
     * @return void
     */
    public function address(){
        return $this->hasOne(Address::class);
    }
}
