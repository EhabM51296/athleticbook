<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use App\Models\subscribe;

class subscribeController extends Controller
{
function subscribe(Request $request)
{    
    // when using ajax
    $validator = Validator::make($request->all(), [
        'email' => 'required|email',
    ]);
    if ($validator->fails())
    {
        return response()->json(['divError' => 'header-subscribeDiv',
            'errors'=>$validator->errors()->all()]);
    }
    // without ajax
    // $request->validate([
    //     'email' => 'required|email',
    // ]);
    $subs = new subscribe;
    $subs = $subs::firstOrCreate(
           ['useremail' => $request->get('email')]
       );
        return response()->json(['mdlSuccess'=> 'mdlSubscribe']);
}
}
