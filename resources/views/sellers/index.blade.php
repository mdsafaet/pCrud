<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>All Seller Details</title>
    </head>
    <body>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('sellers.create') }}"> Add Sellers</a>      
        </div>
    
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
    
        <table class="table table-bordered">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Shop Name</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($sellers as $seller)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $seller->name }}</td>
                <td>{{ $seller->email }}</td>
                <td>{{ $seller->phone }}</td>
                <td>{{ $seller->address }}</td>
                <td>{{ $seller->shopname }}</td>
                <td>
                    <form action="{{ route('sellers.destroy',$seller->id) }}" method="POST">
       
                        <a class="btn btn-info" href="{{ route('sellers.show',$seller->id) }}">Show</a>
        
                        <a class="btn btn-primary" href="{{ route('sellers.edit',$seller->id) }}">Edit</a>
       
                        @csrf
                        @method('DELETE')
          
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        {!! $sellers->links() !!}
    </body>
    </html>
    

 