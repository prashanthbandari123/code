<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- @include("new") -->
    <title>Document</title>
</head>
<body>

    <p><h1>This is an form</h1> </p>
   <div>
    <a href="{{route('create')}}">create a form</a>
    <table border='1'>
            <tr>
            <th>name</th>
            <th>price</th>
            <th>company</th>
            <th>edit</th>
            <th>delete</th>
            </tr>
         @foreach($phone as $items)
         <tr>
            <td>{{$items->name}}</td>
            <td>{{$items->price}}</td>
            <td>{{$items->company}}</td>
            <td>
                <a href="{{route('edit',['phone'=>$items])}}">edit</a>
            </td>
            <td>
                <form method="post" action="{{route('delete',['phone'=>$items])}}">
                    @csrf
                    @method('delete')
                    <input type='submit' value="delete">
                </form>
            </td>
         </tr>
         @endforeach
    </table>
</body>
</html>