<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Form_validation extends CI_Form_validation
{

    public function __construct($config = array())
    {
        parent::__construct($config);
    }

    /**
     * Is Unique on Update
     *
     * Check if the input value doesn't already exist except on the record it self
     * in the specified database field.
     * is_unique_update[post.slug.kipas-angin']
     *
     * @param   string  $str
     * @param   string  $field
     * @return  bool
     */
    public function is_unique_update($str, $field)
    {
        sscanf($field, '%[^.].%[^.].%[^.]', $table, $field, $id); //post //slug //kategori-slug
        return isset($this->CI->db)
        ? ($this->CI->db->limit(1)->get_where($table, array($field => $str, $field . ' !=' => $id))->num_rows() === 0)
        : false;
    }

    /**
     * sets the error message associated with a particular field
     *
     * @param   string  $field  Field name
     * @param   string  $error  Error message
     * used in controller like this:
     * $this->form_validation->setError('username', 'Invalid login credentials');
     * added from: https://stackoverflow.com/a/35165483
     */
    public function setError($field, $error)
    {
        $this->_error_array[$field] = $error;
    }

    /**
     * set field data to particulard field name
     * @param string $field Field Name
     * @param string $erroe Error message
     * $this->form_validation->setFieldData('username', 'Invalid login credentials');
     * this function should used along with setError above (to display error message in specific field name with form_error() function)
     */
    public function setFieldData($field, $error)
    {
        $this->_field_data[$field]['error']    = $error;
        $this->_field_data[$field]['is_array'] = false;
        $this->_field_data[$field]['postdata'] = null;
    }

}

/* End of file MY_Form_validation.php */
/* Location: ./application/libraries/MY_Form_validation.php */
