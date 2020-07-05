Vue.component('v-select', VueSelect.VueSelect);
new Vue({
    el:'#app',
    data: { 
        polls:[],
        comment_id:'',
        comments: '',
        showComments: true,
        content: false,
        loadingPage: true
    },
    mounted(){
        this.getPollsWithOptions();
    },
    methods: {
        getPollsWithOptions(){
            let url = '/get/polls/with/options';
            axios.get(url)
                .then((response) => {
                    console.log(response);
                    this.polls = response.data.polls;
                    this.content = true;
                    this.loadingPage = false;
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        vote(id){
            let url = '/send/votes/to/database/' + id;

            vex.dialog.confirm({
                message: 'Are you absolutely sure you want to make this vote?',
                callback: (value) => {
                    if(value){
                      axios.get(url)
                        .then((response) => {
                            console.log(response);
                            toastr.info(response.data.message);
                            this.getPollsWithOptions();
                            // this.showComments = true;
                            // $('#addcomment').modal('show');
                        })
                        .catch((error) => {
                            console.log(error);
                        });
                    }
                }
            });
        },
        addComments(id){
            this.comment_id = id;
            $('#addcomment').modal('show');
        },
        saveComments(){
            this.comments = $('#commentstext').val();

            if(this.comments === ''){
                toastr.error('field is empty');
            }else{ 
                let url = '/save/poll/comments/';

            axios.post(url,{
                comments: this.comments,
                poll_id: this.comment_id
            })
            .then((response) => {
                console.log(response);
                toastr.success(response.data.success);
                $('#addcomment').modal('hide');
                this.comments = '';
                $('#commentstext').val('');
            })
            .catch((error) => {
                console.log(error);
                toastr.error('something went wrong');
            });
            }
        }
    },
});