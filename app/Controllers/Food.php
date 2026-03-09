<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Food extends CI_Controller {

    public function index()
    {
        $this->load->view('food_form');
    }

    public function save()
    {
        $title = $this->input->post('title');
        $description = $this->input->post('description');
        $price = $this->input->post('price');

        $image = $_FILES['image']['name'];
        $temp = $_FILES['image']['tmp_name'];

        move_uploaded_file($temp, "uploads/".$image);

        $data = [
            'title' => $title,
            'description' => $description,
            'price' => $price,
            'image' => $image
        ];

        $this->load->model('Food_model');
        $this->Food_model->insert_food($data);

        redirect('food');
    }
}