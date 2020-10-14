<template>
<div class="row">
   <div v-for="user in users" :key="user.id" class="col-12 col-md-4">
    <div class="card">
      <div class="card-body">
        <p>Contatto : {{user.id}}</p>
        <p>Nome :{{user.name}} </p>
        <p>Email :{{user.email}}</p>
        <p>Creato il :{{user.created_at}}</p>
      </div>
     </div>
   </div> 
</div>   
</template>
<script>
export default {
    data(){
        return{
            users :[]
        }
    },
    created(){
        axios.get('/api/users').then((response)=>{
           this.users = response.data
           console.log(response);
        });
    }
}
</script>

<style>

</style>