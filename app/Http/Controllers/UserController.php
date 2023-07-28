<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
/**
 * @OA\Get(
 *      path="/users",
 *      operationId="getUsersList",
 *      tags={"Users"},
 *      summary="Get list of users",
 *      description="Returns a list of users",
 *      @OA\Response(response="200", description="Successful operation"),
 * )
 */

    public function userList() {
        $getUserList = User::get();
        return response()->json(['body'=>$getUserList,'message' => 'User List', 'status' => true]);
    }


}
