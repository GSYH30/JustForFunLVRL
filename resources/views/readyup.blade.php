<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReDyUp | GSYH</title>
    <link rel="icon" href="../img/sharingan.png">
    <link rel="stylesheet" href="../css/readyup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
</head>

<body>
    
    <div class="container">
        @foreach ($objects as $object)
        <div class="box-content">
            <div class="isi-content">
                <div class="dalam-content">
                    <img src="{{ $object["gambar"] }}"  alt="">
                    <h1>{{ $object["id_object"] }}</h1>
                    <p>{{ $object["nama"] }}</p>
                    <p>{{ $object["harga"] }}</p>
                    <div class="button">
                        <button><a href="update.php" onclick="return confirm('Update?')">Update</a></button>
                        <button><a href="delete.php" onclick="return confirm('Yakin?')">Delete</a></button>
                    </div>    
                </div>
            </div>
        </div>
        @endforeach
    </div>
</body>

</html>