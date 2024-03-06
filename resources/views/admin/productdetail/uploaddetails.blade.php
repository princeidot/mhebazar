<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Upload Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <div class="container pt-5">
        <div class="row">
            <div class="col-md-12">
                @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
                @endif
            </div>
            <div class="col-md-12 pb-5">
                <div class="row">

                </div>

            </div>
            <div class="col-md-12">
                <form class="row g-3" action="{{route('upload_htp')}}" enctype="multipart/form-data" method="post">
                    @csrf

                    <div class="pb-3">
                        <div class="form-floating">
                            <select class="form-select" name="catename" ria-label="Floating label select example">
                                <option selected>Select Equipment Category</option>
                                @foreach($equipment as $det)
                                <option value="{{$det->id}}">{{$det->name}}</option>
                                @endforeach
                            </select>
                            <label for="floatingSelect">Select Equipment Category</label>
                        </div>
                    </div>
                    <div class="col-auto">
                        <label class="visually-hidden">Excel</label>
                        <input type="file" class="form-control" name="htp_upload">
                    </div>

                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3">Upload Excel</button>
                    </div>
                    @error('htp_upload')
                    <span class="text-danger">{{ $message}}</span>
                    @enderror
                </form>
                @if(Session::has('import_error'))

                @foreach(Session::get('import_error') as $failure)

                <div class="alert alert-danger" role="alert">
                    {{$failure->errors()[0]}} at line no-{{$failure->row()}}
                </div>
                @endforeach

                @endif
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-md-12">
                <h3>Upload Data</h3>
            </div>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Title</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                   
                    <tbody>
                        @if(count($htpuploaddata))
                        @foreach($htpuploaddata as $ht)
                        <tr>
                            <th scope="row">{{$ht->id}}</th>
                            <td>{{$ht->title}}</td>
                            <td>sdsd</td>
                            <td>@mdo</td>
                        </tr>
                        @endforeach
                        @else
                        <tr>

                            <td colspan="3">No data</td>
                        </tr>
                        @endif
                    </tbody>

                    
                </table>

            </div>
        </div> -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>