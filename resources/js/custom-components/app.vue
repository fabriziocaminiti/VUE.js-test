<template>  
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>{{title}}</h1>
            </div>
            <div class="col-12">
                <ul>
                   <li v-for="(item, i) in array" :key="i">{{item}}</li>
                </ul>
            </div>

             <div v-for="article in articles" 
               :key="article.id" class="col-12 col-md-4">
               <article-vue 
               @messaggio="messageRecived"
               :id="article.id"
               :data="article" 
               :img="article.img"></article-vue>
             </div>
        </div>
    </div>
</template>

<script>
import article from './article'
export default {
    data(){
        return{
        title : 'Articoli serie A',
        articles:[
                {id:1, title:'Lukaku', contenuto: 'bomber inter',img:'https://staticfanpage.akamaized.net/wp-content/uploads/sites/27/2020/08/lukaku1-638x425.jpg'},
                {id:2, title:'Dzeko', contenuto: 'attaccante roma',img:'https://images2.gazzettaobjects.it/methode_image/2020/10/09/Calcio/Foto_Calcio_-_Trattate/1278307249-kEVD--1081x611@Gazzetta-Web_375x281.jpg?v=202010100938'},
                {id:3, title:'Dybala', contenuto: 'ottimo trequartista',img:'https://content.fantacalcio.it/web/img/large/CALCIOMERCATO-JUVENTUS-DYBALA-2c1d54bd-f84f-4caa-9986-f85050234b7f.jpg'},
                {id:4, title:'Callejon', contenuto: 'colpo fiorentina',img:'https://wips.plug.it/cips/sport.virgilio.it/cms/2020/07/callejon_1hq18y5ahrk51q1g86x5f335s.jpg?w=820&a=r'},
                {id:5, title:'Vidal', contenuto: 'centrocampista tuttofare',img:'https://tmw-storage.tccstatic.com/storage/tuttomercatoweb.com/img_notizie/thumb3/46801c2077daed40f4050323a7dac599-23055-95723157c8ebcac4750156d2b21ac04e.jpeg'},
                {id:6, title:'jankto', contenuto: 'fresccia samp',img:'https://www.bergamonews.it/photogallery_new/images/2018/06/jankto-615003.jpg'}
            ],
            array:[]
    }
  },
  components:{
        'article-vue': article
    },
  methods:{
      messageRecived(id){
             this.array.push(id)
              
      }

  },
  computed:{

  },
  
  created(){

  }
}
</script>

<style scoped>

</style>