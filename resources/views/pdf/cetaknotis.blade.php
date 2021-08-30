<head>
    <style>
        h3,
        h5 {
            text-align: center;
        }

        p {
            text-align: justify;
            line-height: 1.5;

        }

        b {
            text-align: right;
        }

    </style>
</head>

<body>

    <h3>JADUAL</h3>
    <h5><i>AKTA PERKHIDMATAN BOMBA 1988</i></h5>
    <h5>BORANG A</h5>
    <h5>(SEKSYEN 8((1))</h5>
    <h5>NOTIS MENGHAPUSKAN BAHAYA KEBAKARAN</h5>

    <p><strong>Kepada:</strong></p>

    @foreach ($premis as $premis)
        <br>{{ $premis->nama_premis }}
        <br>{{ $premis->alamat }}<br>
    @endforeach



    <p> SILA AMBIL PERHATIAN bahawa Ketua Pengarah Perkhidmatan Bomba setelah berpuas hati tentang adanya di
        {{ $premis->nama_premis }}, suatu bahaya kebakaran iaitu {{ $notis->jenis_ppk }} yang {{ $notis->kesalahan }} di
        {{ $notis->lokasi }}. Dengan ini, menurut seksyen 8(1) Akta Perkhidmatan Bomba 1998, menghendaki tuan, dalam
        masa {{ $notis->tempoh }} dari penyampaian notis ini, (1)menghapuskan bahaya kebakaran itu, dan bagi tujuan itu
        hendaklah {{ $notis->pembetulan }} dan (2) melakukan apa jua yang perlu bagi mencegah berulangnya bahaya
        kebakaran itu. </p>
    <br>

    <p> SILA AMBIL PERHATIAN bahawa jika tuan tidak memenuhi apa-apa kehendak notis dalam masa yang dinyatakan, tuan
        adalah melakukan suatu kesalahan yang mana apabila disabitkan tuan boleh didenda tidak melebihi lima ribu
        ringgit atau dipenjarakan selama tempoh tidak melebihi tiga tahun atau kedua-duanya dan didenda selanjutnya
        sebanyak satu ratus ringgit bagi setiap hari yang kesalahan itu berterusan selepas sabitan. </p>

    <br>
    <p>Bertarikh pada {{ $notis->tarikh_pemeriksaan }}. </p>

    <br><br>
    <b style="text-align:right">KETUA PENGARAH PERKHIDMATAN BOMBA </b>

</body>
