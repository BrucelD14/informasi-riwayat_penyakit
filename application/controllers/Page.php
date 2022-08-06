<?php
class Page extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Model_page');
		
		if($this->session->userdata('status')!= "login"){
			redirect(base_url('auth'));
		}
	}
	
	public function index(){
		$data['title'] = 'Home';
		$this->load->view('header', $data);
    $this->load->view('home');
    $this->load->view('footer');
	} 

	public function pasien(){
		$data['hasil']= $this->Model_page->tampil('tbl_pasien')->result();
		$data['title'] = 'Pasien';
		$this->load->view('header', $data);
    $this->load->view('pasien');
    $this->load->view('footer');
	} 

	public function tambah(){
		if($this->session->userdata('login')!= 1){
			redirect(base_url('page'));
		}
		$data['title'] = 'Tambah Pasien';
		$this->load->view('header', $data);
    $this->load->view('tambah');
    $this->load->view('footer');
	}

	public function tambah_proses(){
		$nik = $_POST['nik'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$penyakit = $_POST['penyakit'];
		$pengobatan = $_POST['pengobatan'];
		$data = array(
			'nik'=>$nik,
			'nama'=>$nama,
			'alamat_pasien'=>$alamat,
			'riwayat_penyakit'=>$penyakit,
			'riwayat_pengobatan'=>$pengobatan,

			);
		$this->Model_page->tambah('tbl_pasien',$data);
		$this->session->set_flashdata('msg',
		'<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil !!</strong> <br>Menambahkan data pasien
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>'
		);
		redirect(base_url('page/pasien'));
	}

	function hapus_pasien($id){
		$where = array('id'=>$id);
		$this->Model_page->hapus('tbl_pasien',$where);
		$this->session->set_flashdata('msg',
		'<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil !!</strong> <br>Menghapus data Pasien
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>'
		);
		redirect(base_url('page/pasien'));
	}


	public function dokter(){
		if($this->session->userdata('login')!= 2){
			redirect(base_url('page'));
		}
		$data['hasil']= $this->Model_page->tampil('tbl_dokter')->result();
		$data['title'] = 'Pasien';
		$this->load->view('header', $data);
    $this->load->view('dokter');
    $this->load->view('footer');
	} 

	function hapus_dokter($id){
		if($this->session->userdata('login')!= 2){
			redirect(base_url('page'));
		}
		$where = array('id'=>$id);
		$this->Model_page->hapus('tbl_dokter',$where);
		$this->session->set_flashdata('msg',
		'<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil !!</strong> <br>Menghapus data dokter
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>'
		);
		redirect(base_url('page/dokter'));
	}

	public function instansi(){
		if($this->session->userdata('login')!= 2){
			redirect(base_url('page'));
		}
		$data['hasil']= $this->Model_page->tampil('tbl_instansi')->result();
		$data['title'] = 'Pasien';
		$this->load->view('header', $data);
    $this->load->view('instansi');
    $this->load->view('footer');
	} 

	function hapus_instansi($id){
		if($this->session->userdata('login')!= 2){
			redirect(base_url('page'));
		}
		$where = array('id'=>$id);
		$this->Model_page->hapus('tbl_instansi',$where);
		$this->session->set_flashdata('msg',
		'<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil !!</strong> <br>Menghapus data instansi
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>'
		);
		redirect(base_url('page/instansi'));
	}
	
	public function cetak(){
		$data['hasil']= $this->Model_page->tampil('tbl_produk')->result();
    $this->load->view('cetak', $data);
	}

	public function pengguna(){
		if($this->session->userdata('level')!= "1"){
			redirect(base_url('page'));
		}
		$data['hasil']= $this->Model_page->tampil('tbl_pengguna')->result();
		$data['title'] = 'Pengguna';
		$this->load->view('header', $data);
    $this->load->view('pengguna');
    $this->load->view('footer');
	}

	function hapus_pengguna($id){
		if($this->session->userdata('level')!= "1"){
			redirect(base_url('page'));
		}
		$where = array('id'=>$id);
		$this->Model_page->hapus('tbl_pengguna',$where);
		$this->session->set_flashdata('msg',
		'<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil !!</strong> <br>Menghapus pengguna
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>'
		);
		redirect(base_url('page/pengguna'));
	}
}