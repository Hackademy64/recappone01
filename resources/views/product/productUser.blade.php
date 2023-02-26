<x-layout>
    <x-header
      title="Articoli per il Venditore "
    />


   
  
         <div class="d-flex-vh-min-100 bg-primary">
  
       
  
      <div class="container my-5">
          <div class="row justify-content-center">
            @foreach ($user->products as $product)
            <div class="col-12 col-md-8 col-lg-6">
              <x-cardproduct
                :product="$product"
                />
            </div>   
            @endforeach   
          </div>
  
  
  
        
  
  
  </div>
 <x-footer/>
    </x-layout>