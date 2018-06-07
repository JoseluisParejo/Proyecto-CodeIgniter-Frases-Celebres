<?php
	class Welcome_model extends CI_Model {

		public function __construct(){
			$this->load->database();
		}
		public function get($id){
			$query = $this->db->get('product');
			return $query->result_array();
		}
        public function getUnAutor($id=null) {
            if($id != null) {
                $query = $this->db->get_where('autores',array('id_autor' => $id));
                $ar = $query->result_array();
                return $ar[0]['nombre_completo'];
            }else { echo "Error";}
            return "Errrror";
        }
        public function getAutores($id=null) {
            if($id===null) {
                $redis = new Redis();
                $redis -> pconnect("localhost");
                $redis -> select(7);
                $ar = $redis -> smembers("frases:autores:set");
                foreach($ar as $i =>  $nombre) {
                $array[$i]['nombre'] = $nombre;
                $query = $this->db->get_where('autores',array('nombre_completo' => $nombre));
                $reg = $query->result_array();
                $array[$i]['id'] = $reg[0]['id_autor'];
                }
                return $array;
            }else{
                $query = $this->db->get_where('frases',array('id_autor' => $id));
                return $query->result_array();
            }
        }
    }
?>