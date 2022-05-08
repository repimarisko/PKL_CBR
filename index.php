<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden;">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Sistem Pakar Penyakit Tanaman Manggis</title>
  
</head>


<body onload="zoom()">
    <div class="linear-atas"></div>
    <div class="linear-bawah">
        <div>

            <div class="logo"> <img src="img/logo-balitbu.png" width="40"> </div>
            <div class="gambar1">
                <img src="img/manggis.png" alt="manggis" width="800">
            </div>
            <div id="navbar">

                <div class="balitbu">BALITBU</div>
                <a href="#" class="diagnosa">Diagnosa</a>
                <a href="#" class="riwayat">Riwayat</a>
                <a href="#tentang" class="tentang">Tentang</a>
                <a href="#petunjuk" class="petunjuk">Petunjuk</a>
                <a href="#contact" class="contact">Contact</a>
                <a href="admin/loginadmin.php"><button class="kotak-admin">admin</button></a>
            </div>
            <div id="p1">
                <div class="halo">Halo,Selamat Datang</div>
                <div class="diagnosa">Diagnosa Penyakit Tanaman Manggis menggunakan Sistem Pakar</div>
            </div>

            <div id="tombol">
                <a href="session/register.php" class="signup-kotak"></a>
                <div class="signup-huruf">Sign Up</div>
                <a href="session/login.php" class="login-kotak"></a>
                <div class="login-huruf">Login</div>
            </div>
            <div id="page2">


                <div class="manfaat-pertama" data-aos="fade-right" data-aos-duration="800">Manfaat Buah Manggis</div>
                <div class="manggis-p" data-aos="fade-right" data-aos-delay="800" data-aos-duration="800">Manggis merupakan salah satu buah yang memiliki banyak manfaat salah satunya dapat mengobati penyakit seperti alzheimer,
                    kanker dan sebagainya.</div>
                <div class="more1" data-aos="fade-right" data-aos-delay="800" data-aos-duration="1000"><a href="#">Ketahui lebih banyak....</a></div>
                <div class="gambar-otak"><img src="img/otak1.png" alt="otak"></div>
                <div class="manggis">

                    <img src="img/manggis2.png" alt="manggis" width="400">
                </div>
                <div class="sistem-pakar" data-aos="fade-left" data-aos-delay="800" data-aos-duration="800">Sistem Pakar</div>
                <div class="sistem-pakar-p" data-aos="fade-left" data-aos-delay="1000" data-aos-duration="800">Sistem Pakar (Expert System) adalah sistem informasi yang berisi pengetahuan manusia yang diterapkan ke dalam komputer.</div>
                <div class="more2" data-aos="fade-left" data-aos-delay="1000" data-aos-duration="800"><a href="#">Ketahui lebih banyak....</a></div>

            </div>
        </div>
        <div id="page3">

            <div class="penyakit" id="tentang" data-aos="fade-right" data-aos-delay="800" data-aos-duration="800">Penyakit pada tanaman manggis</div>
            <div class="penyakit-p" data-aos="fade-right" data-aos-delay="1000" data-aos-duration="800">Penyakit pada tanaman manggis antara lain jamur upas, busuk akar, bercak daun dan sebagainya.</div>
            <div class="gambar-pohon"><img src="img/tree.png" width="400"></div>
            <div class="tahapan" id="petunjuk">Tahapan Diagnosa</div>
            <div class="gambar-identitas" data-aos="fade-up" data-aos-delay="100" data-aos-duration="600"><img src="img/ktp.png" width="100"></div>
            <div class="isidatadiri" data-aos="fade-up" data-aos-delay="100" data-aos-duration="600">Isi data diri</div>
            <div class="gambar-form" data-aos="fade-up" data-aos-delay="200" data-aos-duration="600"><img src="img/form.png" width="110"></div>
            <div class="jawabpertanyaan" data-aos="fade-up" data-aos-delay="200" data-aos-duration="600">Jawab Pertanyaan</div>
            <div class="gambar-research" data-aos="fade-up" data-aos-delay="300" data-aos-duration="600"><img src="img/research.png" width="150"></div>
            <div class="lihathasil" data-aos="fade-up" data-aos-delay="300" data-aos-duration="600">Hasil Diagnosa</div>
            <div class="gambar-advice" data-aos="fade-up" data-aos-delay="400" data-aos-duration="600"><img src="img/advice.png" width="100"></div>
            <div class="arahan" data-aos="fade-up" data-aos-delay="400" data-aos-duration="600">Dapatkan Arahan dan Saran</div>
        </div>
        <div id="page4">
            <form name="form-kontak-balitbu">
                <div class="contact" id="contact">Contact</div>
                <div class="nama">Nama</div>
                <input type="text" name="nama" class="form-nama">
                <div class="email">Email</div>
                <input type="email" name="email" class="form-email">
                <div class="pesan">Pesan</div>
                <input type="textarea" name="pesan" class="form-pesan">
                <input type="submit" name="submit" class="submit">
                <div class="kirim"></div>
            </form>

            <footer style="background-color: #79127B;">Copyright&copy;2022</footer>
        </div>

    </div>
    </div>
    <script>
        const scriptURL = 'https://script.google.com/macros/s/AKfycbyuzRFGfKbkqHLYUUGrp4D8tkIloYstQECqs18Q0-bXMG1hHJ5W1Yfk7_ce5TjjiMI5tg/exec'
        const form = document.forms['form-kontak-balitbu']

        form.addEventListener('submit', e => {
            e.preventDefault()
            fetch(scriptURL, {
                    method: 'POST',
                    body: new FormData(form)
                })
                .then(response => console.log('Success!', response))
                .catch(error => console.error('Error!', error.message))
        })
        function zoom(){
        document.body.style.zoom ="80%";
        }
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>