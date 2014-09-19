<?php
	class M_crud extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
//barang
		function get_crud_all() {
			$query=$this->db->query("select * from barang order by kode_barang asc");
			return $query->result();
		}

		function tambah() {
			$data = array(
				'kode_barang' => $this->input->post('kode_barang'),
				'chasis' => $this->input->post('chasis'),
				'type' => $this->input->post('type'),
				'spec' => $this->input->post('spec'),
				'nama_barang' => $this->input->post('nama_barang'),
				'qty' => $this->input->post('qty'),
				'harga' => $this->input->post('harga')
			);
			return $this->db->insert('barang', $data);
		}

		function get_crud_edit($id) {
				$this->db->where('idbarang',$id);
				$query = $this->db->get('barang');
				if($query ->num_rows > 0)
			return $query;
			else
			return null;
		}

		function edit() {
			$id = $this->input->post('idbarang');
			$data = array (
			'kode_barang' => $this->input->post('kode_barang'),
				'chasis' => $this->input->post('chasis'),
				'type' => $this->input->post('type'),
				'spec' => $this->input->post('spec'),
				'nama_barang' => $this->input->post('nama_barang'),
				'qty' => $this->input->post('qty'),
				'harga' => $this->input->post('harga')
			);
			$this->db->where('idbarang',$id);
			$this->db->update('barang',$data);
		}

		function hapus_d($id){
			$this->db->where('idbarang',$id);
			$this->db->delete('barang');
		}
	
	}
?>
