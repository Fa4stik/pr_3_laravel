<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\Staff;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function Index() {
        $header = 'Резюме и вакансии';
        $persons = Person::all();

        return view('page', compact('header', 'persons'));
    }

    public function Show($id) {
        $person = Person::find($id);

        if (!$person) {
            return view('resume-not-found', ['id' => $id]);
        }

        $recordStaff = Staff::find($person->Staff);

        $data = [
            'id' => $id,
            'Фамилия' => $person->FIO,
            'Профессия' => $recordStaff->staff,
            'Телефон' => $person->Phone,
            'Стаж' => $person->Stage,
            'Аватар' => $person->Image,
        ];

        return view('resume', compact('data'));
    }

    public function Edit($id) {
        $person = Person::find($id);
        $staffs = Staff::all();

        if (!$person) {
            return view('resume-not-found', ['id' => $id]);
        }

        $recordStaff = Staff::find($person->Staff);

        $data = [
            'id' => $person->id,
            'FIO' => $person->FIO,
            'Staff' => $recordStaff->staff,
            'Phone' => $person->Phone,
            'Stage' => $person->Stage,
            'Image' => $person->Image,
        ];

        return view('edit', compact('data', 'staffs'));
    }

    public function Update(Request $request, $id) {
        $person = Person::findOrFail($id);

        $validatedData = $request->validate([
            'FIO' => 'required|string',
            'Phone' => 'required|numeric',
            'Image' => 'image|nullable',
            'Staff' => 'required|numeric',
            'Stage' => 'required|numeric',
        ]);

        $person->FIO = $validatedData['FIO'];
        $person->Phone = $validatedData['Phone'];
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

    public function Delete($id) {
        $person = Person::findOrFail($id);
        $person->delete();
        return redirect('/');
    }
}
