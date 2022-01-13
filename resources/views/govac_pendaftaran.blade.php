<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Style1.css">
    <title>Form Pendaftaran</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark shadow " style="background-color: #70ccb4;">
        <div class="container" style="font-family:Montserrat;">
            <b class="navbar-brand" style="font-size: 30px; font-family: arial;" href="#">Govac</b>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" style="margin-right: 50px;">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="margin-right: 50px; color: white; border-radius: 110px;">Vaksin</a>
                    </li>
                    <li class="nav-item" style="background-color: #70ccb4; ">
                        <button style="border-color: white; color: white; width: 120px;" type="btn-border-radius " class="btn  btn-border-radius-sm;">Daftar</button>

                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <nav style="padding: 32px;">
        <p></p>
    </nav>
    <div style="display: flex; margin-right: 10px;">

        <div style="margin-left: 70px; width: 70%;">
            <h1 style="color:#038e79  ; ">Formulir Pendaftaran</h1>
            <input style="margin-top: 10px; width: 93%;" type="email" class="form-control" id="nama" placeholder="Nama">
            <input style="margin-top: 10px; width: 93%" type="password" class="form-control" id="fnik" placeholder="NIK">
            <input style="margin-top: 10px; width: 93%;" type="email" class="form-control" id="alamat" placeholder="Alamat">
            <input style="margin-top: 10px; width: 93%" type="password" class="form-control" id="tanggallahir" placeholder="Tanggal Lahir">
            <input style="margin-top: 10px; width: 93%;" type="email" class="form-control" id="nomorhandphone" placeholder="Nomor Handphone">
            <input style="margin-top: 10px; width: 93%" type="password" class="form-control" id="password" placeholder="Password">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="margin-top: 10px;">
                <label class="form-check-label" for="flexCheckDefault" style="margin-top: 10px;">
                    Data Diri Yang Telah Anda Isi Telah Benar
                </label>
            </div>
            <button style="border-color: white; margin-top: 20px; background-color :#70ccb4; color: white;" type="btn-border-radius " class="btn  btn-border-radius-sm;">Masuk</button>
        </div>

        <aside style="margin-left:10px ; width: 30%;">
            <img style="margin-left: 65px; margin-top: 50px;" src="https://i.ibb.co/t3zD76m/image.png" alt="Govac">
            <p style="font-size: 30px; margin-left: 150px; color:#038e79 ;">
                <b>GOVAC</b>
            </p>
        </aside>
    </div>
    </nav>
    <nav style="padding: 32px;">
        <p></p>
    </nav>
    <footer>
        Copyright 2021 Himatif Unpad
    </footer>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>