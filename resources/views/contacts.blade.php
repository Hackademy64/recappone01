<x-layout>
<x-header
title="Contattaci per lavorare con noi"
/>
<div class="container my-3">
    <div class="row justify-content-center">
        <div class="class col-12 col-md-8 col-lg-6">
            
            <form method="POST" action="{{route('contacts.submit')}}">
                @csrf
                <div class="mb-3">
                  <label  class="form-label">Nome e cognome</label>
                  <input type="text" class="form-control" name="name">
                </div>

                <div class="mb-3">
                    <label  class="form-label">Email</label>
                    <input type="text" class="form-control" name="email">
                </div>
               
                <div class="mb-3">
                    <label  class="form-label">Perchè vuoi lavorere? In generale tipo.</label>
                    <textarea name="body" id="" cols="30" rows="10" class="form-control" placeholder="Scrivi qualcosa zio"></textarea>
                  </div>


              
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>

        </div>
    </div>
</div>

</x-layout>