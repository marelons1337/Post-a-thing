<template>                   
    <div class="post-container">
        <div class="single-post" v-for="comment in comments">    
            <h3 class="comment-header"><a :href="'/' + comment.id">{{ comment.username}} {{ changeTimeToLocale(comment.created_at) }}</a> </h3>
            <p class="small">Urgency: {{ comment.urgency }}</p>
            <p class="comment-content"> {{ comment.comment }} </p>
            <p class="small">Contact me via  <span v-for="contact in comment.contact_methods" class="contact-method-single"> {{ contact }}</span></p> 
        </div>
    </div>
</template>

<script>
    export default {
        data() { 
            return {
                comments: []
            }
        },

        mounted() {
            axios.get('/api/comments')
            .then(response => this.comments = response.data.data)
            .catch (function (error) {
                console.log(error);
            })
        },
        methods: {
            changeTimeToLocale(date) {
                console.log(date);
                let newDate = new Date(date);
                let computedDate = newDate.toLocaleDateString('pl-PL')
                let computedTime = newDate.toLocaleTimeString('pl-PL')
                date = computedDate + ' ' + computedTime
                return date;
            }
        }
    }
</script>
