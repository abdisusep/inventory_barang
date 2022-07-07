@section('navbar')
<nav class="navbar navbar-expand-lg bg-white pt-3 pb-3">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="{{ asset('images/logo.png') }}" style="width:180px; height:auto;" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Master
            <i class="fa-solid fa-angle-down"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end border-0 shadow-sm" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{ route('barang.index') }}">Barang</a></li>
            <li><a class="dropdown-item" href="{{ route('jenis_barang.index') }}">Jenis Barang</a></li>
            <li><a class="dropdown-item" href="{{ route('satuan.index') }}">Satuan</a></li>
            <li><a class="dropdown-item" href="{{ route('supplier.index') }}">Supplier</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Transaksi
            <i class="fa-solid fa-angle-down"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end border-0 shadow-sm" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{ route('barang_masuk.create') }}">Barang Masuk</a></li>
            <li><a class="dropdown-item" href="{{ route('barang_keluar.create') }}">Barang Keluar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Laporan
            <i class="fa-solid fa-angle-down"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end border-0 shadow-sm" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{ route('barang_masuk.index') }}">Barang Masuk</a></li>
            <li><a class="dropdown-item" href="{{ route('barang_keluar.index') }}">Barang Keluar</a></li>
          </ul>
        </li>
        <li class="nav-item nav-logout">
          <a class="nav-link bg-light text-danger rounded" href="{{ route('logout') }}"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
@endsection