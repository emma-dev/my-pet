@extends('layout')

@section('content')
<!-- ***** Item Details Area Start ***** -->
<section>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-12 col-lg-5">
                <div>
                    <div class="item-thumb text-center">

                        <img src="{{asset($dogs->thumbnail)}}" alt="dog" width="50%">
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <!-- Content -->
                <div class="content mt-5 mt-lg-0">
                    <h3 class="m-0">{{$dogs->name}}</h3>
                    
                   
                    <div class="d-flex align-items-center">
                        <span>Age:</span>
                        <a class="d-flex align-items-center ml-3" href="#">
                            
                            <h6 class="ml-2">{{ $dogs->age}}</h6>
                        </a>
                    </div>
                    
                    <div class="mt-4">
                        <ul class="list-unstyled">
                            <li class="d-flex justify-content-between">
                                <span>Breed:  {{$dogs->breed}} </span>
                            </li>
                           
                        </ul>
                    </div>
                   <div class="row">

                   
              <div class="col-4 col-sm-4"><a class="d-block btn  btn-bordered mt-2" href="{{route('edit' , $dogs->id)}}">Edit</a></div>
              <div class="col-4 col-sm-4"><a class="d-block btn  btn-bordered mt-2" href="{{route('delete', $dogs->id)}}">Delete</a></div>
              
                   
                   </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ***** Item Details Area End ***** -->

@endsection
