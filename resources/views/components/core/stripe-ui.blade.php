<script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
<script src="https://js.stripe.com/v3/"></script>

<form action="{{ route('checkout.stripe') }}" method="POST">
    @csrf
    <button class="btn btn-primary py-3 px-4" type="submit" id="checkout-button">Checkout</button>
</form>