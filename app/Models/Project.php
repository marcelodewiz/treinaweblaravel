<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['nome','orcamento','data_inicio','data_final'];

    /**
     * Define a relaçãao com o projeto
     *
     * @return void
     */
    public function client(){
        return $this->belongsTo(Client::class, 'client_id','id');
    }

    public function employees()
    {
        return $this->belongsToMany(Employee::class);
    }
}
