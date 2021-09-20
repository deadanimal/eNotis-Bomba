<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style type="text/css">

        .right{
        text-align: right;
         font: 10pt "Times New Roman";
        }

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
            line-height: 1.25;
        }

        .center {
        text-align: center;
        font: "Times New Roman";
        font-size: 12pt;
        font-family:"Times New Roman";

        }

        sup{
            vertical-align: super;
            font-size: smaller;
        }

        p{
            text-align: justify;
        }

        .foot{
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

        .col-sm-4 {
            flex: 0 0 auto;
            width: 33.33333333%;
        }

        span.a {
        display: inline; /* the default for span */
        width: 100px;
        height: 100px;
        padding: 5px;
        }

        .tengah {
            position: absolute;
            right: 0px;
            left: 0px;
        }

        .kanan {
            position: absolute;
            right: 0px;
            font: 10pt "Times New Roman";
        }

    </style>

</head>

<body>
    <p class="right">{{$notis->no_siri}}</p>
     <div class="row">
        <div class="col-sm-4"></div>
        <div style="text-align:center">JADUAL PERTAMA</
         <div class="kanan">TDI &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; /2021</div>
    </div>

    <p class="center"><b>AKTA PERKHIDMATAN BOMBA 1988</b></p>
    <p class="center"><b>BORANG A</b></p>
    <p class="center">(Seksyen 8(1))</p>
    <p class="center">NOTIS MENGHAPUSKAN BAHAYA KEBAKARAN</p>

    
    <br><br>
    <div class="dotted" style="text-transform:uppercase;">Kepada: Pengurus</div>
    @foreach ($premis as $premis)
    <br> <div class="dotted" style="text-transform:uppercase;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; {{$premis->nama_premis}}</div>
    <br> <div class="dotted" style="text-transform:uppercase;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; {{$premis->alamat}}</div> 
    <br> <div class="dotted"></div>
    @endforeach

   <br> <p> SILA AMBIL PERHATIAN bahawa Ketua Pengarah Perkhidmatan Bomba +, setelah berpuas hati tentang adanya di <u>{{$premis->nama_premis}}, {{$premis->alamat}}</u></p>

    <p>suatu bahaya Kebakaran, iaitu <u>{{$notis->jenis_ppk}} yang {{$notis->kesalahan}} di {{$notis->aras}} bahagian {{$notis->lokasi}} premis, di bawah {{$notis->seksyen}}</u></p>

    <p>dengan ini, menurut seksyen 8(1) Akta Perkhidmatan Bomba 1988, menghendaki tuan, dalam masa <u >{{$notis->tempoh}}</u>  dari penyampaian notis ini, (1) menghapuskan bahaya kebakaran itu, dan bagi tujuan itu hendaklah<u> {{$notis->pembetulan}} mengikut undang-undang yang telah diperuntukan oleh Jabatan Bomba</u> 
    </p>

    <p>dan (2)<sup>*</sup>melakukan apa jua yang perlu bagi mencegah berulangnya bahaya kebakaran itu, dan bagi tujuan tersebut hendaklah <u>{{$notis->tujuan}}</u> </p>

    <p> SILA AMBIL PERHATIAN BAHAWA Jika tuan tidak memenuhi apa-apa kehendak notis dalam masa yang dinyatakan, tuan adalah melakukan suatu kesalahan yang mana apabila disabitkan tuan boleh didenda tidak melebihi lima ribu ringgit atau dipenjarakan selama tempoh tidak melebihi tiga tahun atau kedua-duanya dan didenda selanjutnya sebanyak satu ratus ringgit bagi setiap hari yang kesalahan itu berterusan selepas sabitan.</p>
    <br><p>Bertarikh pada ..................haribulan................... 2021</p>
    
    <h4 class="right">.......................................................................
    <br>(Ketua Pengarah Perkhidmatan Bomba)</h4>
    <br>
    <hr>
    <span class="foot">+ "atau mana-mana Pegawai Bomba yang telah diwakilkan kuasa kepadanya oleh Ketua Pengarah"
    <br><sup>*</sup> Potong jika tidak perlu.</span>

</body>