<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    // jika nama tabel tidak sesuai dengan aturan laravel, maka perlu dituliskan nama tabelnya
    // nama tabel yg sesuai untuk model Dosen yaitu dosens
    protected $table = 'customers';

    protected $fillable = ['name', 'phone', 'email', 'address'];
}
