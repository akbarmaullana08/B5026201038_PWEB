<head>

    <title> UTS_PWEB_5026201038 </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/
         jquery/3.3.1/jquery.min.js">
        </script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/
         popper.js/1.12.9/umd/popper.min.js">
        </script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/
         4.0.0/js/bootstrap.min.js">
        </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


    <style name="pengaturan_form">
      #form label {
        display: inline-block;
        width: 300px;
        text-align: left;
        padding-left: 100px;
      }

      #form_submit {
        padding-left: 100px;
      }

      #form div {
        margin-top: 1em;
        text-align: center;
      }

      textarea {
        vertical-align: top;
        height: 5em;
      }

      .error {
        color: red;
        margin-left: 10px;
      }

      h4 {
        text-align: center;
        padding-bottom: 20px;
      }


      #button {
        text-align: center;

      }

      .this_button {
        background-color: rgb(48, 11, 216);
        color: rgb(255, 255, 255);
        margin-left: 200px;
        margin-top: 50px;
        width: 250px;
        border: none;

      }

      .reset_button {
        background-color: rgb(0, 226, 68);
        margin-left: 100px;
        width: 250px;
        border: none;

      }

      select {
        width: 400px;
        text-align: center;
      }

      input::-webkit-outer-spin-button,
      input::-webkit-inner-spin-button {
        -webkit-appearance: none;
      }

      #type_barang {
        padding-right: 10px;
      }

      input[type=number] {
        width: 410px;
      }

      input[type=number] {
        -moz-appearance: textfield;
      }
    </style>

  </head>

  <body>

    <P> Muhamad Akbar Maulana<br>Akbar<br>5026201038</br> </p>
    <h4>Form Input Data Barang</h4>

    <form name='form' id="form" action="https://google.com">
      <!-- Nama Barang -->
      <div>
        <label for="nama_barang">Nama Barang :</label>
        <input type="text" id="nambar" name="barang_nama" pattern=.{10,} title="nama barang minimal 10 karakter" size="50"
          required></input>
      </div>
      <!-- Harga -->
      <div id="price">
        <label for="harga_barang">Harga:</label>
        <input type="number" id="harga.barang" name="harga" size="50" class="hargabarang" min="5000" max=""
          title="Harga barang minimal 5000" required></input>
        <script>
          $("input.hargabarang").keypress(function (event) {
            return /\d/.test(String.fromCharCode(event.keyCode));
          });
        </script>
      </div>
      <!-- Jenis Barang -->
      <div id="type_barang">
        <label for="country">Jenis Barang:</label>
        <select name="country" required>
          <option value="">(Pilih Jenis Barang)</option>
          <option>Makanan</option>
          <option>Minuman</option>
          <option>Non Mamin</option>
        </select>
      </div>
      <!-- Kode Barcode -->
      <div>
        <label for="bar_code">Kode Barcode:</label>
        <input type="text" id="bar_code" name="user_barcode" pattern=.{10,} class="barcode" size="50" required></input>
        <script>
          $("input.barcode").keypress(function (event) {
            return /\d/.test(String.fromCharCode(event.keyCode));
          });
        </script>
      </div>
      <!-- Submit and Reset Button -->
      <div id="button">
        <button class="this_button" type="submit" class="submit"> Kirim</button>
        <button class="reset_button" type="submit" class="reset"> Reset </button>
      </div>

    </form>
  </body>
