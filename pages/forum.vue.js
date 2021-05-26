var Forum = Vue.component('Forum',{
    template:`
       <div id="forum">
            <h1>Forum d'entraide</h1>
            <section class="listTopic">
                <div v-for="topic in listeTopics" :key="topic.id">
                    <div class="topic">
                        <i class="topic_icon fas fa-scroll fa-2x"></i>
                        <div class="topic_text">
                            <router-link :to="{name:'Topic'}"><h2 class="topic_title">{{topic.title}}</h2></router-link>
                            <p class="topic_name">par {{topic.leProfilCree[0].pseudo}}</p>
                            <p class="topic_date">{{topic.datetime | dateHeure}}</p>
                        </div>
                    </div>
                </div>
            </section>
       </div>
    `,
    data(){
        return{
            listeTopics:[]
        }
    },
    filters:{
        dateHeure:function(value){
            return moment(value).format("DD/MM/YYYY HH:mm");
        }
    },
    mounted(){
        axios.get('http://localhost/AbsoLudo/php/process/listeTopics.php')
            .then(response => {
                this.listeTopics = response.data;
                console.log(this.listeTopics);
            })
            .catch(error => {
                console.log(error);
            })
    },
    methods:{

    }
})
