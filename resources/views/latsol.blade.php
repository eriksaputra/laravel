<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<center>Data Pegawai</center>
       @foreach ($gaji as $gajih)
           @if ($gajih ['Jabatan'] == "Manager")
               @php
                    $jab = 5000000;
               @endphp
            @elseif ($gajih['Jabatan'] == "Sekertaris")
               @php
                    $jab = 3500000;
               @endphp
            @elseif ($gajih ['Jabatan'] == "Staff")
                @php
                    $jab = 2500000;
                @endphp
           @endif

           @if ($gajih ['jam_kerja'] > 250)
            @php
                $bonus = 0.10 * $jab;
            @endphp
           @elseif ($gajih ['jam_kerja'] >= 150)
            @php
                $bonus = 0.05 * $jab;
            @endphp
            @else
                @php
                    $bonus = 0;
                @endphp
           @endif
           @php
               $ppn = 0.025 * $jab;
           @endphp
           @php
               $gaber = ($jab * $bonus)-$ppn;
           @endphp
           Nama : {{ $gajih['Nama'] }}<br>
           agama : {{ $gajih['Agama'] }}<br>
           Jabatan : {{ $gajih['Jabatan'] }}<br>
           Jam kerja : {{ $gajih['jam_kerja'] }}<br>
           Gaji : Rp. {{ $jab }}<br>
           Bonus : Rp. {{ $bonus }}<br>
           PPN : Rp. {{$ppn}}<br>
           Gaji Bersih : Rp. {{$gaber}}<br>
           <hr>
       @endforeach
</body>
</html>
