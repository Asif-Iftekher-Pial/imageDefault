<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>List</title>
</head>
<body>
    
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">Image</th>
            <th scope="col">Button</th>
            
          </tr>
        </thead>
        <tbody>
            @foreach ($list as $item )
            <tr>
                <th scope="row">1</th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>
                    <img src="{{ 'Image/'.$item->image }}"style="height: 100px; width: 150px;">
                </td>
                <td> <a href="{{ route('find', $item->id) }}" class="btn btn-sm btn-warning"> Edit </a> </td>
              </tr>
            @endforeach
         
         
        </tbody>
      </table>
</body>
</html>