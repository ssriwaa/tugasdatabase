<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class Produk extends BaseController
{
    protected $produk;

    public function __construct()
    {
        $this->produk = new ProdukModel();
    }

    public function index()
    {
        $data['produk'] = $this->produk->getAll();

        return view('produk/index', $data);
    }

    public function tambah()
    {
        return view('produk/tambah');
    }

    public function simpan()
    {
        $gambar = $this->request->getFile('gambar');

        if (!$gambar->isValid()) {
            return redirect()->to('/produk');
        }

        $ext = strtolower($gambar->getExtension());

        if ($ext != 'jpg' && $ext != 'png') {
            return redirect()->to('/produk');
        }

        $namaGambar = $gambar->getRandomName();

        $gambar->move(
            FCPATH . 'assets/img/upload',
            $namaGambar
        );

        $data = [
            'nama_produk' => $this->request->getPost('nama_produk'),
            'harga' => $this->request->getPost('harga'),
            'gambar' => $namaGambar
        ];

        $this->produk->insert($data);

        return redirect()->to('/produk');
    }

    public function edit($id)
{
    $data['produk'] = $this->produk->getById($id);

    return view('produk/edit', $data);
}

public function update($id)
{
    $data = [
        'nama_produk' => $this->request->getPost('nama_produk'),
        'harga' => $this->request->getPost('harga')
    ];

    $gambar = $this->request->getFile('gambar');

    if ($gambar && $gambar->isValid() && !$gambar->hasMoved()) {

        $ext = strtolower($gambar->getExtension());

        if ($ext == 'jpg' || $ext == 'png') {

            $namaGambar = $gambar->getRandomName();

            $gambar->move(
                FCPATH . 'assets/img/upload',
                $namaGambar
            );

            $data['gambar'] = $namaGambar;
        }
    }

    $this->produk->updateData($id, $data);

    return redirect()->to('/produk');
}

public function hapus($id)
{
    $this->produk->deleteData($id);

    return redirect()->to('/produk');
}
}