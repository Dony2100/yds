<?php defined('BASEPATH') or exit('No direct script access allowed');
 
class Media_model extends CI_Model
{
    public $table = 'antihoax_media';

    public function get_media($id)
    {
        $find = $this->db->select()->where('article_id', $id)->from($this->table)->get();
        return $find->result();
    }

    /**
     * used by api, dont use for backend
     * @param  [type] $hash [description]
     * @return [type]       [description]
     */
    public function get_media_by_hash($hash)
    {
    	$base = base_url();
    	$find = $this->db->select("article_id, media_name, CONCAT('".$base."', media_path) as media_path")->where('media_hash', $hash)->from($this->table)->get();
        return $find->result();
    }
    
}
