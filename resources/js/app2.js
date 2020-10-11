require('./bootstrap');

import Vue from 'vue';

const app = new Vue ({
    el: '#app',
    data(){
        return{
            title:'Progetto in Vue',
            description: 'vue utilizza javascript',
            show:true
        }
    }, methods: {
        toUppercase(string){
            return string.toUpperCase();
        },
        toLowercase(string){
            return string.toLowerCase();
        },
        titletoUppercase(string){
            return this.title.toUpperCase();
        }

    }
});