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
                                                <form action="{{ route('legal.store') }}" enctype="multipart/form-data"
                                                    method="POST">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label class="form-label">Foto</label>
                                                        <input type="file"
                                                            class="form-control @error('foto') is-invalid" @enderror name="foto">
                                                        @error('foto')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                                                        <input type="text"
                                                            class="form-control @error('nama') is-invalid @enderror"
                                                            name="nama">
                                                        @error('nama')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Jabatan</label>
                                                        <input type="text"
                                                            class="form-control  @error('jabatan') is-invalid @enderror"
                                                            name="jabatan">
                                                        @error('jabatan')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                                                        <input type="text"
                                                            class="form-control @error('Deskripsi') is-invalid @enderror"
                                                            name="Deskripsi">
                                                        @error('Deskripsi')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
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
