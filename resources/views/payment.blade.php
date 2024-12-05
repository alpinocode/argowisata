<style>
     body {
        font-family: Varela Round;
        background: #f1f1f1;
    }

    a {
        text-decoration: none;
    }

    /* Card Styles */

    .card-sl {
        border-radius: 8px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .card-image img {
        max-height: 100%;
        max-width: 100%;
        border-radius: 8px 8px 0px 0;
    }

    .card-action {
        position: relative;
        float: right;
        margin-top: -25px;
        margin-right: 20px;
        z-index: 2;
        color: #E26D5C;
        background: #fff;
        border-radius: 100%;
        padding: 15px;
        font-size: 15px;
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2), 0 1px 2px 0 rgba(0, 0, 0, 0.19);
    }

    .card-action:hover {
        color: #fff;
        background: #E26D5C;
        -webkit-animation: pulse 1.5s infinite;
    }

    .card-heading {
        font-size: 18px;
        font-weight: bold;
        background: #fff;
        padding: 10px 15px;
    }

    .card-text {
        padding: 10px 15px;
        background: #fff;
        font-size: 14px;
        color: #636262;
    }

    .card-button {
        display: flex;
        justify-content: center;
        padding: 10px 0;
        width: 100%;
        background-color: #1F487E;
        color: #fff;
        border-radius: 0 0 8px 8px;
    }

    .card-button:hover {
        text-decoration: none;
        background-color: #1D3461;
        color: #fff;

    }


    @-webkit-keyframes pulse {
        0% {
            -moz-transform: scale(0.9);
            -ms-transform: scale(0.9);
            -webkit-transform: scale(0.9);
            transform: scale(0.9);
        }

        70% {
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -webkit-transform: scale(1);
            transform: scale(1);
            box-shadow: 0 0 0 50px rgba(90, 153, 212, 0);
        }

        100% {
            -moz-transform: scale(0.9);
            -ms-transform: scale(0.9);
            -webkit-transform: scale(0.9);
            transform: scale(0.9);
            box-shadow: 0 0 0 0 rgba(90, 153, 212, 0);
        }
    }
</style>
<x-app-layout>
    @if ($errors->any())
        <div class="card text-white bg-danger mb-3 " style="width: 50%; justify-content: center; margin-left: 25%;" id="error-card">
            <div class="d-flex card-header" style="justify-content: space-between;">
                <h2>Error</h2>
                <i class="bi bi-file-x-fill" id="x-icon" style="cursor: pointer; font-size: 1.5rem;"></i>
            </div>
            <div class="card-body">
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </div>
        </div>
    @endif

    @if (session('success'))
        <div class="card text-white bg-success mb-3" role="alert" style="width: 50%; justify-content: center; margin-left: 25%;" id="success-card">
            <div class="d-flex card-header" style="justify-content: space-between;">
                <h2>success</h2>
                <i class="bi bi-file-x-fill" id="x-icon" style="cursor: pointer; font-size: 1.5rem;"></i>
            </div>
            <div class="card-body">
                {{ session('success') }}
            </div>
        </div>
    @elseif (session('error'))
        <div class="card text-white bg-danger mb-3 " style="width: 50%; justify-content: center; margin-left: 25%;" id="error-card">
            <div class="d-flex card-header" style="justify-content: space-between;">
                <h2>Error</h2>
                <i class="bi bi-file-x-fill" id="x-icon" style="cursor: pointer; font-size: 1.5rem;"></i>
            </div>
            <div class="card-body">
                {{ session('error') }}
            </div>
        </div>
    @endif
    
    <script type="text/javascript"
        src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{config('midtrans.client_key')}}"></script>

        <body>
            
            
            <div class="container d-flex justify-center items-center " style="margin-top:50px;">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card-sl">
                            <div class="card-image">
                                <img src="{{asset('image/logo.png')}}" alt="">
                            </div>
                            
                            <div class="card-heading">
                                Halo {{$order->name}}
                            </div>
                            <div class="card-text">
                                <h3>Deksripsi Order: {{$order->harga_masuk}} </h3>
                                <h3 style="margin-left: 105px">                 {{$order->harga_parkir}}</h3>
                            </div>
                            <div class="card-text">
                                total Harga: Rp. {{number_format($order->total_harga, 0, ',', '.')}}
                            </div>
                            <button id="pay-button" class="card-button">Pay!</button>
                        </div>
                    </div>
                </div>  
        <!-- @TODO: You can add the desired ID as a reference for the embedId parameter. -->
            <div id="snap-container"></div>

            <script type="text/javascript">
                // For example trigger on button clicked, or any time you need
                var payButton = document.getElementById('pay-button');
                payButton.addEventListener('click', function () {
                // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token.
                // Also, use the embedId that you defined in the div above, here.
                window.snap.embed('{{$snapToken}}', {
                    embedId: 'snap-container',
                    onSuccess: function (result) {
                    /* You may add your own implementation here */
                    window.location.href = '/invoice/{{$order->id}}';
                    },
                    onPending: function (result) {
                    /* You may add your own implementation here */
                    alert("wating your payment!"); console.log(result);
                    },
                    onError: function (result) {
                    /* You may add your own implementation here */
                    alert("payment failed!"); console.log(result);
                    },
                    onClose: function () {
                    /* You may add your own implementation here */
                    alert('you closed the popup without finishing the payment');
                    }
                });
                });
            </script>
        </body>
</x-app-layout>