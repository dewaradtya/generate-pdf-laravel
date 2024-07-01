<!DOCTYPE html>
<html>

<head>
    <title>{{ $title }}</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-size: 12px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        /* CSS untuk tabel dan header tabel */
        .custom-table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #000000;
        }

        .custom-table th,
        .custom-table td {
            border: 1px solid #000000;
            padding: 8px;
            text-align: left;
        }

        .custom-table .head-table {
            background-color: rgb(217, 215, 215);
            color: #000000;
        }


        h6 {
            margin-bottom: -5px;
            font-size: 14px;
        }

        .w-full {
            width: 100%;
        }

        .w-half {
            width: 45%;
        }

        .w-center {
            width: 55%;
        }

        .left {
            width: 80%;
        }

        .right {
            width: 30%;
        }

        .margin-top {
            margin-top: 1.25rem;
        }

        .footer {
            font-size: 0.875rem;
            padding: 1rem;
            background-color: rgb(241 245 249);
        }

        .custom-table th {
            padding: 8px;
            text-align: center;
        }

        .custom-table td {
            background-color: #ffffff;
            padding: 8px;
        }


        .custom-table .total {
            font-weight: bold;
            text-align: right;
            background-color: rgb(241, 245, 249);
        }

        .btn-gray {
            background-color: rgb(217, 215, 215);
            border: none;
            padding: 5px 35px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin-left: 100px;
            cursor: pointer;
        }

        .custom-hr {
            width: 50%;
            border: 1px solid #cecece;
            margin: 5px 0px;
        }

        .text {
            margin: 0px;
            width: 70%;
        }

        .signature {
            margin-left: 50%;
        }
    </style>
</head>
<table class="w-full mb-4">
    <tr>
        <td class="">
            <img src="{{ asset('/img/nugroho.png') }}" alt="nugroho" width="100" />
        </td>
        <td class="w-center">
            <div>
                <h6>PT. Nugroho Abadi Sentosa</h6>
            </div>
            <div>HOSPITAL and LABORATORY GENERAL SUPPLIER</div>
            <div>MAINTENANCE and REPAIR</div>
        </td>
        <td class="w-half">
            <button class="btn-gray">Purcase Order</button>
            <span style="margin-right:28px;">Referensi</span> : <span style="margin-left:24px;">023/PO/PT.NAS/VII/2022</span>
            <span style="margin-right:37px;">Tanggal </span>: <span style="margin-left:100px;">27/07/2022</span>
            <span style="margin-right:8px;">Delivery Date </span>: <span style="margin-left:70px;">17 October 2023</span>
        </td>
    </tr>
</table>

<div class="margin-top">
    <div>
        <h6>Supplier:</h6>
        <hr class="custom-hr">
    </div>
    <div class="mb-4">
        <h6>PT. Roche Indonesia</h6>
    </div>
    <div>
        <h6>Alamat Pengiriman</h6>
    </div>
    <div class="mb-4">-</div>
</div>

<p class="text">Bersama ini kami mohon dikirimkan barang barang tersebut dibawah ini:</p>
<table class="custom-table">
    <thead>
        <tr class="head-table">
            <th scope="col">No. Model</th>
            <th scope="col">Produk Name</th>
            <th scope="col">Qty</th>
            <th scope="col">Unit Price (Exc PPN)</th>
            <th scope="col">Total Price</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">-</th>
            <td>Accu-Chek Instant 100 Test Strips</td>
            <td>50</td>
            <td>Rp. 326,688 </td>
            <td>Rp. 16,334,400</td>
        </tr>
        <tr>
            <td colspan="4" class="text-right">Total</td>
            <td colspan="1">Rp. 16,334,400</td>
        </tr>
        <tr>
            <td colspan="4" class="text-right">PPN 11%</td>
            <td colspan="1">Rp. 1,796,784</td>
        </tr>
        <tr>
            <td colspan="4" class="text-right">Total + PPN</td>
            <td colspan="1">Rp. 18,131,184</td>
        </tr>
    </tbody>
</table>
<p class="mt-2" style="width: 70%; margin-bottom:100px;">Mohon dapat segera diberikan order konfirmasi/persetujuan
    atas penjualan kami ini. Atas
    perhatian dan kerjasamanya kami ucapkan terimakasih</p>

<div class="signature text-center">
    <div class="mb-4">Hormat Kami</div>
    <br>
    <br>
    <div style="font-weight: bold; text-decoration: underline;">Yessy Ummafiyanti</div>
    <div>Direktur</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
</body>

</html>
