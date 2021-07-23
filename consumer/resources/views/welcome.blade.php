<!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Laravel Pagination Demo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

        <style>
            .shadow-sm{display:none !important;}
        </style>
    </head>

    <body>
        <div class="container mt-5">
            <table class="table table-bordered mb-5">
                <thead>
                    <tr class="table-success">
                        <th scope="col">#</th>
                        <th scope="col">Office Name</th>
                        <th scope="col">Pincode</th>
                        <th scope="col">Office type</th>
                        <th scope="col">Delivery status</th>
                        <th scope="col">Division name</th>
                        <th scope="col">Region name</th>
                        <th scope="col">Circle name</th>
                        <th scope="col">Taluk</th>
                        <th scope="col">District name</th>
                        <th scope="col">State name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pincodes as $pincode)
                    <tr>
                        <th scope="row">{{ $pincode['id'] }}</th>
                        <td>{{ $pincode['officename'] }}</td>
                        <td>{{ $pincode['pincode'] }}</td>
                        <td>{{ $pincode['officeType'] }}</td>
                        <td>{{ $pincode['Deliverystatus'] }}</td>
                        <td>{{ $pincode['divisionname'] }}</td>
                        <td>{{ $pincode['regionname'] }}</td>
                        <td>{{ $pincode['circlename'] }}</td>
                        <td>{{ $pincode['Taluk'] }}</td>
                        <td>{{ $pincode['Districtname'] }}</td>
                        <td>{{ $pincode['statename'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $pincodes->links() }}
           
        </div>
    </body>
</html>