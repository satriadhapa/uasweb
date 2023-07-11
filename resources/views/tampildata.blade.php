<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center">Admin - edit data</h1>
    <div class="container">
      <button type="button" class="btn btn-success">Tambah Data +</button>
        <div class="row" justify-content-center>
          <form action="/updatedata/{{$data->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama</label>
              <input type="text" name= 'nama' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
              value="{{$data -> nama}}">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">email</label>
              <input type="email" name= 'email' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
              value="{{$data -> email}}">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">no Telepon</label>
              <input type="text" name= 'no_hp' class="form-control" id="exampleInputPassword1" value="{{$data -> no_hp}}">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">kategori</label>
              <select name= 'kategori' class="form-select" aria-label="Default select example">
                <option selected >{{$data->kategori}}</option>
                <option value="1">KP</option>
                <option value="2">UP</option>
                <option value="3">SKRIPSI</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>