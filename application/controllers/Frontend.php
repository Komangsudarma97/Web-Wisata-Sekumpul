<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Frontend extends CI_Controller
{
    public function index()
    {
        $this->load->view('user/index');
    }
    public function kontak()
    {
        $this->load->view('user/kontak');
    }
    public function air_terjun()
    {
        $this->load->view('user/air_terjun');
    }
    public function hotel1()
    {
        $this->load->view('user/hotel1');
    }
    public function hotel2()
    {
        $this->load->view('user/hotel2');
    }
}
