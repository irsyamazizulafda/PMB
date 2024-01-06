<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Membuat Laporan PDF Dengan DOMPDF Laravel</h4>
		<h6><a target="_blank" href="https://www.malasngoding.com/membuat-laporan-…n-dompdf-laravel/">www.malasngoding.com</a></h5>
	</center>
 
	<table class='table table-bordered'>
    <tbody>
            <tr>
                <th>User ID</th>
                <td>{{ $history->id }}</td>
            </tr>
            <tr>
                <th>Nama Lengkap</th>
                <td>{{ $history->nama_lengkap }}</td>
            </tr>
            <tr>
                <th>Alamat KTP</th>
                <td>{{ $history->alamat_ktp }}</td>
            </tr>
            <tr>
                <th>Alamat Lengkap</th>
                <td>{{ $history->alamat_lengkap }}</td>
            </tr>

            <tr>
                <th>Kabupaten</th>
                <td>{{ $kabupatenName }}</td>
            </tr>
            <tr>
                <th>Provinsi</th>
                <td>{{ $provinsiName }}</td>
            </tr>
            <tr>
                <th>No. Telepon</th>
                <td>{{ $history->no_telepon }}</td>
            </tr>
            <tr>
                <th>No. HP</th>
                <td>{{ $history->no_hp }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $history->email }}</td>
            </tr>
            <tr>
                <th>Kewarganegaraan</th>
                <td>{{ $history->kewarganegaraan }}</td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td>{{ $history->tanggal_lahir }}</td>
            </tr>
            <tr>
                <th>Tempat Lahir</th>
                <td>{{ $history->tempat_lahir }}</td>
            </tr>
            <tr>
                <th>Kabupaten Lahir</th>
                <td>{{ $kabupatenLahirName}}</td>
            </tr>
            <tr>
                <th>Provinsi Lahir</th>
                <td>{{ $provinsiLahirName}}</td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>{{ $history->jenis_kelamin }}</td>
            </tr>
            <tr>
                <th>Status Menikah</th>
                <td>{{ $history->status_menikah }}</td>
            </tr>
            <tr>
                <th>Agama</th>
                <td>{{ $history->agama }}</td>
            </tr>
        </tbody>
	</table>
 
</body>
</html>