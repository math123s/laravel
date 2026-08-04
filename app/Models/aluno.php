<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aluno extends Model
{
    //ORM 
    protected $table = 'Aluno';
    //mapeamento de objeto relacional, vai buscar o nome e o email 
    protected $fillable = ['nome', 'email'];
    use HasFactory;
}
