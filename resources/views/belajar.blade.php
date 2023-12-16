@extends('master2')
@section('title', 'Database Baju')

    @section('judul_halaman')

	<h3>Data Baju</h3>

	<a href="/database-baju/tambah"> + Tambah Data Baju Baru</a>

	<br/>
	<br/>
    @endsection
    @section('konten')
    <p>Cari Data Baju :</p>
	<form action="/database-baju/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari baju berdasarkan nama ..." value="{{ old('cari') }}">
		<input type="submit" value="Cari" class="btn btn-primary">
	</form>
	<table class="table table-striped table-hover">

		<tr>
			<th>Kode Baju</th>
			<th>Merk Baju</th>
			<th>Stok Baju</th>
			<th>Tersedia</th>
			<th>Opsi</th>
		</tr>
		@foreach($baju as $p)
		<tr>
			<td>{{ $p->kodebaju }}</td>
			<td>{{ $p->merkbaju }}</td>
			<td
            >{{ $p->stokbaju }}</td>

            <td>@if($p->tersedia == '1')
                Tersedia <input type="checkbox" checked disabled>
            @else
                Tidak Tersedia <input type="checkbox" disabled>
            @endif</td>

			<td>
				<a href="/database-baju/view/{{ $p->kodebaju }}" class="btn btn-success">View </a>
                |
                <a href="/database-baju/edit/{{ $p->kodebaju }}" class="btn btn-warning">Edit </a>
				|
				<a href="/database-baju/hapus/{{ $p->kodebaju }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{$baju -> links()}}
    Halaman : {{ $baju->currentPage() }} <br/>
	Jumlah Data : {{ $baju->total() }} <br/>
	Data Per Halaman : {{ $baju->perPage() }} <br/>

    @endsection
