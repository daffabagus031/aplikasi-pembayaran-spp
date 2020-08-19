<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Bebas Neue' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Antic Didone' rel='stylesheet'>
</head>
<style>
    .form-control {
        border: 0;
        outline: 0;
        border-bottom: 1px solid black;
    }

    body {
        background: #6D84F9;
    }

    div {
        border-radius: 20px;
    }

    .absolute {
        position: absolute;
        width: 400px;
        height: 500px;
        background-color: #1C4A6B;
    }

    .relative {
        position: relative;
        width: 500px;
        height: 470px;
        background-color: white;
        border-color: #696;
    }

    #rel1 {
        margin: 6.1% 0px 0px 48%;
    }

    #abs1 {
        top: 10%;
        left: 20%;
    }

    img {
        margin: 10% 0px 0px 33%;
        width: 35%;
    }
    .row{
        padding-top: 100px;
    }
</style>

<body>
    <div id="rel1" class="relative shadow-lg">
        <div class="l" style="font-size: 35px; padding-top: 2%;">
            <a href="<?= base_url() ?>auth" style="color: grey; padding-left: 36%;">Admin</a>
            <a href="<?= base_url() ?>" style="color: #3290FC">Siswa</a>
        </div>
        <div class="container mr-4 ml-4">
            <form class="pr-3 pl-3 pt-5">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Password</label>
                    <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="">
                </div>
                <div class="row ml-4">
                    <div class="col">
                        <button type="button" class="btn btn-primary"
                            style="border-radius: 10px; width: 60%" onclick="location.href = 'http://localhost/projectCI/home';">Sign In
                        </button>
                    </div>
                    <div class="col">
                        <a href="http://localhost/projectCI/loginadm" style="color: #3290FC">login admin</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div id="abs1" class="absolute shadow-lg">
        <img src="assets/img/invoice.png"alt="...">
        <h1 style="font-family: 'Bebas Neue'; font-size: 50px; padding-left: 12%; color: white" class="pt-5">SMK Taruna
            Bhakti</h1>
        <p style="font-family: 'Antic Didone'; color: white; padding-left: 23%;">Our Quality Ask Be Different</p>
        <br>
        <p style="color: white; padding-left: 13%; font-size: 40px;">Pembayaran SPP</p>
    </div>
</body>

</html>