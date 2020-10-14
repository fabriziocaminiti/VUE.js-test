require('./bootstrap');

import Vue from 'vue';
import { template, reduce } from 'lodash';

import VueRouter from 'vue-router'
Vue.use(VueRouter);


import { routes } from './routes'

const router = new VueRouter({
     routes,
     mode : 'history',
});


Vue.component('app-vue',require('./custom-components/app.vue').default);
Vue.component('button-counter',{
    data(){
        return{
            counter: 0
        }
    },
    template :`
    <button @click="counter++" class="btn btn-success"> Clicca({{counter}})</button>
    `

});

export const eventBus = new Vue();

const app = new Vue ({
    router,
    el: '#app',
    created(){
        console.log('created');
    },
    data(){
        return{
            title:'Progetto in Vue',
            description: 'vue utilizza javascript',
            show:true,
            isDisabled:true,
            selectedClass:'text-danger',
            colorClass:'text-danger',
            vueClass:'float-left',
            x:'',
            y:'',
            name:'name',
            isPrimary:true,
            isCenter:true,
            isSuccess:false,
            isRight:true,
            alignText : 'float-left',
            color: 'blue',
            styleTagP: {
                color : 'blue',
                'background-color': 'red'
            },
            name:'Fabrizio',
            surname:'Caminiti',
            titles: ['Fabrizio','Giuseppe','Marzia'],
            id: 0,
            articles:[
                {id:1, title:'Lukaku', contenuto: 'bomber inter',img:'https://staticfanpage.akamaized.net/wp-content/uploads/sites/27/2020/08/lukaku1-638x425.jpg'},
                {id:2, title:'Dzeko', contenuto: 'attaccante roma',img:'https://images2.gazzettaobjects.it/methode_image/2020/10/09/Calcio/Foto_Calcio_-_Trattate/1278307249-kEVD--1081x611@Gazzetta-Web_375x281.jpg?v=202010100938'},
                {id:3, title:'Dybala', contenuto: 'ottimo trequartista',img:'https://content.fantacalcio.it/web/img/large/CALCIOMERCATO-JUVENTUS-DYBALA-2c1d54bd-f84f-4caa-9986-f85050234b7f.jpg'},
                {id:4, title:'Callejon', contenuto: 'colpo fiorentina',img:'https://wips.plug.it/cips/sport.virgilio.it/cms/2020/07/callejon_1hq18y5ahrk51q1g86x5f335s.jpg?w=820&a=r'},
                {id:5, title:'Vidal', contenuto: 'centrocampista tuttofare',img:'https://tmw-storage.tccstatic.com/storage/tuttomercatoweb.com/img_notizie/thumb3/46801c2077daed40f4050323a7dac599-23055-95723157c8ebcac4750156d2b21ac04e.jpeg'},
                {id:6, title:'jankto', contenuto: 'fresccia samp',img:'https://www.bergamonews.it/photogallery_new/images/2018/06/jankto-615003.jpg'}
            ],
            obj:{
                name:'Fabrizio',
                surname:'Caminiti',
                job: 'Web developer',
            }
            
        }
    },
    computed:{
        fullName(){
            return this.name + ' ' + this.surname;
        },
    },  
    watch:{
                id(newData,oldData){
                    if(this.id > 2){
                        this.id = 0
                    }
                },
    description(){
                    console.log
                }
            },            
     methods: {
        toUppercase(string){
            return string.toUpperCase();
        },
        toLowercase(string){
            return string.toLowerCase();
        },
        titletoUppercase(string){
            return this.title.toUpperCase();
        },
        template(){
          return `
          <p>${this.title}</p>
          `
        },
        updatecoord(event){
            this.x = event.clientX;
            this.y = event.clientY;
        }

    }
});

const app2 = new Vue({
    el : '#app2',
    data(){
        return{
            blog : 'Vuejs è un blog'
        }
    },
    methods : {
        dataApp(){
            this.blog= app.$data.title;
        }
    }
  });