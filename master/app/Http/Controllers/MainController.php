<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kamar;
use App\Properti;
use App\PropertiTmp;

class MainController extends Controller {

	public function home(){
		$kamars = Kamar::all();
		return view('beranda', compact('kamars'));
	}
	public function rekap_kamar(){
		$kamars = Kamar::all();
		return view('rekap-kamar', compact('kamars'));
	}
	public function admin(){
		$kamars = Kamar::paginate(10);
		return view('admin', compact('kamars'));
	}
	public function apiGetKamar(Request $request){
		$kamar = Kamar::find($request->id);
		return $kamar;
	}
	public function edit_kamar(Request $request){
		$kamar = Kamar::find($request->id);

		return view('edit_kamar', compact('kamar'));
	}
	public function tambah_properti(Request $request){
		$default_status = "tidak";
		$tambah_properti = Properti::create(['kamar_id' => $request->kamar_id, 
			'judul' => $request->judul, 
			'status' => $default_status]);
		$response = ['status' => true];
		return response()->json($response);
	}

	public function postEdit_kamar(Request $request){
		$properti = Kamar::find($request->kamar_id);

		$request->request->add(['tanggal' => date("Y-m-d")]);
		$properti->update($request->all());
		if (isset($request->status_properti)) {
			foreach ($request->status_properti as $key => $value) {
				$properti = Properti::find($key)->update(['status' => ''.$value[0].'']);
			}
		}
		
		return redirect('detail-kamar?id=' . $request->kamar_id);
	}
	public function hapus_properti(Request $request){
		$id = $request->id;
		$prop = Properti::find($id);

		if ($prop->delete()) {
			$msg = "Berhasil";
			$status = true;
		} else {
			$msg = "Gagal menghapus";
			$status = false;
		}
		return redirect()->back()->with(compact('msg', 'status'));
	}
	public function detail_kamar(Request $request){
		$kamar = Kamar::find($request->id);
		

		return view('detail-kamar', compact('kamar'));
	}
	public function print_kamar(Request $request){
		$kamar = Kamar::find($request->id);


		return view('print-kamar', compact('kamar'));
	}

	public function tambah_kamar(){
		$propertis = PropertiTmp::all();

		return view('tambah_kamar', compact('propertis'));
	}
	public function postTambah_kamar(Request $request){
		
		$properti = new Properti;
		$kamar = new Kamar;

		// tambahkan kolom tanggal
		$request->request->add(['tanggal' => date("Y-m-d")]);
		$add_kamar = $kamar->create($request->all()); // finish of room add

		// get room id
		$kamar_id = $add_kamar->id;
		// insert to properti table
		$propertiTmp = PropertiTmp::all();
		foreach ($propertiTmp as $prop) {
					//array_push($prop, ['kamar_id' => 1]);
					$properti->create(['judul' => $prop->judul, 'status' => $prop->status, 'kamar_id' => $kamar_id]);

				}
		return redirect('/');

		
		// foreach ($request->status_properti as $value) {
		// 	$propertiTmp->create([''])
		// 	print_r($value);
		// }
		//return $request->all();
	}

	public function hapus_kamar(Request $request){
		$id = $request->id;

		$kamar = Kamar::find($id);
		$properti = Properti::where('kamar_id', $id);
		// hapus kamar
		$kamar->delete();
		// hapus properti terkait
		$properti->delete();
		return redirect('/');
	}

	public function printRekap_kamar(){
		$kamars = Kamar::all();
		return view('print-rekap', compact('kamars'));
	}
}