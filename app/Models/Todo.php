<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $table = 'todos';

    protected $fillable = ['text', 'done'];

    /**
     * Todo's user
     */
    public function user(){
        return $this -> belongsTo(User::class);
    }
}
