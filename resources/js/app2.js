require('./bootstrap');

import Vue from 'vue';
import { template, reduce } from 'lodash';

const app = new Vue ({
    el: '#app',
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
            alignText : 'float-left'
            
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