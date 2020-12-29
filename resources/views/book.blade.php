<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.css') }}">
</head>
<body>
    
    <div class="container">
        <form action="{{ url('book/store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            
            <div class="form-group">
                <label for="">Author</label>
                <input type="text" class="form-control" name="author">
            </div>
            
            <div class="form-group">
                <label for="">Price</label>
                <input type="number" class="form-control" name="price">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>