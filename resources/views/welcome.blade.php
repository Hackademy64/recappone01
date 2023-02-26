<x-layout>
  <x-header
    title="Sk8Passion"
  />
  @if (session('message'))
  <div class="alert alert-success">
    <p class="m-0">{{session('message')}}</p>
  </div>
  @endif
     
  <div class="container my-5">
    <div class="row justify-content-center">
      @foreach ($articles as $article)
      <div class="col-12 col-md-8 col-lg-6">
          <x-article-card
          :article="$article"
          />
      </div>   
      @endforeach  

 

       <div class="d-flex-vh-min-100 bg-primary">

     

    <div class="container my-5">
        <div class="row justify-content-center">
          @foreach ($products as $product)
          <div class="col-12 col-md-8 col-lg-6">
            <x-cardproduct
              :product="$product"
              />
          </div>   
          @endforeach   
        </div>



      


</div>
  </x-layout>