new Vue({
    el:'#app',
    data: {
        poll_title: '',
        poll_id: '',
        option:'',
        options: [],
        pollTitle: true,
        polltitlemodel: false,
        done: false
    },
    mounted() {
        $('#addoptions').on('hidden.bs.modal', (event)=> {
            // this.poll_title = '';
            this.pollTitle = false;
            this.polltitlemodel = true;
            this.poll_id = '';
            this.option = '';
            this.done = true;
            toastr.success('Add A New Poll');

            
          });
         
    },
    methods: {
        addPoll(){
            if(this.poll_title === ''){
                toastr.error('field is empty');
            }else{
                let url = '/save/new/poll';
                axios.post(url,{
                    poll: this.poll_title
                })
                .then((response) => {
                    console.log(response);
                    toastr.success(response.data.success);
                    this.poll_id = response.data.poll_id;
                    $('#addoptions').modal('show');
                })
                .catch((error) => {
                    console.log(error);
                    toastr.error('something went wrong');
                });  
             }
        },
        addOptions(){
            if(this.option === ''){
                toastr.error('some fields are empty');
            }else{ 
                let url = '/save/option/'+ this.poll_id;
                axios.post(url,{
                    option: this.option
                }) 
                .then((response) => {
                    console.log(response);
                    this.options = response.data.options;
                    toastr.success(response.data.success);
                    this.option = '';
                    toastr.info('add another option');
                })
                .catch((error) => {
                    console.log(error);
                    toastr.error('something went wrong');
                });
            }

        },
        deleteOption(id){
            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this option!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
              })
              .then((willDelete) => {
                if (willDelete) {
                    let url = '/delete/option/'+ id;
                    axios.get(url)
                        .then((response)=> {
                            console.log(response);
                            toastr.success(response.data.success);
                            swal("Poof! Option has been deleted!", {
                                icon: "success",
                              });
                            $('#'+id).remove();
                            if(this.options.length < 1){
                                this.done = false;
                                // alert('hello world');
                            }
                        })
                        .catch((error) => {
                            console.log(error);
                            toastr.error('something went wrong');
                        });
                 
                }
              });
        },
        refresh(){
            this.poll_title = '';
            this.poll_id = '';
            this.option ='';
            this.options = [];
            this.pollTitle = true;
            this.polltitlemodel = false;
            this.done = false;
        }
    },
});