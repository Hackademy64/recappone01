<x-layout>
    <x-header
    title="Modifica"/>
    
    
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
                <form method="POST" action="{{route('article.edit' , compact('article'))}}">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                      <label  class="form-label">Titolo Articolo</label>
                      <input type="text" class="form-control " name="title" value="{{$article->title}}">
                    @error('title')
                      <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>
    
                    <div class="mb-3">
                        <label  class="form-label">Brand</label>
                        <input type="text" class="form-control " name="brand" value="{{$article->brand}}">
                           @error('brand')
                          <div class="alert alert-danger">{{ $message }}</div>
                          @enderror                 
                      </div>
    
                      <div class="mb-3">
                        <label  class="form-label">Modello</label>
                        <input type="text" class="form-control " name="model" value="{{$article->model}}">
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
                    <textarea name="body" id="" cols="30" rows="10" class="form-control " >"{{$article->body}}"</textarea>
                      </div>
    
    
              
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    </x-layout>