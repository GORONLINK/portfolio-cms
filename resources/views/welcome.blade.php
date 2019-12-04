@extends('layouts.app')

@section('content')

    <div class="container">
        <br><br>
        <div class="row">
            <div style="height: 200px" class="col-md-5 mx-auto background">
                <p class="text-center description  p-4">
                    Hi! I'm Marianela and I design stuff, good stuff.
                </p>
            </div>
        </div>
        <br><br>
        @if ($works->count())
        <div class="card-columns">
            @foreach ($works as $work)
                <div class="card shadow bg-white">
                    <a class="thumbnail" href="#" data-toggle="modal"
                       data-image="{{ $work->url }}"
                       data-target="#id{{ $loop->iteration }}"><img class="img-fluid" src="{{ $work->url1 }}" alt="...">
                    </a>           
                </div>
                <div class="modal fade bd-example-modal-lg show" id="id{{ $loop->iteration }}" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body" id="dynamic-content">
                                <div class="row justify-content-center align-items-center" style="background-color: #E1E1E1">
                                     <div class="col-3 mx-auto">       
                                        <div class="text-center">
                                            <img class="img-fluid" src="{{ asset('img/logazo.png') }}" width="100px">    
                                        </div>
                                    </div>
                                    <div class="col-8 mx-auto description-modal">
                                        <h3 style="word-wrap: break-word;" class="text-left">{{ $work->title }}</h3>
                                        <p style="word-wrap: break-word;" class="text-left">{{ $work->description }}</p>                      
                                    </div>               
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                      <img src="{{ $work->url1 }}" class="img-fluid" alt=""/>  
                                    </div>
                                </div>
                                @if(!empty($work->url2))
                                    <br>                         
                                    <div class="row">
                                        <div class="col-md-12">
                                            <img src="{{ $work->url2 }}" class="img-fluid" alt=""/>  
                                        </div>                                           
                                    </div>
                                @endif
                                @if(!empty($work->url3))
                                    <br>                             
                                    <div class="row">
                                        <div class="col-md-12">
                                            <img src="{{ $work->url3 }}" class="img-fluid" alt=""/>  
                                        </div>                                            
                                    </div>
                                @endif
                                @if(!empty($work->url4))
                                    <br>                                
                                    <div class="row">
                                        <div class="col-md-12">
                                            <img src="{{ $work->url4 }}" class="img-fluid" alt=""/>  
                                        </div>                                            
                                    </div>
                                @endif
                                @if(!empty($work->url5))
                                    <br>                              
                                    <div class="row">
                                        <div class="col-md-12">
                                            <img src="{{ $work->url5 }}" class="img-fluid" alt=""/>  
                                        </div>                                            
                                    </div>
                                @endif
                                @if(!empty($work->url6))
                                    <br>                           
                                    <div class="row">
                                        <div class="col-md-12">
                                            <img src="{{ $work->url2 }}" class="img-fluid" alt=""/>  
                                        </div>                                            
                                    </div>
                                @endif
                                <br><br>
                            </div>
                        </div>
                    </div>
                </div>                
            @endforeach
            <div class="float-right">
                {{ $works->links() }}
            </div>
        </div>

        @else



        @endif

    </div>
    <br><br><br>
@endsection
