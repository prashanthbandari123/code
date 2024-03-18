<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Document</title>
</head>
<body>

    <div> 
    <form method="post" action="{{route('store')}}">
        @csrf
        @method('post')
    <index>name</index>
    <input type="text" name="name" placeholder="name">
    </div><br>
    <div>
    <index>price</index>
    <input type="text" name="price" placeholder="price">
    </div><br>
    <div>
    <index>company</index>
    <input type="text" name="company" placeholder="company">
    </div><br>
    <button>submit</button>

    </form>
    </div>
</body>
</html>