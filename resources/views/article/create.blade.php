<x-layout>
<x-header
title="Posta i tuoi pattini"/>


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
            <form method="POST" action="{{route('article.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label  class="form-label">Titolo Articolo</label>
                  <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{old('title')}}">
                @error('title')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>

                <div class="mb-3">
                    <label  class="form-label">Brand</label>
                    <input type="text" class="form-control @error('brand') is-invalid @enderror" name="brand" value="{{old('brand')}}">
                       @error('brand')
                      <div class="alert alert-danger">{{ $message }}</div>
                      @enderror                 
                  </div>

                  <div class="mb-3">
                    <label  class="form-label">Modello</label>
                    <input type="text" class="form-control @error('model') is-invalid @enderror" name="model" value="{{old('model')}}">
                 @error('model')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                  </div>
                
                  <div class="mb-3">
                    <label  class="form-label">Immagine</label>
                    <input type="file" class="form-control" name="img">
                                   </div>

                  <div class="mb-3">
                    <label  class="form-label">Parlaci di questi pattini</label>
                <textarea name="body" id="" cols="30" rows="10" class="form-control @error('body') is-invalid @enderror" >"{{old('body')}}"</textarea>
                  </div>


          
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</x-layout>