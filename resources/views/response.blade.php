<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Kalkulator Kuadrat</title>
    <style>
        body {
            padding-top: 10px;
            margin-left: auto;
            margin-right: auto;
            background-color: #edf1e0;
            width: 600px;
            height: 180px;
            font-family: Verdana, Arial, Helvetica, sans-serif;
            font-size: 20px;
            box-shadow: 0 16px 16px 0 rgba(231, 60, 60, 0.24), 0 17px 50px 0 rgba(17, 145, 255, 0.678);
        }

        h1 {
            text-align: center;
        }

        #text {
            text-align: center;
            font-size: large;
            padding-top: 30px;
        }

        #button {
            padding-left: 10%;
            padding-top: 50px;
            color: rgb(71, 49, 49);
            text-align: center;
            font-size: 16px;
        }
    </style>


</head>

<h1> Jawaban </h1>
<hr>

<body>
    <?php
    if (isset($_POST['tbpros'])) {
        $nilai = $_POST['nilai'];
        $hasil = $nilai * $nilai;
        $hasil2 = sqrt($nilai);
    } else {
    }
    ?>
    <!--Kuadrat-->
    <div name="hasil_kuadrat" class="row-mt-3">
        <div class="col-5">
            <label>Kuadrat :</label>
            <?php echo "$hasil" ?>
        </div>
    </div>
    <!--Hasil-->
    <div name="hasil_akar" class="row-mt-3">
        <div class="col-8">
            <label>Akar :</label>
            <?php echo "$hasil2" ?>
        </div>
    </div>
</body>

</html>
