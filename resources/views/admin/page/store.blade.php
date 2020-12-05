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
                Store
            </h1>
            <a class="btn btn-success" href="{{route('admin.new-store')}}">
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
            <div class="card-body">
                <table class="table table-responsive-sm table-bordered table-striped mb-0">
                    <thead>
                        <tr>
                            <th>Nama Merchant</th>
                            <th>Nomor WhatsApp</th>
                            <th>Kota</th>
                            <th>Alamat Merchant</th>
                            <th>latitude</th>
                            <th>longitude</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($stores as $store)
                            <tr>
                                <td>
                                    {{$store->name}}
                                </td>
                                <td>
                                    +62{{$store->phone}}
                                </td>
                                <td>
                                    {{$store->regencie->name}}
                                </td>
                                <td>
                                    {{$store->address}}
                                </td>
                                <td>
                                    {{$store->lat}}
                                </td>
                                <td>
                                    {{$store->lng}}
                                </td>
                                <td width="170">
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-sm btn-success"
                                            href="{{route('admin.edit-store', ['id' => $store->id])}}">
                                            <svg class="c-icon">
                                                <use
                                                    xlink:href="{{asset('admin/assets/icons/coreui/free-symbol-defs.svg#cui-pencil')}}">
                                                </use>
                                            </svg>&nbsp;Edit
                                        </a>
    
                                        <button class="btn btn-sm btn-danger" type="button" data-toggle="modal"
                                            data-target="#smallModal-{{$store->id}}">
                                            <svg class="c-icon">
                                                <use
                                                    xlink:href="{{asset('admin/assets/icons/coreui/free-symbol-defs.svg#cui-trash')}}">
                                                </use>
                                            </svg>&nbsp;Hapus
                                        </button>
                                        <div class="modal fade" id="smallModal-{{$store->id}}" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Hapus Merchant</h4>
                                                        <button class="close" type="button" data-dismiss="modal"
                                                            aria-label="Close"><span aria-hidden="true">×</span></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h4 class="text-danger mb-4">
                                                            Apakah anda yakin ingin menghapus Merchant ini?
                                                        </h4>
                                                        <table class="table">
                                                            <tr>
                                                                <td width="140">
                                                                    <h5>
                                                                        Nama Merchant
                                                                    </h5>
                                                                </td>
                                                                <td>
                                                                    <h5 class="mb-0">
                                                                        {{$store->name}}
                                                                    </h5>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td width="140">
                                                                    <h5>
                                                                        Kota
                                                                    </h5>
                                                                </td>
                                                                <td>
                                                                    {{$store->regencie->name}}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td width="140">
                                                                    <h5>
                                                                        Alamat Merchant
                                                                    </h5>
                                                                </td>
                                                                <td>
                                                                    {{$store->address}}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td width="140">
                                                                    <h5>
                                                                        latitude
                                                                    </h5>
                                                                </td>
                                                                <td>
                                                                    {{$store->lat}}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td width="140">
                                                                    <h5>
                                                                        longitude
                                                                    </h5>
                                                                </td>
                                                                <td>
                                                                    {{$store->lng}}
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-ghost-secondary" type="button" data-dismiss="modal">Close</button>
                                                        <form action="{{route('admin.delete-store', ['id' => $store->id])}}" method="POST">
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
                                Store Kosong
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                <div class="mt-4 d-flex justify-content-center">
                    {{$stores->links()}}
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
