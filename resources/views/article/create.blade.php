<x-layout>
<x-header
title="Posta i tuoi pattini"/>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
            <form method="POST" action="{{route('article.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label  class="form-label">Titolo Articolo</label>
                  <input type="text" class="form-control" name="title">
                </div>

                <div class="mb-3">
                    <label  class="form-label">Brand</label>
                    <input type="text" class="form-control" name="brand">
                  </div>

                  <div class="mb-3">
                    <label  class="form-label">Modello</label>
                    <input type="text" class="form-control" name="model">
                  </div>
                
                  <div class="mb-3">
                    <label  class="form-label">Immagine</label>
                    <input type="file" class="form-control" name="img">
                  </div>

                  <div class="mb-3">
                    <label  class="form-label">Parlaci di questi pattini</label>
                <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
                  </div>


          
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</x-layout>