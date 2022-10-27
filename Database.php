<?php
// htdocs/sigit/Database.php
class Database {
	// deklarasi parameter koneksi database
	private $host   = "localhost";
	private $uname  = "root";
	private $pass 	= "";
	private $db     = "mi21a";
	
	public function connect() {
		// koneksi ke server MySQL
		$mysqli = new mysqli($this->host, $this->uname, $this->pass, $this->db);	
		// cek koneksi tersambung atau tidak
		if ($mysqli->connect_error){
			echo "Gagal terkoneksi ke database : (".$mysqli->connect_error.")";
		}  	
		// nilai kembalian bila koneksi berhasil
		return $mysqli;
	}
}
?>