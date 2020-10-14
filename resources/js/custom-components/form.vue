<template>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div>
                <p>Name: {{name}}</p>
                <input class="form-control" v-model="name" type="text">
                <br>
                <p>Descrizione</p>
                <input class="form-control" v-model="description" type="text">
                <br>
                <p>Hobby:</p>
                <input class="form-control" v-model="hobby" type="text">
                <br>
                <div class="col-6">
                <p>Job: {{checkboxValues}}</p>
                <label for="full"> Full stack Dev</label>
                <input type="checkbox" v-model="checkboxValues" id="full" value="full">
                <br>
                <label for="dev"> Frontend Dev</label>
                <input type="checkbox" v-model="checkboxValues" id="dev" value="dev">
                <br>
                <label for="back"> Backend Dev</label>
                <input type="checkbox" v-model="checkboxValues" id="back" value="back">
                </div>

                <div class="col-6 col-md-4">
                        <p>Linguaggi conosciuti: {{select}}</p>
                    <select v-model="select" class="form-control">
                        <option value="html">html</option>
                        <option value="css">css</option>
                        <option value="javascript">javascript</option>
                    </select>
                </div>
                <div class="col-12 my-5">
                <button @click="submit" class="btn btn-primary"> Invio</button>
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
            name: 'scrivi il tuo nome',
            description: 'descriviti',
            hobby: 'hobby',
            checkboxValues: [],
            select: ''
        }
    },
    methods:{
        submit(){
            let data ={
                name : this.name,
            }
            axios.post('/api/rotta-post', data).then(()=>{
                this.$router.push({ path : '/users' });
        });
    }
}
}   
</script>

<style>

</style>