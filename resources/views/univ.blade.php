@extends('layouts.main')
@section('container')
    @include('partials.breadcrumbs')

    <div class="content d-flex flex-column flex-column-fluid" id="kt-content">
        <div class="row gy-5 g-xl-8">
            <!--begin::Col-->
            <div class="col-xl-12">
                <!--begin::Tables Widget 9-->
                <div class="card card-xl-stretch mb-5 mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder fs-3 mb-1">{{ $lokasi }}</span>
                            <span class="text-muted mt-1 fw-bold fs-7">Daftar {{ $lokasi }}</span>
                        </h3>
                        <button class="card-toolbar btn btn-sm btn-light btn-active-primary" data-bs-toggle="tooltip"
                            data-bs-placement="top" data-bs-trigger="hover" title="Click to add a univ">
                            <a href="#" class="" data-bs-toggle="modal" data-bs-target="#kt_modal_add_univ">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                <span class="svg-icon svg-icon-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2"
                                            rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                            fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->Add</a>
                        </button>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body py-3">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table table-row-dashed table-row-gray-1000 align-middle gs-0 gy-5">
                                <!--begin::Table head-->
                                <thead>
                                    <tr class="fw-bolder text-muted">
                                        <th class="min-w-50px">No</th>
                                        <th class="min-w-150px">Nama</th>
                                        <th class="min-w-140px">Negara</th>
                                        <th class="min-w-140px">Kota</th>
                                        <th class="min-w-120px">Alamat</th>
                                        <th class="min-w-100px text-end">Aksi</th>
                                    </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                    @foreach ($data as $datas)
                                        <tr>
                                            <td>
                                                <a href="#"
                                                    class="text-dark fw-bolder text-hover-primary d-block fs-6">{{ $datas->id }}</a>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d-flex justify-content-start flex-column">
                                                        <a href="#"
                                                            class="text-dark fw-bolder text-hover-primary fs-6">{{ $datas->nama_univ }}</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#"
                                                    class="text-dark fw-bolder text-hover-primary d-block fs-6">{{ $datas->negara->nama_negara }}</a>
                                            </td>
                                            <td>
                                                <a href="#"
                                                    class="text-dark fw-bolder text-hover-primary d-block fs-6">{{ $datas->kota->nama_kota }}</a>
                                            </td>
                                            <td>
                                                <a href="#"
                                                    class="text-dark fw-bolder text-hover-primary d-block fs-6">{{ $datas->alamat_univ }}</a>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-end flex-shrink-0">
                                                    <a href="#"
                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                                        data-bs-toggle="modal" data-bs-target="#upd{{ $datas->id }}">
                                                        <!--begin::Svg Icon Edit | path: icons/duotune/art/art005.svg-->
                                                        <span class="svg-icon svg-icon-3">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <path opacity="0.3"
                                                                    d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                    fill="black" />
                                                                <path
                                                                    d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                    fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                    <a href="#"
                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                        <!--begin::Svg Icon Delete | path: icons/duotune/general/gen027.svg-->
                                                        <form method="post"
                                                            action="{{ route('univ.destroy', $datas->id) }}">
                                                            @csrf
                                                            @method('delete')
                                                            <span
                                                                onclick="event.preventDefault(); this.closest('form').submit();"
                                                                class="svg-icon svg-icon-3">
                                                                {{-- {{ __('delete') }} --}}
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path
                                                                        d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                        fill="black" />
                                                                    <path opacity="0.5"
                                                                        d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                        fill="black" />
                                                                    <path opacity="0.5"
                                                                        d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                        fill="black" />
                                                                </svg>
                                                            </span>
                                                        </form>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="upd{{ $datas->id }}" tabindex="-1"
                                            aria-hidden="true">
                                            <!--begin::Modal dialog-->
                                            <div class="modal-dialog modal-dialog-centered mw-650px">
                                                <form class="form" method="post"
                                                    action="{{ route('univ.update', $datas->id) }}"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    @method('put')
                                                    <!--begin::Modal content-->
                                                    <div class="modal-content">
                                                        <!--begin::Form-->
                                                        <!--begin::Modal header-->
                                                        <div class="modal-header">
                                                            <!--begin::Modal title-->
                                                            <h2 class="fw-bolder" data-kt-calendar="title">
                                                                Edit Univ
                                                            </h2>
                                                            <!--end::Modal title-->
                                                            <!--begin::Close-->
                                                            <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                                                data-bs-dismiss="modal">
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                                <span class="svg-icon svg-icon-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24"
                                                                        fill="none">
                                                                        <rect opacity="0.5" x="6" y="17.3137"
                                                                            width="16" height="2" rx="1"
                                                                            transform="rotate(-45 6 17.3137)"
                                                                            fill="black" />
                                                                        <rect x="7.41422" y="6" width="16"
                                                                            height="2" rx="1"
                                                                            transform="rotate(45 7.41422 6)"
                                                                            fill="black" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Close-->
                                                        </div>
                                                        <!--end::Modal header-->
                                                        <!--begin::Modal body-->
                                                        <div class="modal-body py-10 px-lg-17">
                                                            <div class="fv-row mb-9">
                                                                <label class="fs-6 fw-bold required mb-2">Nama
                                                                    univ</label>
                                                                <input type="text"
                                                                    class="form-control form-control-solid" id="1"
                                                                    name="nama_kota" value="{{ $datas->nama_univ }}">
                                                            </div>
                                                            <label for="22" class="fs-6 fw-bold mb-2">Nama
                                                                negara</label>
                                                            <select list="negara" type="select"
                                                                class="form-control form-control-solid"
                                                                id="negara_select_edit{{ $datas->id }}"
                                                                name="negara_id">
                                                                <datalist id="negara">
                                                                    @foreach ($datanegara as $negara)
                                                                        <option
                                                                            value="{{ $negara->id }}"{{ $negara->id == $datas->negara->id ? 'selected' : '' }}>
                                                                            {{ $negara->nama_negara }}</option>
                                                                    @endforeach
                                                                </datalist>
                                                            </select>
                                                            <div
                                                                class="fv-row
                                                                    mb-9">
                                                                <label for="kota_select_edit{{ $datas->id }}"
                                                                    class="fs-6 fw-bold mb-2">Nama kota</label>
                                                                <select list="kota" type="select"
                                                                    id="kota_select_edit{{ $datas->id }}"
                                                                    class="form-control form-control-solid"
                                                                    name="negara_id">
                                                                    <datalist id="negara">
                                                                        @foreach ($datakota as $kota)
                                                                            <option
                                                                                value="{{ $kota->id }}"{{ $kota->id == $datas->kota->id ? 'selected' : '' }}>
                                                                                {{ $kota->nama_kota }}</option>
                                                                        @endforeach
                                                                    </datalist>
                                                                </select>
                                                            </div>
                                                            <div
                                                                class="fv-row
                                                                    mb-9">
                                                                <label class="fs-6 fw-bold mb-2">Alamat</label>
                                                                <input type="text"
                                                                    class="form-control form-control-solid" id="2"
                                                                    name="nama_kota" value="{{ $datas->alamat_univ }}">
                                                            </div>
                                                        </div>
                                                        <!--end::Modal body-->
                                                        <!--begin::Modal footer-->
                                                        <div
                                                            class="modal-footer
                                                                    flex-center">
                                                            <!--begin::Button-->
                                                            <button type="reset" class="btn btn-light me-3 close"
                                                                data-bs-dismiss="modal">
                                                                Cancel
                                                            </button>
                                                            <!--end::Button-->
                                                            <!--begin::Button-->
                                                            <button type="submit" id="submit"
                                                                class="btn btn-primary">Submit</button>
                                                            <!--end::Button-->
                                                        </div>
                                                        <!--end::Modal footer-->
                                                </form>
                                                <!--end::Form-->
                                            </div>
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection('container')
@section('modal-create')
    <form class="form" method="post" action="{{ route('univ.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="modal fade" id="kt_modal_add_univ" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-650px">
                <!--begin::Modal content-->
                <div class="modal-content">
                    <!--begin::Form-->
                    <!--begin::Modal header-->
                    <div class="modal-header">
                        <!--begin::Modal title-->
                        <h2 class="fw-bolder" data-kt-calendar="title">
                            Tambah Univ
                        </h2>
                        <!--end::Modal title-->
                        <!--begin::Close-->
                        <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                        transform="rotate(-45 6 17.3137)" fill="black" />
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                        transform="rotate(45 7.41422 6)" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--end::Modal header-->
                    <!--begin::Modal body-->
                    <div class="modal-body py-10 px-lg-17">
                        <div class="fv-row mb-9">
                            <label class="fs-6 fw-bold required mb-2">Nama univ</label>
                            <input type="text" class="form-control form-control-solid" id="1"
                                name="nama_univ" required>
                        </div>
                        <div class="fv-row mb-9">
                            <label for="n" class="fs-6 fw-bold mb-2">Nama Negara</label>
                            <select list="negara" type="select" class="form-control form-control-solid"
                                id="negara_select" name="nama_negara">
                                <datalist id="negara">
                                    @foreach ($datanegara as $negara)
                                        <option value="{{ $negara->id }}">
                                            {{ $negara->nama_negara }}
                                        </option>
                                    @endforeach
                                </datalist>
                            </select>
                        </div>
                        <div class="fv-row mb-9">
                            <label for="kota_select" class="fs-6 fw-bold mb-2">Nama Kota</label>
                            <select list="negara" type="select" class="form-control form-control-solid"
                                id="kota_select" name="nama_kota">
                                <datalist id="kota">
                                    @foreach ($datakota as $kota)
                                        <option value="{{ $kota->id }}">
                                            {{ $kota->nama_kota }}
                                        </option>
                                    @endforeach
                                </datalist>
                            </select>
                        </div>
                        <div class="fv-row mb-9">
                            <label class="fs-6 fw-bold mb-2">Alamat</label>
                            <input type="text" class="form-control form-control-solid" id="4"
                                name="alamat_univ" required>
                        </div>
                    </div>
                    <!--end::Modal body-->
                    <!--begin::Modal footer-->
                    <div class="modal-footer flex-center">
                        <!--begin::Button-->
                        <button type="reset" class="btn btn-light me-3 close" data-bs-dismiss="modal">
                            Cancel
                        </button>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" id="submit" class="btn btn-primary">Submit</button>
                        <!--end::Button-->
                    </div>
                </div>
            </div>
        </div>
        <!--end::Modal footer-->
    </form>
    <!--end::Form-->
@endsection('modal-create')

@section('script')
    @foreach ($data as $datas)
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#negara_select_edit{{ $datas->id }}').change(function() {
                    var negara_id = $(this).val();
                    // Send an Ajax request to fetch kota based on negara
                    $.ajax({
                        url: '/get-kota-by-negara/' + negara_id,
                        type: 'GET',
                        success: function(response) {
                            console.log(response);
                            // Clear existing options
                            $('#kota_select_edit{{ $datas->id }}').empty();
                            // Populate kota options based on response
                            $.each(response, function(key, value) {
                                $('#kota_select_edit{{ $datas->id }}').append(
                                    '<option value="' + value.id + '">' + value.nama +
                                    '</option>');
                            });
                        }
                    });
                });
            });
        </script>
    @endforeach
    <script>
        $(document).ready(function() {
            $('#negara_select').change(function() {
                var negara_id = $(this).val();
                // Send an Ajax request to fetch kota based on negara
                $.ajax({
                    url: '/get-kota-by-negara/' + negara_id,
                    type: 'GET',
                    success: function(response) {
                        // Clear existing options
                        $('#kota_select').empty();
                        // Populate kota options based on response
                        $.each(response, function(key, value) {
                            $('#kota_select').append('<option value="' + value.id +
                                '">' + value.nama + '</option>');
                        });
                    }
                });
            });
        });
    </script>
@endsection('script')
