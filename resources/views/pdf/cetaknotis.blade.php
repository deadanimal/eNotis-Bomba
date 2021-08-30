<head>
    <style>
        h3,
        h4 {
            text-align: center;
        }

        h5 {
        text-align: right;
        }

        p{
            text-align: justify;
            line-height: 1.25;
        }


    </style>
</head>

<body>

    <h3>JADUAL</h3>
    <h4><i>AKTA PERKHIDMATAN BOMBA 1988</i></h4>
    <h4>BORANG A</h4>
    <h4>(SEKSYEN 8 ( (1) )</h4>
    <h4>NOTIS MENGHAPUSKAN BAHAYA KEBAKARAN</h4>

    <p><b>Kepada:</b></p>

    <p>Pengurus
    @foreach ($premis as $premis)
    <br>{{$premis->nama_premis }}
    <br>{{ $premis->alamat }}</p>
    <br>
    @endforeach



    <p> SILA AMBIL PERHATIAN bahawa Ketua Pengarah Perkhidmatan Bomba setelah berpuas hati tentang adanya di {{ $premis->nama_premis }}, {{$premis->alamat}} </p>
    <p> suatu bahaya kebakaran iaitu {{ $notis->jenis_ppk }} yang {{ $notis->kesalahan }} di bahagian {{$notis->lokasi}} {{$notis->aras}} premis, dibawah {{$notis->seksyen}} yang boleh menyebab ancaman kepada keselamatan nyawa dan harta benda jika berlaku kebakaran. </p>
    <p> Dengan ini, menurut seksyen 8(1) Akta Perkhidmatan Bomba 1998, menghendaki tuan, dalam masa {{$notis->tempoh}} dari penyampaian notis ini, (1) menghapuskan bahaya kebakaran itu, dan bagi tujuan itu hendaklah {{$notis->pembetulan}} {{$notis->jenis_ppk}} di {{$notis->lokasi}} {{$notis->aras }} premis mengikut undang-undang yang boleh diperuntukkan oleh Jabatan Bomba.</p>
    <p>dan (2) melakukan apa jua yang perlu bagi mencegah berulangnya bahaya kebakaran itu, dan bagi tujuan tersebut hendaklah memastikan {{$notis->jenis_ppk}} sentiasa berada dalam keadaan baik pada setiap masa </p>
    <p> SILA AMBIL PERHATIAN BAHAWA jika tuan tidak memenuhi apa-apa kehendak notis dalam masa yang dinyatakan, tuan adalah melakukan suatu kesalahan yang mana apabila disabitkan tuan boleh didenda tidak melebihi lima ribu ringgit atau dipenjarakan selama tempoh tidak melebihi tiga tahun atau kedua-duanya dan didenda selanjutnya sebanyak satu ratus ringgit bagi setiap hari yang kesalahan itu berterusan selepas sabitan. </p>

    <br>
    <p>Bertarikh pada {{$notis->tarikh_pemeriksaan}}. </p>

    <br><br>
    <h5>KETUA PENGARAH PERKHIDMATAN BOMBA </h5>

</body>
