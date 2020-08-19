<template>
    <div class="likeblock pull-left">
        <a href="#" class="up" @click="hit_like"><i class="fa fa-thumbs-o-up">aaa</i>{{ like_count }}</a>
        <a href="#" class="down" @click="hit_dislike"><i class="fa fa-thumbs-o-down">bbb</i>{{ dislike_count }}</a>
        <p id="text" style="color:red;"></p>
    </div>
</template>

<script>
    export default {
        props: ['ques_id'],
        data () {
        return {
            like_count: '',
            dislike_count: '',
        }
    },

    methods: {
        hit_like() {
            axios.post('/like',{ id: this.ques_id })
                    .then((response) => {
                this.load_all_like();
            })
        },
        load_all_like() {
            axios.get('/like/' + this.ques_id)
                    .then((response) => {
                this.like_count = response.data.question.like;
            })
        },
        hit_dislike() {
            axios.post('/dislike',{ id: this.ques_id })
                    .then((response) => {
                this.load_all_dislike();
            })
        },
        load_all_dislike() {
            axios.get('/dislike/' + this.ques_id)
                    .then((response) => {
                this.dislike_count = response.data.question.dislike;
            })
        },
    },
    mounted(){
        this.load_all_like();
        this.load_all_dislike();
    },
    }
</script>