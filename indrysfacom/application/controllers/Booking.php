<?php

class Booking extends CI_Controller {
    public function order($name = '')
    {
        $data['judul'] = 'Form Booking Order';
        $data['name'] = $name;
        $this->load->view('templates/header', $data);
        $this->load->view('booking/order');
        $this->load->view('templates/footer');
    }

    public function order_wa($name = '')
    {
        $data['judul'] = 'Form Booking Order';
        $data['name'] = $name;
        $this->load->view('templates/header', $data);
        $this->load->view('booking/order-wa');
        $this->load->view('templates/footer');
    }
}