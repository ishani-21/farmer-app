<?php

namespace App\Http\Controllers\API;

use App\Contracts\LoginContract;
use App\Http\Controllers\Controller;
use App\Models\FarmerUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;

class LoginController extends Controller
{
    public function __construct(LoginContract $Login)
    {
        $this->Login = $Login;
    }

    public function create(Request $request)
    {
        $data = $this->Login->create($request->all());
        return response([
            'user' => $data,
            'message' => "Otp successfully send"
        ]);
    }
}
