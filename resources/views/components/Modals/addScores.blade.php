<div class="modal fade-in" tabindex="-1" role="dialog" id="addScoreModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"> </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{route('subjects.store')}}" method="post">
              @csrf
              <input type="hidden" name="edit_id" id="edit_id">
              <input type="hidden" name="assign">
              <div class="row">
              <input type="text" class="form-control" name="assignment_percentage" id="assignment_percentage" placeholder="Enter assignment %">
              <input type="text" class="form-control mt-2" name="final_percentage" id="final_percentage" placeholder="Enter final assignment %">
              </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Add</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
         </form>
      </div>
    </div>
  </div>

  @push('script')
    
     
      <script>
          $('.addScoreBtn').on('click',function(){
            $('.modal-title').text('Add score to ' + $(this).data('subject'));
            $('#edit_id').val($(this).data('id'));
          });
      </script>
  @endpush