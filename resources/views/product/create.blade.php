<x-layout>
<x-header title="Posta il tuo prodotto Zio"/>

<div class="containe m-5">
    <div class="roe justify-content-center">
        <div class="col-12 col-md-6 col-lg-8">

     <form method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label class="form-label">Nome Prodotto</label>
                  <input type="text" class="form-control" name="name" >
                </div>

                <div class="mb-3">
                    <label class="form-label">Descrizione</label>
               <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Prezzo</label>
                    <input type="number" class="form-control" name="price" >
                  </div>
                
                  <div class="mb-3">
                    <label class="form-label">Immagini</label>
                    <input type="file" class="form-control" name="img" >
                  </div>
  
                  
            
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>

        </div>
    </div>
</div>






</x-layout>