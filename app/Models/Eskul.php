<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eskul extends Model
{
    use HasFactory;

    public $fillable = ['eskul', 'deskripsi', 'foto'];
    public $visibe = ['eskul', 'deskripsi', 'foto'];

    public function deleteImage()
    {
        if ($this->foto && file_exists(public_path('images/eskul/' . $this->foto))) {
            return unlink(public_path('images/eskul/' . $this->foto));
        }
    }

}
