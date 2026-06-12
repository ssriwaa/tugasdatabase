<!DOCTYPE html>
<html>
<head>
    <title>Data Produk</title>

    <style>

        body{
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            margin: 30px;
        }

        h2{
            color: #333;
        }

        .btn-tambah{
            background: #28a745;
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
        }

        table{
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            background: white;
        }

        th{
            background: #0d6efd;
            color: white;
            padding: 12px;
        }

        td{
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }

        tr:nth-child(even){
            background: #f8f9fa;
        }

        img{
            border-radius: 5px;
        }

        .btn-edit{
            background: orange;
            color: white;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 4px;
        }

        .btn-hapus{
            background: red;
            color: white;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 4px;
        }

    </style>

</head>
<body>

<h2>Data Produk</h2>

<a href="<?= base_url('produk/tambah') ?>" class="btn-tambah">
    Tambah Produk
</a>

<?php if(empty($produk)): ?>

    <p>Belum ada data.</p>

<?php else: ?>

<table>

    <tr>
        <th>No</th>
        <th>Nama Produk</th>
        <th>Harga</th>
        <th>Gambar</th>
        <th>Aksi</th>
    </tr>

    <?php $no = 1; ?>

    <?php foreach($produk as $p): ?>

    <tr>

        <td><?= $no++ ?></td>

        <td><?= $p['nama_produk'] ?></td>

        <td>
            Rp <?= number_format($p['harga'],0,',','.') ?>
        </td>

        <td>
            <img
                src="<?= base_url('assets/img/upload/'.$p['gambar']) ?>"
                width="100">
        </td>

        <td>
            <a href="<?= base_url('produk/edit/'.$p['_id']) ?>"
               class="btn-edit">
               Edit
            </a>

            <a href="<?= base_url('produk/hapus/'.$p['_id']) ?>"
               class="btn-hapus"
               onclick="return confirm('Hapus data ini?')">
               Hapus
            </a>
        </td>

    </tr>

    <?php endforeach; ?>

</table>

<?php endif; ?>

</body>
</html>