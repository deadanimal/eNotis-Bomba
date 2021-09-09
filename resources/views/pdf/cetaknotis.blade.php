<head>
    <style type="text/css">

        .dotted{
          border-bottom: 1px dotted rgb(0, 0, 0);
          text-decoration: none; 
          font-weight: bold;
        }

        h2,h3 {
            text-align: center;
            font: 12pt "Times New Roman";
            
        }
        * {
            font: 11pt "Times New Roman";
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
            line-height: 1.5;

        }
        

        .c{
            text-align: right;
        } 

        footer {
            left: 0;
            bottom: 0;
            width: 100%;
            font: 8pt "Times New Roman";
        }


    </style>

</head>

<body>

    <p class="c">{{$notis->no_siri}}
    <br>TDI &nbsp; &nbsp; &nbsp; /2021</p>
    <h2 class="center">JADUAL</h2>
    <h3 class="center">AKTA PERKHIDMATAN BOMBA 1988</h3>
    <h3 class="center">BORANG </h3>
    <h3 class="center"> (Seksyen 8(1))</h3>
    <h3 class="center"> MENGHAPUSKAN BAHAYA KEBAKARAN</h3>

    Kepada:<u class="dotted">Pengurus</u>
    @foreach ($premis as $premis)
    <br><u class="dotted">{{$premis->nama_premis}}</u>
    <br><u class="dotted">{{$premis->alamat}}</u>
    <br>
    @endforeach
    <p>SILA AMBIL PERHATIAN bahawa Ketua Pengarah Perkhidmatan Bomba +, setelah berpuas hati tentang adanya di <u class="dotted">{{$premis->nama_premis}},{{$premis->alamat}}</u></p>

    <p>suatu bahaya kebakaran, iaitu <u class="dotted">{{$notis->jenis_ppk}} di bahagian {{$notis->lokasi}} {{$notis->kesalahan}}, di bawah {{$notis->seksyen}} yang boleh menyebab ancaman kepada keselamatan nyawa dan harta benda jika berlaku kebakaran</u></p>

    <p>dengan ini, menurut seksyen 8(1) Akta Perkhidmatan Bomba 1988, menghendaki tuan, dalam masa <u class="dotted">{{$notis->tempoh}}</u> dari penyampaian notis ini, (1) menghapuskan bahaya kebakaran itu, dan bagi tujuan itu hendaklah<u class="dotted"> {{$notis->pembetulan}} {{$notis->jenis_ppk}} mengikut undang-undang yang telah diperuntukan oleh Jabatan Bomba</u></p>

    <p>dan (2)<sup>*</sup>melakukan apa jua yang perlu bagi mencegah berulangnya bahaya kebakaran itu, dan bagi tujuan tersebut hendaklah <u class="dotted">Memastikan {{$notis->jenis_ppk}} disediakan mengikut piawaian Malaysia 1539, serta sentiasa berada dalam keadaan baik</u></p>

    <p> SILA AMBIL PERHATIAN BAHAWA Jika tuan tidak memenuhi apa-apa kehendak notis dalam masa yang dinyatakan, tuan adalah melakukan suatu kesalahan yang mana apabila disabitkan tuan boleh didenda tidak melebihi lima ribu ringgit atau dipenjarakan selama tempoh tidak melebihi tiga tahun atau kedua-duanya dan didenda selanjutnya sebanyak satu ratus ringgit bagi setiap hari yang kesalahan itu berterusan selepas sabitan. </p>

    <p>Bertarikh pada ..................haribulan................... 2021</p>
      
    <br><br>
    <h4 class="c">.......................................................................</h4>
    <h4 class="c">(Ketua Pengarah Perkhidmatan Bomba)</h4>
    
    <br><br>
    <hr>
    <footer>
    + atau mana-mana Pegawai Bomba yang telah diwakilkan kuasa kepadanya oleh Ketua Pengarah. 
    <br><sup>*</sup> Potong jika tidak perlu.
    </footer>

</body>