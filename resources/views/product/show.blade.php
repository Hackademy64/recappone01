<x-layout>

<x-header title="Dettaglio Prodotto"/>


<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-8">

  
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row ">
          <div class="col-md-4">
            <img src="{{Storage::url($product->img)}}" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h1 class="card-title">{{$product->name}}</h5>
              <p class="fw-bold">{{$product->description}}</p>
              <p class="card-text">Venditore:{{$product->user->name}}</p>
              <p class="card-text">{{$product->price}}</p>
              <p class="card-text"><small class="text-muted">Pubblicato il : {{$product->created_at->format('d/m/y')}}</small></p>
              <a href="{{route('homepage' )}}" class="btn btn-primary"> Torna alla home</a>
              {{-- <a href="{{route('product.show' , $product)}}" class="btn btn-primary"> Maggiori dettagli</a> --}}
            </div>
          </div>
        </div>
      </div>
    
    </div>
</div>

</div></x-layout>