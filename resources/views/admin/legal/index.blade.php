@extends('admin.layout.header')
@section('contents')
    <div id="main">
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>LEGAL PARTNERSHIP</h3>
                    </div>
                </div>
            </div>

            <!-- Basic Tables start -->
            <section class="section">
                <div class="row" id="basic-table">
                    <div class="col-3 col-md-12">
                        <div class="card">
                            <div class="card-header">
                            </div>
                            <div class="card-content">
                                <div class="card-body">

                                    <!-- Table with outer spacing -->
                                    <div class="table-responsive">
                                        <table class="table table-lg">
                                            <thead>
                                                <a href="{{ route('legal.create') }}" class="btn btn-primary">Tambah
                                                    Data</a>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Foto</th>
                                                    <th>Nama</th>
                                                    <th>Jabatan</th>
                                                    <th>Deskripsi</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>


                                            @foreach ($data as $row)
                                                <tbody>
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>
                                                            <img src="{{ asset('fotolegal/' . $row->foto) }}" alt=""
                                                                style="width: 50px">
                                                        </td>
                                                        <td>{{ $row->nama }}</td>
                                                        <td>{{ $row->jabatan }}</td>
                                                        <td>{{ $row->Deskripsi }}</td>
                                                        <td>
                                                            <a href="{{ route('legal.edit', $row->id) }}"
                                                                class="btn btn-warning">Edit</a>

                                                            <form action="{{ route('legal.destroy', $row->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    <tr>

                                                    </tr>
                                                </tbody>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- Basic Tables end -->


        </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    <!-- Contextual classes end -->


    </div>
    </div>
@endsection
