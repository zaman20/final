


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- bootstrap  css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- my css -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main-container">
        <div class="login-box">
            <h3>Real State Mangement</h3>
            <form action="/check-login" method="post" class="login-form">
                @csrf
                <input type="text" name="user_name" placeholder="User Name">
                <input type="password" name="password" placeholder="Password">
                <input type="submit" value="Login">
            </form>

            @if( session()->has('msg') )
            <div class="alert alert-warning mt-3 alert-dismissible fade show" role="alert">
               {{session('msg')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
           @endif
        </div>

       
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>