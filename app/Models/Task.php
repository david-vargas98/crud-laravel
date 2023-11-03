<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    //Se le indica al modelo los atributos a llenar al hacer la asignación masiva, esto evita que se modifiquen atributos
    protected $fillable = ['title', 'description', 'due_date', 'status'];
}
