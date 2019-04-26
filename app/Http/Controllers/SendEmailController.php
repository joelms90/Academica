<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Auth;
use App\User;
use App\Task;

class SendEmailController extends Controller
{   

    function send()
    {   
    	$user=Auth::user()->email;
    	$user_id=Auth::user()->id;
    	$task = Task::has('users')->where('id', $user_id)->first();

$task = Task::whereHas('users', function($q) use($user_id){

    			               $q->where('user_id', $user_id); //this refers id field from categories table

		             })
                 ->get();

   
    	$data=$task;
    	$message='Se han enviado tus pendientes a tu correo';

    	Mail::to('joelmoralessan1@gmail.com')->send(new SendMail ($data));
    		return  redirect('/sent');
    }
}
