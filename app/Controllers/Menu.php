<?php

namespace App\Controllers;

use App\Models\FoodModel;

class Menu extends BaseController
{
    public function index()
    {
        $model = new FoodModel();
        $data = [];

        // Check if form is submitted
        if ($this->request->getMethod() === 'post') {

            // Get uploaded file
            $file = $this->request->getFile('image');
            $imageName = '';

            if ($file && $file->isValid() && !$file->hasMoved()) {
                $imageName = $file->getRandomName();
                $file->move(ROOTPATH . 'public/images', $imageName);
            }

            // Prepare data to insert
            $insertData = [
                'title' => $this->request->getPost('title'),
                'description' => $this->request->getPost('description'),
                'price' => $this->request->getPost('price'),
                'image' => $imageName,
            ];

            // Insert into DB
            if ($model->insert($insertData)) {
                $data['success'] = 'Food Added Successfully!';
            } else {
                $data['success'] = 'Failed to add food. Please try again.';
            }
        }

        // Get all foods to display
        $data['foods'] = $model->findAll();

        return view('menu', $data);
    }
}