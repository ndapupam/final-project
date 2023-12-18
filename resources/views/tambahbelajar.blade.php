@extends('master2')

@section('konten')
	<h3>Tambah Data Baju</h3>

	<a href="/database-baju" class='btn btn-primary'> Kembali</a>

	<br/>
	<br/>

	<form action="/database-baju/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        {{-- <div class="form-group">
            <label class="col-sm-2 control-label">Kode Buku</label>
            <div class="col-6">
                <input name="kodebuku" type="number" class="form-control" placeholder="Masukkan Kode Buku ..." required="required">
            </div>
        </div> --}}

        <div class="form-group">
            <label for="merkbaju" class="col-sm-2 control-label">Merk Baju</label>
            <div class="col-6">
                <input name="merkbaju" type="text" class="form-control" id="merkbaju" placeholder="Masukkan nilai angka ..." required="required">
            </div>
        </div>

        <div class="form-group">
            <label for="stockbaju" class="col-sm-2 control-label">Stock Baju</label>
            <div class="col-6">
                <input name="stokbaju" type="number" class="form-control" id="stokbaju" placeholder="Masukkan Stock Baju..." required="required">
            </div>
        </div>
		<input type="submit" class='btn btn-success' value="Tambah Data">
	</form>

@endsection
