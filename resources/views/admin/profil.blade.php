@extends('layout.main')
     
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>
     
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @foreach($data_profil as $dp)
    
        <input type="hidden" id="id" value="{{ $dp->id }}" class="form-control" placeholder="Name">
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" id="name" value="{{ $dp->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="email" id="email" name="email" value="{{ $dp->email }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Username:</strong>
                    <input type="text" id="username" name="username" value="{{ $dp->username }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="image" id="image" class="form-control" placeholder="image">
                    <img src="/image/{{ $dp->image }}" width="300px" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button id="myButton" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
     
    
    
    @endforeach
    
    <script>
      
      // Tangkap tombol dengan ID 'myButton'
      const myId = document.getElementById('id');
      const myName = document.getElementById('name');
      const myEmail = document.getElementById('email');
      const myUsername = document.getElementById('username');
      const myImage = document.querySelector('#image');
      const myButton = document.getElementById('myButton');
      
      
      // Tambahkan event listener pada tombol
      myButton.addEventListener('click', async () => {
      const imageInput = document.getElementById('image');
      const imageFile = imageInput.files[0]; 
     
        const id = myId.value;
        // const name = myName.value;
        // const email = myEmail.value;
        // const username = myUsername.value;
        // const img = myImage.files[0];
      

        const { value: password } = await Swal.fire({
          title: 'Enter your password',
          input: 'password',
          inputLabel: 'Password',
          inputPlaceholder: 'Enter your password',
          inputAttributes: {
            maxlength: 10,
            autocapitalize: 'off',
            autocorrect: 'off'
          },
          showCancelButton: true,
          confirmButtonText: 'Submit',
          cancelButtonText: 'Cancel',
          showLoaderOnConfirm: true,
          preConfirm: async (enteredPassword) => {
            // Kirim permintaan ke server untuk memvalidasi password
            try {
              const response = await axios.post('/admin/profil/validate-password', {
                password: enteredPassword
              });
              const formData = new FormData();
              formData.append('image', imageFile);
              formData.append('data_id', id)

              // Cek status respons dari server
              if (response.data.valid) {
                Swal.fire('Success', 'Password is valid', 'success');
            //     axios.post('/admin/profil/update', {
            //     data_id: id, // Ganti dengan data ID yang sesuai
            //     image: imageFile // Ganti dengan nilai yang ingin diperbarui
            // })
            axios.post('/admin/profil/update', formData)
            .then(response => {
                // Menangani respons sukses
                if (response.data.success) {
                Swal.fire('Success', 'Data has been updated', 'success');
                } else {
                Swal.fire('Error', 'Failed to update data', 'error');
                }
            })
              } else {
                Swal.fire('Error', 'Password is invalid', 'error');
              }
            } catch (error) {
              Swal.fire('Error', 'An error occurred', 'error');
            }
          }
        });
      });
    </script>
@endsection