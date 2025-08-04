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
                            <th>Rating</th>
                            <th>Pesan</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($reviews as $row)
                            <tr>
                                <td>
                                    {{ $row->name }}
                                </td>
                                <td>
                                    @for ($i = 1; $i <= 5; $i++)
                                        <span class="fa fa-star {{ $i <= $row->rating ? 'checked' : '' }}"></span>
                                    @endfor
                                </td>
                                <td>
                                    {{ Str::limit($row->message, 200) }}
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
                            <th>Rating</th>
                            <th>Pesan</th>
                            <th class="rounded-end-bottom">Actions</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
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
