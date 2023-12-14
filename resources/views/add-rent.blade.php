<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent Page</title>
    <!-- bootstrap  css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- my css -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-fluid">
       <div class="row">
        <div class="col-lg-2 left-part">
            <div class="left-part-content">
                <h2>Real State System</h2>
                @include('menu')
            </div>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-9 right-part">
                <h2>Add New Rent</h2>
                <form action="/add-rent" method="post" class="rent-form row">
                    @csrf
                    <div class="col-lg-6">
                        <input type="text" name="buyer_name" placeholder="Buyer Name" class="form-control my-2">
                    </div>
                    <div class="col-lg-6">
                        <input type="number" name="buyer_phone" placeholder="Buyer Phone" class="form-control my-2">
                    </div>
                    <div class="col-lg-6">
                        <select name="house" id="" class="form-select">
                            <option value="House-1">House# 1</option>
                            <option value="House-2">House# 2</option>
                            <option value="House-3">House# 3</option>
                            <option value="House-4">House# 4</option>
                            <option value="House-5">House# 5</option>
                        </select>
                    </div>
                    <div class="col-lg-6">
                        <input type="text" name="monthly_cost" placeholder="Monthly Cost" class="form-control my-2">
                    </div>
                    <div class="col-lg-12">
                        <input type="submit" value="Rent" class="form-control my-2 btn btn-primary">
                    </div>
                   
                </form>

                @if( session()->has('msg') )
                    <div class="alert alert-success mt-5 alert-dismissible fade show" role="alert">
                    {{session('msg')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
        </div>
       </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>