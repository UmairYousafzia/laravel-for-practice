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

<div class="container">

    <a href="{{route('customer.index')}}" class="btn btn-primary">Back</a>

    <form action="{{route('customer.store')}}" method="post">
        @csrf


        <div class="mb-3">
            <label for="customer_id" class="form-label">CustomerID</label>
            <input type="text" class="form-control" id="customer_id"  name="customer_id" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">CustomerName</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="contact_name" class="form-label">ContactName</label>
            <input type="text" class="form-control" id="contact_name" name="contact_name">
        </div>
        <div class="mb-3">
            <label for="country" class="form-label">Country</label>
            <input type="text" class="form-control" id="country" name="country">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>


</body>
</html>
