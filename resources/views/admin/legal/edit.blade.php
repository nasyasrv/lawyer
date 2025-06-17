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
                                                <form action="{{ route('legal.update', $data    ->id ) }}" enctype="multipart/form-data" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="mb-3">
                                                        <label class="form-label">Foto</label>
                                                        <img src="{{ asset('fotolegal/' . $data->foto) }}" alt=""
                                                                style="width: 50px"> </td>
                                                        <input type="file" class="form-control" value="{{ $data->foto }}" name="foto">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label"> Nama </label>
                                                        <input type="text" class="form-control" name="nama" value="{{ $data->nama }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label"> Jabatan </label>
                                                        <input type="text" class="form-control" name="jabatan" value="{{ $data->jabatan }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label"> Deskripsi</label>
                                                        <input type="text" class="form-control" name="Deskripsi" value="{{ $data->Deskripsi }}">
                                                    </div>

                                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                                </form>
                                                </td>
                                                </tr>
                                                <tr>

                                                </tr>
                                                </tbody>
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
