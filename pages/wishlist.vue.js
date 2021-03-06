var Wishlist = Vue.component('Wishlist',{
    template:`
    <div id="library">
        <div class="titles">
            <h2 id="have_title"><router-link :to="{name: 'Ludotheque'}">Je l'ai</router-link></h2>
            <h2 id="played_title"><router-link :to="{name: 'Ludotheque_connait'}">J'y ai joué</router-link></h2>
            <h2 id="want_title"><router-link :to="{name: 'Wishlist'}" class="active">Je le veux</router-link></h2>
        </div>

        <div v-for="jeu in listeJeux" :key="jeu.id">
            <div v-for="interaction in jeu.lesInteractions">
                             
                <section id="want_section">
                    <div v-if="interaction.souhaite == true">
                        <div class="ludo_game">
                            <img v-if="jeu.image" :src="jeu.image" :alt="jeu.name" class="ludo_game_img">
                            <div class="ludo_game_text">
                                <h3 class="ludo_game_title" v-if="jeu.name">{{jeu.name}}</h3>
                                <div class="ludo_game_btns">
                                    <button class="ludo_game_have secondary_btn have_section" :class="{active:isActiveHave}" @click="isActiveHave = !isActiveHave"><i class="fas fa-chess-king"></i> Je l'ai</button>
                                    <button class="ludo_game_played secondary_btn played_section" :class="{active:isActivePlay}" @click="isActivePlay = !isActivePlay"><i class="fas fa-check"></i> J'y ai joué</button>
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
            isActiveHave: false,
            isActivePlay: false,
        }
    },
    mounted(){
        axios.get(backEnd.jeux)
        .then(response => {
            this.listeJeux = response.data;
           //console.log(this.listeJeux);
            return;
        })
        .catch(error => {
            console.log(error);
        });
        axios.get(backEnd.interactions)
        .then(response => {
            this.isActive = response.data;
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