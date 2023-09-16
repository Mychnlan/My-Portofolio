@extends('layout.main')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb mb-3">
       
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
<tr>
<th>No</th>
<th>Image</th>
<th>Name</th>
<th>Details</th>
<th width="280px">Action</th>
</tr>
@foreach ($products as $product)
<tr>
<td>{{ ++$i }}</td>
<td><img src="{{ asset('/') }}image/{{ $product->image }}" width="100px"></td>
<td>{{ $product->name }}</td>
<td>{{ $product->detail }}</td>
<td>
    {{-- <form action="{{ route('products.destroy',$product->id) }}" method="POST"> --}}
    

        <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>

        <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>

        {{-- @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger">Delete</button> --}}

        <button class="btn btn-danger" onclick="deleteConfirmation({{$product->id}})">Delete</button>
    {{-- </form> --}}
</td>
</tr>
@endforeach
</table>

{!! $products->links() !!}
<script type="text/javascript">
    function deleteConfirmation(id) {
        swal.fire({
            title: "Delete?",
            icon: 'question',
            text: "Please ensure and then confirm!",
            type: "warning",
            showCancelButton: !0,
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel!",
            reverseButtons: !0
        }).then(function (e) {

            if (e.value === true) {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                    type: 'POST',
                    url: "{{url('/products/delete')}}/" + id,
                    data: {_token: CSRF_TOKEN},
                    dataType: 'JSON',
                    success: function (results) {
                        if (results.success === true) {
                            swal.fire("Done!", results.message, "success");
                            // refresh page after 2 seconds
                            setTimeout(function(){
                                location.reload();
                            },2000);
                        } else {
                            swal.fire("Error!", results.message, "error");
                        }
                    }
                });

            } else {
                e.dismiss;
            }

        }, function (dismiss) {
            return false;
        })
    }
</script>
@endsection