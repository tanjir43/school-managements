@props(['error' => $error])

<div class="alert alert-danger alert-dismissible fade show mt-2">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>Oh Noo!</strong> {{$error}}.
  </div>

