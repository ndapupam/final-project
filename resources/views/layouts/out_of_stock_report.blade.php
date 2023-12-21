@extends('master2')
@section('title', 'Out of Stock Report')

@section('judul_halaman')
    <h3>Out of Stock Report</h3>
@endsection

@section('konten')
    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Baju</th>
            <th>Merk Baju</th>
            <th>Stok Baju</th>
            <th>Tersedia</th>
        </tr>
        @foreach($outOfStockBaju as $p)
            <tr>
                <td>{{ $p->kodebaju }}</td>
                <td>{{ $p->merkbaju }}</td>
                <td>{{ $p->stokbaju }}</td>
                <td>Tidak Tersedia <input type="checkbox" disabled></td>
            </tr>
        @endforeach
    </table>
@endsection
