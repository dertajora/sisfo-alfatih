<?php

use Illuminate\Database\Seeder;
use App\FileCategories;
use App\FileSubcategories;

class categories_and_subcategories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('files_categories')->truncate();
		DB::table('files_subcategories')->truncate();

        $categories = array("File Sekolah", "File Siswa", "File Guru");

        $subcategories = array(
        		"Sertifikat",
        		"Akta",
        		"Bukti Pendaftaran Sekolah",
        		"Dokumen Izin",
        		"PBB",
        		"SPT Tahunan",
        		"NPWP Yayasan",
        		"SK Menkumham",
        		"SITU",
        		"Surat Domisili",
        		"Site Plan",
        		"Gambar Sekolah",
        		"Gambar Ruangan SD",
        		"KTP & NPWP",
        		"IMB & Dok Legal",
        		"Rancangan Induk Pembangunan"
        		);

        foreach($categories as $row){
        	FileCategories::create(["category" => $row]);
        }

        foreach($subcategories as $row){
        	FileSubcategories::create(["category_id" => 1, "subcategory" => $row]);
        }
    }
}
