<?php 


	namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\DB; //buat nyambungin DB

	class PegawaiController extends Controller
	{
		//bagian isi
		// public function index($nama){
		// 	return $nama;
		// }
		public function formulir(){
			return view ('formulir');
		}
		public function proses(Request $request){
			$nama = $request-> input('nama');
			$alamat = $request-> input('alamat');
			return "Nama : ".$nama.", Alamat : ".$alamat; 

		}

		public function index(){
			//mengambil data dari tabel pegawai
			$pegawai=DB::table('pegawai')->paginate(10);

			// mengirim data ke view index
			return view('index',['pegawai'=>$pegawai]);
		}
		public function tambah(){
			
			// memanggil view tambah
			return view('tambah');
		}
		public function store(Request $request){
			//insert data ke tabel pegawai
			DB::table('pegawai')->insert([
					'nama_pegawai'=>$request->nama,
					'jabatan_pegawai'=>$request->jabatan,
					'umur_pegawai'=>$request->umur,
					'alamat_pegawai'=>$request->alamat
			]);

			//mengalihkan kembali ke halaman pegawai
			return redirect('/pegawai');
		}
		public function edit($id){

			//mengambil data berdasarkan id yang dibawa di link atau di pilih pada menu pegawai
			$pegawai = DB::table('pegawai')->where('id_pegawai',$id)->get();

			//passing data pegawai yang didapat berdasarkan id tsb, ke view edit.blade.php
			return view('edit',['pegawai' => $pegawai]);
		}
		// update data pegawai
		public function update(Request $request)
		{
			// update data pegawai
			DB::table('pegawai')->where('id_pegawai',$request->id)->update([
				'nama_pegawai' => $request->nama,
				'jabatan_pegawai' => $request->jabatan,
				'umur_pegawai' => $request->umur,
				'alamat_pegawai' => $request->alamat
			]);
			//setelah mengisi alihkan halaman ke halaman pegawai
			return redirect('/pegawai');
		}

				// method untuk hapus data pegawai
		public function hapus($id)
		{
			// menghapus data pegawai berdasarkan id yang dipilih
			DB::table('pegawai')->where('id_pegawai',$id)->delete();
				
			// alihkan halaman ke halaman pegawai
			return redirect('/pegawai');
		}


		public function cari(Request $request)
		{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$pegawai = DB::table('pegawai')
		->where('nama_pegawai','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('index',['pegawai' => $pegawai]);
 
		}

	}


 ?>
