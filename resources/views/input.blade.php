<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PBKK</title>
 
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
    <div id="app">
        @include('flash-message')
        @yield('content')
    </div>
    <div class="container">
        <div class="row justify-content-center">
            @if (Session::get('biodataAdded'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card my-5"
                        style="background: linear-gradient(-45deg, #ffffff11, #ffffff88); border: none; box-shadow: inset 0 0 15px 0 #ffffff88; border-radius: 1rem">
                        <h3 class="card-title text-center mt-4">
                           Biodata ditambahkan
                        </h3>
                        <div class="card-body">
                            <div class="form-group">
                                <label class="font-weight-bold" for="nama">Nama </label>
                                <p>{{ session::get('data')['nama'] }} </p>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold" for="pekerjaan">Pekerjaan </label>
                                <p>{{ session::get('data')['pekerjaan'] }} </p>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold" for="usia">Usia </label>
                                <p>{{ session::get('data')['usia'] }} </p>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold" for="angka favorite">angka favorite </label>
                                <p>{{ session::get('data')['test'] }} </p>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold" for="foto">Foto </label>
                                <img src="{{ '/images/' . Session::get('imageName') }}" alt="fotomu" style="max-width:100%">
                            </div>
                        </div>
                    </div>
                @endif
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card mt-5">
                        <div class="card-body">
                            <h3 class="text-center">PBKK</h3>
                            <br/>

                            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
 
                            <br/>
                             <!-- form validasi -->
                            <form action="{{ route('tambah-biodata-post') }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input class="form-control" type="text" name="nama" value="{{ old('nama') }}">
                                </div>

                                <div class="form-group">
                                    <label for="pekerjaan">Pekerjaan</label>
                                    <input class="form-control" type="text" name="pekerjaan" value="{{ old('pekerjaan') }}">
                                </div>

                                <div class="form-group">
                                    <label for="usia">Usia</label>
                                    <input class="form-control" type="text" name="usia" value="{{ old('usia') }}">
                                </div>

                                <div class="form-group">
                                    <label for="testing">angka favorite</label>
                                    <input type="float" class="form-control" name="test" value="{{ old('test') }}">
                                </div>

                                <div class="form-group">
                                    <label for="gambar">upload gambarmu!</label>
                                    <input class="form-control-file" type="file"  name="gambar">
                                </div>
                                
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" value="Proses">
                                </div>
                            </form>
 
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
</body>
</html>