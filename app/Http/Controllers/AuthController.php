<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function me() {
    return ['NIS' => 3103119076,
        'Nama' => 'Aiva Amartia Kinasih',
        'Jenis Kelamin' => 'Perempuan',
        'Telepon' => '081229886505',
        'Kelas' => 'XII RPL 1'];
  }
}
