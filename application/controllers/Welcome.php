<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
    
    public function doSave()
	{
        $insert = array(
                'nama'      => trim(strip_tags($this->input->post("nama"))),
                'jumlah'    => trim(strip_tags($this->input->post("jumlah")))
                 );
            $this->db->insert('undangan', $insert);
            echo "<script>window.alert('Terimakasih Atas Konfirmasinya');</script>";
            redirect('', 'refresh');
    }    
    
    public function SaveKomentar()
	{
        $insert = array(
                'pengirim'      => trim(strip_tags($this->input->post("pengirim"))),
                'alamat'        => trim(strip_tags($this->input->post("alamat"))),
                'komentar'      => trim(strip_tags($this->input->post("komentar")))
                 );
            $this->db->insert('komentar', $insert);
            echo "<script>window.alert('Terimakasih Atas atas ucapan dan doanya');</script>";
            redirect('', 'refresh');
    }
    
    public function Invitation()
	{
		$this->load->view('invitation');
	}
}