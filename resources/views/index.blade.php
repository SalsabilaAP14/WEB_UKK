@extends('layouts.main')
@section('container')
    <div class="container">
      <div class="section__content section__content--p30">
         <div class="row g-2">
          {{-- <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Cari data buku" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <span class="input-group-text" id="basic-addon2">Search</span>
          </div> --}}
          <div class="input-group mb-3">
            <form action="/" method="GET">
              <input type="search" class="form-control" placeholder="Cari judul" name="search">
          </form>
          <button class="btn btn-btn-primary" type="button">Search</button>
          </div>
 
          @foreach ($contacts as $index => $contact )
            <div class="col-6">
              <div class="p-3">
                <div class="card" style="width: 18rem;">
                  <img src="{{ asset('coverbuku/'.$contact->cover) }}" class="card-img-top" alt="">
                  <div class="card-body">
                    <h5 class="card-title">{{ $contact->judul}}</h5>
                    <p class="card-text">{{ $contact->deskripsi}}</p>
                    <a href="/detail/{{$contact->id}}" class="btn btn-primary">View Detail</a>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
         
         
        </div>
      
      </div>      
      
    </div>
@endsection



{{-- halaman depan :  --}}
{{-- halaman dashboard :  --}}
{{-- halaman tabel buku :  --}}
{{-- halaman tambah buku :  --}}