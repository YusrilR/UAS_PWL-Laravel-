@extends('master')
@section('title')
Form Beli-Roti
@endsection('title')
@section('content')
<!-- Form Restok -->
<script type="text/javascript">
  window.onload = function() {
    $("#CBNama_Customer").change(function() {
     var ambilid = $("#customer-" + this.value).data('id_customer');
    $("#id_customer").val(ambilid);
    });
  }
</script>
                <div class="container">
                    <div class="row">
                      <div class="col-lg-8 col-md-10 mx-auto">
                        <header class="section-header">
                          <h3 class="section-title">Form Penjualan Roti</h3>
                        </header>
                        <div class="form">
                          @foreach($produk as $DB)  
                          <form action="/insertpenjualan" method="post" class="php-email-form">
                            @csrf
                            <!-- {{ csrf_field() }} -->
                            <div class="form-group">
                              <label for="id_jual">Id Jual :</label>
                              <input type="text" name="id_jual" class="form-control" id="id_jual" placeholder="Id Jual" data-msg="Please enter at least 5 chars" />
                            </div>
                            <div class="form-group">
                              <label for="id_roti">Id Roti :</label>
                              <input type="text" class="form-control" name="id_roti" id="id_roti" value="{{ $DB->id_roti}}"placeholder="Id Roti" data-rule="minlen:1" readonly />
                            </div>
                            <div class="form-group">
                              <label for="nama_roti">Nama Roti :</label>
                              <input type="text" class="form-control" name="nama_roti" id="nama_roti" placeholder="Nama Roti" value="{{ $DB->nama_roti}}"data-rule="minlen:1" readonly />
                            </div>
                            <div class="form-group">
                              <label for="nama_customer">Id Customer :</label>
                              <input type="text" class="form-control" name="id_customer" id="id_customer" placeholder="Id Customer" data-rule="minlen:1" readonly/>
                            </div>
                            <div class="form-group">
                              <label for="Nama_Supplier">Nama Customer</label>
                              <select name="CBNama_Customer" id="CBNama_Customer">
                                <option selected>Pilih Customer</option>
                                @foreach($customer as $cus)
                                <option value="{{$cus->id_customer}}" id="customer-{{$cus->id_customer}}" data-id_customer="{{$cus->id_customer}}">{{$cus->nama_customer}}</option>
                                @endforeach
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="stok">Stok Sekarang</label>
                              <input type="number" class="form-control" name="stok" id="stok" value="{{ $DB->stok}}" readonly/>
                            </div>
                            <div class="form-group">
                              <label for="harga">Harga Roti :</label>
                              <input type="number" class="form-control" name="harga" id="harga" placeholder="Harga Roti" value="{{ $DB->harga}}"data-rule="minlen:1" readonly />
                            </div>
                            <div class="form-group">
                              <label for="jumlah_jual">Jumlah Jual :</label>
                              <input type="number" class="form-control" name="jumlah" id="jumlah" onkeyup="stock();" placeholder="Jumlah jumlah_jual" data-rule="minlen:8" data-msg="Masukkan Jumlah yang ingin dibeli" />
                            </div>
                            <div class="form-group">
                              <label for="total_harga">Total Harga :</label>
                              <input type="number" class="form-control" name="total_harga" id="total_harga" placeholder="Rp." data-rule="minlen:8" readonly required/>
                            </div>
                            <div class="form-group">
                              <label for="Jumlah_Akhir">Jumlah Stock Setelah Beli</label>
                              <input type="number" class="form-control" name="Jumlah_Akhir" id="Jumlah_Akhir" readonly/>
                            </div>
                            <div class="form-group">
                              <label for="bayar">Bayar :</label>
                              <input type="number" class="form-control" name="bayar" id="bayar" onkeyup="totalharga();" placeholder="Bayar" data-rule="minlen:8" data-msg="Masukkan Jumlah Bayar" /> 
                            </div>
                            <div class="form-group">
                              <label for="jumlah_bahan">Kembalian :</label>
                              <input type="number" class="form-control" name="kembalian" id="kembalian" placeholder="Kembalian" data-rule="minlen:8" readonly />
                            </div>
                            <div class="text-center">
                              <button type="submit" class="btn btn-success">Jual Roti</button>
                            </div>
                          </form>
                          @endforeach
                         </div>
                      </div>
                    </div>
                </div>
                <br>

            </div>
            <!-- End of Main Content -->
            <script>
              function totalharga() {
                var jmlbeli = document.getElementById('jumlah').value;
                var harga = document.getElementById('harga').value;
                var result = parseInt(jmlbeli) * parseInt(harga);
                var byr = document.getElementById('bayar').value;
                var kembalian = parseInt(byr) - parseInt(result);
                document.getElementById('total_harga').value = result;
                document.getElementById('kembalian').value = kembalian;
              }

              function stock() {
                var jmlbeli = document.getElementById('jumlah').value;
                var stocksekarang = document.getElementById('stok').value;
                var result = parseInt(stocksekarang) - parseInt(jmlbeli);
                if (result < 0 ){
                  alert('Stok Roti Tidak Cukup');
                }else{
                  document.getElementById('Jumlah_Akhir').value = result;
                } 
              }
            </script>
@endsection('content')