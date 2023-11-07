<html lang="en">

    <head>
        <title>Validasi</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;500;600;800&display=swap" rel="stylesheet">

        <script>
            function validateForm()
            {
                var nrp = document.getElementById("nrp");
                var msg = document.getElementById("msg");

                //Cek hanya yang invalid

                //Jika kosong maka INVALID
                if (nrp.value == "")
                {
                    nrp.focus();
                    nrp.placeholder = "Contoh : 5206100126";
                    msg.innerHTML = "NRP Harus Diisi!";
                    return false;
                }

                //Jika tidak 10 digit maka INVALID
                if (nrp.value.length != 10)
                {
                    nrp.focus();
                    nrp.placeholder = "Contoh : 5206100126";
                    msg.innerHTML = "NRP Harus 10 Digit! Anda Memasukkan " + nrp.value.length + " Digit.";
                    return false;
                }

                //Jika bukan angka maka INVALID
                if (isNaN(nrp.value) == true)
                {
                    nrp.focus();
                    nrp.placeholder = "Contoh : 5206100126";
                    msg.innerHTML = "NRP Harus Angka!";
                    return false;
                }
            }
        </script>
    </head>

    <body>
        <div class="container">
            <div class="jumbotron"><h6>Form Validasi adalah mencegah pengiriman data ke server jika ada yg invalid/tidak sesuai constraint database</h6></div>

            <script>
                function validate()
                {
                    //Default dari return function adalah true

                    //This function is for test only and not for usage
                    console.log("baris 62");
                    return false;
                    console.log("baris 64");
                    return true;
                    console.log("baris 66");
                    return false;
                }
            </script>

            <form action="https://google.com" method="get" onsubmit="return validateForm();">
                <div class="form-group">
                    <label for="nrp">NRP : </label>
                    <input type="text" class="form-control" id="nrp"> <div id="msg" class="text-danger"></div>
                </div>
                <input type="submit" value="DAFTAR" class="btn btn-primary">
                <input type="reset" value="ULANGI" class="btn btn-warning">
            </form>
        </div>
    </body>

</html>
