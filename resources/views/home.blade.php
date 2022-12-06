
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Sewa Produk</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
    <link href="{{asset('ceksewa/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{{asset('ceksewa/css/signin.css')}}" rel="stylesheet">
  </head>
  <body class="text-center">

    <?php
      function rupiah($angka){
        $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
        return $hasil_rupiah;
      }
    ?>
    
    <main class="form-signin w-100 m-auto">
      <form action="{{url('/calculate')}}">
        <h1 class="h3 mb-3 fw-normal">Input Data Sewa</h1>

        <div class="form-floating">
          <select class="form-select" id="nama" name="nama">
            <option value="">Produk Sewa...</option>
            @foreach ($motor as $m)
            <option value="{{$m->nama}}">{{$m->nama}}</option>
            <input type="hidden" id="biayaSewa" name="biayaSewa" value="{{$m->biaya_sewa}}">
            <input type="hidden" id="biayaDenda" name="biayaDenda" value="{{$m->biaya_denda}}">
            @endforeach
          </select>
          <label for="nama">Pilih Produk Sewa</label>
        </div>
        <div class="form-floating" style="margin-top: 2%;">
          <input type="number" class="form-control" id="durasiSewa" name="durasiSewa">
          <label for="durasiSewa">Durasi Sewa</label>
        </div>
        <div class="form-floating" style="margin-top: 2%;">
          <input type="number" class="form-control" id="durasiPengembalian" name="durasiPengembalian">
          <label for="durasiPengembalian">Durasi Pengembalian</label>
        </div>

        <button class="w-100 btn btn-lg btn-warning" type="submit" style="margin-top: 5%;">Cek Biaya</button>
        <a type="button" href="{{url('/build')}}">Build Produk</a>
        <a type="button" href="{{url('/home')}}">Reset</a>
      </form>

      @if (isset($totalPrice))
        Total biaya sewa {{$nama}} adalah {{rupiah($totalPrice)}}
        Dengan denda sebesar {{rupiah($totalDenda)}}
      @endif

      <p class="mt-5 mb-3 text-muted">&copy; 2022</p>

    </main> 
  </body>
</html>
