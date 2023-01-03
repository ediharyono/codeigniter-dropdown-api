<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Api_controller extends CI_Controller
{
	public function daftar_bahasa_pemrograman()
	{
		$this->load->model("Bahasa_pemrograman_model");

		if ($this->input->get('searchTerm', TRUE)) {
			$data = $this->Bahasa_pemrograman_model->get_daftar_bahasa_pemrograman_like($this->input->get('searchTerm', TRUE));
		} else {
			$data = $this->Bahasa_pemrograman_model->get_daftar_bahasa_pemrograman();
		}

		$this->output->set_status_header(200)->set_content_type('application/json')->set_output(json_encode($data));
	}
}
