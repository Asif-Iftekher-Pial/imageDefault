<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="{{ asset('animate.css') }}"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.css" integrity="sha512-phGxLIsvHFArdI7IyLjv14dchvbVkEDaH95efvAae/y2exeWBQCQDpNFbOTdV1p4/pIa/XtbuDCnfhDEIXhvGQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{ asset('bootstrap-notify.min.js') }}"></script>
{{-- <script>
  $.notify("Working",{
      animate: {
          enter: 'animated fadeInRight',
          exit: 'animated fadeOutRight'
      }
  });
</script> --}}
<script>
  @if (Session::has('success'))
      $.notify("{{ Session::get('success') }}",{
          animate: {
              enter: 'animated fadeInRight',
              exit: 'animated fadeOutRight'
          }
      });
  @endif
  @php
      Session::forget('success')
  @endphp


  @if (Session::has('error'))
      $.notify("{{ Session::get('error') }}",{
          animate: {
              enter: 'animated fadeInRight',
              exit: 'animated fadeOutRight'
          }
      });
  @endif
  @php
      Session::forget('error')
  @endphp
  
</script>

</html>