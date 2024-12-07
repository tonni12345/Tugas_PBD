@extends('layout.master')

@section('title', 'Kategori')

@section('content')
<div class="main-content">
     <section class="section">
        <div class="section-header">
            <h1>Ketegori</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Kategori</h4>

                    <div class="card-header-form">
                        <button class="btn btn-sm btn-success" type="button" data-target="#modal-tambah" data-toggle="modal">Tambah Data</button>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                <th style="width: 10%;">#</th>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th style="width: 15%;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kategori as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->kode}}</td>
                                    <td>{{$item->nama}}</td>
                                    <td>
                                        <buttonn class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></buttonn>
                                        <buttonn class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></buttonn>
                                    </td>
                                </tr>    
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
@include('kategori.form')
@endsection