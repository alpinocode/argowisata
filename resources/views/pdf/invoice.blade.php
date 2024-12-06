<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .border {
            border: 1px solid #E45F58;
            background-color: #D9D9D966;
            width: 100%;
            box-sizing: border-box;
        }
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #E45F58;
            color: white;
            padding: 10px 20px;
            height: 142px;
        }
        .header-content img {
            width: 150px;
        }
        .header-content .text-content h3 {
            margin: 5px 0;
            font-size: 14px;
        }
        .main-content {
            margin: 20px 0;
            padding: 0 20px;
        }
        .main-content h2 {
            font-size: 18px;
            margin: 10px 0;
        }
        .text-balance {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .text-balance h2 {
            font-size: 16px;
        }
        .note {
            color: #E45F58;
            font-size: 14px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="border">
        <div class="header-content">
            <img src="{{asset('image/logo.png')}}" alt="argo wisata">
            <div class="text-content">
                <h3>Tanggal Kunjungan: {{ \Carbon\Carbon::parse($data->tanggal_pesan)->translatedFormat('d F Y') }}</h3>
                <h3>Waktu Kunjungan: {{ \Carbon\Carbon::parse($data->waktu_pesan)->format('H:i') }} WIB</h3>
                <h3>Kode Pesanan: {{$data->id}}</h3>
            </div>
        </div>
        <div class="main-content">
            <h2>Halo, {{$data->name}}</h2>
            <h2>Terimakasih sudah memesan tiket via online!</h2>
            <div>
                <h3>Rincian Harga</h3>
                <div class="text-balance">
                    <div>
                        <h2>Tiket Masuk ({{$data->jumlah_tiket}})</h2>
                    </div>
                    <h2>Rp. 
                        {{ 
                            number_format(
                                ($data->harga_masuk == 'anak-anak' ? 10000 : 15000) + 
                                ($data->harga_parkir == 'motor' ? 1000 : ($data->harga_parkir == 'mobil' ? 5000 : 0)),
                                0, ',', '.'
                            ) 
                        }}
                    </h2>
                </div>
            </div>
            <hr>
            <div class="text-balance">
                <h2>Total Harga</h2>
                <h2>Rp. {{ number_format($data->total_harga, 0, ',', '.') }}</h2>
            </div>
            <div class="text-balance">
                <h2>Dibayar dengan transfer melalui {{$data->payment_method}}</h2>
                <h2>Rp. {{ number_format($data->total_harga, 0, ',', '.') }}</h2>
            </div>
            <p class="note">*Jangan lupa Screenshoot bukti pembayaran ini, untuk ditunjukkan kepada petugas pada waktu kunjungan yang sudah dipesan.</p>
        </div>
    </div>
</body>
</html>
