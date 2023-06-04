<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // jika nama tabel tidak sesuai dengan aturan laravel, maka perlu dituliskan nama tabelnya
    // nama tabel yg sesuai untuk model Dosen yaitu dosens
    protected $table = 'products';

    protected $fillable = ['name', 'description', 'price', 'category_id'];
}
