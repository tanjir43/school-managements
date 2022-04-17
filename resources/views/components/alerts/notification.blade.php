 @if (Session::has('success'))
  <div class="alert alert-success alert-dismissible fade show mt-5" id="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>{{session('success')}}</strong>
  </div>
  @elseif (Session::has('error'))
  <div class="alert alert-danger alert-dismissible  show mt-5" id="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>{{session('error')}}</strong>
  </div>
  @endif