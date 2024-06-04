<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserTwo;
use App\Models\Message;
use App\Models\Otp;
use Illuminate\Support\Facades\Mail;

class UserTwoController extends Controller
{
    public function index(){
        return UserTwo::all();
    }

    public function login(Request $request)
    {
        $user = UserTwo::where('email', $request->email)->first();
        if ($user) {
            if ($user->password == $request->password) {
                return response()->json([
                    'message' => 'Login Success',
                    'data' => $user
                ]);
            } else {
                return response()->json([
                    'message' => 'Password is incorrect'
                ]);
            }
        } else {
            return response()->json([
                'message' => 'Email not found'
            ]);
        }
    }

    public function register(Request $request)
    {
        $user = UserTwo::where('email', $request->email)->first();
        if ($user) {
            return response()->json([
                'message' => 'Email already registered',
                'data' => $user
            ],400);
        }

        $otp = Otp::where('email', $request->email)->first();
        if (!$otp) {
            return response()->json([
                'message' => 'Please request OTP first'
            ],400);
        }

        if ($otp->otp != $request->otp) {
            return response()->json([
                'message' => 'OTP is incorrect'
            ],400);
        }

        $user = new UserTwo;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->name = $request->name;
        $user->role = 'patient';
        $user->status = 'active';
        $user->timestamps = false;
        $user->save();

        return response()->json([
            'message' => 'Register Success',
            'data' => $user
        ]);
    }

    public function requestOtp(Request $request)
    {
        $user = UserTwo::where('email', $request->email)->first();
        if ($user) {
            return response()->json([
                'message' => 'Email already registered',
                'data' => $user
            ],400);
        } 

        $otp = Otp ::where('email', $request->email)->first();
        if ($otp) {
            $otp->delete();
        }
        $otp = new Otp;
        $otp->email = $request->email;
        $otp->otp = rand(1000, 9999);
        $otp->timestamps = false;
        $otp->save();

        $to = $request->email;
        $subject = 'OTP Verification';
        $message = 'OTP for email verification is ' . $otp->otp . ' . Please do not share this OTP with anyone.';

        Mail::raw($message, function($message) use ($to, $subject) {
            $message->to($to)->subject($subject);
        });

        return response()->json([
            'message' => 'OTP sent to email',
            'data' => ""
        ]);

        
    }

    public function update(Request $request, $id)
    {
        $user = UserTwo::find($id);
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role = $request->role;
        $user->status = $request->status;
        $user->timestamps = false;
        $user->save();

        return response()->json([
            'message' => 'Update Success',
            'data' => $user
        ]);
    }

    public function delete($id)
    {
        $user = UserTwo::find($id);
        $user->delete();

        return response()->json([
            'message' => 'Delete Success'
        ]);
    }


    public function createMessage(Request $request){
        $message = new Message;
        $message->from_user = $request->from_user;
        $message->to_user = $request->to_user;
        $message->content = $request->content;
        
        $message->timestamps = false;
        $message->save();
        return "Message sent successfully";
    }

    public function getMessages(Request $request){
        $from_user = $request->from_user;
        $to_user = $request->to_user;
        return Message::where('from_user', $from_user)->where('to_user', $to_user)->orWhere('from_user', $to_user)->where('to_user', $from_user)->get();
    }
}
