<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Page</title>
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
           
            <div class="box rent">Rent <br> 
              {{$rent}}
            </div>
            <div class="box sell">Sell <br>
                {{$sell}}
            </div>
            <div class="box appnt">Appointment <br>
              {{$apt}}
            </div>

        </div>
       </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>