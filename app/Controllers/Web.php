<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Web extends Controller {
   
    public function __construct() {
        helper('url'); // Memuat helper URL di sini
    }

    public function index() {
        $data['judul'] = "Halaman Depan";
        echo view('v_header', $data); // Menggunakan echo view() untuk memuat tampilan
        echo view('v_index', $data); // Menggunakan echo view() untuk memuat tampilan
        echo view('v_footer', $data); // Menggunakan echo view() untuk memuat tampilan
    }
    
    public function about() {
        $data['judul'] = "Halaman Depan";
        echo view('v_header', $data); // Menggunakan echo view() untuk memuat tampilan
        echo view('v_about', $data); // Menggunakan echo view() untuk memuat tampilan
        echo view('v_footer', $data); // Menggunakan echo view() untuk memuat tampilan
    }


}

?>