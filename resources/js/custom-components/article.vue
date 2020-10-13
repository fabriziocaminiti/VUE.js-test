<template>
    <div class="container">
            <div class="card col-12 mb-4 ml-3 mr-3">
                <div class="card-body">
                    <img :src="img" :alt="data.title" class="img-fluid">
                    <h1>{{data.title}}</h1>
                    <h3>{{data.contenuto}}</h3>
                    <button @click="message" class="btn btn-success">clicca qui</button>
                </div>
            </div>
        </div>
</template>

<script>

export default {
    props:['id','data','img'],

    methods: {
        message(){
            this.$emit('messaggio',this.id);
        }
    }
    
    
}
</script>

<style scoped>

</style>