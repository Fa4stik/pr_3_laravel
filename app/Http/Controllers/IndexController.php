<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function Index() {
        $header = 'Резюме и вакансии';
        return view('page', compact('header'));
    }

    public function Show($id) {
        $data = [
            'Фамилия' => 'Иванов',
            'Профессия' => 'Программист',
            'Телефон' => '55-55-55-6',
            'Стаж' => '4 года',
            'Аватар' => 'ava1.jpg',
        ];
        return view('resume', compact('data'));
    }
}
