new Vue({
    el:"#app",
    data: {
        loadingPage: true,
        content: false,
        polls:[],
        options:[],
        loading: false,
        func: false,
        comments: []
    },
    mounted() {
        this.getPolls();

        $('#options').on('hidden.bs.modal', (event)=> {
            
            this.options = [];
            this.loading = false;
            this.func = false;
            
          });
    },
    methods: {
        getPolls(){
            let url = '/get/all/polls';
            axios.get(url)
                .then((response) => {
                    console.log(response);
                    this.polls = response.data.polls;
                    this.loadingPage = false;
                    this.content = true;
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        deletePoll(id){
            this.loading = true;
            this.func = true;
            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this Poll and it's data!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
              })
              .then((willDelete) => {
                if (willDelete) {
                    let url = '/delete/poll/'+ id;
                    axios.get(url)
                        .then((response) => {
                            console.log(response);
                            $('#'+id).remove();
                            swal("Poof! Your Poll has been deleted!", {
                                icon: "success",
                              });
                              this.loading = false;
                              this.func = false;
                        })
                        .catch((error) => {
                            console.log(error);
                            this.loading = false;
                            this.func = false;
                        });
                  
                } else{ 
                    this.loading = false;
                    this.func = false;
                }
              });
        },
        getOptions(id){
            this.loading = true;
            this.func = true;
            let url = '/get/options/for/poll/' +id;
            axios.get(url)
                .then((response) => {
                    console.log(response);
                    this.options = response.data.options;
                    this.func = false;
                    $('#options').modal('show');
                })
                .catch((error) => {
                    this.loading = false;
                    this.func = false;
                    console.log(error);
                });
        },
        activatePoll(id){
            this.loading = true;
            this.func = true;
            swal({
                title: "Are you sure?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
              })
              .then((willDelete) => {
                if (willDelete) {
                    let url = '/activate/poll/'+ id;
                    axios.get(url)
                        .then((response) => {
                            console.log(response);
                            this.getPolls();
                            swal("Poof! the Poll has been activated!", {
                                icon: "success",
                              });
                              this.loading = false;
                              this.func = false;
                        })
                        .catch((error) => {
                            console.log(error);
                            this.loading = false;
                            this.func = false;
                        });
                  
                } else{ 
                    this.loading = false;
                    this.func = false;
                }
              });
        },
        killPoll(id){
            this.loading = true;
            this.func = true;
            swal({
                title: "Are you sure?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
              })
              .then((willDelete) => {
                if (willDelete) {
                    let url = '/kill/poll/'+ id;
                    axios.get(url)
                        .then((response) => {
                            console.log(response);
                            this.getPolls();
                            swal("Poof! the Poll has been de-activated!", {
                                icon: "success",
                              });
                              this.loading = false;
                              this.func = false;
                        })
                        .catch((error) => {
                            console.log(error);
                            this.loading = false;
                            this.func = false;
                        });
                  
                } else{ 
                    this.loading = false;
                    this.func = false;
                }
              });
        },
        getComment(id){
            this.loading = true;
            this.func = true;
            let url = '/get/comments/poll/' + id;

            axios.get(url)
                .then((response) => {
                    console.log(response);
                    this.comments = response.data.comments;
                    $('#comments').modal('show');
                    this.loading = false;
                    this.func = false;
                })
                .catch((error) => {
                    console.log(error);
                    this.loading = false;
                    this.func = false;
                });
        }
    },
});