<?php 
defined ('BASEPATH') or exit ('No direct script access allowed');
class Hitungtabung extends CI_Controller
{
    function __construct()
    {
        parent ::__construct();
        $this->load->library('tabung');
    }
    function index()
    {
        $this->tabung->hasil('7','10');
        echo "<br/>";
        
    }
}
?>