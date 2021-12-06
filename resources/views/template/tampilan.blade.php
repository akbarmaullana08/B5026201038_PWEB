<!DOCTYPE html>
<html>

<head>
    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


        <title>@yield('title')</title>

        <style>
            #tampilanedit {
                padding: 40px;
                width: 1300px;
                text-align: justify;
                padding-bottom: 10px;
                padding-left: 42%;
                background-color: #ffffff;
                font-family: Verdana, Arial, Helvetica, sans-serif;
                font-size: 14px;
                box-shadow: 0 12px 16px 0 rgba(231, 60, 60, 0.24), 0 17px 50px 0 rgba(17, 148, 255, 0.678);
            }

            form,
            input {
                display: block;
            }

            form {
                font-weight: 1000;
            }

            .header {
                padding: 10px;
                text-align: center;
                background: #1abc9c;
                color: white;
                font-size: 30px;
            }

            img {
                width: 140px;
                height: 200px;
                margin-bottom: 25px;
                margin-top: 25px;
                border: solid;

            }

            textarea {
                display: block;
            }

            html {
                font-family: "Lato", sans-serif;
                width: 100%;
            }

            .sidenav {
                display: none;
                height: 100%;
                width: 250px;
                position: fixed;
                z-index: 1;
                top: 0;
                left: 0;
                background-color: #111;
                overflow-x: hidden;
                padding-top: 60px;
            }

            .sidenav a {
                padding: 8px 8px 8px 32px;
                text-decoration: none;
                font-size: 25px;
                color: #ffffff;
                display: block;
            }

            .sidenav a:hover {
                color: #f1f1f1;
            }

            .sidenav .closebtn {
                position: absolute;
                top: 0;
                right: 25px;
                font-size: 36px;
                margin-left: 50px;
            }

            @media screen and (max-height: 450px) {
                .sidenav {
                    padding-top: 15px;
                }

                .sidenav a {
                    font-size: 18px;
                }

            }


            footer {
                background: #1abc9c;
                position: relative;
                width: 1300px;

            }

            #tampilanfooter {
                bottom: 0;
                position: fixed;
                color: rgb(255, 255, 255);
            }

        </style>

    </head>

<body class="container m-12">
    <div class="header">
        <h1> Muhamad Akbar Maulana </h1>
        <center> <img src="{{ URL::to('foto.png') }}"></center>
        <h1>5026201038</h1>
    </div>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="/pegawai">Pegawai</a>
        <a href="/tugas">Tugas Pegawai</a>
        <a href="http://127.0.0.1:8000/">PR</a>
        <a href="#"></a>
        <a href="#"></a>
    </div>

    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu </span>

    <script>
        function openNav() {
            document.getElementById("mySidenav").style.display = "block";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.display = "none";
        }
    </script>

    <div id="tampilanfooter">
        <footer>
            <div class="row text-center">
                <p>© Copyright Muhamad Akbar Maulana - 5026201038</p>
            </div>

        </footer>
    </div>

    @section('isikonten')
    @show

</body>

</html>
