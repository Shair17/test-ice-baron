@if(Session::has('success'))
<div class="alert alert-success alert-dismissible" role="alert">
  {{-- <button type="button" class="close" data-dismiss="alert">
      <i class="fa fa-times"></i>
  </button> --}}
  <strong>¡Muy bien!</strong> {{ session('success') }}
</div>
@endif
