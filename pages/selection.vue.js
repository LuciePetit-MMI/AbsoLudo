var Selection = Vue.component('Selection',{
    template:`
    <div id="selection">
        <h1>Ces jeux pourraient vous plaire</h1>

        <div class="game">
            <div v-for="jeu in suggestion.slice(0,3)">
                <span class="game_elements">
                    <img :src="jeu.image" :alt="jeu.name" class="game_img">
                    <div class="game_items">
                        <h2 class="game_items_title">{{jeu.name}}</h2>
                        <div class="wrap">  
                            <div class="game_items_info">
                                <p class="game_items_info_players"><i class="fas fa-users"></i>{{jeu.player}}</p>
                                <p class="game_items_info_age"><i class="fas fa-birthday-cake"></i>{{jeu.age}}</p>
                                <p class="game_items_info_time"><i class="fas fa-hourglass-half"></i>{{jeu.playTime}}</p>
                            </div>
                            <div class="game_items_note">
                                <p class="game_items_note_mark">{{jeu.moyenneNote}} <i class="icon-de"></i></p>
                                <p class="game_items_note_notice">{{jeu.lesCommentaires.length}} avis</p>
                            </div>
                        </div>
                    </div> 
                </span>

                <span class="game_charac">

                    <div class="game_cross"></div>
                    <div class="game_charac_img">
                        <img :src="jeu.image" :alt="jeu.name">
                    </div>
                    <div class="game_charac_items">
                        <h2 class="game_items_title">{{jeu.name}}</h2>
                        <div class="line">
                            <p class="game_charac_items_players"><i class="fas fa-users fa-2x"></i>{{jeu.player}}</p>
                            <p class="game_charac_items_age"><i class="fas fa-birthday-cake fa-2x"></i>{{jeu.age}}</p>
                            <p class="game_charac_items_time"><i class="fas fa-hourglass-half fa-2x"></i>{{jeu.playTime}}</p>
                        </div>
                        <p class="game_charac_items_category">{{jeu.category}}</p>
                    </div>


                    <div class="game_charac_items_note">
                        <p class="game_charac_items_note_mark">{{jeu.moyenneNote}}<i class="icon-de"></i></p>
                        <p class="game_charac_items_note_notice">{{jeu.lesCommentaires.length}} avis</p>
                    </div>


                    <span class="game_interact">
                        <div class="game_interact_ludo">
                            <button class="game_interact_ludo_have secondary_btn"><i class="fas fa-chess-king"></i> Je l'ai</button>
                            <button class="game_interact_ludo_played secondary_btn"><i class="fas fa-check"></i> J'y ai joué</button>
                            <button class="game_interact_ludo_want secondary_btn"><i class="far fa-heart"></i> Je veux</button>
                        </div>
                        <div class="game_interact_notice">
                            <p class="game_interact_notice_mark">Noter : <i class="icon-de-outline"></i><i class="icon-de-outline"></i><i class="icon-de-outline"></i><i class="icon-de-outline"></i><i class="icon-de-outline"></i></p>
                            <button class="game_interact_notice_notice secondary_btn"><i class="fas fa-user-edit"></i> Avis</button>
                        </div>
                        <button class="game_interact_want primary_btn"><i class="far fa-heart fa-2x"></i> Ajouter à ma Wishlist</button>
                    </span>


                    <h2 class="game_affiliation_title">Achetez-le chez eux !</h2>
                    <span class="game_affiliation">
                        <a :href="jeu.fnac" class="game_affiliation_fnac"><img src="./dist/img/fnac.png" alt=""></a>
                        <a :href="jeu.cultura" class="game_affiliation_cultura"><img src="./dist/img/cultura.png" alt=""></a>
                    </span>


                    <h3 class="game_notice_title">Les avis des joueurs</h3>
                    <span class="game_notice">
                        <div v-for="commentaire in listeCommentaires">
                            <div v-if="commentaire.idJeux == jeu.id">
                                <div class="game_notice_items">
                                    <img :src="commentaire.avatar" :alt="commentaire.pseudo" class="game_notice_img">
                                    <div class="game_notice_text">
                                        <h4 class="game_notice_name">{{commentaire.pseudo}}</h4>
                                        <p class="game_notice_badge">{{commentaire.badge}}</p>
                                        <p class="game_notice_text">{{commentaire.message}}</p>
                                    </div>
                                </div>                        
                            </div>
                        </div>
                        <div v-if="jeu.hasCom == false" class="game_notice_no_comment">
                            <p>Soyez le premier à donner votre avis sur ce jeux.</p>
                        </div>        
                    </span> 
                </span>
            </div>

            <!-- SearchBar no result message -->
            <div v-if="suggestion.length == []" class="no-result">
                <p><span>Désolé,</span> il n'y a pas assez de jeux dans votre ludothèque..</p>
                <router-link :to="{name: 'TousJeux'}">Ajoutez-en pour recevoir votre première suggestion !</router-link>
            </div>
        </div>
    </div>    
    `,
    data(){
        return{
            listeJeux:[],
            listeCommentaires:[],
            suggestion:[],
        }
    },
    mounted(){
    //requete Jeux
        axios.get(backEnd.jeux)
        .then(response => {
            this.listeJeux = response.data;
            return;
        })
        .catch(error => {
            console.log(error);
        });
    //requete Commentaires
        axios.get(backEnd.commentaires)
        .then(response => {
            this.listeCommentaires = response.data;
            return;
        })
        .catch(error => {
            console.log(error);
        });

        this.comParam;
    },
    computed:{
        //infos relatives aux avis
        comParam(){
            this.listeJeux = this.listeJeux.map((jeu) => {
            //calcul mouyenne des notes de chaque jeu
                jeu.moyenneNote = (jeu.lesCommentaires.reduce((resultat, commentaire) => 
                resultat +  parseInt(commentaire.note), 0) / jeu.lesCommentaires.length || 0).toFixed(1);

            //verifie si un jeu à des commentaires
                jeu.hasCom = false;
            
                this.listeJeux = this.listeCommentaires.map((commentaire) => {
                    if(jeu.id === commentaire.idJeux){
                        jeu.hasCom = true; 
                    }
                })

                return jeu;
            });
        },
        //algorythme de suggestion
        suggest(){
            return suggestion;
        },
         /* Aggrandir un jeu */ 
        showGame(){
        /*Déclaration des variables*/
            var toggles = document.querySelectorAll(".game_elements");
            var crosses = document.querySelectorAll(".game_cross");

            for(let i=0; i<toggles.length; i++){
                let toggle = toggles[i];
                    /* Quand on click sur le toggle */
                toggle.addEventListener("click", function() {
                    
                    for(let j=0; j<toggles.length; j++){
                        toggles[j].style.display = "none";
                        toggle.style.display = "block!important";
                    }

                    
                    /*Affiche les détails du jeu*/
                    var details = toggle.nextElementSibling;
                    details.classList.add("show");
                    

                    /*Cache les détails du jeu*/
                    for(let i=0; i<crosses.length; i++){
                        let cross = crosses[i];
                            cross.addEventListener("click", function() {
                            details.classList.remove("show");

                            for(let j=0; j<toggles.length; j++){
                                toggles[j].style.display = "flex";
                            }
                        });
                    }
                });
            }    
        }

    },
    methods:{
   
    }
})