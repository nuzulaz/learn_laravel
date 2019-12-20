@extends('layout/main')
    
@section('title','Students')

@section('container')


<div class="container">
    <h1 class="mt-3">Daftar Mahasiswa</h1>  
    <br>
    <div class="row">
        <div class="col-6">
            <ul class="list-group">
              @foreach ($student as $mhs)
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$mhs->nama}}
                    <a href="/students/{{$mhs->id}}" class="badge badge-primary badge-pill">Detail</a>
                  </li>
              @endforeach
            </ul>
            <br>
            <a href="students/create" class="btn btn-primary">Add Student</a>
            @if (session('status'))
              
              <div class="alert alert-success">
                {{session('status')}}
              </div>
            @endif
        </div>
    </div>
</div>


@endsection