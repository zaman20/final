<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sell Page</title>
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
            <a href="{{url('/new-sell')}}" class="btn btn-dark">New Sell</a>
            <table class="table table-striped mt-3">
            <?php $count =0; ?>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>House #</th>
                    <th>Total Paid</th>
                    <th>Due</th>
                    <th>Action</th>
                </tr>
               @foreach($datas as $data)
               <?php $count++;?>
                    <tr>
                        <td>{{$count}}</td>
                        <td>{{$data->buyer_name}}</td>
                        <td>{{$data->buyer_phone}}</td>
                        <td>{{$data->house}}</td>
                        <td>{{$data->paid}}</td>
                        <td>300000</td>
                        <td>
                            <a href="tel:{{$data->buyer_phone}}" class="btn btn-warning">Call</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
       </div>
    </div>
</body>
</html>