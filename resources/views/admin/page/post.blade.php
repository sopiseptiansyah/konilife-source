@extends('admin.base')

@section('css')
<style>
    .table tbody tr td {
        vertical-align: middle;
    }

</style>
@endsection

@section('content')

<div class="container-fluid">
    <div class="fade-in">
        <div class="d-flex  mb-3 ">
            <h1 class="h3 mr-3">
                Semua Artikel
            </h1>
            <a class="btn btn-success" href="{{route('admin.new-post')}}">
                <svg class="c-icon">
                    <use xlink:href="{{asset('admin/assets/icons/coreui/free-symbol-defs.svg#cui-plus')}}"></use>
                </svg>&nbsp;Tambah baru
            </a>
        </div>
        @if ($message = Session::get('delete.success'))
            <div class="row">
                <div class="offset-md-8 col-md-4">
                    <div class="alert alert-success alert-block mb-3">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                        <strong>{{ $message }}</strong>
                    </div>
                </div>
            </div>
        @endif
        @if ($message = Session::get('add.success'))
            <div class="row">
                <div class="offset-md-8 col-md-4">
                    <div class="alert alert-success alert-block mb-3">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                        <strong>{{ $message }}</strong>
                    </div>
                </div>
            </div>
        @endif
        @if ($message = Session::get('edit.success'))
            <div class="row">
                <div class="offset-md-8 col-md-4">
                    <div class="alert alert-success alert-block mb-3">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                        <strong>{{ $message }}</strong>
                    </div>
                </div>
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                <nav class="nav nav-pills">
                    <a class="btn mr-3 @if($published === null) btn-success @endif"
                        href="{{route('admin.posts')}}">Semua</a>
                    <a class="btn mr-3 @if($published === 1) btn-success @endif"
                        href="{{route('admin.posts', ['published' => 1])}}">Published</a>
                    <a class="btn mr-4 @if($published === 0) btn-success @endif"
                        href="{{route('admin.posts', ['published' => 0])}}">Draft</a>
                </nav>
            </div>
            <div class="card-body">
                <table class="table table-responsive-sm table-bordered table-striped mb-0">
                    <thead>
                        <tr>
                            <th>Judul Artikel</th>
                            <th width="165">Image Artikel</th>
                            <th width="75" class="text-center">Status</th>
                            <th width="150">Ditambahkan</th>
                            <th width="170">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($posts as $artikel)
                        <tr>
                            <td>
                                <h5 class="mb-0">
                                    {{$artikel->title}}
                                    <a href="{{$artikel->slug}}" target="_blank" class="btn btn-ghost-success btn-sm"
                                        title="Lihat Artikel">
                                        <svg class="c-icon">
                                            <use
                                                xlink:href="{{asset('admin/assets/icons/coreui/free-symbol-defs.svg#cui-external-link')}}">
                                            </use>
                                        </svg>
                                    </a>
                                </h5>
                            </td>
                            <td>
                                <img width="140" height="100" src="{{$artikel->image}}" />
                            </td>
                            <td class="text-center">
                                @if($artikel->published == 1)
                                    <span class="badge badge-success">ACTIVE</span>
                                @else
                                    <span class="badge badge-info">DRAFT</span>
                                @endif
                            </td>
                            <td>
                                @php
                                    $date = \Carbon\Carbon::parse($artikel->created_at)->diffForHumans();
                                @endphp
                                {{ $date }}
                            </td>
                            <td>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-success"
                                        href="{{route('admin.edit-post', ['id' => $artikel->id])}}">
                                        <svg class="c-icon">
                                            <use
                                                xlink:href="{{asset('admin/assets/icons/coreui/free-symbol-defs.svg#cui-pencil')}}">
                                            </use>
                                        </svg>&nbsp;Edit
                                    </a>

                                    <button class="btn btn-sm btn-danger" type="button" data-toggle="modal"
                                        data-target="#smallModal-{{$artikel->id}}">
                                        <svg class="c-icon">
                                            <use
                                                xlink:href="{{asset('admin/assets/icons/coreui/free-symbol-defs.svg#cui-trash')}}">
                                            </use>
                                        </svg>&nbsp;Hapus
                                    </button>
                                    <div class="modal fade" id="smallModal-{{$artikel->id}}" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Hapus Artikel</h4>
                                                    <button class="close" type="button" data-dismiss="modal"
                                                        aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <h4 class="text-danger mb-4">
                                                        Apakah anda yakin ingin menghapus artikel ini?
                                                    </h4>
                                                    <table class="table">
                                                        <tr>
                                                            <td width="140">
                                                                <h5>
                                                                    Judul Artikel
                                                                </h5>
                                                            </td>
                                                            <td>
                                                                <h5 class="mb-0">
                                                                    {{$artikel->title}}
                                                                </h5>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="140">
                                                                <h5>
                                                                    Image Artikel
                                                                </h5>
                                                            </td>
                                                            <td>
                                                                <img width="300" src="{{$artikel->image}}" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="140">
                                                                <h5>
                                                                    Status
                                                                </h5>
                                                            </td>
                                                            <td>
                                                                @if($artikel->published == 1)
                                                                    <span class="badge badge-success">ACTIVE</span>
                                                                @else
                                                                    <span class="badge badge-info">DRAFT</span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="140">
                                                                <h5>
                                                                    Ditambahkan
                                                                </h5>
                                                            </td>
                                                            <td>
                                                                {{ $date }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">
                                                                <a href="{{$artikel->slug}}" target="_blank" class="btn btn-ghost-success btn-sm float-right"
                                                                    title="Lihat Artikel">
                                                                    <svg class="c-icon">
                                                                        <use
                                                                            xlink:href="{{asset('admin/assets/icons/coreui/free-symbol-defs.svg#cui-external-link')}}">
                                                                        </use>
                                                                    </svg> &nbsp; Lihat Artikel
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-ghost-secondary" type="button" data-dismiss="modal">Close</button>
                                                    <form action="{{route('admin.delete-post', ['id' => $artikel->id])}}" method="POST">
                                                        @csrf
                                                        {{ method_field('DELETE') }}
                                                        <button class="btn btn-danger" type="submit">Hapus</a>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td class="text-center" colspan="5">
                                Artikel Kosong
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                <div class="mt-4 d-flex justify-content-center">
                    {{$posts->links()}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('javascript')

<script src="{{ asset('admin/js/Chart.min.js') }}"></script>
<script src="{{ asset('admin/js/coreui-chartjs.bundle.js') }}"></script>
<script src="{{ asset('admin/js/main.js') }}" defer></script>
@endsection
