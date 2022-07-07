<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Stok Barang</title>
</head>
<body>
<h4>Laporan Stok Barang</h4>
<table border="1" cellpadding="10" cellspacing="0" width="100%">
    <thead style="background-color:#EFEFEF;">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Kode Barang</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Jenis Barang</th>
            <th scope="col">Stok</th>
        </tr>
    </thead>
  <tbody>
    @foreach($barang as $brg)
    <tr>
        <td>{{ $loop->iteration }}.</td>
        <td>{{ $brg->kode_barang }}</td>
        <td>{{ $brg->nama_barang }}</td>
        <td>{{ $brg->jenis_barang }}</td>
        <td>{{ $brg->stok }} {{ $brg->satuan }}</td>
    </tr>
    @endforeach
    
  </tbody>
</table>
</body>
</html>