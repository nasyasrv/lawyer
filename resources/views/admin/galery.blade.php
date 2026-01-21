@extends('admin.layouts.app')

@section('contents')
    <!-- Bootstrap Table with Header - Footer -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="card-header">galeries</h5>
                <button type="button" class="btn btn-primary me-6" data-bs-toggle="modal" data-bs-target="#tambahFoto">
                    Tambah Foto
                </button>
            </div>

            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Foto</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($galeries as $row)
                            <tr>
                                <td>
                                    {{ $row->name }}
                                </td>
                                <td>
                                    <img src="{{ asset('storage/' . $row->image) }}" alt="Gambar {{ $row->name }}"
                                        class="img-fluid" style="max-width: 100px; max-height: 100px;">
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#editGalery{{ $row->id }}"><i
                                                    class="ti ti-pencil me-1"></i> Edit</a>


                                            <form action="{{ route('galery.destroy', $row->id) }}" method="POST"
                                                class="form-delete">
                                                @csrf
                                                @method('DELETE')
                                                <a href="javascript:void(0);" class="dropdown-item btn-delete"
                                                    data-name="{{ $row->name }}">
                                                    <i class="ti ti-trash me-1"></i> Delete
                                                </a>
                                            </form>

                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">Tidak ada Gambar/Foto yang tersedia</td>
                            </tr>
                        @endforelse
                    </tbody>
                    <tfoot class="table-border-bottom-0">
                        <tr>
                            <th class="rounded-start-bottom">Judul</th>
                            <th>Sampul</th>
                            <th class="rounded-end-bottom">Actions</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <!-- Bootstrap Table with Header - Footer -->

    <!-- Tambah Artikel Modal -->
    <div class="modal fade" id="tambahFoto" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-simple modal-edit-user">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center mb-6">
                        <h4 class="mb-2">Tambah Foto</h4>
                    </div>
                    <form class="row g-6" method="POST" action="{{ route('galery.store') }}" enctype="multipart/form-data"
                        id="formJurnal" onsubmit="document.getElementById('loading-screen').style.display = 'flex';">
                        @csrf
                        <!-- Judul -->
                        <div class="col-12">
                            <label class="form-label" for="name">Nama</label>
                            <input type="text" id="name" name="name"
                                class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" />
                            @error('name')
                                <div class="invalid-feedback" role="alert">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- Gambar -->
                        <div class="col-12 ">
                            <label class="form-label" for="image">Foto</label>
                            <input type="file" id="image" name="image"
                                class="form-control @error('image') is-invalid @enderror" />
                            @error('image')
                                <div class="invalid-feedback" role="alert">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Tombol Submit -->
                        <div class="col-12 text-center mt-3">
                            <button type="submit" class="btn btn-primary me-3">Submit</button>
                            <button type="reset" class="btn btn-label-secondary">Cancel</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    @foreach ($galeries as $data)
        <!-- Edit Artikel Modal -->
        <div class="modal fade" id="editGalery{{ $data->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-simple modal-edit-user">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-6">
                            <h4 class="mb-2">Edit Foto</h4>
                        </div>
                        <form class="row g-6" method="POST" action="{{ route('galery.update', $data->id) }}"
                            enctype="multipart/form-data" id="formGalery"
                            onsubmit="document.getElementById('loading-screen').style.display = 'flex';">
                            @method('PUT')
                            @csrf
                            <!-- Nama -->
                            <div class="col-12">
                                <label class="form-label" for="name">Nama Foto</label>
                                <input type="text" id="name" name="name"
                                    class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name', $data->name) }}" />
                                @error('name')
                                    <div class="invalid-feedback" role="alert">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Gambar -->
                            <div class="col-12">
                                <label class="form-label" for="image">Gambar</label> <br>
                                <img src="{{ asset('storage/' . $data->image) }}" alt="Gambar {{ $data->name }}"
                                    class="img-fluid mb-2" style="max-width: 100px; max-height: 100px;">
                                <input type="file" id="image" name="image"
                                    class="form-control @error('image') is-invalid @enderror" />
                                @error('image')
                                    <div class="invalid-feedback" role="alert">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Tombol Submit -->
                            <div class="col-12 text-center mt-3">
                                <button type="submit" class="btn btn-primary me-3">Submit</button>
                                <button type="reset" class="btn btn-label-secondary">Cancel</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteButtons = document.querySelectorAll('.btn-delete');

            deleteButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();

                    const form = this.closest('form');
                    const name = this.getAttribute('data-name');

                    Swal.fire({
                        title: 'Apakah kamu yakin?',
                        text: `Data "${name}" akan dihapus permanen!`,
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Ya, hapus!',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                        }
                    });
                });
            });
        });
    </script>
@endpush
