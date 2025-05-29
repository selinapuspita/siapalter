<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_database extends CI_Model{

Public function __construct() {
parent::__construct();
}

public function cek_login($table,$where){		
return $this->db->get_where($table,$where);
}

public function login_in($table,$username,$pass){
$sql = "select * from $table where USERNAME='$username' AND PASSWORD='$pass'";
return $this->db->query($sql)->result_array();
}

public function query_table($table){
$sql = "select * from $table";
return $this->db->query($sql)->result_array();
}

public function sum($table){
$sql = "select COUNT(ID) as JUMLAH from $table";
return $this->db->query($sql)->result_array();
}

public function sum_log($date){
$sql = "select COUNT(ID) as JUMLAH from data_log where TANGGAL='$date'";
return $this->db->query($sql)->result_array();
}

public function sum_log_pulang($date){
$sql = "select COUNT(ID) as JUMLAH from data_log where TANGGAL='$date' AND ID_KELUAR!=''";
return $this->db->query($sql)->result_array();
}

public function query_setting($tag){
$sql = "select * from data_setting where TAG='$tag'";
return $this->db->query($sql)->result_array();
}

public function query_pos_code($code){
$sql = "select * from data_pos where CODE='$code'";
return $this->db->query($sql)->result_array();
}


public function cari_absen($date,$id){
$sql = "select * from data_absen where TANGGAL='$date' and ID_USER='$id'";
return $this->db->query($sql)->result_array();
}

public function cari_log($date,$id){
$sql = "select * from data_log where TANGGAL='$date' and ID_USER='$id'";
return $this->db->query($sql)->result_array();
}

public function query_absen_userid($id){
$sql = "select * from data_absen WHERE ID_USER='$id'";
return $this->db->query($sql)->result_array();
}

public function query_log_userid($id){
$sql = "select * from data_log WHERE ID_USER='$id'";
return $this->db->query($sql)->result_array();
}

public function query_log_userid_date($id,$awal,$akhir){
$sql = "select * from data_log WHERE ID_USER='$id' AND TANGGAL BETWEEN '$awal' AND '$akhir'";
return $this->db->query($sql)->result_array();
}

public function query_cek_userid_date($id,$awal,$akhir){
$sql = "select * from data_cek WHERE ID_USER='$id' AND TANGGAL BETWEEN '$awal' AND '$akhir'";
return $this->db->query($sql)->result_array();
}

public function query_clientvisit_userid_date($id,$awal,$akhir){
$sql = "select * from data_clientvisit WHERE ID_USER='$id' AND TANGGAL BETWEEN '$awal' AND '$akhir'";
return $this->db->query($sql)->result_array();
}

public function query_clientvisit_date($awal,$akhir){
$sql = "select * FROM user u JOIN data_clientvisit n ON n.ID_USER=u.ID WHERE TANGGAL BETWEEN '$awal' AND '$akhir'";
return $this->db->query($sql)->result_array();
}

public function query_cek_date($awal,$akhir){
$sql = "select * from data_cek WHERE TANGGAL BETWEEN '$awal' AND '$akhir'";
return $this->db->query($sql)->result_array();
}

public function sum_pembelian($id){
$sql = "SELECT COUNT(REQUESTER) as TOTAL FROM data_request WHERE REQUESTER='$id'";
return $this->db->query($sql)->result_array();
}

public function last_row($table){
$sql = "select * from $table ORDER BY id DESC LIMIT 1";
return $this->db->query($sql)->result_array();
}

public function insert($table,$data){
$this->db->insert($table, $data);
return $this->db->insert_id();
}

public function delete_table($id,$table){
$this->db->where('ID', $id);
return $this->db->delete($table);
}

public function delete_item_session($id){
$this->db->where('SESSION_ID', $id);
return $this->db->delete('request_item');
}

public function delete_trx($table,$id){
$this->db->where('NO_TRANSAKSI', $id);
return $this->db->delete($table);
}

public function query_absen_all(){
$sql = "select * FROM user u JOIN data_absen n ON n.ID_USER=u.ID";
return $this->db->query($sql)->result_array();
}

public function query_absen_all_date($awal,$akhir){
$sql = "select * FROM user u JOIN data_absen n ON n.ID_USER=u.ID WHERE n.TANGGAL BETWEEN '$awal' AND '$akhir'";
return $this->db->query($sql)->result_array();
}

public function query_log_all(){
$sql = "select * FROM user u JOIN data_log n ON n.ID_USER=u.ID";
return $this->db->query($sql)->result_array();
}

public function query_log_all_date($awal,$akhir){
$sql = "select * FROM user u JOIN data_log n ON n.ID_USER=u.ID WHERE n.TANGGAL BETWEEN '$awal' AND '$akhir'";
return $this->db->query($sql)->result_array();
}

public function query_cek_all_date($awal,$akhir){
$sql = "select * FROM user u JOIN data_cek n ON n.ID_USER=u.ID WHERE n.TANGGAL BETWEEN '$awal' AND '$akhir'";
return $this->db->query($sql)->result_array();
}

public function query_stok_barang(){
$sql = "SELECT b.BRAND,b.KODE_BMN,b.KODE_BARANG,u.UKURAN,b.NAMA_BARANG,t.NAMA_SATUAN,s.ID,s.JUMLAH,s.UNIT_HARGA,m.TANGGAL,m.NO_TRANSAKSI FROM tabel_stok s JOIN tabel_barang b ON b.ID=s.ID_BARANG JOIN data_satuan t ON t.ID=b.ID_SATUAN JOIN transaksi_barang m ON m.NO_TRANSAKSI=s.NO_TRANSAKSI JOIN data_ukuran u ON u.ID=b.KODE_BARANG WHERE s.JUMLAH!='0'";
return $this->db->query($sql)->result_array();
}

public function query_stok_barang_id($barang){
$sql = "SELECT b.BRAND,b.KODE_BMN,b.KODE_BARANG,b.NAMA_BARANG,t.NAMA_SATUAN,s.ID,s.JUMLAH,s.UNIT_HARGA,m.TANGGAL,m.NO_TRANSAKSI FROM tabel_stok s JOIN tabel_barang b ON b.ID=s.ID_BARANG JOIN data_satuan t ON t.ID=b.ID_SATUAN JOIN transaksi_barang m ON m.NO_TRANSAKSI=s.NO_TRANSAKSI WHERE s.JUMLAH!='0' AND s.ID_BARANG='$barang'";
return $this->db->query($sql)->result_array();
}

public function get_barang(){
$sql = "SELECT DISTINCT (b.NAMA_BARANG),u.UKURAN,b.BRAND,b.ID,SUM(s.JUMLAH) as STOK FROM tabel_stok s JOIN tabel_barang b ON b.ID=s.ID_BARANG JOIN data_ukuran u ON u.ID=b.KODE_BARANG WHERE s.JUMLAH!='0' GROUP by b.NAMA_BARANG,b.KODE_BARANG";
return $this->db->query($sql)->result_array();
}

public function get_item_id($session){
$sql = "SELECT b.NAMA_BARANG,b.BRAND,i.ID,b.ID as ID_BARANG,i.JUMLAH,i.HARGA_JUAL,s.NAMA_SATUAN FROM request_item i JOIN tabel_barang b ON b.ID=i.ID_BARANG JOIN data_satuan s ON s.ID=b.ID_SATUAN WHERE i.SESSION_ID='$session'";
return $this->db->query($sql)->result_array();
}

public function sisa_stok(){
$sql = "SELECT DISTINCT b.NAMA_BARANG,s.UNIT_HARGA as HARGA,s.JUMLAH as STOK,s.NO_TRANSAKSI,b.BRAND,b.KODE_BMN,b.KODE_BARANG,t.NAMA_SATUAN FROM tabel_stok s RIGHT JOIN tabel_barang b ON b.ID=s.ID_BARANG JOIN data_satuan t ON t.ID=b.ID_SATUAN WHERE s.JUMLAH!='0' GROUP by b.NAMA_BARANG,s.UNIT_HARGA";
return $this->db->query($sql)->result_array();
} 


public function query_trx_barang_masuk($awal,$akhir){
$sql = "select b.BRAND,b.KODE_BMN,u.UKURAN,m.JUMLAH as JUMLAH_MASUK,m.ID_BARANG,b.KODE_BARANG,b.NAMA_BARANG,b.ID_KATEGORI,m.TOTAL_HARGA,k.TANGGAL,m.NO_TRANSAKSI,m.JUMLAH,m.HARGA,m.ID,k.KETERANGAN,s.JUMLAH as JUMLAH_STOK,t.NAMA_SATUAN FROM transaksi_item m JOIN transaksi_barang k ON k.NO_TRANSAKSI=m.NO_TRANSAKSI JOIN tabel_barang b ON b.ID=m.ID_BARANG JOIN data_ukuran u ON u.ID=b.KODE_BARANG JOIN data_satuan t ON t.ID=b.ID_SATUAN JOIN tabel_stok s ON s.NO_TRANSAKSI=m.NO_TRANSAKSI WHERE k.TANGGAL BETWEEN '$awal' AND '$akhir' AND k.JENIS='MASUK' ORDER BY m.ID ASC";
return $this->db->query($sql)->result_array();
}

public function query_trx_barang_masuk_rep($awal,$akhir){
$sql = "select b.BRAND,b.KODE_BMN,m.JUMLAH as JUMLAH_MASUK,m.ID_BARANG,b.KODE_BARANG,b.NAMA_BARANG,b.ID_KATEGORI,m.TOTAL_HARGA,k.TANGGAL,m.NO_TRANSAKSI,m.JUMLAH,m.HARGA,m.ID,k.KETERANGAN,s.JUMLAH as JUMLAH_STOK,t.NAMA_SATUAN FROM transaksi_item m JOIN transaksi_barang k ON k.NO_TRANSAKSI=m.NO_TRANSAKSI JOIN tabel_barang b ON b.ID=m.ID_BARANG JOIN data_satuan t ON t.ID=b.ID_SATUAN JOIN tabel_stok s ON s.NO_TRANSAKSI=m.NO_TRANSAKSI WHERE k.TANGGAL BETWEEN '$awal' AND '$akhir' AND k.JENIS='MASUK' ORDER BY b.NAMA_BARANG ASC,k.TANGGAL ASC";
return $this->db->query($sql)->result_array();
}


public function query_barang_masuk_rep($awal,$akhir){
$sql = "select b.BRAND,b.KODE_BMN,b.KODE_BARANG,b.NAMA_BARANG,b.ID_KATEGORI,b.ID,m.TANGGAL,m.NO_TRANSAKSI,m.JUMLAH as JUMLAH_MASUK,m.TOTAL_HARGA,m.ID_BARANG,s.JUMLAH as JUMLAH_STOK,m.HARGA,d.NAMA_SATUAN,m.ID,m.KETERANGAN FROM transaksi_barang m JOIN tabel_barang b ON b.ID=m.ID_BARANG JOIN data_satuan d ON d.ID=b.ID_SATUAN JOIN tabel_stok s ON s.NO_TRANSAKSI=m.NO_TRANSAKSI WHERE m.TANGGAL BETWEEN '$awal' AND '$akhir' AND m.JENIS='MASUK' ORDER BY m.ID_BARANG";
return $this->db->query($sql)->result_array();
}


public function query_data_request($awal,$akhir){
$sql = "select b.BRAND,b.KODE_BMN,b.KODE_BARANG,b.NAMA_BARANG,b.ID_KATEGORI,m.STATUS,m.TANGGAL,m.REQUESTER,m.NO_REQUEST,m.INFO,m.JUMLAH,m.ID,m.KETERANGAN,p.NAMA,t.NAMA_SATUAN FROM data_request m JOIN data_pembeli p ON p.ID=m.REQUESTER JOIN tabel_barang b ON b.ID=m.ID_BARANG JOIN data_satuan t ON t.ID=b.ID_SATUAN WHERE m.TANGGAL BETWEEN '$awal' AND '$akhir' ORDER by m.ID asc";
return $this->db->query($sql)->result_array();
}

public function query_data_request_new($awal,$akhir){
$sql = "select b.BRAND,b.KODE_BMN,b.KODE_BARANG,b.NAMA_BARANG,g.NAMA,g.JURUSAN,k.STATUS,b.ID_KATEGORI,b.ID,k.TANGGAL,m.NO_REQUEST,m.JUMLAH,m.ID,k.KETERANGAN,t.NAMA_SATUAN FROM request_item m JOIN data_request k ON k.NO_REQUEST=m.NO_REQUEST JOIN tabel_pegawai g ON g.ID=k.ID_PEGAWAI JOIN tabel_barang b ON b.ID=m.ID_BARANG JOIN data_satuan t ON t.ID=b.ID_SATUAN WHERE k.TANGGAL BETWEEN '$awal' AND '$akhir'";
return $this->db->query($sql)->result_array();
}


public function query_data_request_today($awal,$akhir){
$sql = "select b.BRAND,b.KODE_BMN,b.KODE_BARANG,b.NAMA_BARANG,b.ID_KATEGORI,m.STATUS,m.TANGGAL,m.REQUESTER,m.NO_REQUEST,m.INFO,m.JUMLAH,m.ID,m.KETERANGAN,t.NAMA_SATUAN FROM data_request m JOIN tabel_barang b ON b.ID=m.ID_BARANG JOIN data_satuan t ON t.ID=b.ID_SATUAN WHERE m.TANGGAL BETWEEN '$awal' AND '$akhir' ORDER by m.ID asc";
return $this->db->query($sql)->result_array();
}

public function data_request1($awal,$akhir){
$sql = "select r.ID,r.NO_REQUEST,r.TANGGAL,p.NAMA,p.JURUSAN,r.STATUS,r.KETERANGAN FROM data_request r JOIN tabel_pegawai p ON p.ID=r.ID_PEGAWAI WHERE r.TANGGAL BETWEEN '$awal' AND '$akhir' ORDER by r.ID asc";
return $this->db->query($sql)->result_array();
}

public function data_request12($awal,$akhir){
$sql = "select r.ID,r.NO_REQUEST,r.TANGGAL,r.REQUESTER,r.STATUS,p.NAMA,i.MARGIN FROM data_request r JOIN data_pembeli p ON p.ID=r.REQUESTER JOIN transaksi_item i ON i.NO_TRANSAKSI=r.NO_REQUEST WHERE r.TANGGAL BETWEEN '$awal' AND '$akhir' ORDER by r.ID asc";
return $this->db->query($sql)->result_array();
}

public function data_request($awal,$akhir){
$sql = "select r.TANGGAL,r.NO_REQUEST,r.KETERANGAN,r.ID,r.STATUS,p.NAMA FROM data_request r JOIN data_pembeli p ON p.ID=r.REQUESTER WHERE r.TANGGAL BETWEEN '$awal' AND '$akhir' ORDER by r.ID asc";
return $this->db->query($sql)->result_array();
}

public function data_trx_keluar_backup($awal,$akhir){
$sql = "select k.KETERANGAN,k.TANGGAL,k.NO_TRANSAKSI,a.NAMA,k.ID,i.MARGIN FROM transaksi_barang k JOIN transaksi_item i ON i.NO_TRANSAKSI=k.NO_TRANSAKSI JOIN tabel_admin a ON a.ID=k.ID_ADMIN WHERE k.TANGGAL BETWEEN '$awal' AND '$akhir' and k.JENIS='KELUAR' ORDER by k.ID asc";
return $this->db->query($sql)->result_array();
}

public function data_trx_keluar($awal,$akhir){
$sql = "select k.KETERANGAN,k.TANGGAL,k.NO_TRANSAKSI,a.NAMA,k.ID FROM transaksi_barang k JOIN tabel_admin a ON a.ID=k.ID_ADMIN WHERE k.TANGGAL BETWEEN '$awal' AND '$akhir' and k.JENIS='KELUAR' ORDER by k.ID asc";
return $this->db->query($sql)->result_array();
}


public function get_request_item_out($noreq){
$sql = "select b.BRAND,b.KODE_BMN,b.KODE_BARANG,b.NAMA_BARANG,m.ID_BARANG,b.ID_KATEGORI,m.HARGA_JUAL,m.NO_TRANSAKSI,m.JUMLAH,m.MARGIN,m.ID,t.NAMA_SATUAN FROM transaksi_item m JOIN tabel_barang b ON b.ID=m.ID_BARANG JOIN data_satuan t ON t.ID=b.ID_SATUAN WHERE m.NO_TRANSAKSI='$noreq' ORDER by m.ID asc";
return $this->db->query($sql)->result_array();
}

public function get_request_item($noreq){
$sql = "select b.BRAND,b.KODE_BMN,b.KODE_BARANG,b.NAMA_BARANG,m.ID_BARANG,b.ID_KATEGORI,m.HARGA_JUAL,m.NO_REQUEST,m.JUMLAH,m.ID,t.NAMA_SATUAN FROM request_item m JOIN tabel_barang b ON b.ID=m.ID_BARANG JOIN data_satuan t ON t.ID=b.ID_SATUAN WHERE m.NO_REQUEST='$noreq' ORDER by m.ID asc";
return $this->db->query($sql)->result_array();
}

public function query_trx_barang_keluar($awal,$akhir){
$sql = "select b.BRAND,b.KODE_BMN,b.KODE_BARANG,b.NAMA_BARANG,b.ID_KATEGORI,b.ID,m.TOTAL_HARGA,k.TANGGAL,m.NO_TRANSAKSI,m.JUMLAH,m.HARGA,m.ID,k.KETERANGAN,t.NAMA_SATUAN FROM transaksi_item m JOIN transaksi_barang k ON k.NO_TRANSAKSI=m.NO_TRANSAKSI JOIN tabel_barang b ON b.ID=m.ID_BARANG JOIN data_satuan t ON t.ID=b.ID_SATUAN WHERE k.TANGGAL BETWEEN '$awal' AND '$akhir' AND k.JENIS='KELUAR'";
return $this->db->query($sql)->result_array();
}

public function query_barang_keluar_new_rep($awal,$akhir){
$sql = "select b.BRAND,b.KODE_BMN,b.KODE_BARANG,b.NAMA_BARANG,b.ID_KATEGORI,b.ID,m.TOTAL_HARGA,k.TANGGAL,m.NO_TRANSAKSI,m.JUMLAH,m.HARGA,m.ID,k.KETERANGAN,t.NAMA_SATUAN FROM transaksi_item m JOIN transaksi_barang k ON k.NO_TRANSAKSI=m.NO_TRANSAKSI JOIN tabel_barang b ON b.ID=m.ID_BARANG JOIN data_satuan t ON t.ID=b.ID_SATUAN WHERE k.TANGGAL BETWEEN '$awal' AND '$akhir' AND k.JENIS='KELUAR' ORDER BY b.NAMA_BARANG,k.TANGGAL";
return $this->db->query($sql)->result_array();
}

public function laporan_transaksi($awal,$akhir){
$sql = "select m.TANGGAL as TANGGAL,b.KODE_BMN,m.JENIS,b.NAMA_BARANG,m.JUMLAH,d.NAMA_SATUAN FROM transaksi_barang m JOIN tabel_barang b ON b.ID=m.ID_BARANG JOIN data_satuan d ON d.ID=b.ID_SATUAN JOIN tabel_stok s ON s.NO_TRANSAKSI=m.NO_TRANSAKSI WHERE m.JENIS='MASUK' AND m.TANGGAL BETWEEN '$awal' AND '$akhir'
UNION ALL
select k.TANGGAL as TANGGAL ,b.KODE_BMN,k.JENIS,b.NAMA_BARANG,m.JUMLAH,t.NAMA_SATUAN FROM transaksi_item m JOIN transaksi_barang k ON k.NO_TRANSAKSI=m.NO_TRANSAKSI JOIN tabel_barang b ON b.ID=m.ID_BARANG JOIN data_satuan t ON t.ID=b.ID_SATUAN WHERE k.JENIS='KELUAR' AND k.TANGGAL BETWEEN '$awal' AND '$akhir'
ORDER BY TANGGAL
";
return $this->db->query($sql)->result_array();
}

public function summary_trx($awal,$akhir){
$sql = "SELECT DISTINCT i.ID_BARANG,g.NAMA_BARANG,i.ID_STOK,i.HARGA,g.KODE_BMN,t.NAMA_SATUAN FROM transaksi_barang b JOIN transaksi_item i ON i.NO_TRANSAKSI=b.NO_TRANSAKSI JOIN tabel_barang g ON g.ID=i.ID_BARANG JOIN data_satuan t ON t.ID=g.ID_SATUAN WHERE b.TANGGAL BETWEEN '$awal' AND '$akhir' GROUP BY g.NAMA_BARANG,i.HARGA";
return $this->db->query($sql)->result_array();
}

public function get_trx_sum($id,$jenis,$awal,$akhir){
$sql = "SELECT SUM(JUMLAH) as JUMLAH,MIN(i.STOK_AKHIR) as STOK_AKHIR FROM transaksi_barang b JOIN transaksi_item i ON i.NO_TRANSAKSI=b.NO_TRANSAKSI WHERE b.JENIS='$jenis' AND i.ID_STOK='$id' AND b.TANGGAL BETWEEN '$awal' AND '$akhir'";
return $this->db->query($sql)->result_array();
}


public function day_keluar(){
$sql = "SELECT DISTINCT b.TANGGAL, COUNT(b.ID) as TOTAL, SUM(i.JUMLAH) as JUMLAH FROM data_request t JOIN transaksi_barang b ON b.NO_TRANSAKSI=t.NO_REQUEST JOIN transaksi_item i ON i.NO_TRANSAKSI=t.NO_REQUEST GROUP BY b.TANGGAL DESC LIMIT 20 ";
return $this->db->query($sql)->result_array();
}

public function day_keluar_tgl(){
$sql = "SELECT DISTINCT TANGGAL, COUNT(JURUSAN) as TOTAL FROM data_request GROUP by TANGGAL DESC LIMIT 20 ";
return $this->db->query($sql)->result_array();
}

public function status_req(){
$sql = "SELECT DISTINCT b.TANGGAL, COUNT(b.ID) as TOTAL FROM data_request t JOIN transaksi_barang b ON b.NO_TRANSAKSI=t.NO_REQUEST JOIN transaksi_item i ON i.NO_TRANSAKSI=t.NO_REQUEST WHERE t.STATUS='DISETUJUI' GROUP BY b.TANGGAL ORDER BY b.TANGGAL DESC LIMIT 7";
return $this->db->query($sql)->result_array();
}

public function get_max_id($table){
$sql = "select MAX(ID) as ID from $table";
return $this->db->query($sql)->result_array();
}

public function update($data,$id,$table){
$this->db->where('ID', $id);
return $this->db->update($table, $data);
}

public function update_session($data,$id){
$this->db->where('SESSION_ID', $id);
return $this->db->update('request_item', $data);
}

public function update_trx($data,$id,$table){
$this->db->where('NO_TRANSAKSI', $id);
return $this->db->update($table, $data);
}

public function query_dataid($id,$table){
$sql = "select * from $table where ID='$id'";
return $this->db->query($sql)->result_array();
}

public function query_item_id($id,$session){
$sql = "select * from request_item where ID_BARANG='$id' AND SESSION_ID='$session'";
return $this->db->query($sql)->result_array();
}

public function sum_barang(){
$sql = "select COUNT(ID) as JUMLAH from tabel_barang";
return $this->db->query($sql)->result_array();
}

public function sum_request(){
$sql = "select COUNT(ID) as JUMLAH from data_request";
return $this->db->query($sql)->result_array();
}

public function sum_modal(){
$sql = "select SUM(KREDIT) as KREDIT, SUM(DEBIT) as DEBIT from data_transaksi where JENIS='MODAL'";
return $this->db->query($sql)->result_array();
}

public function terjual(){
$sql = "select SUM(m.JUMLAH) as JUMLAH,SUM(m.MARGIN) as UNTUNG FROM transaksi_item m JOIN transaksi_barang k ON k.NO_TRANSAKSI=m.NO_TRANSAKSI WHERE k.JENIS='KELUAR'";
return $this->db->query($sql)->result_array();
}

public function terjualm($awal,$akhir){
$sql = "select SUM(m.JUMLAH) as JUMLAH,SUM(m.MARGIN) as UNTUNG FROM transaksi_item m JOIN transaksi_barang k ON k.NO_TRANSAKSI=m.NO_TRANSAKSI WHERE k.JENIS='KELUAR' AND k.TANGGAL BETWEEN '$awal' AND '$akhir'";
return $this->db->query($sql)->result_array();
}

public function danastok(){
$sql = "select SUM(UNIT_HARGA) as TOTAL,SUM(JUMLAH) as JUMLAH FROM tabel_stok";
return $this->db->query($sql)->result_array();
}

public function sum_laba(){
$sql = "select SUM(KREDIT) as KREDIT, SUM(DEBIT) as DEBIT from data_transaksi where JENIS='LABA'";
return $this->db->query($sql)->result_array();
}

public function sum_labam($awal,$akhir){
$sql = "select SUM(KREDIT) as KREDIT, SUM(DEBIT) as DEBIT from data_transaksi where JENIS='LABA' AND DATETIME BETWEEN '$awal' AND '$akhir'";
return $this->db->query($sql)->result_array();
}


public function most_barangjenis($jenis){
$sql = "SELECT DISTINCT r.NAMA_BARANG,SUM(i.JUMLAH) as JUMLAH FROM transaksi_barang b JOIN transaksi_item i ON i.NO_TRANSAKSI=b.NO_TRANSAKSI JOIN tabel_barang r ON r.ID=i.ID_BARANG WHERE b.JENIS='$jenis' GROUP BY r.NAMA_BARANG ORDER BY JUMLAH DESC";
return $this->db->query($sql)->result_array();
}

public function most_barangukuran($jenis){
$sql = "SELECT DISTINCT u.UKURAN,SUM(i.JUMLAH) as JUMLAH FROM transaksi_barang b JOIN transaksi_item i ON i.NO_TRANSAKSI=b.NO_TRANSAKSI JOIN tabel_barang r ON r.ID=i.ID_BARANG JOIN data_ukuran u ON u.ID=r.KODE_BARANG WHERE b.JENIS='$jenis' GROUP BY u.UKURAN ORDER BY JUMLAH DESC";
return $this->db->query($sql)->result_array();
}













}
?>