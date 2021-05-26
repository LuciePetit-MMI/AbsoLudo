var Ludotheque_connait = Vue.component('Ludotheque_connait',{
    template:`
    <div id="library">
        <div class="titles">
        <h2 id="have_title"><router-link :to="{name: 'Ludotheque'}">Je l'ai</router-link></h2>
        <h2 id="played_title"><router-link :to="{name: 'Ludotheque_connait'}" class="active">J'y ai joué</router-link></h2>
        <h2 id="want_title"><router-link :to="{name: 'Wishlist'}">Je le veux</router-link></h2>
    </div>

        <div v-for="jeu in listeJeux" :key="jeu.id">
            <div v-for="interaction in jeu.lesInteractions">

                <section id="played_section">
                    <div v-if="interaction.connait == true">
                        <div class="ludo_game">
                            <img v-if="jeu.image" :src="jeu.image" :alt="jeu.name" class="ludo_game_img">
                            <div class="ludo_game_text">
                                <h3 class="ludo_game_title" v-if="jeu.name">{{jeu.name}}</h3>
                                <div class="ludo_game_btns">
                                    <button class="ludo_game_have secondary_btn have_section hidden"><i class="fas fa-chess-king"></i> Je l'ai</button>
                                    <button class="ludo_game_played secondary_btn played_section"><i class="fas fa-check"></i> J'y ai joué</button>
                                    <button class="ludo_game_want secondary_btn want_section"><i class="far fa-heart"></i> Je le veux</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
             
            </div>
        </div>
    </div>
    `,
    data(){
        return{
            listeJeux:[],
        }
    },
    mounted(){
        axios.get('http://localhost/AbsoLudo/php/process/listeJeux.php')
        .then(response => {
            this.listeJeux = response.data;
           //console.log(this.listeJeux);
            return;
        })
        .catch(error => {
            console.log(error);
        });
    },
    methods:{
       
    }
})