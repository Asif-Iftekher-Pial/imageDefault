<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class="row">
        <div class="container">
            <div class="col-md-6" style="padding-left: 300px">
                <h2>Update</h2>
                <form action="{{ route('update',$getData->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label for="image">image</label>
                    <input type="file" class="form-control" name="image" placeholder="image">
    
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="name">
    
                    <label for="email">email</label>
                    <input type="email" class="form-control" name="email" placeholder="email">
    
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="password">
                    <br>
                    <button type="submit" class="btn btn-success" >submit</button>
                </form>
                
            </div>
        </div>
    </div>
</body>

</html>
