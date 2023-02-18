<x-layout>
  <x-header
    title="MangaForum"
  />
  @if (session('message'))
  <div class="alert alert-success">
    <p class="m-0">{{session('message')}}</p>
  </div>


  @endif
</x-layout>