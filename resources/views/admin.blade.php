<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center">Admin</h1>
    <div class="container">
      <a href = "/tambah"  class="btn btn-success">Tambah Data +</a>
      @if($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
          {{$message}}
        </div>
      @endif
        <div class="row">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Nama</th>
                <th scope="col">email</th>
                <th scope="col">no.hp</th>
                <th scope="col">kategori</th>
                <th scope="col">aksi</th>
              </tr>
            </thead>
            <tbody>
              @php
                $no = 1;
              @endphp
            @foreach($data as $row)
              <tr>
                <th scope="row">{{$no++}}</th>
                <td>{{$row->nama}}</td>
                <td>{{$row->email}}</td>
                <td>0{{$row->no_hp}}</td>
                <td>{{$row->kategori}}</td>
                <td>
                  <a href = "/tampildata/{{ $row->id }}" class="btn btn-warning">Edit</a>
                  <a href="/deletedata/{{$row ->id}}" class="btn btn-danger">Hapus</a>
                </td>

              </tr>
            @endforeach
              

            </tbody>
          </table>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>