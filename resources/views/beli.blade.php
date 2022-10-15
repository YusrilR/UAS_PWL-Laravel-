@extends('master')
@section('title')
Beli-Roti
@endsection('title')
@section('content')
 <div class="container">
                    <div class="card m-5">
                        <div class="card-header text-center">
                            <h3>Data Roti</h3>
                        </div>
                        <div class="card-body">
                        <div class="panel-body">
                        <table width="100%" class="table table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                <th>Nomor</th>
                                <th>ID Roti</th>
                                <th>Nama Roti</th>
                                <th>Stok</th>
                                <th>Harga</th>
                                <th>Opsi</th>
                                </tr>
                                <?php $no=1; ?>
                                @foreach ($produk as $data)
                                <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->id_roti}}</td>
                                <td>{{ $data->nama_roti}}</td>
                                <td>{{ $data->stok}}</td>
                                <td>{{ $data->harga}}</td>
                                <td><a class="btn btn-danger" href="transaksijual/{{ $data->id_roti}}"><i class="fas fa">Beli</i></a></td>
                                </tr>
                                @endforeach
                            </thead>
                        </table>
                        </div>
                        </div>
                    </div>
                </div>
 
@endsection('content')













