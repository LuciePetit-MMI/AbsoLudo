var Ludotheque = Vue.component('Ludotheque',{
    template:`
    <div id="library">
        <div class="titles">
            <h2 id="have_title"><router-link :to="{name: 'Ludotheque'}" class="active">Je l'ai</router-link></h2>
            <h2 id="played_title"><router-link :to="{name: 'Ludotheque_connait'}">J'y ai joué</router-link></h2>
            <h2 id="want_title"><router-link :to="{name: 'Wishlist'}">Je le veux</router-link></h2>
        </div>

        <div v-for="jeu in listeJeux" :key="jeu.id">
            <div v-for="interaction in jeu.lesInteractions">
                <section id="have_section" class="show">
                    <div v-if="interaction.possede == true">
                        <div class="ludo_game">
                            <img v-if="jeu.image" :src="jeu.image" :alt="jeu.name" class="ludo_game_img">
                            <div class="ludo_game_text">
                                <h3 class="ludo_game_title" v-if="jeu.name">{{jeu.name}} {{jeu.id}}</h3>
                                <div class="ludo_game_btns">
                                    <button name="play" class="ludo_game_played secondary_btn played_section" :class="{active:isActivePlay}" @click="isActivePlay = !isActivePlay; submitPlay()"><i class="fas fa-check"></i> J'y ai joué</button>
                                    <button name="want" class="ludo_game_want secondary_btn want_section" :class="{active:isActiveWant}" @click="isActiveWant = !isActiveWant"><i class="far fa-heart"></i> Je le veux</button>
                                    
                                    <input :value="isActivePlay" type="hidden" name="connait">
                                    <input :value="1" type="hidden" name="possede">
                                    <input :value="isActiveWant" type="hidden" name="souhaite">
                                    <input :value="jeu.id" type="hidden" name="idJeu">
                                    <input :value="1" type="hidden" name="idProfil">
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
            listeInteractions:[],
            isActivePlay: false,
            isActiveWant: false,
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
        submitPlay(){
            var data = this.isActivePlay;
            
            axios.post(backEnd.interactions, data)
            .then(function(response) {
                console.log('saved', response, data)
            });
        }
    }
})