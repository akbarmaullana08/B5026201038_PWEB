<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>pweb_kalkulator</title>
    <style>
        body {
            margin-left: auto;
            margin-right: auto;
            background-color: #edf1e0;
            width: 900px;
            height: 450px;
            font-family: Verdana, Arial, Helvetica, sans-serif;
            font-size: 14px;
            box-shadow: 0 12px 16px 0 rgba(231, 60, 60, 0.24), 0 17px 50px 0 rgba(17, 148, 255, 0.678);
        }

        h1 {
            text-align: center;
            padding-top: 10px;
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

<body>

    <h1>Kalkulator Kuadrat</h1>
    <hr>
    <form method="post" action="pengakaran">
        @csrf

        <!--Bilangan Kuadrat-->
        <div id="text">
            <label>Input Bilangan :</label>
            <input type=”text” name="nilai">
        </div>
        <!--Button-->
        <div id="button">
            <button type="submit" name="tbpros" value="PROSES"> SUBMIT </button>
            <button type="reset" name="tbreset" value="RESET"> RESET </button>
        </div>
    </form>
</body>

</html>
