@extends('master')
@section('title')
Beli-Roti
@endsection('title')
@section('content')

<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <p>Jika anda punya pertanyaan anda bisa mengisi form dibawah untuk mengkontak kami.</p>
        <form name="sentMessage" id="contactForm" novalidate>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Nama</label>
              <input type="text" class="form-control" placeholder="Nama" id="nama" required data-validation-required-message="Masukan Nama Anda.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Email</label>
              <input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Masukan Email Anda.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Nomor Telepon</label>
              <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Masukan No Telp Anda.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Pesan</label>
              <textarea rows="5" class="form-control" placeholder="Pesan" id="pesan" required data-validation-required-message="Masukan pertanyaan anda disini."></textarea>
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <br>
          <div id="success"></div>
          <button onclick="kontak()" type="submit" class="btn btn-primary" id="sendMessageButton">Kirim</button>
        </form>
      </div>
    </div>
  </div>

  <script>
    function kontak(){
      alert('Pesan anda telah terkirim');
    }
  </script>
  <hr>
@endsection('content')
