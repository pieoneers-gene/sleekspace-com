<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	    
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer'); 
        
    
	}
	
	function about()
	{
		$this->load->view('header');
		$this->load->view('about');
		$this->load->view('footer');
	}
	function team()
	{
		$this->load->view('header');
		$this->load->view('team');
		$this->load->view('footer');
	}
	function evett()
	{
		$this->load->view('header');
		$this->load->view('evett');
		$this->load->view('footer');
	}
		function lance()
	{
		$this->load->view('header');
		$this->load->view('lance');
		$this->load->view('footer');
	}
		function kim()
	{
		$this->load->view('header');
		$this->load->view('kim');
		$this->load->view('footer');
	}
		function sheila()
	{
		$this->load->view('header');
		$this->load->view('sheila');
		$this->load->view('footer');
	}
		function elsey()
	{
		$this->load->view('header');
		$this->load->view('elsey');
		$this->load->view('footer');
	}
			function theresa()
	{
		$this->load->view('header');
		$this->load->view('theresa');
		$this->load->view('footer');
	}
			function axel()
	{
		$this->load->view('header');
		$this->load->view('axel');
		$this->load->view('footer');
	}
			function april()
	{
		$this->load->view('header');
		$this->load->view('april');
		$this->load->view('footer');
	}
		function klinsman()
	{
		$this->load->view('header');
		$this->load->view('klinsman');
		$this->load->view('footer');
	}
	function service()
	{
		$this->load->view('header');
		$this->load->view('service');
		$this->load->view('footer');
	}
	function porfolio()
	{
		$this->load->view('header');
		$this->load->view('porfolio');
		$this->load->view('footer');
	}
		function contact()
	{
		$this->load->view('header');
		$this->load->view('contact');
		$this->load->view('footer');
	}
		function diversity()
	{
		$this->load->view('header');
		$this->load->view('diversity');
		$this->load->view('footer');
	}
		function careers()
	{
		$this->load->view('header');
		$this->load->view('careers');
		$this->load->view('footer');
	}
		function designs()
	{
		$this->load->view('header');
		$this->load->view('designs');
		$this->load->view('footer');
	}
		function faq()
	{
		$this->load->view('header');
		$this->load->view('faq');
		$this->load->view('footer');
	}
		function policy()
	{
		$this->load->view('header');
		$this->load->view('policy');
		$this->load->view('footer');
	}	
		function eric()
	{
		$this->load->view('header');
		$this->load->view('eric');
		$this->load->view('footer');
	}
		function olena()
	{
		$this->load->view('header');
		$this->load->view('olena');
		$this->load->view('footer');
	}
	    function terms()
	{
		$this->load->view('header');
		$this->load->view('terms');
		$this->load->view('footer');
	}
		function email()
	{
		
		$f_name=$this->input->post('name');
	     $email=$this->input->post('email');
	   //  $phone=$this->input->post('phone');
	     $note=$this->input->post('message');
		
		$this->load->library('email');

        $this->email->from('klinsman@sleekspace.design', 'Web Message');

		$this->email->to('klinsman@sleekspace.design');
		
	   // $this->email->cc('info@sleekspace.design');
    
     
      
		$this->email->subject('Website Message');

		
       $this->email->message(" Name: ".$f_name.".\n------------------------------------------------------------------\n Email: ".$email."\n------------------------------------------------------------------\n Message: ".$note."\n------------------------------------------------------------------");


        $this->email->send();
        
        
        
		$this->load->view('header');
		$this->load->view('contacted');
		$this->load->view('footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */