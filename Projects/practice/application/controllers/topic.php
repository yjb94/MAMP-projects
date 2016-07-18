<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Topic extends CI_Controller
{
    public function index()
    {
        echo 'topic page';
    }

    public function get($id)
    {
        echo 'topic'.$id;
    }
}
