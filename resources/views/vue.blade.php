@extends('app-vue')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h1 > @{{titletoUppercase()}}</h1>
            <h2>@{{fullName}}</h2>
            <h3 >@{{toLowercase(description)}}</h3>
        </div>

  
        
   
        <div class="col-12 text-center" v-html="template()">
        </div>    

        <div @mouseover="isDisabled=true" class="col-12 text-center">
            <p :class="selectedClass">Javascript</p>
            <h3 :class="vueClass">Vue</h3>
            <button @click.prevent="show=!show"
            :diasbled="isDisabled" 
            class="btn btn-success">click
            </button>
            <input class="form-control" @keyup="title=$event.target.value" type="text">
            <p>@{{title}}</p>
        </div>

            <div class="col-12"v-if="show" >
                    <p>Coordinate : @{{ x }}/@{{ y }} </p>
                <div v-on:mousemove = "updatecoord" style="background-color:blue; width:500px; height: 300px;">
                    <p v-on:mouseove.stop="" style="position: relative; width:200px; height: 100px;top: 100px; left: 200px; background-color: black; color: white;">RIQUADRO</p>
                </div>
                
            </div>

                            <h2 class="center" v-else>Magia</h2>
        <div class="row mt-5 ml-5">
        <div class="col-12">
            <input class="mb-2" type="text" :value="name" @input="name=$event.target.value">
            <input class="form-control" type="text" v-model="name">
            <p>@{{name}}</p>
        </div>
      </div>
                <div class="col-12">
                    <p :class="{'text-center' : isCenter, 'text-right' : isRight ,'text-success': isSuccess}"> Classe dinamica</p>
                    <button @click="isCenter= !isCenter" class="btn btn-success"> metti al centro e sposta</button>
                    <button @click="isSuccess= !isSuccess" class="btn btn-success" selectedClass='text-primary'> Cambia colore</button>
                    <button @click="isRight= !isRight" class="btn btn-success" alignText='text-left'> Cambia direzione</button>
                </div>

                <div class="col-12 my-5 mx-5 mt-5 mb-5">
                    <p :style="{color: color}">Stile della sintassi</p>
                    <div class="row col-6"><p :style="[styleTagP]">Stile colore dinamico</p></div>
                    
                    <button @click="color='orange'" class="btn btn-primary">cambia colore</button>
                </div>
                <div class="col-12">
                    <h2>@{{fullName}}</h2>
                    <button @click="id++" class="btn btn-danger">Cambia persona</button>
                    <p>Persona: @{{titles[id]}}</p>

                    <div class="row col-12 my-5 mx-5 mt-5">
                    <button @click="title='Work in progress'" class="btn btn-success">Cambio titolo</button>
                    </div>
                </div>
                <div class="col-12">
                    <ul>
                        <li v-for="(article, index) in articles" :key="index">n°@{{article.id}} @{{article.title}} @{{article.description}}</li>
                    </ul>
                    <ul>
                        <p>Dati:</p>
                        <li v-for="(value, key) in obj" :key ="key"> @{{key}}: @{{value}}</li>
                    </ul>
                </div>
                <div v-for="(article, index) in articles" class="col-4">
                    <div class="card mb-4 py-15 px-15">
                        <div class="card-body">
                         <img class="img-fluid" :src="article.img" alt="">
                         <p>id : @{{article.id}}</p>
                         <p>title : @{{article.title}}</p>
                         <p>contenuto : @{{article.contenuto}}</p>
                        </div>
                    </div>
                </div>
                <div class="container my-5">
                    <div class="row">
                        <div class="col-12">
                            <button-counter></button-counter>
                            <button-counter></button-counter>
                            <button-counter></button-counter>
                            <button-counter></button-counter>
                            <button-counter></button-counter>
                            <h2>-- FINE PAGINA PHP.BLADE--</h2>
                            <h2>-- INIZIO VUE.JS--</h2>

                        </div>
                    </div>
                </div>
            <app-vue></app-vue>
    </div>
</div>

@endsection