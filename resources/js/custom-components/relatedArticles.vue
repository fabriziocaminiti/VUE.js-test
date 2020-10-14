<template>
    <div class="card">
        <div class="card-body">
            <h1>Articoli vari</h1>

            <ul>
                   <li v-for="(item, i) in array" :key="i">id : {{item}}</li>
            </ul>

        </div>
    </div>
</template>

<script>
import { eventBus } from './../app2'
export default {
    data(){
        return{
            array:[]
        }
    },
    created(){
        eventBus.$on('custom-event',(id)=>{console.log('related-articles',id);
        this.array.push(id);
        })
        
    }
}
</script>

<style>

</style>