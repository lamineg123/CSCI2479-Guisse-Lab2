<!DOCTYPE html>
<html>
<head>
<title>Product List</title>
</head>
<body>
  <h1>Products</h1>
  <ul>
  <!-- this Loop through each item and display them -->
  @foreach ($items as $item)
    <li>
    <!-- Display product details using the toString method -->
    {{ $item->toString() }}

     <!-- Add to Cart Form -->
     <form action="{{ route('cart.add') }}" method="POST">
     <!-- CSRF token for security -->
                @csrf

     <!-- Pass the item ID as a hidden input to add the correct product -->
     <input type="hidden" name="product_id" value="{{ $item->id }}">

     <!-- Quantity input -->
     <label for="quantity">Quantity:</label>
     <input type="number" name="quantity" value="1" min="1">

     <!-- Submit button to add the item to the cart -->
     <button type="submit">Add to Cart</button>
     </form>
        </li>
      @endforeach
   </ul>
</body>
</html>
