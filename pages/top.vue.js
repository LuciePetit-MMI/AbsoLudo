var Top = Vue.component('Top',{
    template:`
    <div id="topj">
        <h1>
            <div id="user_title" class="active top_btn">Top Utilisateurs</div>
            <div id="absoludo_title" class="top_btn">Top AbsoLudo</div>
        </h1>
        
        <section id="user_top" class="show">
            <div class="game">
                <div v-for="jeu in listeJeux.slice(0,10)">
                    <section class="game_elements">
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
                                    <p class="game_items_note_mark">bla <i class="icon-de"></i></p>
                                    <p class="game_items_note_notice">{{jeu.lesCommentaires.length}} avis</p>
                                </div>
                            </div>
                        </div> 
                    </section>
                    <section class="game_charac">
                        <div class="game_cross"></div>
                        <div class="game_charac_img"></div>
                        <div class="game_charac_items">
                            <h2 class="game_items_title">{{jeu.name}}</h2>
                            <div class="line">
                                <p class="game_charac_items_players"><i class="fas fa-users"></i>{{jeu.player}}</p>
                                <p class="game_charac_items_age"><i class="fas fa-birthday-cake"></i>{{jeu.age}}</p>
                                <p class="game_charac_items_time"><i class="fas fa-hourglass-half"></i>{{jeu.playTime}}</p>
                            </div>
                            <p class="game_charac_items_category">{{jeu.category}}</p>
                        </div>
                        <div class="game_charac_items_note">
                            <p class="game_charac_items_note_mark">4,8<i class="icon-de"></i></p>
                            <p class="game_charac_items_note_notice">{{jeu.lesCommentaires.length}} avis</p>
                        </div>
                        <section class="game_interact">
                            <div class="game_interact_ludo">
                                <button class="game_interact_ludo_have secondary_btn"><i class="fas fa-chess-king"></i> Je l'ai</button>
                                <button class="game_interact_ludo_played secondary_btn"><i class="fas fa-check"></i> J'y ai joué</button>
                                <button class="game_interact_ludo_want secondary_btn"><i class="far fa-heart"></i>{{jeu.lesCommentaires.length}} Je veux</button>
                            </div>
                            <div class="game_interact_notice">
                                <p class="game_interact_notice_mark">Noter : <i class="icon-de-outline"></i><i class="icon-de-outline"></i><i class="icon-de-outline"></i><i class="icon-de-outline"></i><i class="icon-de-outline"></i></p>
                                <button class="game_interact_notice_notice secondary_btn"><i class="fas fa-user-edit"></i> Avis</button>
                            </div>
                            <button class="game_interact_want primary_btn"><i class="far fa-heart fa-2x"></i> Ajouter à ma Wishlist</button>
                        </section>
                        <h2 class="game_affiliation_title">Achetez-le chez eux !</h2>
                        <section class="game_affiliation">
                            <a :href="jeu.fnac" class="game_affiliation_fnac"><img src="./dist/img/fnac.png" alt=""></a>
                            <a :href="jeu.cultura" class="game_affiliation_cultura"><img src="./dist/img/cultura.png" alt=""></a>
                        </section>
                        <h3 class="game_notice_title">Les avis des joueurs</h3>
                        <section class="game_notice">
                            <div>
                                <div class="game_notice_items">
                                    <img src="./dist/img/profil.jpg" alt="" class="game_notice_img">
                                    <div class="game_notice_text">
                                        <h4 class="game_notice_name">{{jeu.lesCommentaires.pseudo}}</h4>
                                        <p class="game_notice_badge">{{jeu.lesCommentaires.badge}}</p>
                                        <p class="game_notice_text">{{jeu.lesCommentaires.message}}</p>
                                    </div>
                                </div>
                            </div>
                        </section>  
                    </section>
                </div>
            </div>    
        </section>

        <section id="absoludo_top" class="hidden">      
            <div class="game">
                <section class="game_elements">
                    <img src="./dist/img/profil.jpg" alt="" class="game_img">
                    <div class="game_items">
                        <h2 class="game_items_title"><?= $jeu->name;?></h2>
                        <div class="wrap">  
                            <div class="game_items_info">
                                <p class="game_items_info_players"><i class="fas fa-users"></i><?= $jeu->player;?></p>
                                <p class="game_items_info_age"><i class="fas fa-birthday-cake"></i><?= $jeu->age;?></p>
                                <p class="game_items_info_time"><i class="fas fa-hourglass-half"></i><?= $jeu->playTime;?></p>
                            </div>
                            <div class="game_items_note">
                                <p class="game_items_note_mark">4,8<i class="icon-de"></i></p>
                                <p class="game_items_note_notice">12 avis</p>
                            </div>
                        </div>
                    </div> 
                </section>
                <section class="game_charac">
                    <div class="game_cross"></div>
                    <div class="game_charac_img"></div>
                    <div class="game_charac_items">
                        <h2 class="game_items_title"><?= $jeu->name;?></h2>
                        <div class="line">
                            <p class="game_charac_items_players"><i class="fas fa-users"></i><?= $jeu->player;?></p>
                            <p class="game_charac_items_age"><i class="fas fa-birthday-cake"></i><?= $jeu->age;?></p>
                            <p class="game_charac_items_time"><i class="fas fa-hourglass-half"></i><?= $jeu->playTime;?></p>
                        </div>
                        <p class="game_charac_items_category"><?= $jeu->category;?></p>
                    </div>
                    <div class="game_charac_items_note">
                        <p class="game_charac_items_note_mark">4,8<i class="icon-de"></i></p>
                        <p class="game_charac_items_note_notice">12 avis</p>
                    </div>
                    <section class="game_interact">
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
                    </section>
                    <h2 class="game_affiliation_title">Achetez-le chez eux !</h2>
                    <section class="game_affiliation">
                        <a href="<?= $jeu->fnac;?>" class="game_affiliation_fnac"><img src="./dist/img/fnac.png" alt=""></a>
                        <a href="<?= $jeu->cultura;?>" class="game_affiliation_cultura"><img src="./dist/img/cultura.png" alt=""></a>
                    </section>
                    <h3 class="game_notice_title">Les avis des joueurs</h3>
                    <section class="game_notice">
                        <div class="game_notice_items">
                            <img src="./dist/img/profil.jpg" alt="" class="game_notice_img">
                            <div class="game_notice_text">
                                <h4 class="game_notice_name">Nom Prénom</h4>
                                <p class="game_notice_badge">Nom badge</p>
                                <p class="game_notice_text">ceci est un avis</p>
                            </div>
                        </div>
                        <div class="game_notice_items">
                            <img src="./dist/img/profil.jpg" alt="" class="game_notice_img">
                            <div class="game_notice_text">
                                <h4 class="game_notice_name">Nom2 Prénom3</h4>
                                <p class="game_notice_badge">Autre badge</p>
                                <p class="game_notice_text">ceci est un autre avis</p>
                            </div>
                        </div>
                    </section>  
                </section>
            </div>
        </section>
    </div>
    `,
    data(){
        return{
            listeJeux:[],
            listeCommentaires:[],
            listeNotes:[],
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
        this.noteAverage;
    },
    computed:{
        noteAverage(){
            this.listeJeux.forEach(jeu => {

                var commentaire = jeu.lesCommentaires;
                this.listeCommentaires.push(commentaire);  
            });

            this.listeCommentaires.forEach(commentaire => {
                
                var note = commentaire.note;
                this.listeNotes.push(note);  
            });

            var sum = this.listeNotes.reduce((sum, note) => sum + note, 0);
            var average = sum / this.listeNotes.length;
            console.log(average);
        }
    },
    methods:{
       
    }
})