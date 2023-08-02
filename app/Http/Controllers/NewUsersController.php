<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class NewUsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('newuser');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            
            'firstName_eng' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        $dateImg = null;
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $dateText = date('Ymd_His'); // สร้างชื่อที่ไม่ซ้ำกันตามวันที่และเวลา
            $image->move(public_path().'/img/profile', $dateText . "_" . $image->getClientOriginalName());
            $dateImg = $dateText . "_" . $image->getClientOriginalName();
        }


        User::create([
            'firstName_th' => $request['firstName_th'],
            'firstName_eng' => $request['firstName_eng'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'idCardNumber' => $request['idCardNumber'],
            'job_position' => $request['job_position'],
            'computerType' => $request['computerType'],
            'ownedFor' => $request['ownedFor'],
            'problemMessage' => $request['problemMessage'],
            'problemMessage1' => $request['problemMessage1'],
            'photo' => $dateImg,
        ]);
    
        // Redirect to 'admin' route with a success message
        return redirect('newuser')->with('message', 'สร้าง Admin สำเร็จ');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}