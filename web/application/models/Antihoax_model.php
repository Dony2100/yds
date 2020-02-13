<?php defined('BASEPATH') or exit('No direct script access allowed');
 
class Antihoax_model extends CI_Model
{
 
    public function __construct()
    {
        parent::__construct();
    }

    public function count_all()
    {

        $tags = $this->input->get('tags');
        if($tags !== NULL){
            $this->db->like('tags', $tags);
        }
        
        $this->db->from('antihoax');
        return $this->db->count_all_results();
    }

    public function find_api($id)
    {

        $tags = $this->input->get('tags');
        if($tags !== NULL){
            $this->db->like('tags', $tags);
        }

        $column = "a.id, authors, 
        status, classification, title, content, fact, `references`, source_issue, source_link, picture1, picture2, tanggal, tags, conclusion";


        $this->db->select($column)->from('antihoax a')->where('a.id', $id);
        $find = $this->db->join('antihoax_content c', 'c.antihoax_id=a.id', 'left')->get();
        if ($find->num_rows() == 1) {
            $antihoax = $find->row();
            $author = explode(',', $antihoax->authors);
            $author_name = '';
            foreach($author as $r){
                if($r !== ''){
                    $q = $this->db->select('nama')->where('id', $r)->from('author')->get()->row();
                    if(isset($q->nama)){
                        $author_name .= $q->nama.',';
                    }
                }
            }
            $author_name = ltrim( rtrim($author_name,','), ',');
            $antihoax->authors = $author_name;

            $claim_review = $this->db->select('claim_date_published, claim_url, claim_title, claim_author_name, claim_rating_value, claim_author_type, claimed_item_author_name, claimed_item_author_type, claimed_item_url, claimed_item_published_date')->where('article_id', $id)->get('claim_review')->result();
            $antihoax->claim_review = $claim_review;

            $_media = $this->db->select('media_name, media_path')->where('article_id', $id)->get('antihoax_media')->result();
            $media[] = [];
            $i = 0;
            foreach ($_media as $r) {
                $media[$i]['media_name'] = $r->media_name;
                $media[$i]['media_path'] = base_url().$r->media_path;
                $i++;
            }
            $antihoax->media = $media;

            return $antihoax;
        } else {
            return 'Not found';
            //show_error('Report not found.');
        }
    }

    /**
     * get data based on condition
     * @param  string $method column searchable
     * @param  strin $value value
     * @return object array object
     * notes: query can be more effective
     */
    public function get_data_where($total, $method, $value, $limit = NULL, $offset = NULL)
    {

        $tags = $this->input->get('tags');
        if($tags !== NULL){
            $this->db->like('tags', $tags);
        }

        $column = "a.id, authors, 
        status, classification, title, content, fact, `references`, source_issue, source_link, picture1, picture2, tanggal, tags, conclusion";


        if($method == 'all'){
            $this->db->select($column)->from('antihoax a');
            $this->db->group_start();
            $this->db->like('title', $value, 'both');
            $this->db->or_like('content', $value, 'both');
            $this->db->group_end();
        }else{
            $this->db->select($column)->from('antihoax a')->like($method, $value, 'both');
        }

        $all = $this->db->join('antihoax_content c', 'c.antihoax_id=a.id', 'left')->get('', $limit, $offset);
        //return total
        if($total == 1){
            return $all->num_rows();
        }else{
            $all = $all->result();
        }

        foreach($all as $r) {
            if(!empty($r->authors)){
                $author = explode(',', $r->authors);
                $author_name = '';
                foreach($author as $x){
                    if($x !== ''){
                        $q = $this->db->select('nama')->where('id', $x)->from('author')->get()->row();
                        if(isset($q->nama)){
                            $author_name .= $q->nama.',';
                        }
                    }
                }
                $author_name = ltrim( rtrim($author_name,','), ',');
                $r->authors = $author_name;
            }else{
                $r->authors = null;
            }

            $claim_review = $this->db->select('claim_date_published, claim_url, claim_title, claim_author_name, claim_rating_value, claim_author_type, claimed_item_author_name, claimed_item_author_type, claimed_item_url, claimed_item_published_date')->where('article_id', $r->id)->get('claim_review')->result();

            $r->claim_review = $claim_review;

            $_media = $this->db->select('media_name, media_path')->where('article_id', $r->id)->get('antihoax_media')->result();
            $media[] = [];
            $i = 0;
            foreach ($_media as $y) {
                $media[$i]['media_name'] = $y->media_name;
                $media[$i]['media_path'] = base_url().$y->media_path;
                $i++;
            }
            $r->media = $media;
            
        }

        return $all;
    }

    // IF(status=0, 'Dalam Proses', 
    //     IF(status=1, 'BENAR', 
    //     IF(status=2, 'SALAH', 
    //     IF(status=3, 'Berita', 
    //     IF(status=4, 'Edukasi', 
    //     IF(status=5, 'Klarifikasi',
    //     IF(status=10, 'In Progress', 
    //     IF(status=11, 'TRUE', 
    //     IF(status=12, 'FALSE', 
    //     IF(status=13, 'News', 
    //     IF(status=14, 'Education', 
    //     IF(status=15, 'Clarification', 
    //     '-')))))))))))) as status,
    public function get_all($limit = 10, $offset = 0, $random = false)
    {
        if($random){
            $_rand = 'ORDER BY RAND()';
        }else{
            $_rand = 'ORDER BY id DESC';
        }

        $tags = $this->input->get('tags');
        if($tags !== NULL){
            $tags = " WHERE a.tags LIKE '%".$tags."%' ";
        }else{
            $tags = "";
        }
        
        $sql = "SELECT a.id, authors, 
        status, classification, title, content, fact, `references`, source_issue, source_link, picture1, picture2, tanggal, tags, conclusion FROM antihoax a LEFT JOIN antihoax_content c ON c.antihoax_id=a.id $tags $_rand LIMIT ? OFFSET ?";

        $query = $this->db->query($sql, array((int)$limit, (int)$offset));
        return  $query->result();
    }

    /**
     * get author link based on antihoax data
     * @param  int $id data_id
     * @return object array object
     */
    public function get_author_link($id)
    {
        $sql = "select al.author_id, al.data_id, al.urutan, a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author_link al left join author a on a.id=al.author_id where a.nama is not null and al.data_id=? order by al.urutan asc";
        $query = $this->db->query($sql, array($id));
        return $query->result();
    }

    /**
     * get antihoax related link based on author
     * @param  int $id author_id
     * @return object array object
     */
    public function get_data_link($id)
    {

        $tags = $this->input->get('tags');
        if($tags !== NULL){
            $tags = " AND a.tags LIKE '%".$tags."%' ";
        }else{
            $tags = "";
        }

        $sql = "select al.author_id, al.data_id, a.id, a.authors, 
                IF(a.status=0, 'Dalam Proses', 
                IF(a.status=1, 'BENAR', 
                IF(a.status=2, 'SALAH', 
                IF(a.status=3, 'Berita', 
                IF(a.status=4, 'Edukasi', 
                IF(a.status=5, 'Klarifikasi',
                IF(a.status=10, 'In Progress', 
                IF(a.status=11, 'TRUE', 
                IF(a.status=12, 'FALSE', 
                IF(a.status=13, 'News', 
                IF(a.status=14, 'Education', 
                IF(a.status=15, 'Clarification', 
                '-')))))))))))) as status, 
                a.classification, c.title, c.content, c.fact, a.`references`, a.source_issue, a.source_link, a.picture1, a.picture2, a.tanggal, a.tags, a.conclusion 
                                from author_link al 
                                left join antihoax a on a.id=al.data_id 
                                left join antihoax_content c on a.id=c.antihoax_id
                                where al.author_id=? and a.id is not null $tags order by a.id desc";

        $query = $this->db->query($sql, array($id));
        return $query->result();
    }

    /**
     * get author
     * @return [type]     [description]
     */
    public function get_authors()
    {
        $tags = $this->input->get('tags');
        if($tags !== NULL){
            $tags = " WHERE a.tags LIKE '%".$tags."%' ";
        }else{
            $tags = "";
        }

        $sql = "select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a $tags";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function get_author($id)
    {
        $tags = $this->input->get('tags');
        if($tags !== NULL){
            $tags = " AND a.tags LIKE '%".$tags."%' ";
        }else{
            $tags = "";
        }

        $sql = "select a.id, a.nama, a.deskripsi, a.website, concat('https://yudistira.turnbackhoax.id/uploads/thumbnail/', a.icon) as icon from author a where a.id = ? $tags";
        $query = $this->db->query($sql, array($id));
        return $query->row();
    }
    
}
