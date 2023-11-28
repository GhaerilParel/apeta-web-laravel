<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function register(Request $request){
        session_start();
        
        $username = $request->input('username');
        $email = $request->input('email');
        $no_hp = $request->input('no_hp');
        $alamat = $request->input('alamat');
        $password = md5($request->input('password'));

        $insertResponse = Http::post("https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-drzkm/endpoint/insertPengguna?username=".urlencode($username)."&email=".urlencode($email)."&no_hp=".urlencode($no_hp)."&alamat=".urlencode($alamat)."&password=".urlencode($password));

        if ($insertResponse->failed()) {
            // Handle error during insert operation
            $errorMessage = $insertResponse->body();
            return $errorMessage; // Handle the error as needed
        } else {
            // Redirect to the login page or another suitable page
            $_SESSION['signup_success'] = true;
            return redirect('/login4');
            // Replace 'login' with the appropriate route name
        }
    }

    public function updateUser(Request $request){
        session_start();
        
        $id = $request->input('id');
        $username = $request->input('username');
        $email = $request->input('email');
        $no_hp = $request->input('no_hp');
        $alamat = $request->input('alamat');

        // Insert operation
        $response = Http::put('https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-drzkm/endpoint/editPengguna?id='.urlencode($id).'&username='.urlencode($username).'&email='.urlencode($email).'&no_hp='.urlencode($no_hp).'&alamat='.urlencode($alamat));

        if ($response->failed()) {  
            // Handle error
            $errorMessage = $response->body();
            return $errorMessage; // Gantilah 'error' dengan nama view yang sesuai
        } else {
            // Redirect ke halaman login atau halaman lain yang sesuai
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
            session_write_close();
            return redirect('/akunsaya');
            // Gantilah 'login' dengan nama rute yang sesuai
        }
    }

    public function hapusUser(Request $request){
        session_start();

        $id = $request->input('id');
        
        // Make API call to delete user
        $response = Http::delete('https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-drzkm/endpoint/deletePengguna?id='.urlencode($id));
    
        if ($response->successful()) {
            // Destroy the entire session
            session_destroy();
    
            // Redirect to the desired page after successful deletion and session destruction
            return redirect('/');
        } else {
            // User deletion failed, handle the error
            $errorMessage = $response->body();
            return $errorMessage; // You may want to handle and display the error appropriately
        }
    }
}
