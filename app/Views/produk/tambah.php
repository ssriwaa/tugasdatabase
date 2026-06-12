<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>

    <style>

        body{
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            margin: 30px;
        }

        .container{
            width: 500px;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h2{
            margin-bottom: 20px;
        }

        label{
            font-weight: bold;
        }

        input{
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .btn-simpan{
            background: #198754;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-kembali{
            background: #6c757d;
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
            margin-left: 5px;
        }

    </style>

</head>
<body>

<div class="container">

    <h2>Tambah Produk</h2>

    <form action="<?= base_url('produk/simpan') ?>"
          method="post"
          enctype="multipart/form-data">

        <label>Nama Produk</label>
        <input
            type="text"
            name="nama_produk"
            required>

        <label>Harga</label>
        <input
            type="number"
            name="harga"
            required>

        <label>Gambar</label>
        <input
            type="file"
            name="gambar"
            accept=".jpg,.png"
            required>

        <button type="submit" class="btn-simpan">
            Simpan
        </button>

        <a href="<?= base_url('produk') ?>" class="btn-kembali">
            Kembali
        </a>

    </form>

</div>

</body>
</html>