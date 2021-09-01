<head>
    <style>
        h2,
        h3 {
            text-align: center;
        }

        h4 {
        text-align: right;
        }

        sup{
            vertical-align: super;
            font-size: smaller;
        }

        p{
            text-align: justify;
            line-height: 1.25;
        }
        
        p.b{
            text-transform: uppercase;

        } 


    </style>
</head>

<body>

    <h2>JADUAL</h2>
    <h3><i>AKTA PERKHIDMATAN BOMBA 1988</i></h3>
    <h3>BORANG A</h3>
    <h3>( SEKSYEN 8 (1) )</h3>
    <h3>NOTIS MENGHAPUSKAN BAHAYA KEBAKARAN</h3>

    <p><b>Kepada:</b></p>

    <p class="b">Pengurus
    @foreach ($premis as $premis)
    <br>{{$premis->nama_premis }}
    <br>{{$premis->alamat }}</p>
    <br>
    @endforeach
    <br>SILA AMBIL PERHATIAN bahawa Ketua Pengarah Perkhidmatan Bomba +, setelah berpuas hati tentang adanya di {{ $premis->nama_premis}}, {{$premis->alamat}} 
    <br>suatu bahaya kebakaran, iaitu {{ $notis->jenis_ppk }} yang {{ $notis->kesalahan }} di bahagian {{$notis->lokasi}} {{$notis->aras}} premis, dibawah {{$notis->seksyen}} yang boleh menyebab ancaman kepada keselamatan nyawa dan harta benda jika berlaku kebakaran
    <br>>dengan ini, menurut seksyen 8(1) Akta Perkhidmatan Bomba 1988, menghendaki tuan, dalam masa {{$notis->tempoh}} dari penyampaian notis ini, (1) menghapuskan bahaya kebakaran itu, dan bagi tujuan itu hendaklah {{$notis->pembetulan}} {{$notis->jenis_ppk}} di {{$notis->lokasi}} {{$notis->aras }} premis mengikut undang-undang yang boleh diperuntukkan oleh Jabatan Bomba

    <p >dan (2)<sup>*</sup>melakukan apa jua yang perlu bagi mencegah berulangnya bahaya kebakaran itu, dan bagi tujuan tersebut hendaklah memastikan {{$notis->jenis_ppk}} sentiasa berada dalam keadaan baik pada setiap masa.</p>

    <p> SILA AMBIL PERHATIAN BAHAWA jika tuan tidak memenuhi apa-apa kehendak notis dalam masa yang dinyatakan, tuan adalah melakukan suatu kesalahan yang mana apabila disabitkan tuan boleh didenda tidak melebihi lima ribu ringgit atau dipenjarakan selama tempoh tidak melebihi tiga tahun atau kedua-duanya dan didenda selanjutnya sebanyak satu ratus ringgit bagi setiap hari yang kesalahan itu berterusan selepas sabitan. </p>

    {{-- <p>Bertarikh pada {{$notis->tarikh_pemeriksaan,"d M Y"}}</p> --}}
    <p>Bertarikh pada {{$tarikh_pemeriksaan}}
      

    <br><br>
    <h4>(Ketua Pengarah Perkhidmatan Bomba)</h4>
    
    <p><br><br>
    <hr>
    <br></p>
    + atau mana-mana Pegawai Bomba yang telah diwakilkan kuasa kepadanya oleh Ketua Pengarah. 
    <br><sup>*</sup> Potong jika tidak perlu. 

</body>
