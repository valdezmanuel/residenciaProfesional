@extends('layouts.app')

@section('title', 'Students Show')

@section('content')

<div class="row">
  <div class="col-md-12">
    <br>
    <h3 align="center">Información de Estudiante</h3>
    <br>

    @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
    @endif

    <div align='right'>
      <a href="{{route('students.create')}}" class = 'btn btn-primary'>Añadir</a>
    </div>
    <br>
    <table class="table table-bordered">
      <tr>
        <th>No.Control</th>
        <th>Apellidos</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Carrera</th>
        <th></th>
      </tr>
      @foreach ($student as $row)
      <tr>
          <td>{{$row->NoControl}}</td>
          <td>{{$row->Apellidos }}</td>
          <td>{{$row->Nombre}}</td>
          <td>{{$row->Correo }}</td>
          <td>{{$row->carrera->nombre}}</td>
          <td><a href="/students/{{$row->id}}" class="btn btn-light">...</a></td>
      </tr>
      @endforeach

    </table>
  </div>
</div>
@endsection
