<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;

class BookingController extends Controller
{
  public function create(Request $request){
   	        $b=new Booking();
			$b->arival=request('arival');
			$b->departure=request('departure');
			$b->user_id=request('user_id');
			$b->user_id=request('room_id');
			$b->save();
			return response()->json($r);
		}  


    public function index()
    {
      
    }

    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        $b=Booking::finOrFail($id);
        return response()->json($b);
    }

    
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
     
    }

   
    public function destroy($id)
    {
        //
    }

}
