@extends('template')
@section('title','Create New Stock')

@section('isi')
    <div id="box-dua" class="artikel" >
        <h3>Create New Stock</h3>
    </div>

    <div id="card">
            <form method="#" action="/viewStock" >
                @csrf
            
                <label class='labelan' for='nama'>Nama Barang</label><br>
                <input class='inputan' id='nama' name='nama' type="text" value="" required autofocus><br>

                <label class='labelan' for='nomorkk'>Jenis Barang</label><br>
                <input class='inputan' id='nomorkk' name='nomorkk' type="text" value="" required autofocus><br>

                <label class='labelan' for='jumlah_keluarga'>Jumlah Barang</label><br>
                <input class='inputan' id='jumlah_keluarga' name='jumlah_keluarga' type="number" value="" required autofocus><br>

                <label class='labelan' for='alamat'>Tanggal Masuk</label><br>
                <input class='inputan' id='alamat' name='alamat' type="text" value="" required autofocus><br>
                
                <label class='labelan' for='alamat'>Tanggal Kadaluarsa</label><br>
                <input class='inputan' id='alamat' name='alamat' type="text" value="" required autofocus><br>
             
                <label class='labelan' for='alamat'>Keterangan</label><br>
                <input class='inputan' id='alamat' name='alamat' type="text" value="" required autofocus><br>
                
                <button class="btn" type="submit" name="submit" value="Simpan" />Simpan</button>

            </form>
    </div>
@endsection