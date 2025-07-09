@extends('admin.layouts.app')

@section('contents')
    <!-- Bootstrap Table with Header - Footer -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="card-header">Legal Patnerships</h5>
                <button type="button" class="btn btn-primary me-6" data-bs-toggle="modal" data-bs-target="#tambahPatnership">
                    Tambah Patnership
                </button>
            </div>

            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Foto</th>
                            <th>Jabatan</th>
                            <th>Deskiripsi</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($legal_patnerships as $row)
                            <tr>
                                <td>
                                    {{ $row->name }}
                                </td>
                                <td>
                                    <img src="{{ asset('storage/' . $row->photo) }}" alt="Gambar {{ $row->name }}"
                                        class="img-fluid" style="max-width: 100px; max-height: 100px;">
                                </td>
                                <td>
                                    {{ $row->position }}
                                </td>
                                <td>
                                    {{ Str::limit($row->description, 200) }}
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#editArtikel{{ $row->id }}"><i class="ti ti-pencil me-1"></i> Edit</a>


                                            <form action="{{ route('jurnal.destroy', $row->id) }}" method="POST"
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
                                <td colspan="6" class="text-center">Tidak ada Patner yang tersedia</td>
                            </tr>
                        @endforelse
                    </tbody>
                    <tfoot class="table-border-bottom-0">
                        <tr>
                            <th class="rounded-start-bottom">Nama</th>
                            <th>Foto</th>
                            <th>Jabatan</th>
                            <th>Deskiripsi</th>
                            <th class="rounded-end-bottom">Actions</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <!-- Bootstrap Table with Header - Footer -->

    <!-- Tambah Artikel Modal -->
    <div class="modal fade" id="tambahPatnership" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-simple modal-edit-user">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center mb-6">
                        <h4 class="mb-2">Tambah Patnership</h4>
                    </div>
                    <form class="row g-6" method="POST" action="{{ route('legal_patnership.store') }}"
                        enctype="multipart/form-data" id="formArticle" onsubmit="document.getElementById('loading-screen').style.display = 'flex';">
                        @csrf
                        <!-- Nama -->
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="name">Nama</label>
                            <input type="text" id="name" name="name"
                                class="form-control @error('name') is-invalid @enderror"
                                value="{{ old('name') }}" />
                            @error('name')
                                <div class="invalid-feedback" role="alert">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- Posisi -->
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="position">Posisi</label>
                            <input type="text" id="position" name="position"
                                class="form-control @error('position') is-invalid @enderror" value="{{ old('position') }}" />
                            @error('position')
                                <div class="invalid-feedback" role="alert">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Deskripsi -->
                        <div class="col-12">
                            <label class="form-label" for="description">Deskripsi</label>
                            <textarea id="description" name="description"
                                class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback" role="alert">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Foto -->
                        <div class="col-12">
                            <label class="form-label" for="picture">Foto Diri</label>
                            <input type="file" id="photo" name="photo"
                                class="form-control @error('photo') is-invalid @enderror" />
                            @error('photo')
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

    @foreach ($legal_patnerships as $data)
    <!-- Edit Artikel Modal -->
    <div class="modal fade" id="editArtikel{{ $data->id }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-simple modal-edit-user">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center mb-6">
                        <h4 class="mb-2">Edit Patnership</h4>
                    </div>
                    <form class="row g-6" method="POST" action="{{ route('legal_patnership.update', $data->id) }}"
                        enctype="multipart/form-data" id="formArticle" onsubmit="document.getElementById('loading-screen').style.display = 'flex';">
                        @method('PUT')
                        @csrf
                        <!-- Nama -->
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="name">Nama</label>
                            <input type="text" id="name" name="name"
                                class="form-control @error('name') is-invalid @enderror"
                                value="{{ old('name', $data->name) }}" />
                            @error('name')
                                <div class="invalid-feedback" role="alert">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- Posisi -->
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="position">Posisi</label>
                            <input type="text" id="position" name="position"
                                class="form-control @error('position') is-invalid @enderror" value="{{ old('position',$data->position) }}" />
                            @error('position')
                                <div class="invalid-feedback" role="alert">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Deskripsi -->
                        <div class="col-12">
                            <label class="form-label" for="description">Deskripsi</label>
                            <textarea id="description" name="description"
                                class="form-control @error('description') is-invalid @enderror">{{ old('description',$data->description) }}</textarea>
                            @error('description')
                                <div class="invalid-feedback" role="alert">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Foto -->
                        <div class="col-12">
                            <label class="form-label" for="picture">Foto Diri</label>
                            <img src="{{ asset('storage/' . $data->photo) }}" alt="Gambar {{ $data->name }}"
                                class="img-fluid mb-2" style="max-width: 100px; max-height: 100px;">
                            <input type="file" id="photo" name="photo"
                                class="form-control @error('photo') is-invalid @enderror" />
                            @error('photo')
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
