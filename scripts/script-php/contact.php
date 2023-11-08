<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap');
    </style>
    <title></title>
</head>

<body>
    <section class="contact">
        <div class="content">
            <h2>Kontak Kami</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque similique, voluptates tempora est repellat
                minima provident esse qui possimus minus, quisquam accusantium voluptas?</p>
        </div>
        <div class="container">
            <div class="contactinfo">
                <div class="box">
                    <div class="icon"><i class="fa-solid fa-location-dot fa-lg"></i></div>
                    <div class="text">
                        <h3>Alamat</h3>
                        <p>Jl.Satu Dua Tiga Raya</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa-solid fa-phone fa-lg"></i></div>
                    <div class="text">
                        <h3>Nomor Telfon</h3>
                        <p>021-123-4567</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa-regular fa-envelope fa-lg"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>Resto@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="contactform">

<form method = "post" action = "scripts/script-php/input_pengeluh.php">
    <h2>Sampaikan Pesan</h2>
    <div class="inputbox">
        <input type="text" name="nama" required="required">
        <span>Nama anda</span>
    </div>
    <div class="inputbox">
        <input type="text" name="email" required="required">
        <span>Email</span>
    </div>
    <div class="inputbox">
        <textarea name="pesan" required="required"></textarea>
        <span>Pesan yang ingin anda sampaikan</span>
    </div>
    <div class="inputbox">
        <input type="submit" value="Kirim">
    </div>
    </form>
            </div>
        </div>
    </section>
    <script src="scripts/script.js"></script>
</body>

</html>