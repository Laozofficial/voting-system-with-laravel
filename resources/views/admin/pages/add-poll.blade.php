@extends('admin.layouts.app')


@section('content')

    @include('admin.partials.sidenav')
      <div class="main-content" id="panel">
          
        @include('admin.partials.nav')
        <div class="header bg-default pb-6" >
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                            <h6 class="h2 text-white d-inline-block mb-0">Dashboard</h6>
                            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Add A New Poll</li>
                                </ol>
                            </nav>
                        </div>
                    <div class="col-lg-6 col-5 text-right">
                         <a href="/dashboard" class="btn btn-sm btn-neutral text-default"><i class="fa fa-list"></i> All Polls</a>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <div class="container-fluid mt--6">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-8">
                                    Create a new poll
                                </div>
                                <div class="col-md-4 text-right">
                                    <button class="btn btn-sm btn-neutral text-default" v-on:click="refresh">
                                        <i class="fa fa-sync"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="poll-title mb-4">Poll Title</label>
                                <input type="text" class="form-control" id="poll-title" v-model="poll_title" v-show="pollTitle">
                                <h2 class="mb-4 display-4" v-show="polltitlemodel">@{{ poll_title }}</h2>
                              </div>
                              <button class="btn btn-default btn-sm" v-bind:disabled="done" v-on:click="addPoll()"><i class="fa fa-plus"></i> save title and add options</button>
                                <div class="mt-3">
                                    <ol>
                                        <li v-for="option in options" class="mt-2"  :id="option.id">
                                            <div class="row">
                                                <div class="col-md-6"> @{{ option.option }}</div>
                                                <div class="col-md-6">
                                                    <button class="btn btn-danger btn-sm" v-on:click="deleteOption(option.id)">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>












          <!-- Modal -->
            <div class="modal fade" id="addoptions" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Add options</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="option">Add Option</label>
                                <input type="text" class="form-control" id="option" v-model="option">
                            </div>
                            <button class="btn btn-default btn-sm" v-on:click="addOptions()"><i class="fa fa-paper-plane"></i> submit options</button>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>


      </div>
@endsection
@section('script')
  <script src="{{ asset('admin/assets/js/pages/add-poll.js') }}" ></script> 
@endsection