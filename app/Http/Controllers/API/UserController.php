<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;
    
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    
    public function index()
    {
        $users = $this->userService->getAllUsers();
        return response()->json($users);
    }
    
    public function show($id)
    {
        $user = $this->userService->getUserById($id);
        return response()->json($user);
    }
    
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);
        
        $user = $this->userService->createUser($data);
        return response()->json($user, 201);
    }
    
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'required',
        ]);
        
        $user = $this->userService->updateUser($id, $data);
        return response()->json($user);
    }
    
    public function destroy($id)
    {
        $this->userService->deleteUser($id);
        return response()->noContent();
    }
}