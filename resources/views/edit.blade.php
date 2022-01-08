@extends('layout')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-7">
                <div class="intro mt-5 mt-lg-0 mb-4 mb-lg-5">
                    <div>
                        <h3 class="mt-3 mb-0">Edit</h3>
                    </div>
                </div>
                <!-- Item Form -->
                <form action="{{ route('updatesave', $dogs->id) }}" method="POST" class="item-form card no-hover"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div  class="form-group mt-0">
                                <p><img  id="output" width="200"  alt="my image" /></p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-group form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image" id="image"
                                        accept="image/png, image/jpeg, image/jpg" onchange="loadFile(event)">
                                    <label class="custom-file-label" for="image">Choose file</label>

                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" value="{{ $dogs->name }}" name="name"
                                    placeholder="Dog Name" required="required">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" value="{{ $dogs->age }}" name="age"
                                    placeholder="Age" required="required">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" value="{{ $dogs->breed }}" name="breed"
                                    placeholder="Breed" required="required">
                            </div>
                        </div>

                        <div class="col-12">
                            <button class="btn btn-bordered w-100 mt-3 mt-sm-4" type="submit">Publish</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

     <script>
        var image = document.getElementById('output');
        if (image.src === '') image.src = '{{ asset('assets/img/placeholder-image.png') }}';
        var loadFile = function(event) {
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>

@endsection
