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

        .align-colon {
            display: flex;
            justify-content: space-between;
        }

        .align-colon div {
            margin-left: 20px; /* Atur margin sesuai kebutuhan */
        }
    </style>
</head>
<table class="w-full mb-4">
    <tr>
        <td class="">
            <img src="{{ asset('img/nugroho.png') }}"  width="90" />
        </td>
        <td class="w-center">
            <div>
                <h6>PT. Nugroho Abadi Sentosa</h6>
            </div>
            <div>HOSPITAL and LABORATORY GENERAL SUPPLIER</div>
            <div>MAINTENANCE and REPAIR</div>
        </td>
        <td class="w-half">
            <div>Invoice No : 177/INV/PT.NAS/X/2023</div>
            <div>Page : 1/1</div>
            <div>Date : 17 October 2023</div>
        </td>
    </tr>
</table>

<h1 class="text-center" style="font-size: 18px">{{ $title }}</h1>
<div class="margin-top">
    <table class="w-full">
        <tr>
            <td class="left">
                <div>
                    <h6>Customer:</h6>
                </div>
                <div style="text-decoration: underline;">RS Bhayangkara Samsoeri</div>
                <div>Jl. Ahmad Yani No.116, Surabaya.</div>
            </td>
            <td class="right">
                <div>
                    <h6>Project:</h6>
                </div>
                <div>Pengadaan Lab ( Inv 177 )</div>
            </td>
        </tr>
    </table>
</div>
<div class="margin-top mb-4">
    <table class="w-full">
        <tr>
            <td class="left">
                <div>
                    <h6>Due Date Payment</h6>
                </div>
                <div>21 November 2023</div>
            </td>
            <td class="right">
                <div>
                    <h6>Payment Term :</h6>
                </div>
            </td>
        </tr>
    </table>
</div>

<table class="custom-table">
    <thead>
        <tr class="head-table">
            <th scope="col">No</th>
            <th scope="col">Produk / Jasa</th>
            <th scope="col">Kode / Merek</th>
            <th scope="col">Qty</th>
            <th scope="col">Satuan</th>
            <th scope="col">Harga Satuan</th>
            <th scope="col">Total Harga</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Stick Narkoba Test 6 Parameter</td>
            <td>Glory</td>
            <td>29</td>
            <td>box</td>
            <td>Rp. 1,936,937 </td>
            <td>Rp. 56,171,173</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Vacum Tube Plain</td>
            <td>GP</td>
            <td>12</td>
            <td>box</td>
            <td>Rp. 166,667 </td>
            <td>Rp. 2,000,004</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Pot Napza Non Steril Uk. 60 ml</td>
            <td>Onemed</td>
            <td>600</td>
            <td>pcs</td>
            <td>Rp. 5,541</td>
            <td>Rp. 3,324,600</td>
        </tr>
        <tr>
            <th scope="row">4</th>
            <td>Blue Tip Isi 500 Pcs</td>
            <td>Onemed</td>
            <td>5</td>
            <td>pack</td>
            <td>Rp. 77,027</td>
            <td>Rp. 385,135</td>
        </tr>
        <tr>
            <th scope="row">5</th>
            <td>Blood Lancet Isi 100 Pcs</td>
            <td>-</td>
            <td>10</td>
            <td>box</td>
            <td>Rp. 20,721</td>
            <td>Rp. 207,210</td>
        </tr>
        <tr>
            <th scope="row">6</th>
            <td>Label Therma</td>
            <td>-</td>
            <td>2</td>
            <td>roll</td>
            <td>Rp. 158,368</td>
            <td>Rp. 316,736</td>
        </tr>
        <tr>
            <td colspan="6" class="text-right">Total</td>
            <td colspan="1">Rp. 62,404,858</td>
        </tr>
        <tr>
            <td colspan="6" class="text-right">PPN 11%</td>
            <td colspan="1">Rp. 6,864,534</td>
        </tr>
        <tr>
            <td colspan="6" class="text-right">Total + PPN</td>
            <td colspan="1">Rp. 69,269,392</td>
        </tr>
    </tbody>
</table>
<p><strong>Note:</strong> Pembayaran Max 25 Hari Setelah Tanggal Invoice</p>

<div class="margin-top">
    <table class="w-full">
        <tr>
            <td class="w-half text-center">
                <div class="mb-4">Penerima</div>
                <br>
                <br>
                <div>(.............................)</div>
            </td>
            <td class="w-half text-center">
                <div class="mb-4">Hormat Kami</div>
                <br>
                <br>
                <div style="font-weight: bold; text-decoration: underline;">Yessy Ummafiyanti</div>
                <div>Direktur</div>
            </td>
        </tr>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
</body>

</html>
