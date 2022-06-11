<?php

namespace App\Http\Controllers\API;

use App\Contracts\LoginContract;
use App\Http\Controllers\Controller;
use App\Models\FarmerUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;
use App\Http\Requests\OtpRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct(LoginContract $Login)
    {
        $this->Login = $Login;
    }

    public function create(LoginRequest $request)
    {
        $data = $this->Login->create($request->all());
        return response([
            'OTP' => $data->raw_otp,
            'message' => "Otp successfully send"
        ]);
    }

    public function verifyOtp(Request $request)
    {
        $data = $this->Login->verifiyOtp($request->all());
        return $data;
    }

    public function getPlantDetails()
    {
        $data = $this->Login->getPlantDetails();
        return $data;
    }

    public function logout()
    {
        return Auth::guard()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }
    
    // public function guard()
    // {
    //     return Auth::guard();
    // }

}
