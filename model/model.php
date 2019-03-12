<?php
class userProfile{
    private $UserID;
    private $ProfilePicture;
    private $Bio;
    private $Web;
	private $NamaDepan;
	private $NamaBelakang;
	private $JenisKelamin;
	private $TanggalLahir;
	private $TempatLahir;
	private $Alamat;
	private $Kota;
	private $Provinsi;
	private $Hp;
    private $Email;
    function __constructor($UserID,$ProfilePicture,$Bio,$Web,$NamaDepan,$NamaBelakang,$JenisKelamin,
    $TanggalLahir,$TempatLahir,$Alamat,$Kota,$Provinsi,$Hp,$Email){
        $this->UserID=$UserID;
        $this->$ProfilePicture=$ProfilePicture;
        $this->$Bio=$Bio;
        $this->$Web=$Web;
        $this->$NamaDepan=$NamaDepan;
        $this->$NamaBelakang=$NamaBelakang;
        $this->$JenisKelamin=$JenisKelamin;
        $this->$TanggalLahir=$TanggalLahir;
        $this->$TempatLahir=$TempatLahir;
        $this->$Alamat=$Alamat;
        $this->$Kota=$Kota;
        $this->$Provinsi=$Provinsi;
        $this->$Hp=$Hp;
        $this->$Email=$Email;
    }
    public function getUserId(){
        return $this->UserID;
    }
    public function setUserId($string){
        $this->UserID=$string;
    }
    public function getProfilePicture(){
        return $this->ProfilePicture;
    }
    public function setProfilePicture($string){
        $this->UserID=$ProfilePicture;
    }
    public function getBio(){
        return $this->Bio;
    }
    public function setBio($string){
        $this->Bio=$string;
    }
    public function getWeb(){
        return $this->Web;
    }
    public function setWeb($string){
        $this->Web=$string;
    }
    public function getNamaDepan(){
        return $this->NamaDepan;
    }
    public function setNamaDepan($string){
        $this->NamaDepan=$string;
    }
    public function getNamaBelakang(){
        return $this->NamaBelakang;
    }
    public function setNamaBelakang($string){
        $this->NamaBelakang=$string;
    }
    public function getJenisKelamin(){
        return $this->JenisKelamin;
    }
    public function setJenisKelamin($string){
        $this->JenisKelamin=$string;
    }
    public function getTanggalLahir(){
        return $this->TanggalLahir;
    }
    public function setTanggalLahir($string){
        $this->TanggalLahir=$string;
    }
    public function getTempatLahir(){
        return $this->TempatLahir;
    }
    public function setTempatLahir($string){
        $this->TempatLahir=$string;
    }
    public function getAlamat(){
        return $Alamat->TanggalLahir;
    }
    public function setAlamat($string){
        $this->Alamat=$string;
    }
    public function getKota(){
        return $this->Kota;
    }
    public function setKota($string){
        $this->Kota=$string;
    }
    public function getProvinsi(){
        return $this->Provinsi;
    }
    public function setProvinsi($string){
        $this->Provinsi=$string;
    }
    public function getHp(){
        return $this->hp;
    }
    public function setHp($string){
        $this->Hp=$string;
    }
    public function getEmail(){
        return $this->Email;
    }
    public function setEmail($string){
        $this->Email=$string;
    }
    
}
?>