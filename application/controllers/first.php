<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class First extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		$this->load->view('hello_view');
		$this->test();
	}
		public function about($id)
	{
                    $data['name']='name';
                    $data['age']='age';
                    $data['surname']='surname';
                $this->load->view('about_view',$data);
		if($id==1):
                    echo '55';
                    
                endif;
	}
        public function test()
	{
		$this->load->model('test_model');
                $data['test_row'] = $this->test_model->get_test();
                $this->load->view('test_view',$data);
                
	}
        
        public function insert()
	{
           $data = array(
                'title' => 'My title' ,
                'test' => 'My Name' ,
                'data' => '2015-01-12'
            );
		$this->load->model('test_model');
                $this->test_model->insert_text($data);
        }
        public function delete($id)
	{
          
		$this->load->model('test_model');
                $this->test_model->delete_text($id);
                 
        }
        public function update($id)
	{
            $data = array(
                'title' => '111' ,
                'test' => 'eee' ,
                'data' => '2015-01-12'
            );
		$this->load->model('test_model');
                $this->test_model->update_text($data,$id);
        }
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */