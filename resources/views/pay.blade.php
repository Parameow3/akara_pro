@extends('layouts.app')
@section('content')
    <body class="container-fluid mx-0 px-xl-0 px-0 bg-gray-100">
    <div class="row px-0 mx-2 mt-3 px-xl-5 mt-xl-5 mx-xl-5 justify-content-center">
        <div class="col-md-7 mt-3 mt-xl-0">
            <div class="card pb-3 mb-5">
                <div class="row p-5 mx-0 card-header" style="background-color: rgba(111,66,193,0.47)">
                    <h2 class="my-5 fw-bolder">{{ $plan->name }}</h2>
                </div>

                <div class="card-body">
                    <form id="payment-form" action="{{ route('subscription.create') }}" method="POST">
                        @csrf
                        <input type="hidden" name="plan" id="plan" value="{{ $plan->id }}">

                        <div class="row m-4">
                            <div class="col-xl-4 col-lg-4">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" name="name" id="card-holder-name" class="form-control" value=""
                                           placeholder="Name on the card">
                                </div>
                            </div>
                        </div>

                        <div class="row m-4">
                            <div class="col-xl-4 col-lg-4">
                                <div class="form-group">
                                    <label for="">Card details</label>
                                    <div class="mt-3" id="card-element"></div>
                                </div>
                            </div>
                        </div>


                        <hr>
                        <div class="row p-1 mx-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h3 class="">${{ $plan->price }}</h3>
                                    <p>per month</p>
                                </div>
                                <div>
                                    <button type="submit" class="btn rounded-5 py-3 px-5 fw-bolder" id="card-button"
                                            data-secret="{{ $intent->client_secret }}"
                                            style="--bs-btn-border-color: #6f42c1; --bs-btn-hover-bg: rgba(111,66,193,0.47)">
                                        Buy Now
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    </body>
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        const stripe = Stripe('{{ env('STRIPE_KEY') }}')

        const elements = stripe.elements()
        const cardElement = elements.create('card')

        cardElement.mount('#card-element')

        const form = document.getElementById('payment-form')
        const cardBtn = document.getElementById('card-button')
        const cardHolderName = document.getElementById('card-holder-name')

        form.addEventListener('submit', async (e) => {
            e.preventDefault()

            cardBtn.disabled = true
            const {setupIntent, error} = await stripe.confirmCardSetup(
                cardBtn.dataset.secret, {
                    payment_method: {
                        card: cardElement,
                        billing_details: {
                            name: cardHolderName.value
                        }
                    }
                }
            )

            if (error) {
                cardBtn.disable = false
            } else {
                let token = document.createElement('input')
                token.setAttribute('type', 'hidden')
                token.setAttribute('name', 'token')
                token.setAttribute('value', setupIntent.payment_method)
                form.appendChild(token)
                form.submit();
            }
        })
    </script>
@endsection
