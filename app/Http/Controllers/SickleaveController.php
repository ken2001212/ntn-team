<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sickleave;

class SickleaveController extends Controller
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
        return view('sickleave');
    }


    public function api()
    {
     
      
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
          
        $email =$request['email'];
        $time =$request['time'];
        $select =$request['select'];
        $Leave =$request['Leave'];
  
         $sToken = "uhSd95uicriMfwdfVgsVvityxdjnqqHWKr0J6WAMGgJ";
       
  
        $sMessage = "เเจ้งเตือนการลางาน\n";
        $sMessage .= "ชื่อ-นามสกุล: ". $email ." \n";
        $sMessage .= "ขอลางานวันที่: ".$time. "\n";
        $sMessage .= "เป็นการลา: ".$select. "\n";
        $sMessage .= "ด้วยเหตุผลคือ: ".$Leave. "\n";
        $sMessage .= "ได้ทำการลางานผ่าเว็บไซต์พนักงาน  \n";
  
        
        $chOne = curl_init(); 
        curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify"); 
        curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0); 
        curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0); 
        curl_setopt( $chOne, CURLOPT_POST, 1); 
        curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=".$sMessage); 
        $headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$sToken.'', );
        
        curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers); 
        curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1); 
        
        $result = curl_exec( $chOne ); 
  
        // if ($result) {
        //   $_SESSION ['success'] = "ได้ทำการลางานในระบบสำเร็จ !";
        //   header("location: indexphp);
  
        // }else{
      
        // }
      
        // Result error 
        if(curl_error($chOne)) 
        { 
          echo 'error:' . curl_error($chOne); 
        } 
        else { 
          $result_ = json_decode($result, true); 
          echo "คุณ : ". $email . "  "; echo "ได้ทำการลางานในระบบสำเร็จ : ". $result_['message'];
  
        } 
        
        curl_close( $chOne );   


        Sickleave::create([
            'email' => $request['email'],
            'time' => $request['time'],
            'select' => $request['select'],
            'leave' => $request['Leave'],
        ]);

        return redirect('sickleave')->with('message', 'ส่ง คำขอลา สำเร็จ');
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