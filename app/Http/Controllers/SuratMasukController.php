<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratMasukModel;
use app\Helpers\Helper;
use App\Models\arsipmasuk;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuratMasukController extends Controller
{
    //
    public function __construct()
    {
        $this->SuratMasukModel = new SuratMasukModel();
    }

    public function index(Request $request)
    {
       $keyword = $request->get('keyword');
        $data = [
            'surat' => $this->SuratMasukModel->alldata(),
        ];
        if($keyword)
       {
        $data = [
            'surat' =>$this->SuratMasukModel->alldata()->where("NamaSurat","LIKE","%$keyword%"),
        ];
      }
        return view('arsipsurat',$data);
    }
    public function add()
    {
        
        $data = [
            'NomorSurat' => Helper::IDgenerator(new arsipmasuk,'NomorSurat',4,'Surat'),
        ];
        return view('f_arsip',$data);
    }
    public function tambahdata()
    {
        //validasi data
        Request()->validate([
            
            'NomorSurat' => 'required',
            'NamaSurat' => 'required',
            'JenisSurat' => 'required',
            'pengirim' => 'required',
            'tujuan' => 'required',
            'surat' => 'required|mimes:pdf,docx|max:1024',
            
        ],[
            //custome pesan
            'NomorSurat.required' => 'Nomor Surat Wajib Di Isi!',
            'NamaSurat.required' => 'Nama Surat Wajib Di Isi!',
            'JenisSurat.required' => 'Pilih Jenis Surat!',
            'pengirim.required' => 'Pengirim Wajib Diisi',
            'tujuan.required' => 'wajib Diisi',
            'surat.required' => 'Surat Wajib di isi!',
            
        ]);
        //untuk menyimpan lokasi file dokument
        $surat = time().'.'.Request()->surat->extension();  
        Request()->surat->move(public_path('folder_surat'), $surat);
        //simpan data ke database
        $data =[
            'tanggal' => Request()->tanggal,
            'NomorSurat' => Request()->NomorSurat,
            'NamaSurat' => Request()->NamaSurat,
            'JenisSurat' => Request()->JenisSurat,
            'pengirim' => Request()->pengirim,
            'tujuan' => Request()->tujuan,
            'surat' => $surat,

        ];
        $this->SuratMasukModel->tambahdata($data);
        return redirect()->route('surat')->with('pesan','Data Telah Berhasil Disimpan');
    }
    public function detail($id)
    {
        if(!$this->SuratMasukModel->detailsurat($id))
        {
            abort (404);
        }
       $data = [
           'surat' => $this->SuratMasukModel->detailsurat($id),
       ];
       return view('detailsurat',$data);

    }
    public function edit($id)
    {
        if(!$this->SuratMasukModel->detailsurat($id))
        {
            abort (404);
        }
       $data = [
        'surat' => $this->SuratMasukModel->detailsurat($id),
        ];
        return view('editsurat',$data);

    }
    public function updatesurat($id)
    {
       //validasi from laravel
       Request()->validate([
            'NamaSurat' => 'required',
            'JenisSurat' => 'required',
            'pengirim' => 'required',
            'tujuan' => 'required',
            'surat' => 'mimes:pdf,docx|max:1024',
        ],[
            // custome pesan
            'NamaSurat.required' => 'Nama Surat Wajib Di Isi!',
            'JenisSurat.required' => 'Pilih Jenis Surat!',
            'pengirim.required' => 'Pengirim Wajib Diisi',
            'tujuan.required' => 'wajib Diisi',
        ]);

    //untuk update data user
    if (Request()->surat <> "")
    {
            //untuk menyimpan lokasi file foto
            $surat = time().'.'.Request()->surat->extension();  
            Request()->surat->move(public_path('folder_surat'), $surat);

        //simpan ke database
        $data = [
            'tanggal' => Request()->tanggal,
            'NomorSurat' => Request()->NomorSurat,
            'NamaSurat' => Request()->NamaSurat,
            'JenisSurat' => Request()->JenisSurat,
            'pengirim' => Request()->pengirim,
            'tujuan' => Request()->tujuan,
            'surat' => $surat,
        ];
        $this->SuratMasukModel->updatedata($id, $data);
    }
    else
    {
        $data = [
            'tanggal' => Request()->tanggal,
            'NomorSurat' => Request()->NomorSurat,
            'NamaSurat' => Request()->NamaSurat,
            'JenisSurat' => Request()->JenisSurat,
            'pengirim' => Request()->pengirim,
            'tujuan' => Request()->tujuan,
        ];
        $this->SuratMasukModel->updatedata($id, $data);
    }
    return redirect()->route('surat')->with('pesan','Data Telah Berhasil DiUpdate!');
    }
    public function delete($id)
    {
        if(!$this->SuratMasukModel->detailsurat($id))
        {
            abort (404);
        }
       $data = [
        'surat' => $this->SuratMasukModel->detailsurat($id),
        ];
        $this->SuratMasukModel->deletedata($id, $data);
        return redirect()->route('surat')->with('pesan','Data Telah Berhasil Dihapus!');
    }
	
}
