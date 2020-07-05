@extends('admin.layouts.app')


@section('content')

    @include('admin.partials.sidenav')
      <div class="main-content" id="panel">
          
        @include('admin.partials.nav')
        <div class="text-center" v-show="loadingPage">
            <i class="fa fa-spin fa-spinner fa-8x"></i>
        </div>


        <div class="header bg-default pb-6" style="display:none"  v-show="content">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                            <h6 class="h2 text-white d-inline-block mb-0">Dashboard</h6>
                            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                    <div class="col-lg-6 col-5 text-right">
                         <a href="/add/poll" class="btn btn-sm btn-neutral text-default"><i class="fa fa-plus"></i> Create a new poll</a>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <div class="container-fluid mt--6" style="display:none"  v-show="content">
            <div class="card">
                <div class="card-header">
                   <div class="row">
                       <div class="col-md-9">
                        Polls Created By {{ Auth::user()->name }}
                       </div>
                       <div class="col-md-3 text-right">
                           <i class="fa fa-spin fa-spinner" style="display:none"  v-show="func"></i>
                       </div>
                   </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div>
                            <table class="table align-items-center">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Polls</th>
                                        <th scope="col">Added By</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Options</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    <tr v-for="poll in polls" :id="poll.id">
                                        <td>@{{ poll.poll }}</td>
                                        <td>@{{ poll.user.name }}</td>
                                        <td v-if="poll.status === 'not active'"><span class="text-danger">@{{ poll.status }}</span></td>
                                        <td v-if="poll.status === 'active'"><span class="text-success">@{{ poll.status }}</span></td>
                                        <td><button class="btn btn-sm btn-default" v-bind:disabled="loading" v-on:click="getOptions(poll.id)"><i class="fa fa-eye"></i></button></td>
                                        <td><button class="btn btn-sm btn-danger" v-bind:disabled="loading" v-on:click="deletePoll(poll.id)"><i class="fa fa-trash"></i></button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="options" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">options of the poll</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <ul>
                      <li v-for="option in options">
                        @{{ option.option }}
                        <span class="text-danger">@{{ option.votes.length }} vote(s) Recorded</span>
                      </li>
                  </ul>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>


      </div>
@endsection
@section('script')
  <script src="{{ asset('admin/assets/js/pages/dashboard.js') }}" ></script> 
@endsection