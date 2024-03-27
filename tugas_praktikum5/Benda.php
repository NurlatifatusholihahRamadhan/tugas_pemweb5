<?php

class Benda { 
    public $nama;
    public $harga;
    
    public function __construct($nama, $harga) {
        $this->nama = $nama;
        $this->harga = $harga;
    }

    public function getNama(){
        return $this->nama;
    }

    public function getharga(){
        return $this->harga;
    }
    
    public function klasifikasiHarga(){
        return $this->harga >= 1000000 ? 'Mahal' : 'Murah';      
}
}
?>