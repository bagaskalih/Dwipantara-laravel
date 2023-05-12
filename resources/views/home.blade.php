<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Budaya Dwipantara</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="js/app.js"></script>
    <link rel="stylesheet" href="css/home.css" />
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Jacques+Francois&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
  </head>
  <body>
    <section id="hero">
      @include('partials.navbar')

      <div class="container-hero">
        <div class="herobox">
          <div class="search-container">
            <form class="search">
              <button type="submit"><img src="img/search.png" /></button>
              <input type="text" name="searchBar" id="searchBar" placeholder="Cari" />
            </form>
          </div>
          <div class="hero-heading">
            <h2>WAKTUNYA</h2>
            <h2>MENJELAJAH</h2>
            <h1>INDONESIA</h1>
          </div>
          <p class="hero-desc">Terdapat beberapa daerah diwebsite kami yang dapat kamu kunjungi. Lihat dan cari tahu daerah mana yang ingin kamu lihat, kami siap memberi informasi</p>
        </div>
      </div>
    </section>
    <div class="box-recc">
      <div class="recc">
        <h1>REKOMENDASI KOTA</h1>
      </div>
    </div>

    <div class="card-group card-asli" id="list-pulau">
      <div class="card card-kota" style="width: 180px; background: #1e1e2e; border-right: 1px solid #ffffffbf">
        <img src="img/monas.png" class="card-img-top" alt="..." />
        <div class="card-body">
          <h5 class="card-title">JAKARTA</h5>
          <p class="card-text">Jakarta, atau secara resmi bernama Daerah Khusus Ibukota Jakarta adalah ibu kota negara dan kota terbesar di Indonesia. Menurut sistem pembagian administratif Indonesia, Jakarta merupakan provinsi dengan status daerah khusus. Sementara menurut pengertian secara umum, Jakarta merupakan kota metropolitan</p>
          <a href="#" class="btn text-light border border-white">LIHAT</a>
        </div>
      </div>
      <div class="card card-kota" style="width: 180px; background: #1e1e2e; border-left: 1px solid #ffffffbf">
        <img src="img/bali.png" class="card-img-top" alt="..." />
        <div class="card-body">
          <h5 class="card-title">BALI</h5>
          <p class="card-text">Bali adalah sebuah wilayah provinsi yang terletak di Indonesia. Ibu kotanya adalah Denpasar. Provinsi Bali terletak di bagian barat Kepulauan Nusa Tenggara.</p>
          <a href="#" class="btn text-light border border-white">LIHAT</a>
        </div>
      </div>
    </div>
    <div class="card-group" id="list-pulau">
      <div class="card card-kota" style="width: 180px; background: #3a2a49; border-right: 1px solid #ffffffbf">
        <img src="img/jogja.png" class="card-img-top" alt="..." />
        <div class="card-body">
          <h5 class="card-title">YOGYAKARTA</h5>
          <p class="card-text">Yogyakarta adalah ibu kota sekaligus pusat pemerintahan dan perekonomian dari Daerah Istimewa Yogyakarta, Indonesia. Kota ini adalah kota besar yang mempertahankan konsep tradisional dan budaya Jawa.</p>
          <a href="jogja" class="btn text-light border border-white">LIHAT</a>
        </div>
      </div>
      <div class="card card-kota" style="width: 180px; background: #3a2a49; border-left: 1px solid #ffffffbf">
        <img src="img/pontianak.png" class="card-img-top" alt="..." />
        <div class="card-body">
          <h5 class="card-title">PONTIANAK</h5>
          <p class="card-text">Pontianak adalah ibu kota Provinsi Kalimantan Barat, Indonesia yang sekaligus menjadi pusat pemerintahan dan perekonomian dari Provinsi Kalimantan Barat.</p>
          <a href="#" class="btn text-light border border-white">LIHAT</a>
        </div>
      </div>
    </div>
    <div class="card-group" id="list-pulau">
      <div class="card card-kota" style="width: 180px; background: #1e1e2e; border-right: 1px solid #ffffffbf">
        <img src="img/sabang.png" class="card-img-top" alt="..." />
        <div class="card-body">
          <h5 class="card-title">SABANG</h5>
          <p class="card-text">Sabang adalah salah satu kota di Aceh, Indonesia. Kota ini berupa kepulauan di seberang utara pulau Sumatra, dengan Pulau Weh sebagai pulau terbesar. Kota Sabang merupakan zona ekonomi bebas Indonesia, ia sering disebut sebagai titik paling utara dan barat Indonesia, tepatnya di Pulau Rondo.</p>
          <a href="#" class="btn text-light border border-white">LIHAT</a>
        </div>
      </div>
      <div class="card card-kota" style="width: 180px; background: #1e1e2e; border-left: 1px solid #ffffffbf">
        <img src="img/jayapura.png" class="card-img-top" alt="..." />
        <div class="card-body">
          <h5 class="card-title">JAYAPURA</h5>
          <p class="card-text">Kota Jayapura adalah sebuah kota dan juga ibu kota dari provinsi Papua, Indonesia. Kota ini merupakan ibu kota provinsi yang terletak paling Timur di Indonesia, dan berbatasan langsung dengan negara tetangga Papua Nugini, yang terletak di teluk Jayapura. Kota ini didirikan oleh Kapten Infanteri F.J.P.</p>
          <a href="#" class="btn text-light border border-white">LIHAT</a>
        </div>
      </div>
    </div>

    <div class="container-penilaian">
      <div class="col-penilaian-kiri">
        <h1>BERI PENILAIAN</h1>
        <p>Bagaimana pengalaman anda selama berada di website kami. Berikan penilaian Anda disini</p>
      </div>
      <div class="col-penilaian-kanan">
        <label for="inputEmail">Email*</label> <br />
        <input type="email" placeholder="Alamat Email" name="inputEmail" /> <br />
        <a href="login" class="btn text-light border border-white">Masuk</a>
      </div>
    </div>
    @include('partials.footer')
  </body>
</html>
