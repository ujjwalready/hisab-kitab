<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserExpenseCategory as UEC;
use App\User;

class UserExpenseCategoryController extends Controller
{
    public function create(Request $request){
    	$user_id = $request->user_id;
    	$field_name = $request->field;
        $user = User::find($user_id);
        if(empty($user)){
            return response()->json([
            'success' => false,
            'message' => "User not found",
            'field' => $field_name
        ]);
        }
    	$field_data = [
    		'user_id' => $user_id,
    		'field_name' => $field_name
    	];
    	$field = UEC::create($field_data);
    	return response()->json([
    		'success' => true,
    		'message' => "Field added successfully"
    	]);
    }

    public function getAllFields(Request $request){
        $user_id = $request->user_id;
        $user = User::find($user_id);
        if(empty($user)){
            return response()->json([
            'success' => false,
            'message' => "User not found"
        ]);
        }
        $fields = $user->fields;
        return response()->json([
            'success' => true,
            'message' => 'Fields',
            'data' => $fields
        ]);
    }
    public function edit(Request $request){
        $user_id = $request->user_id;
        $user = User::find($user_id);
        if(empty($user)){
            return response()->json([
            'success' => false,
            'message' => "User not found"
        ]);
        }
        $fields = $user->fields;
        return response()->json([
            'success' => true,
            'message' => 'Fields',
            'data' => $fields
        ]);
    }
}
