@extends('template')
@section('title','View Stock')

@section('isi')
<div >
		<h1 class="artikel">Stock Barang</h1>
		<hr style="height :2px; color: black;">

        <button type="button" class="button"><i class="fas fa-download"></i>   Save As PDF</button>
        <button type="button" class="button" style="margin-left: 20px;"><i class="fas fa-eye"></i>   See Report</button>

		<table class="table mt-3">
			<tr bgcolor= "9CC094">
				<th>Nama Barang</th>
				<th>Jenis Barang</th>
				<th>Jumlah</th>
				<th>Tanggal Masuk</th>
				<th>Tanggal Kadaluarsa</th>
                <th>Keterangan</th>
                <th>Action</th>
			</tr>

            <tr>
				<td>Kopi Arabica Gayo</td>
				<td>Minuman</td>
				<td>2 kardus</td>
				<td>10 November 2021</td>
				<td>15 November 2021</td>
                <td>Ready</td>
                <td>
					<a href="#" class="button-update">Update</a>
					|
					<a href="#" class="button-delete">Delete</a>
				</td>
            </tr>
            </table>
</div>


@endsection