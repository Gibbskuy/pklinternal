<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    use HasFactory;

    public $fillable = ['judul', 'deskripsi', 'foto'];
    public $visibe = ['judul', 'deskripsi', 'foto'];

    public function deleteImage()
    {
        if ($this->foto && file_exists(public_path('images/informasi/' . $this->foto))) {
            return unlink(public_path('images/informasi/' . $this->foto));
        }
    }
}
