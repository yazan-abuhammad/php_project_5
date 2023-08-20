
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>document</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="cart.css">
</head>
<body>
<div class="container px-3 my-5 clearfix">

<div class="card">
<div class="card-header">
<h2>Shopping Cart</h2>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table table-bordered m-0">
<thead>
<tr>

<th class="text-center py-3 px-4" style="min-width: 400px;">Product Name &amp; Details</th>
<th class="text-right py-3 px-4" style="width: 100px;">Price</th>
<th class="text-center py-3 px-4" style="width: 120px;">Quantity</th>
<th class="text-right py-3 px-4" style="width: 100px;">Total</th>
<th class="text-center align-middle py-3 px-0" style="width: 40px;"><a href="#" class="shop-tooltip float-none text-light" title data-original-title="Clear cart"><i class="ino ion-md-trash"></i></a></th>
</tr>
</thead>
<tbody>
<tr>
<td class="p-4">
<div class="media align-items-center">
<img src="imge/4f44a67f22d694904d7f3c23383540b5-removebg-preview.png" class="d-block ui-w-40 ui-bordered mr-4" alt>
<div class="media-body">
<a href="#" class="d-block text-dark">Product 1</a>
<small>
<span class="text-muted">Color:</span>

<span class="text-muted">Size: </span> &nbsp;

</small>
</div>
</div>
</td>
<td class="text-right font-weight-semibold align-middle p-4 price">$57.55</td>
<td class="align-middle p-4"><input type="text" class="form-control text-center quantity-input" value="3" ></td>
<td class="text-right font-weight-semibold align-middle p-4">$115.1</td>
<td class="text-center align-middle px-0"><a href="#" class="shop-tooltip close float-none text-danger" title data-original-title="Remove">×</a></td>
</tr>
<tr>
<td class="p-4">
<div class="media align-items-center">
<img src="imge/ss-removebg-preview.png" class="d-block ui-w-40 ui-bordered mr-4" alt>
<div class="media-body">
<a href="#" class="d-block text-dark">Product 2</a>
<small>
<span class="text-muted">Color:</span>

</small>
</div>
</div>
</td>
<td class="text-right font-weight-semibold align-middle p-4">$1049.00</td>
<td class="align-middle p-4"><input type="text" class="form-control text-center" value="1"></td>
<td class="text-right font-weight-semibold align-middle p-4">$1049.00</td>
<td class="text-center align-middle px-0"><a href="#" class="shop-tooltip close float-none text-danger" title data-original-title="Remove">×</a></td>
</tr>
<tr>
<td class="p-4">
<div class="media align-items-center">
<img src="imge/4f44a67f22d694904d7f3c23383540b5-removebg-preview.png" class="d-block ui-w-40 ui-bordered mr-4" alt>
<div class="media-body">
<a href="#" class="d-block text-dark">Product 3</a>
<small>
<span class="text-muted">color : </span> 
</small>
</div>
</div>
</td>
<td class="text-right font-weight-semibold align-middle p-4">$20.55</td>
<td class="align-middle p-4"><input type="text" class="form-control text-center" value="1"></td>
<td class="text-right font-weight-semibold align-middle p-4">$20.55</td>
<td class="text-center align-middle px-0"><a href="#" class="shop-tooltip close float-none text-danger" title data-original-title="Remove">×</a></td>
</tr>
</tbody>
</table>
</div>

<div class="d-flex flex-wrap justify-content-between align-items-center pb-4">
<div class="mt-4">

</div>
<div class="d-flex">
<div class="text-right mt-4 mr-5">
<label class="text-muted font-weight-normal m-0">Discount</label>
<div class="text-large"><strong>$20</strong></div>
</div>
<div class="text-right mt-4">
<label class="text-muted font-weight-normal m-0">Total price</label>
<div class="text-large"><strong>$1164.65</strong></div>
</div>
</div>
</div>
<div class="float-right">
<button type="button" class="btn btn-lg btn-default md-btn-flat mt-2 mr-3">Back to shopping</button>
<button type="button" class="btn btn-lg btn-primary mt-2">Checkout</button>
</div>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
	
  $(document).ready(function() {
    // Attach event listener to all quantity input elements
    $('.quantity-input').on('input', function() {
      updateTotal(); // Call the function to update the total
    });

    // Function to update the total based on quantity and price
    function updateTotal() {
      let total = 0;

      $('.table tbody tr').each(function() {
        const price = parseFloat($(this).find('.price').text().replace('$', ''));
        const quantity = parseInt($(this).find('.quantity-input').val());

        if (!isNaN(price) && !isNaN(quantity)) {
          total += price * quantity;
        }
      });

      $('.total-price').text('$' + total.toFixed(2));
    }
  });
</script>

</body>
</html>