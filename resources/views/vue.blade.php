@extends('app-vue')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h1 > @{{titletoUppercase()}}</h1>
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
                    <div v-on:mousemove = "updatecoord" style="background-color:red; width:500px; height: 300px;">
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

    </div>
</div>

@endsection