<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Barang Keluar</title>
</head>
<body>
<h4>Laporan Barang Keluar</h4>
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
    @foreach($barang_keluar as $brgk)
    <tr>
        <td>{{ $loop->iteration }}.</td>
        <td>{{ $brgk->kode_transaksi }}</td>
        <td>{{ $brgk->kode_barang }}</td>
        <td>{{ $brgk->nama_barang }}</td>
        <td>{{ $brgk->tujuan }}</td>
        <td>{{ $brgk->jumlah }} {{ $brgk->satuan }}</td>
        <td>{{ $brgk->tanggal }}</td>
    </tr>
    @endforeach
    
  </tbody>
</table>
</body>
</html>