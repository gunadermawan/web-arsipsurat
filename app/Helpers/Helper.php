<?php
    namespace app\Helpers;
    include "fungsi_romawi.php";
    class Helper{
        public static function IDgenerator($model,$trow,int $panjang,$prefix) // parameter masukan
        {
            $data =$model::orderby('id','desc')->first(); // query memanggil model

            if (!$data) {
                $og_panjang =$panjang;
                $nomor_terakhir= '0';
                $bulan=date('n');
                $romawi=getRomawi($bulan);
                $tahun=date ('Y');
                $nomor='/'.$romawi.'/'.$tahun;
            }
            else{
                $NomorSurat = \App\Models\arsipmasuk::count('NomorSurat');
                $kode = substr($data->$trow, strlen($prefix)+1); // memisahkan data (prefik dengan no urut)
                $aktual_no_terakhir=((int)$kode/1)*1;
                $tambah_no_terakhir=$aktual_no_terakhir +$NomorSurat;
                $panjang_no_terakhir=strlen($tambah_no_terakhir);
                $og_panjang=$panjang - $panjang_no_terakhir;
                $nomor_terakhir=$tambah_no_terakhir +$aktual_no_terakhir;
                $bulan=date('n');
                $romawi=getRomawi($bulan);
                $tahun=date ('Y');
                $nomor='/'.$romawi.'/'.$tahun;
                
            }
            $zeros ="";
            for($i=0;$i<$og_panjang;$i++)
            {
                $zeros ='00'; // jumlah digit 0 depan no urut

            }
            return $zeros.$nomor_terakhir.'/'.$prefix.$nomor; // mengembalikan nilai atau format
        }        
    }
?>