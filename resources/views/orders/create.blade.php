<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
 <div class="container ">

     <a href="{{route('orders.index')}}">Back</a>
     <form action="{{route('orders.store')}}" method="post">
         @csrf

         <div class="mb-3">
             <label for="order_id" class="form-label">OrderID</label>
             <input type="text" class="form-control" id="order_id" name="order_id">
         </div>
         <div class="mb-3">
             <label for="customer_id" class="form-label">CustomerID</label>
             <select name="customer_id" id="customer_id" class="form-control">
                 @foreach($customers as $customer)
                     <option value = {{$customer->id}}>{{$customer->name}}</option>
                 @endforeach

             </select>
         </div>
         <div class="mb-3">
             <label for="order_date" class="form-label">Order Date</label>
             <input type="date" class="form-control" id="order_date" name="order_date">
         </div>

         <button type="submit" class="btn btn-primary">Submit</button>
     </form>



 </div>

</body>
</html>
