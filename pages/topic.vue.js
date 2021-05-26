var Topic = Vue.component('Topic',{
    template:`
       <div>
            <div class="comment" v-for="topic in listeTopics" :key="topic.id">
                <div class="comment_head">
                    <img :src="topic.leProfilCree[0].image" class="comment_head_img" :alt="topic.leProfilCree[0].name">
                    <div class="comment_head_text">
                        <p class="comment_head_name">{{topic.leProfilCree[0].pseudo}}</p>
                        <p class="comment_head_badge">{{topic.leProfilCree[0].badge}}</p>
                        <p class="comment_head_date">{{topic.datetime | dateHeure}}</p>
                    </div>
                    <p class="comment_title">{{topic.title}}</p>
                    <p class="comment_subject">{{topic.message}}</p>
                </div>
                <div class="comment" v-for="reponse in listeReponses" :key="reponse.id">
                    <div v-if="topic.id = reponse.idTop ">
                        <div class="comment_body">
                            <img :src="reponse.image" class="comment_head_img" :alt="reponse.name">
                            <div class="comment_head_text">
                                <p class="comment_head_name">{{reponse.pseudo}}</p>
                                <p class="comment_head_badge">{{reponse.badge}}</p>
                                <p class="comment_head_date">{{reponse.datetime | dateHeure}}</p>
                            </div>
                            <p class="comment_subject">{{reponse.message}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       </div>
    `,
    data(){
        return{
            listeTopics:[],
            listeReponses:[]
        }
    },
    filters:{
        dateHeure:function(value){
            return moment(value).format("DD/MM/YYYY HH:mm");
        }
    },
    mounted(){
        //recuperation des données du topic
        axios.get('http://localhost/AbsoLudo/php/process/listeTopics.php')
            .then(response => {
                this.listeTopics = response.data;
                console.log(this.listeTopics);
            })
            .catch(error => {
                console.log(error);
            }),

            //recupération des données des reponses
            axios.get('http://localhost/AbsoLudo/php/process/listeReponses.php')
            .then(response => {
                this.listeReponses = response.data;
                console.log(this.listeReponses);
                return;
            })
            .catch(error => {
                console.log(error);
            })
    },
    methods:{

    }
})