<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Baju</title>
</head>
<body>

	<h3>Data Baju</h3>

	<a href="/database-baju"> Kembali</a>

	<br/>
	<br/>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif

	<form action="/database-baju/store" method="post">
        {{ csrf_field() }}
        Merk Baju <input type="text" name="merkbaju" required="required"> <br/>
        Stok Baju  <input type="number" name="stokbaju" required="required"> <br/>
        <input type="submit" value="Simpan Data">
    </form>


</body>
</html>
