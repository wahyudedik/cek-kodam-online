<?php

namespace App\Http\Controllers;

use App\Models\Kodam;
use App\Models\KodamData;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class KodamController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $kodam = new Kodam;

        $kodam->name = $request->name;
        $kodam->slug = $request->name;
        $kodam->description = $request->description;
        $kodam->save();

        return redirect()->back()->with('success', 'Kodam has been added successfully');
    }

    public function destroy(Kodam $kodam)
    {
        $kodam->delete();

        return redirect()->back()->with('success', 'Kodam has been deleted successfully');
    }

    public function kodamcekstore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'date' => 'required|date',
        ]);

        $kodam = Kodam::inRandomOrder()->first();

        $kodamData = new KodamData;
        $kodamData->kodam_id = $kodam->id;
        $kodamData->name = $request->name;
        $kodamData->birth_date = Carbon::parse($request->date)->format('Y-m-d');
        $kodamData->save();

        
        return redirect()->route('hasil.kodam', $kodamData->name)->with('success', 'Hasil Pengecekan Kodam Anda Sudah Keluar');
    }

    public function kodamHasil($name)
    {
        $kodamDatas = KodamData::where('name', $name)->first();

        $kodam = Kodam::where('id', $kodamDatas->kodam_id)->first();

        return view('hasil', compact('kodamDatas' , 'kodam'));
    }
}
