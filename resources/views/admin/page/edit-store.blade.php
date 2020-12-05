@extends('admin.base')

@section('css')
<link rel="stylesheet" href="{{asset('admin/css/slim.min.css')}}">
<style>
    .table tbody tr td {
        vertical-align: middle;
    }

    .ck-editor__editable_inline {
        min-height: 200px;
    }

    input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}

</style>
@endsection

@section('content')

<div class="container-fluid">
    <div class="fade-in">
        <div class="d-flex  mb-3 ">
            <h1 class="h3 mr-3">
                Tambah Merchant
            </h1>
        </div>
        <form action="{{route('admin.update-store', ['id' => $store->id])}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-8 mb-3">
                    <div class="card h-100 mb-0">
                        <div class="card-body">
                            <div class="form-horizontal">
                                <div class="form-group row">
                                    <label class="col-md-12 col-form-label" for="name">Nama Merchant</label>
                                    <div class="col-md-12">
                                        <input class="form-control @error('name') is-invalid @enderror" id="name"
                                            type="text" name="name" placeholder="Masukkan Nama Merchant"
                                            autocomplete="name" value="{{ $store->name }}">
                                        @error('name')
                                        <div class="invalid-feedback text-right">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-12 col-form-label" for="name">No. WhatsApp</label>
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    +62
                                                </span>
                                            </div>
                                            <input class="form-control @error('phone') is-invalid @enderror" id="phone"
                                                type="number" name="phone" placeholder="Masukkan No. WhatsApp Merchant"
                                                autocomplete="phone" value="{{ $store->phone }}">
                                                @error('phone')
                                                <div class="invalid-feedback text-right">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-12 col-form-label" for="address">Alamat Merchant</label>
                                    <div class="col-md-12">
                                        <textarea rows="4" style="max-height: 100px;min-height: 100px"
                                            class="form-control @error('address') is-invalid @enderror" name="address"
                                            id="address"
                                            placeholder="Masukkan Alamat Merchant">{{ $store->address }}</textarea>
                                        @error('address')
                                        <div class="invalid-feedback text-right">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="form-horizontal">
                                <div class="form-group row">
                                    <label class="col-md-12 col-form-label" for="city">
                                        Kota
                                    </label>
                                    <div class="col-md-12">
                                        <select class="form-control @error('regencie_id') is-invalid @enderror"
                                            id="select1" name="regencie_id">
                                            <option disabled>Kota Merchant</option>
                                            @foreach ($regencies as $item)
                                                <option value="{{$item->id}}" @if($item->id === $store->regencie_id) selected @endif>
                                                    {{$item->name}}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('regencie_id')
                                            <div class="invalid-feedback text-right">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-12 col-form-label" for="lat">
                                        Latitude
                                    </label>
                                    <div class="col-md-12">
                                        <input class="form-control @error('lat') is-invalid @enderror" id="lat"
                                            type="text" name="lat" placeholder="Masukkan Latitude"
                                            autocomplete="lat" value="{{ $store->lat }}">
                                        @error('lat')
                                        <div class="invalid-feedback text-right">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-12 col-form-label" for="lng">
                                        Longitude
                                    </label>
                                    <div class="col-md-12">
                                        <input class="form-control @error('lng') is-invalid @enderror" id="lng"
                                            type="text" name="lng" placeholder="Masukkan Longitude"
                                            autocomplete="lng" value="{{ $store->lng }}">
                                        @error('lng')
                                        <div class="invalid-feedback text-right">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success float-right" type="submit">
                                Tambah Merchant
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection

@section('javascript')

<script src="{{ asset('admin/js/Chart.min.js') }}"></script>
<script src="{{ asset('admin/js/coreui-chartjs.bundle.js') }}"></script>
<script src="{{ asset('admin/js/main.js') }}" defer></script>
@endsection
