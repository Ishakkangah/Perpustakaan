
<html>
    <head>
        <style>
            table, th, td {
              border:1px solid black;
                text-align: center;

            }
        </style>
     <title> Cara Membikin Surat </title>
    </head>
   
    <body bgcolor="white">
     <font face="Arial" color="black"> <p align="center"> PERPUSATAKAN XXXX KOTA XXXX </p></font>
     <font face="Arial" color="blue"> <p align="center"> Laporan tanggal {{ $date->toDayDateTimeString() }} </p></font>
     <font face="Arial" color="black" size="3"> <p align="center"> JL. Maju dan mundur By Pass Sunyaragi Telp.(0231) 123456 Palembang 45141 </p></font>
     <hr>
   
     <font face="Arial" color="red" size="6"> <p align="center"> <u> <b> SURAT LAPORAN TRANSAKSI </b></u></font><br>
     <font face="Arial" color="red" size="4"> Nomer: 8021/XXXX/2015 </p></font>
        <table style="width:100%">
            <tr>
              <th>#</th>
              <th>Judul buku</th>
              <th>Name member</th>
              <th>Tanggal pinjam</th>
              <th>Tanggal Kembali</th>
              <th>Status</th>
            </tr>
            @foreach ($transaksi as $key => $item)
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $item->buku->judul}}</td>
                <td>{{ $item->member->nama}}</td>
                <td>{{ $item->tanggal_pinjam}}</td>
                <td>{{ $item->tanggal_kembali }}</td>
                <td>{{ $item->status->nama }}</td>
            </tr>
            @endforeach
          </table>
          
          <div>
              <p>Ketua perpustakaan</p>
              <p>Ishakk angah</p>
            </div>
   
    <script type="text/javascript">
            window.print()
    </script>
   
   
    </body>
   </html>
   