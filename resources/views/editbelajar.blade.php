@extends('master2')

@section('konten')
	<h3>Edit Data Baju</h3>

	<a href="/database-baju" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>


	<form action="/database-baju/update" method="post" class="border col-6">
		{{ csrf_field() }}
        <div class="form-group">
            <label for="kodebaju" class="col control-label pt-4">Kode Baju</label>
            <div class="col">
                <input name="kodebaju"  type="number" id="kodebaju" class="form-control" value="{{ $baju->kodebaju }}" readonly>
            </div>
        </div>

        <div class="form-group">
            <label for="merkbaju" class="col control-label">Merk Baju</label>
            <div class="col">
                <input name="merkbaju" required="required" type="text" id="merkbaju" class="form-control" value="{{ $baju->merkbaju }}">
            </div>
        </div>

        <div class="form-group">
            <label for="stokbaju" class="col control-label">Stock Baju</label>
            <div class="col">
                <input type="number" required="required" name="stokbaju" id="stokbaju" class="form-control" value="{{ $baju->stokbuju }}">
            </div>
        </div>

        <div class="form-group">
            <div class="col pb-3">
                <input type="submit" value="Simpan Data" class="btn btn-success w-100">
            </div>
        </div>

	</form>
@endsection
