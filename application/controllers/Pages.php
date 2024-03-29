<?php
class Pages extends CI_Controller {

    public function view($page = "home") {
        $path = APPPATH."views\pages\\".$page.".php";
        if (!file_exists($path)) {
            echo $path;
            show_404();
        }

        $data['title'] = ucfirst($page);

        $this->load->view("templates/header",$data);
        $this->load->view("pages/{$page}",$data);
        $this->load->view("templates/footer",$data);
    }
}
