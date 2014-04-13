<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class csv extends CI_Controller {
    
	public function index()
	{
		$this->load->view('csv_upload', array('error' => ''));
	}
    
    public function do_upload()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'csv';
        $config['max_size'] = '100';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('csvfile'))
        {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('csv_upload', $error);
        }
        else
        {
            $upload_data = $this->upload->data();
            
            // start to read the CSV file
            $this->load->library('csvreader');
            $file_path = $upload_data['full_path'];
      
            $csv_data = $this->csvreader->parse_file($file_path); 
            $csv_fields = $this->csvreader->get_fields();
            
            // list your database table
            $tables = $this->db->list_tables();
            foreach($tables as $table)
            {
                $fields = $this->db->list_fields($table);
                
                if($fields == $csv_fields) // match to one of database table
                {
                    // insert the record
                    foreach($csv_data as $row){                        
                        $this->db->insert($table, $row);
                    }
                }
            }
            
            $data = array(
                'upload_data' => $upload_data,
                'csv_data' => $csv_data,
            );
            
            $this->load->view('upload_success', $data);
        }
    }
}

/* End of file csv.php */
/* Location: ./application/controllers/csv.php */