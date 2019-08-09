<?php class Profile extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $data['title'] = "Profil Panel - Rumahweb.com";
        $this->load->view('partner/profile/index', $data);
    }
}
