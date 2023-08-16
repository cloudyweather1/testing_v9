<x-layouts.layout-template0>



    @if(empty($cart_details))
    <h1>Cart is empty</h1>
    @else




    <section class="ftco-section ftco-cart">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="cart-list">
                        <table class="table">
                            <thead class="thead-primary">
                                <tr class="text-center">
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>




                                @foreach($cart_details as $data)

                                <tr class="text-center">

                                    <td class="product-remove">


                                        <form action="{{ route('cart.destroy', ['id' => $data->pivot->id]) }}"
                                            method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn p-2" type="submit"><span
                                                    class="ion-ios-close"></span></button>

                                            <input type="hidden" name="cart_id" value="{{ $data->pivot->id }}">
                                            <input type="hidden" name="product" value="{{ $data->id }}">

                                        </form>

                                        {{-- <a href="#"><span class="ion-ios-close"></span></a> --}}



                                    </td>

                                    <td class="image-prod">
                                        <div class="img"
                                            style="background-image:url({{ asset('storage/' . $data->product_image1) }});">
                                        </div>
                                    </td>

                                    <td class="product-name">
                                        <h3>{{ $data->product_title }}</h3>
                                        <p>Far far away, behind the word mountains, far from the countries</p>
                                    </td>

                                    <td class="price">${{ $checkout->formatPrice($data->product_price) }}</td>

                                    <td class="quantity">
                                        <form action="{{ route('cart.update', ['id' => $data->pivot->id]) }}"
                                            method="POST">
                                            @method('PUT')
                                            @csrf
                                            <div class="input-group mb-3">
                                                <input type="text" name="cart_quantity"
                                                    class="quantity form-control input-number"
                                                    value="{{ $data->pivot->cart_quantity }}" min="1" max="100">
                                                <button class="btn px-2"><span class="ion-ios-refresh"></span></button>
                                            </div>
                                            <input type="hidden" value="{{ $data->pivot->id }}" name="cart_id">
                                            <input type="hidden" value="{{ $data->id }}" name="product_id">
                                        </form>
                                    </td>


                                    <td class="total">${{ $checkout->formatPrice($data->cartQuantityPrice()) }}</td>
                                </tr><!-- END TR-->

                                @endforeach








                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
                    <div class="cart-total mb-3">
                        <h3>Cart Totals</h3>
                        <p class="d-flex">
                            <span>Subtotal</span>
                            <span>${{ $checkout->formatPrice($checkout->getSubtotal()) }}</span>
                        </p>
                        <p class="d-flex">
                            <span>Delivery</span>
                            <span>$0.00</span>
                        </p>
                        <p class="d-flex">
                            <span>Discount</span>
                            <span>$3.00</span>
                        </p>
                        <hr>
                        <p class="d-flex total-price">
                            <span>Total</span>
                            <span>${{ $checkout->formatPrice($checkout->getTotal()) }}</span>
                        </p>
                    </div>
                    <p class="text-center"><a href="checkout.html" class="btn btn-primary py-3 px-4">Proceed to
                            Checkout</a></p>
                </div>
            </div>
        </div>
    </section>



    @endif

</x-layouts.layout-template0>