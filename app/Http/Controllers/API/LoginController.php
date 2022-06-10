<?php

namespace App\Http\Controllers\API;

use App\Contracts\LoginContract;
use App\Http\Controllers\Controller;
use App\Models\FarmerUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;
use App\Http\Requests\LoginRequest;

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
            'message' => "Registration successfully",
            'user' => $data
        ]);
    }
}