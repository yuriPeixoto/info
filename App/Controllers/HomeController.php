<?php

namespace App\Controllers;

use DateTime;
use function view;

class HomeController
{
    public function index()
    {
        $data1 = new DateTime('2024-10-16 08:00:00');
        $data2 = new DateTime('2024-10-16 12:45:00');

        $intervalo = $data1->diff($data2);

        $data_base = new DateTime('00:00');
        $data_base->add($intervalo);

        $result = $data_base->format('H:i');

        return view('home', [
            'message' => 'This is the painkiller!',
            'result'  => $result
        ]);
    }
}
