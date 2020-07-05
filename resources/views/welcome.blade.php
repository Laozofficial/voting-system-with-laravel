@extends('layouts.app')

@section('content')
@include('layouts.nav')
        

        {{--  <div class="row justify-content-center">
            <div class="col-md-12">
                <!-- Carousel -->
                <div id="Carousel4" class="carousel slide shadow-soft border border-light  rounded" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#Carousel4" data-slide-to="0" class="active"></li>
                        <li data-target="#Carousel4" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner rounded">
                        <div class="carousel-item overlay-primary active">
                            <img class="d-block w-100" src="{{ asset('landing/assets/img/carousel/image-2.jpg') }}" alt="First slide">
                            <div class="carousel-caption d-none d-md-block text-dark">
                                <h3 class="h5">Comfortable voting</h3>
                                <p>Stay in your comfort and vote , make decisions with just a click.
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item overlay-primary">
                            <img class="d-block w-100" src="{{ asset('landing/assets/img/carousel/image-3.jpg') }}" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block text-dark">
                                <h3 class="h5">All Polls are open to you</h3>
                                <p>All and every polling options are open to you.
                                </p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#Carousel4" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#Carousel4" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>  --}}

        <div class="col-12 col-lg-12 mt-6">
            <div class="card bg-primary shadow-soft border-light  mb-6">
                <div class="card-body text-center text-md-left">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h2 class="mb-3">Welcome to Votr</h2>
                            <p class="mb-4">
                                Stay in your comfort zone and vote , make decisions with ease
                            </p>
                            <a href="#" class="btn btn-primary">
                                <span class="mr-1">
                                    <span class="fas fa-file-invoice"></span>
                                </span>
                                Start Voting
                            </a>
                        </div>
                        <div class="col-12 col-md-6 mt-4 mt-md-0 text-md-right">
                            <img src="{{ asset('landing/assets/img/illustrations/reading-side.svg') }}" alt="illustration">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid mb-6">
            @if(Auth::user())
            <div class="text-center" v-show="loadingPage">
                <i class="fa fa-spin fa-spinner fa-8x"></i>
            </div>


           <div class="" v-for="poll in polls" style="display:none" v-show="content">
            <div class="row justify-content-center mb-5">
                <div class="col-md-6">
                    <div class="card bg-primary shadow-soft border-light ">
                        <div class="card-header font-weight-bold">
                           <div class="row">
                               <div class="col-6 text-uppercase">
                                 @{{ poll.poll }}
                               </div>
                               <div class="col-6 text-right">
                                posted by @{{ poll.user.name }}
                               </div>
                           </div>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li class="mb-3" v-for="option in poll.options">
                                    <button v-on:click="vote(option.id)" class="btn btn-sm">@{{ option.option }}</button>
                                </li>
                            </ul>
                            <button class="btn btn-link mb-3 p-3" v-show="showComments" v-on:click="addComments(poll.id)"><i class="fa fa-plus"></i> add comments</button><br>
                            @{{ poll.votes.length }} votes already counted
                        </div>
                    </div>
                </div>
            </div>
           </>
           @else
            <h3>Please log in to see the voting options</h3>
           @endif
        </div>

    
    
        <!-- Modal -->
<div class="modal fade" id="addcomment" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Add Comments</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <textarea id="commentstext" class="form-control" rows="10"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success" v-on:click="saveComments">Save</button>
      </div>
      </div>
    </div>
  </div>
</div>


                @include('layouts.footer')
                @section('scripts')
                    <script src="{{ ('landing/assets/js/index.js') }}"></script>
                @endsection
@endsection
