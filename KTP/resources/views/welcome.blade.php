<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PWL 2024</title>
    <style>
          body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

.ktp {
  width: 800px;
  margin: 20px auto;
  /* border: 2px solid #000; */
  border-radius: 5px;
  padding: 20px;
  background-image: url('https://lh5.googleusercontent.com/-W4FM3TIV9I0/TYQzLeULsNI/AAAAAAAAAIo/4HwHZD_bgzQ/s1600/KTP+2.jpg');
  background-size: cover;
  background-repeat: no-repeat;
}

table {
  width: 100%;
  /* border: solid 2px red; */
}
td {
  /* border: solid 2px blue; */
  
}

.header {
  text-align: center;
}

.header img {
  width: 100px;
  height: 100px;
}

.label {
  font-weight: bold;
}

.footer {
  text-align: center;
}

.note {
  font-style: italic;
}
    </style>
</head>
<body>
  <div class="ktp">
    <table >
      <tr>
        <td colspan="3" class="header">
          <h1>PROVINSI JAWA TIMUR</h1>
          <h1>KOTA PASURUAN</h1>
        </td>
      </tr>
      <tr>
        <td class="label">NIK</td>
        <td class="value">3575022703020005</td>
        <td rowspan="14" style="text-align: center;">
          <img width="210" height="280" src={{ asset('img/fotosaya.jpg') }} alt=""><br>
          <span>KOTA PASURUAN</span><br>
          <span>25-02-2021</span><br>
          <img width="100" src={{ asset('img/signature.png') }} alt="">
        </td>
      </tr>
      <tr>
        <td class="label">Nama</td>
        <td class="value">MOCHAMMAD ALDO RIZKY</td>
      </tr>
      <tr>
        <td class="label">Tempat/Tanggal Lahir</td>
        <td class="value">PASURUAN, 27-03-2002</td>
      </tr>
      <tr>
        <td class="label">Jenis Kelamin</td>
        <td class="value">LAKI-LAKI</td>
      </tr>
      <tr>
        <td class="label">Alamat</td>
        <td class="value">JL.SERAYU L-11</td>
      </tr>
      <tr>
        <td class="label">&nbsp;&nbsp;&nbsp;&nbsp;RT/RW</td>
        <td class="value">010/005</td>
      </tr>
      <tr>
        <td class="label">&nbsp;&nbsp;&nbsp;&nbsp;Kelurahan/Desa</td>
        <td class="value">TEMBOKREJO</td>
      </tr>
      <tr>
        <td class="label">&nbsp;&nbsp;&nbsp;&nbsp;Kecamatan</td>
        <td class="value">PURWOREJO</td>
      </tr>
      <tr>
        <td class="label">Agama</td>
        <td class="value">ISLAM</td>
      </tr>
      <tr>
        <td class="label">Status Perkawinan</td>
        <td class="value">Belum Kawin</td>
      </tr>
      <tr>
        <td class="label">Pekerjaan</td>
        <td class="value">BELUM/TIDAK BEKERJA</td>
      </tr>
      <tr>
        <td class="label">Kewarganegaraan</td>
        <td class="value">WNI</td>
      </tr>
      <tr>
        <td class="label">Berlaku Hingga</td>
        <td class="value">SEUMUR HIDUP</td>
      </tr>
      
    </table>
    <br>
  </div>
</body>
</html>