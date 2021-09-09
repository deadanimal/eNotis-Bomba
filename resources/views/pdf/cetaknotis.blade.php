<head>
    <style>
        h2,
        h3 {
            text-align: center;
            font: 12px "Times New Roman";
            
        }

        * {
            font-size: 12px;
            font-family:"Times New Roman";
            line-height: 1.5;
            margin-left: 60px;
            margin-right: 60px;
 
        }

        .center {
        text-align: center;
        font: "Times New Roman";
        }

        h4 {
        text-align: right;
        }

        sup{
            vertical-align: super;
            font-size: smaller;
        }

        p.b{
            text-align: justify;
            line-height: 1.5;
            margin-left: 60px;
            margin-right: 60px;
        }
        
        p.b{
            text-transform: uppercase;
            font-weight: bold;

        } 

        .c{
            text-align: right;
        } 

        footer {

        left: 0;
        bottom: 0;
        width: 100%;
        font: 8px "Times New Roman";
        }

    </style>
</head>

<body>
    <p>{{$notis->no_siri}}
    <h2 class="center">JADUAL</h2>
    <p class="center"><h3>AKTA PERKHIDMATAN BOMBA 1988</h3>
    <p class="center">BORANG A</p>
    <p class="center"> (Seksyen 8(1))</p>
    <p class="center"> MENGHAPUSKAN BAHAYA KEBAKARAN</p>

    <p><b>Kepada:</b>
    <br><b>Pengurus
    @foreach ($premis as $premis)
    <br>{{$premis->nama_premis}}
    <br>{{$premis->alamat}}</b></p>
    <br>
    @endforeach
    <p>SILA AMBIL PERHATIAN bahawa Ketua Pengarah Perkhidmatan Bomba +, setelah berpuas hati tentang adanya di <b>{{ $premis->nama_premis}},{{$premis->alamat}}</b></p>

    <p>suatu bahaya kebakaran, iaitu <b>{{$notis->jenis_ppk}} di bahagian {{$notis->lokasi}} {{$notis->kesalahan}},dibawah {{$notis->seksyen}} yang boleh menyebab ancaman kepada keselamatan nyawa dan harta benda jika berlaku kebakaran</b></p>

    <p>dengan ini, menurut seksyen 8(1) Akta Perkhidmatan Bomba 1988, menghendaki tuan, dalam masa <b>{{$notis->tempoh}}</b> dari penyampaian notis ini,(1) menghapuskan bahaya kebakaran itu, dan bagi tujuan itu hendaklah<b>{{$notis->pembetulan}} {{$notis->jenis_ppk}} di bahagian{{$notis->lokasi}} premis mengikut undang-undang yang telah diperuntukkan oleh Jabatan Bomba</p>

    <p >dan (2)<sup>*</sup>melakukan apa jua yang perlu bagi mencegah berulangnya bahaya kebakaran itu, dan bagi tujuan tersebut hendaklah<b>Memastikan {{$notis->jenis_ppk}} disediakan mengikut piawaian Malaysia 1539, serta sentiasa berada dalam keadaan baik pada setiap masa.</b></p>

    <p> SILA AMBIL PERHATIAN BAHAWA Jika tuan tidak memenuhi apa-apa kehendak notis dalam masa yang dinyatakan, tuan adalah melakukan suatu kesalahan yang mana apabila disabitkan tuan boleh didenda tidak melebihi lima ribu ringgit atau dipenjarakan selama tempoh tidak melebihi tiga tahun atau kedua-duanya dan didenda selanjutnya sebanyak satu ratus ringgit bagi setiap hari yang kesalahan itu berterusan selepas sabitan. </p>

    <p>Bertarikh pada <b>{{$tarikh_pemeriksaan}}</b></b>
      

    <br><br>
    <h4 class>.......................................................................</h4>
    <h4>(Ketua Pengarah Perkhidmatan Bomba)</h4>
    
    <br><br>
    <hr>
    <footer>
    + atau mana-mana Pegawai Bomba yang telah diwakilkan kuasa kepadanya oleh Ketua Pengarah. 
    <br><sup>*</sup> Potong jika tidak perlu.
    </footer>

</body>
