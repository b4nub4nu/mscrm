<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
// method untuk insert data ke table pegawai
public function store(Request $request)
{
	// insert data ke table pegawai
	DB::table('tb_ceklist_sucofindo')->insert([
		'nama' => $request->name,
		'role' => $request->role,
		'email' => $request->email
	]);
	// alihkan halaman ke halaman pegawai
	return "sukses";

}
}