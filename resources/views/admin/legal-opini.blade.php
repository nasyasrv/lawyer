@extends('admin.layouts.app')

@section('contents')
    <!-- Bootstrap Table with Header - Footer -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="card-header">Legal Opini</h5>
                <button type="button" class="btn btn-primary me-6" data-bs-toggle="modal" data-bs-target="#tambahArtikel">
                    Tambah Artikel
                </button>
            </div>

            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Gambar</th>
                            <th>Isi Artikel</th>
                            <th>Nama Penerbit dan Penulis</th>
                            <th>Tanggal Terbit</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($legal_opinis as $row)
                            <tr>
                                <td>
                                    {{ $row->title }}
                                </td>
                                <td>
                                    <img src="{{ asset('storage/' . $row->picture) }}" alt="Gambar Artikel"
                                        class="img-fluid" style="max-width: 100px; max-height: 100px;">
                                </td>
                                <td>
                                    <div class="text-truncate" style="max-width: 200px;">
                                        {!! Str::limit(strip_tags($row->content), 100) !!}
                                    </div>
                                </td>
                                <td>
                                    Nama Penulis: {{ $row->author }} <br>
                                    Nama Penerbit: {{ $row->publisher }}
                                </td>
                                <td>
                                    {{ \Carbon\Carbon::parse($row->date_publish)->format('d F Y') }}
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#editArtikel{{ $row->id }}"><i
                                                    class="ti ti-pencil me-1"></i> Edit</a>


                                            <form action="{{ route('legal_opini.destroy', $row->id) }}" method="POST"
                                                class="form-delete">
                                                @csrf
                                                @method('DELETE')
                                                <a href="javascript:void(0);" class="dropdown-item btn-delete"
                                                    data-name="{{ $row->title }}">
                                                    <i class="ti ti-trash me-1"></i> Delete
                                                </a>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">Tidak ada artikel yang tersedia</td>
                            </tr>
                        @endforelse
                    </tbody>
                    <tfoot class="table-border-bottom-0">
                        <tr>
                            <th class="rounded-start-bottom">Judul</th>
                            <th>Gambar</th>
                            <th>Isi Artikel</th>
                            <th>Nama Penerbit dan Penulis</th>
                            <th>Tanggal Terbit</th>
                            <th class="rounded-end-bottom">Actions</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <!-- Bootstrap Table with Header - Footer -->

    <!-- Tambah Artikel Modal -->
    <div class="modal fade" id="tambahArtikel" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-simple modal-edit-user">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center mb-6">
                        <h4 class="mb-2">Tambah Artikel</h4>
                    </div>
                    <form class="row g-6" method="POST" action="{{ route('legal_opini.store') }}"
                        enctype="multipart/form-data" id="formArticle"
                        onsubmit="document.getElementById('loading-screen').style.display = 'flex';">
                        @csrf
                        <!-- Penerbit -->
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="title">Judul</label>
                            <input type="text" id="title" name="title"
                                class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" />
                            @error('title')
                                <div class="invalid-feedback" role="alert">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Penerbit -->
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="publisher">Nama Penerbit</label>
                            <input type="text" id="publisher" name="publisher"
                                class="form-control @error('publisher') is-invalid @enderror"
                                value="{{ old('publisher') }}" />
                            @error('publisher')
                                <div class="invalid-feedback" role="alert">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Penulis -->
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="author">Nama Penulis</label>
                            <input type="text" id="author" name="author"
                                class="form-control @error('author') is-invalid @enderror" value="{{ old('author') }}" />
                            @error('author')
                                <div class="invalid-feedback" role="alert">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Tanggal -->
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="date_publish">Tanggal Terbit</label>
                            <input type="date" id="date_publish" name="date_publish"
                                class="form-control @error('date_publish') is-invalid @enderror"
                                value="{{ old('date_publish') }}" />
                            @error('date_publish')
                                <div class="invalid-feedback" role="alert">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Foto -->
                        <div class="col-12">
                            <label class="form-label" for="picture">Foto terkait</label>
                            <input type="file" id="picture" name="picture"
                                class="form-control @error('picture') is-invalid @enderror" />
                            @error('picture')
                                <div class="invalid-feedback" role="alert">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Artikel -->
                        <div class="col-12">
                            <label class="form-label">Isi Artikel</label>
                            @error('content')
                                <div class="text-danger small mb-2">{{ $message }}</div>
                            @enderror

                            <!-- Hidden input -->
                            <input type="hidden" name="content" id="content" value="{{ old('content') }}">
                            <input type="hidden" id="oldContent" value="{{ old('content') }}">

                            <!-- Toolbar -->
                            <div id="snow-toolbar">
                                <span class="ql-formats">
                                    <select class="ql-font"></select>
                                    <select class="ql-size"></select>
                                </span>
                                <span class="ql-formats">
                                    <button class="ql-bold"></button>
                                    <button class="ql-italic"></button>
                                    <button class="ql-underline"></button>
                                    <button class="ql-strike"></button>
                                </span>
                                <span class="ql-formats">
                                    <select class="ql-color"></select>
                                    <select class="ql-background"></select>
                                </span>
                                <span class="ql-formats">
                                    <button class="ql-script" value="sub"></button>
                                    <button class="ql-script" value="super"></button>
                                </span>
                                <span class="ql-formats">
                                    <button class="ql-header" value="1"></button>
                                    <button class="ql-header" value="2"></button>
                                    <button class="ql-blockquote"></button>
                                    <button class="ql-code-block"></button>
                                </span>
                            </div>

                            <!-- Editor -->
                            <div id="snow-editor" style="height: 200px; border: 1px solid #ccc;"></div>
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

    @foreach ($legal_opinis as $data)
        <!-- Edit Artikel Modal -->
        <div class="modal fade" id="editArtikel{{ $data->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-simple modal-edit-user">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-6">
                            <h4 class="mb-2">Edit Artikel</h4>
                        </div>
                        <form class="row g-6" method="POST" action="{{ route('legal_opini.update', $data->id) }}"
                            enctype="multipart/form-data" id="formArticleEdit{{ $data->id }}"
                            onsubmit="document.getElementById('loading-screen').style.display = 'flex';">
                            @method('PUT')
                            @csrf
                            <!-- Penerbit -->
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="title">Judul</label>
                                <input type="text" id="title {{ $data->id }}" name="title"
                                    class="form-control @error('title') is-invalid @enderror"
                                    value="{{ old('title', $data->title) }}" />
                                @error('title')
                                    <div class="invalid-feedback" role="alert">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Penerbit -->
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="publisher">Nama Penerbit</label>
                                <input type="text" id="publisher {{ $data->id }}" name="publisher"
                                    class="form-control @error('publisher') is-invalid @enderror"
                                    value="{{ old('publisher', $data->publisher) }}" />
                                @error('publisher')
                                    <div class="invalid-feedback" role="alert">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Penulis -->
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="author">Nama Penulis</label>
                                <input type="text" id="author{{ $data->id }}" name="author"
                                    class="form-control @error('author') is-invalid @enderror"
                                    value="{{ old('author', $data->author) }}" />
                                @error('author')
                                    <div class="invalid-feedback" role="alert">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Tanggal -->
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="date_publish">Tanggal Terbit</label>
                                <input type="date" id="date_publish {{ $data->id }}" name="date_publish"
                                    class="form-control @error('date_publish') is-invalid @enderror"
                                    value="{{ old('date_publish', $data->date_publish) }}" />
                                @error('date_publish')
                                    <div class="invalid-feedback" role="alert">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Foto -->
                            <div class="col-12">
                                <label class="form-label" for="picture">Foto terkait</label>
                                <img src="{{ asset('storage/' . $data->picture) }}" alt="Gambar Artikel"
                                    class="img-fluid mb-2" style="max-width: 100px; max-height: 100px;">
                                <input type="file" id="picture {{ $data->id }}" name="picture"
                                    class="form-control @error('picture') is-invalid @enderror" />
                                @error('picture')
                                    <div class="invalid-feedback" role="alert">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Artikel -->
                            <div class="col-12">
                                <label class="form-label">Isi Artikel</label>
                                @error('content')
                                    <div class="text-danger small mb-2">{{ $message }}</div>
                                @enderror

                                <!-- Hidden input -->
                                <input type="hidden" name="content" id="contentEdit{{ $data->id }}"
                                    value="{{ old('content', $data->content) }}">
                                <input type="hidden" id="oldContentEdit{{ $data->id }}"
                                    value="{{ old('content', $data->content) }}">

                                <!-- Toolbar -->
                                <div id="snow-toolbar-edit-{{ $data->id }}">
                                    <span class="ql-formats">
                                        <select class="ql-font"></select>
                                        <select class="ql-size"></select>
                                    </span>
                                    <span class="ql-formats">
                                        <button class="ql-bold"></button>
                                        <button class="ql-italic"></button>
                                        <button class="ql-underline"></button>
                                        <button class="ql-strike"></button>
                                    </span>
                                    <span class="ql-formats">
                                        <select class="ql-color"></select>
                                        <select class="ql-background"></select>
                                    </span>
                                    <span class="ql-formats">
                                        <button class="ql-script" value="sub"></button>
                                        <button class="ql-script" value="super"></button>
                                    </span>
                                    <span class="ql-formats">
                                        <button class="ql-header" value="1"></button>
                                        <button class="ql-header" value="2"></button>
                                        <button class="ql-blockquote"></button>
                                        <button class="ql-code-block"></button>
                                    </span>
                                </div>

                                <!-- Editor -->
                                <div id="snow-editor-edit-{{ $data->id }}"
                                    style="height: 200px; border: 1px solid #ccc;"></div>
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
        window.legalOpinis = @json($legal_opinis);
    </script>

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
