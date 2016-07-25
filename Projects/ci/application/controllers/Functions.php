<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Functions extends CI_Controller
{
    public function SendMail()
    {
        $to      = 'jbyun94@naver.com';
        $subject = 'mail sent by '.$this->input->get('name');
        $message = $this->input->get('message');
        $headers = 'From: '.$this->input->get('email') . "\r\n" .
                   'X-Mailer: PHP/' . phpversion();

        //메일 잘 보내지는것 확인했으니 봉인해둔다
//        mail($to, $subject, $message, $headers);
        $this->load->view('ContactView');

//        echo $this->input->get('name');
//        echo $this->input->get('email');
//        echo $this->input->get('message');
    }
}