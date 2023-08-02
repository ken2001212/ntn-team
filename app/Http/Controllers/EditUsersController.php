<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class EditUsersController extends Controller
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

        $user = DB::table('users')
        ->where('id', Auth::user()->id)
        ->get();
     
        return view('edituser',['user'=>$user]);
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
        //
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
       
        $member =  User::find($id);
        $member->firstName_th = $request['firstName_th'];
        $member->firstName_eng = $request['firstName_eng'];
        $member->job_position = $request['job_position'];
        $member->computerType = $request['computerType'];
        $member->password =  Hash::make($request['password']);

        if ($member->photo) {
            $image_path = public_path().'/img/profile/'.$member->photo; 
            if (file_exists($image_path)) {
                unlink($image_path);
            }
            
        }
        $dateImg = null;
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $dateText = date('Ymd_His'); // สร้างชื่อที่ไม่ซ้ำกันตามวันที่และเวลา
            $image->move(public_path().'/img/profile', $dateText . "_" . $image->getClientOriginalName());
            $dateImg = $dateText . "_" . $image->getClientOriginalName();
        }
        $member->photo = $dateImg;
        $member->save();
        return redirect('edituser')->with('message', 'เเก้ไข profile สำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}