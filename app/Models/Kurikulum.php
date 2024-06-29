<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kurikulum extends Model
{
    use HasFactory;

    public $fillable = ['nama_guru', 'jabatan', 'foto'];
    public $visibe = ['nama_guru', 'jabatan', 'foto'];

    public function deleteImage()
    {
        if ($this->foto && file_exists(public_path('images/kurikulum/' . $this->foto))) {
            return unlink(public_path('images/kurikulum/' . $this->foto));
        }
    }
}
