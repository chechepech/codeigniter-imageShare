<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Image_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function save_image($data = NULL)
    {
        do {
            $img_url_code = random_string('alnum', 8);
            $this->db->where('img_url_code = ', $img_url_code);
            $this->db->from('images');
            $num = $this->db->count_all_results();
        } while ($num >= 1);
        $query = "INSERT INTO images (img_url_code, img_image_name, img_dir_name) VALUES (?,?,?)";
        $result = $this->db->query($query, array($img_url_code,$data['image_name'], $data['img_dir_name']));
        if ($result) {
            return $img_url_code;
        } else {
            return flase;
        }
    }
    public function fetch_image($img_url_code = NULL)
    {
        $query = "SELECT * FROM images WHERE img_url_code = ?";
        $result = $this->db->query($query, array($img_url_code));
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
}
