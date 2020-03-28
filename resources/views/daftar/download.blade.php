@extends('templates.app')

@section('content')
  <section>
    <div class="wizard">
      <div class="page-header atas">
        <h2>Unduh Formulir Pendaftaran</h2>
      </div>

      <div class="download">
        <i class="fa fa-file-pdf-o fa-5x" style="font-size: 200px; color: #009b4c"></i><br>
        <a href="{{ route('downloadPdf', Session::get('daftar_id') ) }}" class="btn btn-flat btn-success btn-lg">Unduh <i class="fa fa-cloud-download"></i></a>
        <h4>Klik tombol unduh untuk mengunduh data pendaftaran</h4>
      </div>
    </div>
  </section>
@endsection
