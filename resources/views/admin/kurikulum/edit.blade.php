@extends('layouts.admin')
@section('styles')
<link href="{{asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>Data Kurikulum</b>
                    <a href="{{route('eskul.index')}}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{route('eskul.update',$eskul->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-2">
                            <label for="eskul">Nama Guru</label>
                            <input type="text" class="form-control @error('nama_guru') is-invalid @enderror"
                                name="nama_guru" value="{{$nama_guru->nama_guru}}">
                            @error('nama_guru')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="eskul">Jabatan</label>
                            <input type="text" class="form-control @error('jabatan') is-invalid @enderror"
                                name="jabatan" value="{{$jabatan->jabatan}}">
                            @error('jabatan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                          <div class="mb-2">
                            <label for="foto"><b>Foto</b></label>
                            @if($eskul->foto)
                            <p><img src="{{ asset('images/kurikulum/' . $kurikulum->foto) }}" alt="foto" width="200px"></p>
                            @endif
                            <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror">
                            @error('foto')
                           <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                        <div class="mb-2">
                            <button class="btn btn-sm btn-success" type="submit">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@push('scripts')
<script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
	<script>
		$(document).ready(function() {
			$('#example').DataTable();
		  } );
	</script>
@endpush


