<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Generator as Faker;

class KaibunshoController extends Controller
{
  function index(Faker $faker)
  {
    $kaibunshos = [];
    $names = [];

    for ($i=0; $i<100; $i++) {
      array_push($kaibunshos, $faker->realText(rand(10, 200)));
      array_push($names, $faker->name);
    }

    return view('kaibunsho', ['kaibunshos' => $kaibunshos, 'names' => $names]);
  }
}
