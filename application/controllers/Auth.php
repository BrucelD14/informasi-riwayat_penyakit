<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

  function __construct(){
		parent::__construct();
		$this->load->model('Model_login');
		
		if($this->session->userdata('status')=="login"){
			?>
			<script>
			window.location="<?php echo base_url(); ?>page";
			</script>
			<?php
		}
		
	}

  public function index()
	{
		redirect(base_url('auth/login'));
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function register()
	{
		$data['hasil']= $this->Model_login->tampil('tbl_instansi')->result();
		$this->load->view('daftar', $data);
	}

	public function admin()
	{
		$this->load->view('admin');
	}

  function login_instansi()
	{
		$user = $this->input->post('username');
		$pass = $this->input->post('password');
		
		$where = array(
			'username'=>$user,
			'password'=>md5($pass)
		);
		$cek = $this->Model_login->cek_login('tbl_instansi',$where)->num_rows();
		$hasil= $this->Model_login->cek_login('tbl_instansi',$where)->result();

		if($cek > 0 ){
			foreach ($hasil as $data) {
				$sesi = array(
					'username'=>$user,
					'nama'=>$data->nama_instansi,
					'level'=>"Instansi",
					'status'=>"login",
					'login'=>1
					);
			};
			$this->session->set_userdata($sesi);
			redirect(base_url('page'));
		}else{
			$this->session->set_flashdata('msg','<script>alert("GAGAL!!\n Email Atau Password yang anda masukan salah atau tidak terdaftar");</script>');
			redirect(base_url('auth/login'));
		}
	}

	function login_dokter()
	{
		$user = $this->input->post('username');
		$pass = $this->input->post('password');
		
		$where = array(
			'username'=>$user,
			'password'=>md5($pass)
		);
		$cek = $this->Model_login->cek_login('tbl_dokter',$where)->num_rows();
		$hasil= $this->Model_login->cek_login('tbl_dokter',$where)->result();

		if($cek > 0 ){
			foreach ($hasil as $data) {
				$sesi = array(
					'username'=>$user,
					'nama'=>$data->nama,
					'level'=>"Dokter",
					'status'=>"login",
					'login'=>1
					);
			};
			$this->session->set_userdata($sesi);
			redirect(base_url('page'));
		}else{
			$this->session->set_flashdata('msg','<script>alert("GAGAL!!\n Email Atau Password yang anda masukan salah atau tidak terdaftar");</script>');
			redirect(base_url('auth/login'));
		}
	}

	function login_admin()
	{
		$user = $this->input->post('username');
		$pass = $this->input->post('password');
		
		$where = array(
			'username'=>$user,
			'password'=>md5($pass)
		);
		$cek = $this->Model_login->cek_login('tbl_admin',$where)->num_rows();
		$hasil= $this->Model_login->cek_login('tbl_admin',$where)->result();

		if($cek > 0 ){
			foreach ($hasil as $data) {
				$sesi = array(
					'username'=>$user,
					'nama'=>$data->nama,
					'level'=>"Dokter",
					'status'=>"login",
					'login'=>2
					);
			};
			$this->session->set_userdata($sesi);
			redirect(base_url('page'));
		}else{
			$this->session->set_flashdata('msg','<script>alert("GAGAL!!\n Email Atau Password yang anda masukan salah atau tidak terdaftar");</script>');
			redirect(base_url('auth/login'));
		}
	}

	public function daftar_instansi()
	{
		$kode = $_POST['kode'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$data = array(
			'kode_instansi'=>$kode,
			'nama_instansi'=>$nama,
			'alamat_instansi'=>$alamat,
			'username'=>$username,
			'password'=>$password,
			);
		$this->Model_login->tambah('tbl_instansi',$data);
		$this->session->set_flashdata('msg',
		'<script>alert("Pendaftaran Berhasil !!");</script>'
		);
		redirect(base_url('auth/login'));
	}
	

	public function daftar_dokter()
	{
		$nik = $_POST['nik'];
		$nama = $_POST['nama'];
		$instansi = $_POST['instansi'];
		$alamat = $_POST['alamat'];
		$spesialis = $_POST['spesialis'];
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$data = array(
			'nik'=>$nik,
			'nama'=>$nama,
			'asal_instansi'=>$instansi,
			'alamat_dokter'=>$alamat,
			'jenis_spesialis'=>$spesialis,
			'username'=>$username,
			'password'=>$password,
			);
		$this->Model_login->tambah('tbl_dokter',$data);
		$this->session->set_flashdata('msg',
		'<script>alert("Pendaftaran Berhasil !!");</script>'
		);
		redirect(base_url('auth/login'));
	} 

	function logout()
	{
		$this->session->sess_destroy();
		$this->session->userdata('status')==" ";
		redirect(base_url('auth/login'));
	} 

	

}
