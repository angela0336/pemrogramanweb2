<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $productModel = model('ProdukModel');
        $data['produk'] = $productModel->findAll();
        return view('Home', $data);
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function success()
    {
        return view('success');
    }


    public function images($file)
    {
        return $this->response->download(WRITEPATH . 'uploads/images/' . $file, null);
    }
}
