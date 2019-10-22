<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserExpenseCategoryController extends Controller
{
    public function create(Request $request){
    	$user_id = $request->user_id;
    	$field_name = $request->field_name;
    	$field = [
    		'user_id' => $user_id,
    		'field_name' => $field_name
    	];
    	$field = new UserExpenseCategory($field_data);
    	return response()->json([
    		'success' => true,
    		'message' => "Field added successfully"
    	])
    }
}
