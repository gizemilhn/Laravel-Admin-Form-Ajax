@extends('layouts.default')
        <title>Form Page</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="form-wrapper">
    <form id="ajaxForm" class="form-container">
        <div class="mb-3">
            <label for="firstName" class="form-label" >İsim:</label>
            <input type="text" id="firstName" name="firstName" class="form-control">
            <div class="text-danger" id="nameError"></div>
        </div>
        <div class="mb-3">
            <label for="lastName" class="form-label" >Soyisim:</label>
            <input type="text" id="lastName" name="lastName" class="form-control">
            <div class="text-danger" id="surnameError"></div>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label" >Email:</label>
            <input type="email" id="email" name="email" class="form-control">
            <div class="text-danger" id="emailError"></div>
        </div>
        <button type="submit" class="btn btn-outline-success">Gönder</button>
    </form>
</div>

<script>
    $(document).ready(function(){
        $('#ajaxForm').on('submit', function(e){
            e.preventDefault();

            $.ajax({
                url: "{{ route('admin.store') }}",
                method: "POST",
                data: {
                    _token: '{{ csrf_token() }}',
                    firstName: $('#firstName').val(),
                    lastName: $('#lastName').val(),
                    email: $('#email').val()
                },
                success: function(response){
                    Swal.fire({
                        icon: 'success',
                        title: 'Başarı',
                        text: response.success,
                    });
                    $("#firstName").val('');
                    $("#lastName").val('');
                    $("#email").val('');
                },
                error: function(xhr){
                    let errorMessage = 'Bir hata oluştu.';
                    if(xhr.responseJSON && xhr.responseJSON.message){
                        errorMessage = xhr.responseJSON.message;
                    }
                    Swal.fire({
                        icon: 'error',
                        title: 'Hata',
                        text: errorMessage,
                    });
                }
            });
        });
    });
</script>
@endsection

