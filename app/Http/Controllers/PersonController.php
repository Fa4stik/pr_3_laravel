<?php
namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use App\Models\Person;

class PersonController {
    public function Show() {
        $header = 'Резюме и вакансии';
        $staffs = Staff::all();
        return view('add-content', compact('header', 'staffs'));
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'FIO' => 'required|string',
            'Phone' => 'required|numeric',
            'Image' => 'required|image',
            'Staff' => 'required|numeric',
            'Stage' => 'required|numeric',
        ]);

        $person = new Person();
        $person->FIO = $validatedData['FIO'];
        $person->Phone = $validatedData['Phone'];
        $person->Image = $validatedData['Image'];
        $person->Staff = $validatedData['Staff'];
        $person->Stage = $validatedData['Stage'];

        if ($request->hasFile('Image')) {
            $filename = $request->file('Image')->getClientOriginalName();
            $request->file('Image')->move(public_path('img'), $filename);
            $person->Image = $filename;
        }

        $person->save();

        return redirect()->to('/show/' . $person->id);
    }
}
