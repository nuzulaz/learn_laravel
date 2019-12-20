@extends('layout/main')
    
@section('title','Students')

@section('container')


<div class="container">
    <h1 class="mt-3">Detail Mahasiswa</h1>  
    <br>
    <div class="row">
        <div class="col-6">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">{{$student->nama}}</h5>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Jurusan : {{$student->jurusan}}</li>
                <li class="list-group-item">E-mail : {{$student->email}}</li>
              </ul>
              <div class="card-body">
                
                <a href="{{$student->id}}/edit" class="btn badge-success">Edit</a>

                <form action="/students/{{$student->id}}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button type="submit" class="btn badge-danger">Delete</button> 
                </form>
              </div>
            </div>
        </div>
    </div>
</div>


@endsection