<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Page</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Shopping Cart</h2>
        @foreach ($notifications as $notification)
    {{ $notification->data['post'] }}
@endforeach
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Product 1</td>
                    <td>
                        <input type="number" class="form-control" value="1">
                    </td>
                    <td>$10</td>
                    <td>$10</td>
                    <td>
                        <button class="btn btn-danger">Remove</button>
                    </td>
                </tr>
                <!-- Repeat for other products -->
            </tbody>
        </table>
        <div class="text-right">
            <h4>Total: $10</h4>
            <button class="btn btn-primary">Checkout</button>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
