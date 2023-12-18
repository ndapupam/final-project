@extends('master2')

@section('konten')
	<h3>Detail Baju</h3>

	<a href="/database-baju" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

    <div class='row'>


	    <form method="get" class='col-6 border' action="/database-baju/view">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="kodebaju" class="col control-label pt-4">Kode Baju</label>
                <div class="col">
                    <input type="number" class="form-control w-100" name="kodebaju" value="{{ $baju->kodebaju }}" readonly>
                </div>
            </div>

            <div class="form-group">
                <label for="merkbaju" class="col control-label">Merk baju</label>
                <div class="col">
                    <input type="text" class="form-control w-100" name="merkbaju" value="{{ $baju->merkbaju }}" readonly>
                </div>
            </div>


            <div class="form-group">
                <label for="stokbaju" class="col control-label">Stok Baju</label>
                <div class="col">
                    <input type="text" class="form-control w-100" name="stokbaju" value="{{ $baju->stokbaju }}" readonly>
                </div>
            </div>



            <div class="form-group">
                <div class="col pb-3">
                    <a href="/database-baju" class='form-control btn btn-primary '>Ok</a>
                </div>
            </div>
	    </form>

    </div>
@endsection
