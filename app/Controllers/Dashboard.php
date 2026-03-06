<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MenuModel;

class Dashboard extends BaseController
{
    public function index()
    {
        helper('url');

        $foodModel = new MenuModel();
        $foods = $foodModel->findAll();

        $data = [
            'title' => 'Welcome Foodie!',
            'customerName' => 'John',
            'foods' => $foods,
            'recentOrders' => [
                ['id' => '#101', 'food' => 'Burger', 'status' => 'Delivered'],
                ['id' => '#102', 'food' => 'Pizza', 'status' => 'Pending'],
                ['id' => '#103', 'food' => 'Cake', 'status' => 'Delivered'],
            ]
        ];

        return view('dashboard', $data);
    }
}