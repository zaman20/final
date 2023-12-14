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
            <a href="{{url('/new-rent')}}" class="btn btn-dark">New Rent</a>
            <table class="table table-striped mt-3">
            
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>House #</th>
                    <th>Monthly Rate</th>
                    <th>Total Paid</th>
                    <th>Due</th>
                    <th>Last Payment</th>
                </tr>
                    <?php $count = 0;?>
                    @foreach($datas as $data)
                    <?php $count++;?>
                    <tr>
                        <td>{{$count}}</td>
                        <td>{{$data->buyer_name}}</td>
                        <td>{{$data->buyer_phone}}</td>
                        <td>{{$data->house}}</td>
                        <td>{{$data->monthly_cost}}</td>
                        <td>10000</td>
                        <td>300000</td>
                        <td>
                            <a href="tel:{{$data->buyer_phone}}" class="btn btn-warning">Call</a>
                            <a href="#" class="btn btn-info">Update</a>
                        </td>
                    </tr>
                    @endforeach
                
            </table>
        </div>
       </div>
    </div>
</body>
</html>