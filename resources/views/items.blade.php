<!DOCTYPE html>
<html>
    <!--
      the following will help display products using tostring method
     -->
    <head>
    <title>Product List</title>
    </head>
    <body>
        <h1>Products</h1>
        <ul>
    @foreach ($items as $item)
    
    <li>{{ $item ->toString () }}</li>

    @endforeach
        </ul>
    </body>
</html>