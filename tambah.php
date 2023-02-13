<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
<table border = "0" >
    <form action="proses-tambah.php" method="POST">
        <tr><h2>Data Toko</h2></tr>

        <tr>
             <td><label for="nama_toko">Nama Toko :</label></td>
             <td><Input type="text" name="nama_toko" /></td>
        </tr>

        <tr>
             <td><label for="alamat">Alamat :</label></td>
             <td><Input type="text" name="alamat" /></td>
        </tr>

        <tr>
             <td><label for="no_siup">No Siup :</label></td>
             <td><Input type="text" name="no_siup" /></td>
        </tr>

        <tr>
             <td><label for="nama_pemilik">Nama Pemilik :</label></td>
             <td><Input type="text" name="nama_pemilik" /></td>
        </tr>

        <tr>
             <td><label for="nama_bahan">Nama Bahan :</label></td>
             <td><Input type="text" name="nama_bahan" /></td>
        </tr>

        <tr>
             <td><label for="satuan">Satuan :</label></td>
             <td><Input type="text" name="satuan" /></td>
        </tr>
         
        <tr>
             <td><label for="harga">Harga :</label></td>
             <td><Input type="text" name="harga" /></td>
        </tr>
       <td>  
    <button type="submit" id="simpan" name="simpan">simpan</button>
</td>
</form>

</table>
</body>
</html>