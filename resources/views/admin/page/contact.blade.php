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
                Kontak
            </h1>
        </div>

        <div class="card">
            <div class="card-body">
                <table class="table table-responsive-sm table-bordered table-striped mb-0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Alamat Email</th>
                            <th>No. Handphone</th>
                            <th>Kota</th>
                            <th>Subject</th>
                            <th>Pesan</th>
                            <th width="140">Tanggal Submit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($contacts as $item)
                            <tr>
                                <td>
                                    {{$item->name}}
                                </td>
                                <td>
                                    <a href="mailto:{{$item->email}}" target="_blank">
                                        {{$item->email}}
                                    </a>
                                </td>
                                <td>
                                    <a href="tel:{{$item->phone}}" target="_blank">
                                        {{$item->phone}}
                                    </a>
                                </td>
                                <td>
                                    {{$item->city}}
                                </td>
                                <td>
                                    {{$item->subject}}
                                </td>
                                <td>
                                    {{$item->message}}
                                </td>
                                    @php
                                        $date = \Carbon\Carbon::parse($item->created_at)->diffForHumans();
                                    @endphp
                                <td>
                                {{ $date }}
                                </td>
                            </tr>
                        @empty
                            
                        @endforelse
                    </tbody>
                </table>
                <div class="mt-4 d-flex justify-content-center">
                    {{$contacts->links()}}
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
