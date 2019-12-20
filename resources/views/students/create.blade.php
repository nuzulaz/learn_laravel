@extends('layout/main')
    
@section('title','Students')

@section('container')


<div class="container">
    <h1 class="mt-3">Form Tambah Mahasiwa</h1>  
    <br>
    <div class="row">
        <div class="col-6">
           <form method="POST" action="/students">
            @csrf
            <div class="form-group">
              <label for="Nama">Nama</label>
              <input type="input" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{old('nama')}}">
              @error('nama')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror
            </div>

            <div class="form-group">
              <label for="Nim">NIM</label>
              <input type="input" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim" value="{{old('nim')}}" >
              @error('nim')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror
            </div>

            <div class="form-group">
              <label for="Email">Email</label>
              <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{old('email')}}">
              @error('email')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror
            </div>

            <div class="form-group">
              <label for="Jurusan">Jurusan</label>
              <input type="input" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" value="{{old('jurusan')}}">
              @error('jurusan')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
    </div>
</div>


@endsection