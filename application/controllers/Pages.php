<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
		$listHotel = $this->db->query("SELECT * FROM alternatif")->result_array(); 

		$data = [
			'listHotel' => $listHotel,
			'menu' => 'index'
		];

		$this->load->view('pages/templates/header', $data);
		$this->load->view('pages/index');
		$this->load->view('pages/templates/footer');
	}
	
	public function rekomendasi()
	{
		$listHotel = $this->db->query("SELECT * FROM alternatif")->result_array(); 
		$listKriteria = $this->db->query("SELECT * FROM kriteria")->result_array();
		
		$data = [
			'listHotel' => $listHotel,
			'listKriteria' => $listKriteria,
			'menu' => 'rekomendasi'
		];

		$this->load->view('pages/templates/header', $data);
		$this->load->view('pages/rekomendasi');
		$this->load->view('pages/templates/footer');
	}

	public function detail_rekomendasi($id = null)
	{
		if (!$id) {
			show_404(); // Atau redirect jika ingin kembali ke halaman sebelumnya
		}

		// Ambil info lengkap alternatif/hotel
		$hotel = $this->db->get_where('alternatif', ['id_alternatif' => $id])->row_array();

		// Ambil daftar kriteria dan sub-kriteria untuk alternatif ini
		$listHotel = $this->db->query("
			SELECT 
				kac.*, 
				k.nama_kriteria, 
				sk.nama_sub_kriteria
			FROM kec_alt_kriteria kac 
			JOIN kriteria k ON k.id_kriteria = kac.f_id_kriteria 
			JOIN sub_kriteria sk ON sk.id_sub_kriteria = kac.f_id_sub_kriteria 
			WHERE kac.f_id_alternatif = '" . $this->db->escape_str($id) . "'
		")->result_array();

		$data = [
			'listHotel' => $listHotel,
			'hotel' => $hotel,
			'menu' => 'rekomendasi'
		];

		$this->load->view('pages/templates/header', $data);
		$this->load->view('pages/detail_rekomendasi', $data);
		$this->load->view('pages/templates/footer');
	}


	public function proses()
    {
        header('Content-Type: application/json');

        $nama   = $this->input->post('name', TRUE);
        $email  = $this->input->post('email', TRUE);
        $pesan  = $this->input->post('message', TRUE);

        if (empty($nama) || empty($email) || empty($pesan)) {
            echo json_encode(['status' => 'error', 'message' => 'Semua field wajib diisi.']);
            return;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo json_encode(['status' => 'error', 'message' => 'Alamat email tidak valid.']);
            return;
        }

        $simpan = $this->db->insert('kontak', [
            'nama' => $nama,
            'email' => $email,
            'pesan' => $pesan,
        ]);

        if ($simpan) {
            echo json_encode(['status' => 'success', 'message' => 'Pesan Anda berhasil dikirim!']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Gagal menyimpan pesan.']);
        }
    }
}