<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 2</title>
</head>
<body>
    <h2>INPUT BIODATA</h2>
    <pre>
    <?php echo form_open('home/kirim_data')?>
    Nama    : <input type="txtnama" placeholder="Silahkan input nama anda">
    <br>
    Alamat  : <textarea name="txtalamat"></textarea>
    <br>
    No.HP   : <input type="text" name="txtnohp" placeholder="Silahkan input no handphone">
    <br>
    <button type="submit">Kirim</button> <button type="reset">Batal</button>
    <?php echo form_close() ?>
    <pre> 
</body>
</html>