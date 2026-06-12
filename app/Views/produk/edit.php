<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            margin: 30px;
        }

        input{
            width: 300px;
            padding: 8px;
        }

        button{
            background: orange;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
        }
    </style>

</head>
<body>

<h2>Edit Produk</h2>

<form action="<?= base_url('produk/update/'.$produk['_id']) ?>"
      method="post"
      enctype="multipart/form-data">

    <p>Nama Produk</p>
    <input
        type="text"
        name="nama_produk"
        value="<?= $produk['nama_produk'] ?>"
        required>

    <p>Harga</p>
    <input
        type="number"
        name="harga"
        value="<?= $produk['harga'] ?>"
        required>

    <p>Gambar Baru (Opsional)</p>
    <input type="file" name="gambar">

    <br><br>

    <button type="submit">
        Update
    </button>

</form>

</body>
</html>