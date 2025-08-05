<?php 
// Remove: include("productsHeader.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>My Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="navbar navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="index.html" style="font-family: 'Poppins', sans-serif;">
                    <img src="image/logo.jpg" alt="Caselytical Logo" style="height:32px; width:auto; margin-right:10px;">
                    <span class="fw-bold">Caselytical</span>
                </a>
            </div>
        </nav>
    </header>
    <div class="container mt-5">
        <h1 class="mb-4">My Cart</h1>
        <div id="cart-items" class="row"></div>
        <div id="cart-summary" class="mt-4"></div>
        <div class="mb-3">
            <button id="remove-all" class="btn btn-outline-danger btn-sm">Remove All</button>
        </div>
        <div class="mb-3">
            <a href="products.html" class="btn btn-outline-dark btn-sm">Back to Products</a>
        </div>
        <div id="payment-options" class="mt-4">
            <h5 class="mb-3">Choose Payment Method</h5>
            <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="payment" id="creditDebit" value="creditDebit" checked>
                <label class="form-check-label" for="creditDebit">
                    Credit/Debit Card
                </label>
            </div>
            <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="payment" id="cod" value="cod">
                <label class="form-check-label" for="cod">
                    Cash on Delivery (COD)
                </label>
            </div>
            <button class="btn btn-dark mt-3">Proceed to Payment</button>
        </div>
    </div>
    <script>
        function renderCart() {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            const cartItemsDiv = document.getElementById('cart-items');
            const cartSummaryDiv = document.getElementById('cart-summary');
            let total = 0;

            if(cart.length === 0) {
                cartItemsDiv.innerHTML = '<p>Your cart is empty.</p>';
                cartSummaryDiv.innerHTML = '';
                document.getElementById('payment-options').style.display = 'none';
                document.getElementById('remove-all').style.display = 'none';
            } else {
                let html = `<ul class="list-group w-100">`;
                cart.forEach((item, idx) => {
                    html += `
                        <li class="list-group-item d-flex align-items-center">
                            <img src="${item.img}" alt="${item.title}" style="width:48px;height:48px;object-fit:cover;border-radius:8px;margin-right:16px;">
                            <div class="flex-grow-1">
                                <div class="fw-bold">${item.title}</div>
                                <div class="text-muted">RM${item.price}</div>
                            </div>
                            <button class="btn btn-sm btn-outline-danger ms-2 remove-item" data-index="${idx}">Remove</button>
                        </li>
                    `;
                    total += parseFloat(item.price);
                });
                html += `</ul>`;
                cartItemsDiv.innerHTML = html;
                cartSummaryDiv.innerHTML = `<h5 class="mt-3">Total Price: <span class="fw-bold">RM${total.toFixed(2)}</span></h5>`;
                document.getElementById('payment-options').style.display = 'block';
                document.getElementById('remove-all').style.display = 'inline-block';

                // Remove single item
                document.querySelectorAll('.remove-item').forEach(btn => {
                    btn.onclick = function() {
                        const idx = parseInt(this.getAttribute('data-index'));
                        cart.splice(idx, 1);
                        localStorage.setItem('cart', JSON.stringify(cart));
                        renderCart();
                    };
                });
            }
        }

        // Remove all items
        document.getElementById('remove-all').onclick = function() {
            localStorage.removeItem('cart');
            renderCart();
        };

        renderCart();
    </script>
</body>
</html>