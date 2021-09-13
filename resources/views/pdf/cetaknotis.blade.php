<head>
    <style type="text/css">

        .dotted{
          border-bottom: 1.5px dotted black;
          line-height:5px;
          font-weight: bold;
        }

        u {
        padding-bottom:1.5px;
        text-decoration:none;
        border-bottom:1.5px dotted #000;
        font-weight: bold;
        }

        h2,h3 {
            text-align: center;
            font: 11pt "Times New Roman";
            
        }

        * {
            font: 12pt "Times New Roman";
            line-height: 1.5;
        }

        center {
        text-align: center;
        font: "Times New Roman";
        font-size: 11pt;
        font-family:"Times New Roman";

        }

        sup{
            vertical-align: super;
            font-size: smaller;
        }

        p{
            text-align: justify;
            line-height: 1.5;
        }

    
        .right{
            text-align: right;
            font-size: 11pt;
        }

        footer {
            left: 0;
            bottom: 0;
            width: 100%;
            font: 8pt "Times New Roman";
            line-height: 1.25;
        }

        b{
            font: 11pt "Times New Roman";
            text-align: center;
        }

    </style>

</head>

<body>

    <p class="right">{{$notis->no_siri}}
    <br>TDI &nbsp; &nbsp;/2021</p>
    <br><center><b>JADUAL</b>
    <br><b>AKTA PERKHIDMATAN BOMBA 1988</b>
    <br><b>BORANG A</b>
    <br>(Seksyen 8(1))
    <br>MENGHAPUSKAN BAHAYA KEBAKARAN</center>
    
    <br><br>
    <div class="dotted">Kepada: Pengurus</div>
    @foreach ($premis as $premis)
    <br> <div class="dotted">{{$premis->nama_premis}}</div>
    <br> <div class="dotted">{{$premis->alamat}}</div> 
    @endforeach

    <p>SILA AMBIL PERHATIAN bahawa Ketua Pengarah Perkhidmatan Bomba +, setelah berpuas hati tentang adanya di <div class="dotted">{{$premis->nama_premis}}, {{$premis->alamat}}</div> </p>

    <p>suatu bahaya kebakaran, iaitu <u>{{$notis->jenis_ppk}} yang {{$notis->kesalahan}} di {{$notis->aras}} bahagian {{$notis->lokasi}} premis, di bawah {{$notis->seksyen}}</u> </p>

    <p>dengan ini, menurut seksyen 8(1) Akta Perkhidmatan Bomba 1988, menghendaki tuan, dalam masa <u>{{$notis->tempoh}}</u>  dari penyampaian notis ini, (1) menghapuskan bahaya kebakaran itu, dan bagi tujuan itu hendaklah<u> {{$notis->pembetulan}} mengikut undang-undang yang telah diperuntukan oleh Jabatan Bomba</u> </p>

    <p>dan (2)<sup>*</sup>melakukan apa jua yang perlu bagi mencegah berulangnya bahaya kebakaran itu, dan bagi tujuan tersebut hendaklah <u>{{$notis->tujuan}}</u> </p>

    <p> SILA AMBIL PERHATIAN BAHAWA Jika tuan tidak memenuhi apa-apa kehendak notis dalam masa yang dinyatakan, tuan adalah melakukan suatu kesalahan yang mana apabila disabitkan tuan boleh didenda tidak melebihi lima ribu ringgit atau dipenjarakan selama tempoh tidak melebihi tiga tahun atau kedua-duanya dan didenda selanjutnya sebanyak satu ratus ringgit bagi setiap hari yang kesalahan itu berterusan selepas sabitan. </p>

    <p>Bertarikh pada ..................haribulan................... 2021</p>
    <br>
    <h4 class="right">.......................................................................</h4>
    <h4 class="right">(Ketua Pengarah Perkhidmatan Bomba)</h4>
    <hr>
    <footer>
    + atau mana-mana Pegawai Bomba yang telah diwakilkan kuasa kepadanya oleh Ketua Pengarah. 
    <br><sup>*</sup> Potong jika tidak perlu.
    </footer>

</body>