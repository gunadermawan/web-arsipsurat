<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SuratMasukModel extends Model
{
    use HasFactory;
    public function alldata()
    {
        return DB::table('arsipmasuks')->get();
    }
    public function tambahdata($data)
    {
        return DB::table('arsipmasuks')->insert($data);
    }
    public function detailsurat($id)
    {
        return DB::table('arsipmasuks')->where('id',$id)->first();
    }
   public function updatedata($id, $data)
    {
        return DB::table('arsipmasuks')
        ->where('id', $id)
        ->update($data);
    }
   public function deletedata($id)
    {
        return DB::table('arsipmasuks')
        ->where('id', $id)
        ->delete();
    }
}
