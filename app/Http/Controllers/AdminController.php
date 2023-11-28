<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AdminController extends Controller
{

    // =========== PRODUK ===========
    public function updateProduk(Request $request)
    {
        $id = $request->input('id');
        $nama_produk = $request->input('nama_produk');
        $jenis_produk = $request->input('jenis_produk');
        $harga_produk = $request->input('harga_produk');
        $deskripsi_produk = $request->input('deskripsi_produk');
        $nama_toko = $request->input('nama_toko');
        $alamat_toko = $request->input('alamat_toko');

        // Kirim data ke API MongoDB (ganti URL sesuai dengan kebutuhan)
        $response = Http::put('https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-drzkm/endpoint/updateProduk?id='.urlencode($id).'&nama_produk='.urlencode($nama_produk).'&jenis_produk='.urlencode($jenis_produk).'&harga_produk='.urlencode($harga_produk).'&deskripsi_produk='.urlencode($deskripsi_produk).'&nama_toko='.urlencode($nama_toko).'&alamat_toko='.urlencode($alamat_toko));

        if ($response->failed()) {
            // Handle error
            $errorMessage = $response->body();
            return $errorMessage; // Gantilah 'error' dengan nama view yang sesuai
        } else {
            // Redirect ke halaman login atau halaman lain yang sesuai
            return redirect('/data-produk-admin');
            // Gantilah 'login' dengan nama rute yang sesuai
        }
    }

    public function deleteProduk($id){
        $response = Http::delete('https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-drzkm/endpoint/deleteProduk?id='.urlencode($id));

        if ($response->failed()) {
            // Handle error
            $errorMessage = $response->body();
            return $errorMessage; // Gantilah 'error' dengan nama view yang sesuai
        } else {
            // Redirect ke halaman login atau halaman lain yang sesuai
            return redirect('/data-produk-admin');
            // Gantilah 'login' dengan nama rute yang sesuai
        }
    }


    // =========== USER ===========
    public function updateUser(Request $request)
    {
        $id = $request->input('id');
        $username = $request->input('username');
        $email = $request->input('email');
        $no_hp = $request->input('no_hp');
        $alamat = $request->input('alamat');

        // Kirim data ke API MongoDB (ganti URL sesuai dengan kebutuhan)
        $response = Http::put('https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-drzkm/endpoint/editPengguna?id='.urlencode($id).'&username='.urlencode($username).'&email='.urlencode($email).'&no_hp='.urlencode($no_hp).'&alamat='.urlencode($alamat));

        if ($response->failed()) {
            // Handle error
            $errorMessage = $response->body();
            return $errorMessage; // Gantilah 'error' dengan nama view yang sesuai
        } else {
            // Redirect ke halaman login atau halaman lain yang sesuai
            return redirect('/data-user-admin');
            // Gantilah 'login' dengan nama rute yang sesuai
        }
    }

    public function deleteUser($id){
        $response = Http::delete('https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-drzkm/endpoint/deletePengguna?id='.urlencode($id));

        if ($response->failed()) {
            // Handle error
            $errorMessage = $response->body();
            return $errorMessage; // Gantilah 'error' dengan nama view yang sesuai
        } else {
            // Redirect ke halaman login atau halaman lain yang sesuai
            return redirect('/data-user-admin');
            // Gantilah 'login' dengan nama rute yang sesuai
        }
    }
}
