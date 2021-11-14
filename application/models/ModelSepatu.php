<?php
class ModelSepatu extends CI_Model
{
    public $merk, $harga_sepatu;

    public function getHarga($merk=null)
    {
        $this->merk=$merk;
        if($this->merk=="Nike")
                {$this->harga_Sepatu=375000;}
        elseif($this->merk=="Adidas")
                {$this->harga_Sepatu=300000;}
        elseif($this->merk=="Kickers")
                {$this->harga_Sepatu=250000;}
        elseif($this->merk=="Eiger")
                {$this->harga_Sepatu=275000;}
        elseif($this->merk=="Bucheri")
                {$this->harga_Sepatu=400000;}

    return $this->harga_Sepatu;
    }
}