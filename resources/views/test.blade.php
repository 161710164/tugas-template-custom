@extends('templates.master')
@section('konten')
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NISN</th>
      <th scope="col">Nama</th>
      <th scope="col">Umur</th>
      <th scope="col">Tempat Lahir</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Alamat</th>
      <th scope="col">Cita-Cita</th>
      <th scope="col">Hobi</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($asd as $ab)
    <tr>
      <th scope="row">{{$ab -> id}}</th>
      <td>{{$ab -> nis}}</td>
      <td>{{$ab -> nama}}</td>
      <td>{{$ab -> umur}}</td>
      <td>{{$ab -> tempat_lahir}}</td>
      <td>{{$ab -> tanggal_lahir}}</td>
      <td>{{$ab -> alamat}}</td>
      <td>{{$ab -> cita_cita}}</td>
      <td>{{$ab -> hobi}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection