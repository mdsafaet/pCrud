<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Create Product</title>
</head>
<body>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-6">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
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

            <form action="{{ route('products.store') }}"   method="POST">
             
                @csrf
               
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Name" />
                </div>
                <div class="mb-3">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="text" name="quantity" class="form-control" placeholder="Quantity" />
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" name="price" class="form-control" placeholder="Price" />
                </div>
                <div class="mb-3">
                    <input type="submit" value="Save a New Product" class="btn btn-primary" />
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
