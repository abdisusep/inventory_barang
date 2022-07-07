<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Barang Masuk</title>
</head>
<body>
<h4>Laporan Barang Masuk</h4>
<table border="1" cellpadding="10" cellspacing="0" width="100%">
    <thead style="background-color:#EFEFEF;">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Kode Transaksi</th>
            <th scope="col">Kode Barang</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Pengirim/Supplier</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Tanggal</th>
        </tr>
    </thead>
  <tbody>
    @foreach($barang_masuk as $brgm)
    <tr>
        <td>{{ $loop->iteration }}.</td>
        <td>{{ $brgm->kode_transaksi }}</td>
        <td>{{ $brgm->kode_barang }}</td>
        <td>{{ $brgm->nama_barang }}</td>
        <td>{{ $brgm->pengirim }}</td>
        <td>{{ $brgm->jumlah }} {{ $brgm->satuan }}</td>
        <td>{{ $brgm->tanggal }}</td>
    </tr>
    @endforeach
    
  </tbody>
</table>
</body>
</html>