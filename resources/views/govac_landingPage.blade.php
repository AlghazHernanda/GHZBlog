<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="css/LandingPage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-image:url(https://i.ibb.co/yQfWFDB/Background.jpg);">
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
    <div class="landing page awal" style=" width:50% ; ">
        <div class="infromasi landing page" id="informasi-awal">
            <p>Mari <b style="color: #038E79;"> Vaksin </b></p>
            <p>Demi Keluarga</p>
            <p>di Rumah !</p>
            <button style="border-color: white;padding-left: 10%; padding-right: 10%; margin-top: 20px; background-color :#038E79; color: white;" type="btn-border-radius " class="btn  btn-border-radius-sm;">Selengkapnya
            </button>
        </div>
    </div>
    <div class="informasi akhir" style=" width:50% ; margin-left: 50%; ">
        <div class="infromasi akhir" id="informasi-akhir">
            <p>Vaksin <b style="color: #fa0000;"> COVID-19 </b></p>
            <p>di Indonesia</p>
            <p id="info-umum">Vaksinasi adalah prosedur untuk memasukkan vaksin ke dalam tubuh biasanya disuntikkan
                untuk menstimulasi sistem imun tubuh dan akhirnya tubuh bisa memproduksi imunitas terhadap penyakit.</p>
        </div>
        <div class="container">
            <div class="row">
                <div id="col-1">
                    <button style="border-color: #038E79;padding-left: 5%; padding-right: 5%; margin-top: 20px; margin-left: 15%; background-color :#fdfdfd; color: #038E79;" type="btn-border-radius " class="btn  btn-border-radius-sm;">
                        Vaksin Sinovac
                    </button>
                    <button style="border-color: #038E79;padding-left: 5%; padding-right: 5%; margin-top: 20px; margin-left: 5%; background-color :#fdfdfd; color: #038E79;" type="btn-border-radius " class="btn  btn-border-radius-sm;">
                        Vaksin Genexine
                    </button>
                </div>
            </div>
            <div class="row">
                <div id="col-2">
                    <button style="border-color: #038E79;padding-left: 5%; padding-right: 5%; margin-top: 20px; margin-left: 25% ;background-color :#fdfdfd; color: #038E79;" type="btn-border-radius " class="btn  btn-border-radius-sm;">
                        Vaksin Sinopharm
                    </button>
                    <button style="border-color: #038E79;padding-left: 5%; padding-right: 5%; margin-top: 20px; margin-left: 5% ;background-color :#fdfdfd; color: #038E79;" type="btn-border-radius " class="btn  btn-border-radius-sm;">
                        Vaksin Cansino
                    </button>
                </div>
            </div>
            <div>
                <div id="col-3">
                    <button style="border-color: #038E79;padding-left: 5%; padding-right: 5%; margin-top: 20px; margin-left: 40% ; background-color :#fdfdfd; color: #038E79;" type="btn-border-radius " class="btn  btn-border-radius-sm;">
                        Vaksin AstraZeneca
                    </button>
                </div>
            </div>
        </div>
    </div>
    <footer>
        Copyright 2021 Himatif Unpad
    </footer>
</body>

</html>