<template>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="card">
                <div class="card-body">
                  <p>Utente: {{$route.params.id}}</p>
                  <p>Name: {{user.name}}</p>
                  <p>Email: {{user.email}}</p>
                  <p>Creato il: (id:{{user.created_at}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data(){
        return{
            user :{}
        }
    },
    created(){
        console.log(this.$route)
        axios.get('/api/user/' + this.$route.params.id).then((response) => {
             this.user=response.data;
             console.log(response.data);
        });
    }
    
}
</script>

<style>

</style>