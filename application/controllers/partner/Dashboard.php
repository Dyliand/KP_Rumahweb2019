<?php

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $data['title'] = "Dashboard - Rumahweb.com";
        $this->load->view('partner/dashboard/index', $data);
    }
}
