<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct() { 
		parent::__construct(); 
		$this->load->library('session'); 
		$this->load->helper('form'); 
	 } 

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('header');
	}

	public function home()
	{
		$this->index();
		$this->load->view('main');
		$this->load->view('footer');
	}

	public function contact()
	{
		$this->index();
		$this->load->view('contactview');
		$this->load->view('footer');
	}

	public function about()
	{
		$this->index();
		$this->load->view('aboutview');
		$this->load->view('footer');
	}
	public function gallery()
	{
		$this->index();
		$this->load->view('galleryview');
		$this->load->view('footer');
	}

	function validate_captcha() {
		$secret = "6LcrdpIUAAAAAPCgfPpUIDEmO6WQp4KgPavYtle_";
        $captcha = $this->input->post('g-recaptcha-response');
         $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . $secret . "&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']);
        if ($response . 'success' == false) {
            return FALSE;
        } else {
            return TRUE;
        }
	}
	public function send_mail()
    {
		
		$name = $this->input->post('name'); 
		$email = $this->input->post('email'); 
		$subject = $this->input->post('subject'); 
		$message = $this->input->post('message'); 


        $this->load->library('phpmailer_lib');
        
        // PHPMailer object
        $mail = $this->phpmailer_lib->load();

		// SMTP configuration
		// $mail->SMTPDebug = 4;
		$mail->isSMTP();
		$mail->Host     = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'usman.forest.interactive@gmail.com';
		$mail->Password = '*****';
		$mail->SMTPSecure = 'tls';
		$mail->Port     = 587;
		
		$mail->setFrom('info@example.com', 'CodexWorld');
		// $mail->addReplyTo('info@example.com', 'CodexWorld');
		
		// Add a recipient
		$mail->addAddress($email);
		
		// Add cc or bcc 
		// $mail->addCC('cc@example.com');
		// $mail->addBCC('bcc@example.com');
		
		// Email subject
		$mail->Subject = $subject;
		
		// Set email format to HTML
		$mail->isHTML(true);
		
		// Email body content
		$mailContent = $message ;
		$mail->Body = $mailContent;
		
		// Send email
		if(!$mail->send()){
			$this->session->set_flashdata("email_sent","Error in sending Email.");
			// echo 'Mailer Error: ' . $mail->ErrorInfo;
		}else{
			$this->session->set_flashdata("email_sent","Email sent successfully."); 
		}
		$this->load->helper('url');
		// redirect(base_url().'contact-us');
		redirect(base_url().'contact-us','refresh');
	
	
		
		
	
    }
}
