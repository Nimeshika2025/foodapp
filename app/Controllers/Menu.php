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

   // FOOD LIST
    public function foods()
    {
        $model = new FoodModel();

        $data['foods'] = $model->findAll();

        return view('foods', $data);
    }

    // EDIT PAGE
    public function edit($id)
    {
        $model = new FoodModel();

        $data['food'] = $model->find($id);

        return view('edit_food', $data);
    }

  public function update($id)
{
    $model = new FoodModel();

    // Validation rules
    $rules = [
        'title' => 'required',
        'description' => 'required',
        'price' => 'required|numeric'
    ];

    // Check validation
    if (!$this->validate($rules)) {

        $data['validation'] = $this->validator;
        $data['food'] = $model->find($id);

        return view('edit_food', $data);
    }

    $data = [
        'title' => $this->request->getPost('title'),
        'description' => $this->request->getPost('description'),
        'price' => $this->request->getPost('price'),
    ];

    // Handle image upload
    $imageFile = $this->request->getFile('image');

    if ($imageFile && $imageFile->isValid() && !$imageFile->hasMoved()) {

        $newName = $imageFile->getRandomName();

        $imageFile->move(ROOTPATH . 'public/images', $newName);

        $data['image'] = $newName;
    }

    $model->update($id, $data);

    return redirect()->to(base_url('public/foods'));
}
    // DELETE
    public function delete($id)
    {
        $model = new FoodModel();

        $model->delete($id);

        return redirect()->to(base_url('public/foods'));
    }
}