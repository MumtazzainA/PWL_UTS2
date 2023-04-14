<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
/**
 * Summary of Product
 */
class Product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            'Kode_Barang' => 'KD001',
            'Nama_Barang' => 'udang',
            'Kategori_Barang' => 'seafood',
            'Harga_Barang' => '25000',
            'Jumlah_Barang' => '156',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
        DB::table('product')->insert([
            'Kode_Barang' => 'KD002',
            'Nama_Barang' => 'cumi',
            'Kategori_Barang' => 'seafood',
            'Harga_Barang' => '27000',
            'Jumlah_Barang' => '156',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
        DB::table('product')->insert([
            'Kode_Barang' => 'KD003',
            'Nama_Barang' => 'gurita',
            'Kategori_Barang' => 'seafood',
            'Harga_Barang' => '200000',
            'Jumlah_Barang' => '156',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
        DB::table('product')->insert([
            'Kode_Barang' => 'KD004',
            'Nama_Barang' => 'kerapu',
            'Kategori_Barang' => 'seafood',
            'Harga_Barang' => '250000',
            'Jumlah_Barang' => '156',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
        DB::table('product')->insert([
            'Kode_Barang' => 'KD005',
            'Nama_Barang' => 'Tuna',
            'Kategori_Barang' => 'seafood',
            'Harga_Barang' => '200000',
            'Jumlah_Barang' => '156',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
        DB::table('product')->insert([
            'Kode_Barang' => 'KD006',
            'Nama_Barang' => 'nuget',
            'Kategori_Barang' => 'Frozen food',
            'Harga_Barang' => '25000',
            'Jumlah_Barang' => '156',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
        DB::table('product')->insert([
            'Kode_Barang' => 'KD007',
            'Nama_Barang' => 'dimsum',
            'Kategori_Barang' => 'Frozen food',
            'Harga_Barang' => '25000',
            'Jumlah_Barang' => '156',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
        DB::table('product')->insert([
            'Kode_Barang' => 'KD008',
            'Nama_Barang' => 'bakpao',
            'Kategori_Barang' => 'Frozen food',
            'Harga_Barang' => '15000',
            'Jumlah_Barang' => '156',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
       
        DB::table('product')->insert([
            'Kode_Barang' => 'KD009',
            'Nama_Barang' => 'cikuwa',
            'Kategori_Barang' => 'Frozen food',
            'Harga_Barang' => '17000',
            'Jumlah_Barang' => '156',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
        DB::table('product')->insert([
            'Kode_Barang' => 'KD010',
            'Nama_Barang' => 'Crab stick',
            'Kategori_Barang' => 'Frozen food',
            'Harga_Barang' => '17000',
            'Jumlah_Barang' => '156',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
       
        DB::table('product')->insert([
            'Kode_Barang' => 'KD011',
            'Nama_Barang' => 'jamur kuping',
            'Kategori_Barang' => 'vegetable',
            'Harga_Barang' => '17000',
            'Jumlah_Barang' => '156',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]); 
        DB::table('product')->insert([
            'Kode_Barang' => 'KD012',
            'Nama_Barang' => 'Brokoli',
            'Kategori_Barang' =>'vegetable',
            'Harga_Barang' => '25000',
            'Jumlah_Barang' => '156',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]); 
        DB::table('product')->insert([
            'Kode_Barang' => 'KD013',
            'Nama_Barang' => 'kentang',
            'Kategori_Barang' =>'vegetable',
            'Harga_Barang' => '25000',
            'Jumlah_Barang' => '156',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);  
        DB::table('product')->insert([
            'Kode_Barang' => 'KD014',
            'Nama_Barang' => 'sawi',
            'Kategori_Barang' =>'vegetable',
            'Harga_Barang' => '10000',
            'Jumlah_Barang' => '156',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);  
       
        DB::table('product')->insert([
            'Kode_Barang' => 'KD015',
            'Nama_Barang' => 'buncis',
            'Kategori_Barang' =>'vegetable',
            'Harga_Barang' => '7000',
            'Jumlah_Barang' => '156',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);  
        DB::table('product')->insert([
            'Kode_Barang' => 'KD016',
            'Nama_Barang' => 'masako',
            'Kategori_Barang' =>'bumbu',
            'Harga_Barang' => '10000',
            'Jumlah_Barang' => '156',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]); 
        DB::table('product')->insert([
            'Kode_Barang' => 'KD017',
            'Nama_Barang' => 'kaldu bubuk',
            'Kategori_Barang' =>'bumbu',
            'Harga_Barang' => '7000',
            'Jumlah_Barang' => '156',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]); 
        DB::table('product')->insert([
            'Kode_Barang' => 'KD018',
            'Nama_Barang' => 'kaldu jamur',
            'Kategori_Barang' =>'bumbu',
            'Harga_Barang' => '15000',
            'Jumlah_Barang' => '156',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]); 
        DB::table('product')->insert([
            'Kode_Barang' => 'KD019',
            'Nama_Barang' => 'micin',
            'Kategori_Barang' =>'bumbu',
            'Harga_Barang' => '5000',
            'Jumlah_Barang' => '156',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]); 
        DB::table('product')->insert([
            'Kode_Barang' => 'KD020',
            'Nama_Barang' => 'kemiri',
            'Kategori_Barang' =>'bumbu',
            'Harga_Barang' => '5000',
            'Jumlah_Barang' => '156',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]); 
       
       
    }
}