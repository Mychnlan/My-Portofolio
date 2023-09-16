<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
@extends('layout.main')
 
@section('content')
<style>div.dataTables_wrapper {
    width: 100%;
    margin: 0 auto;
}</style>
{{-- <div class="row">
    <div class="col-md-6">
        <div class="input-group mb-3">
            <input type="text" class="form-control" id="search" placeholder="Input ID" aria-label="Recipient's username" aria-describedby="basic-addon2" autofocus>
            <div class="input-group-append">
              <span class="input-group-text" id="basic-addon2">cari</span>
            </div>
          </div>
    </div>
</div>
<form action="" method="POST">
    @csrf
    @method('put')
    
    <div id="cha">

    </div>
</form> --}}
@endsection
<script>
    $(document).ready(function() {
      

      
        $('#example').DataTable({
        scrollY: 150,
        scrollX: true,
        }); 

    
    });
    
    
</script>