var Compte = Vue.component('Compte',{
    template:`
        <div id="account">
            <h1>Paramètre du compte</h1>
            <section id="particular">
                <div id="account_choice">
                        <img src="./dist/img/profil.jpg" id="account_link" class="active"/>
                        <img src="./dist/img/profil.jpg" id="profil1_link"/>
                        <img src="./dist/img/profil.jpg" id="profil2_link"/>
                </div>
            
                <section id="account_settings">
                    <form action="">
                        <label for="">Nom : </label>
                        <input type="text" value="nom">
                        <label for="">Prénom : </label>
                        <input type="text" value="prenom">
                        <label for="">Mail : </label>
                        <input type="text" value="email@email.com">
                        <label for="">Mot de passe : </label>
                        <input type="text" value="**********">
                        <input type="submit" value="Modifier" class="secondary_btn">
                    </form>
                </section>

                <section id="profil1_settings" class="hidden">
                    <form action="">    
                        <img src="./dist/img/profil.jpg" alt="image profil">
                        <label for="">Nom : </label>
                        <input type="text" value="nom">
                        <label for="">Prénom : </label>
                        <input type="text" value="prenom">
                        <label for="">Âge : </label>
                        <input type="text" value="X ans">
                        <label for="">Jeu préféré : </label>
                        <input type="text" value="nom jeu">
                        <label for="">Centres d'intérêts : </label>
                        <input type="text" value="cheval, foot">
                        <label for="badge">Badge :</label>
                        <div class="custom-select">
                            <select name="badge">
                                <option value="nom">Nom</option>
                                <option value="nom">Nom</option>
                                <option value="nom">Nom2</option>
                                <option value="nom">Nom3</option>
                                <option value="nom">Nom4</option>
                                <option value="nom">Nom5</option>
                                <option value="nom">Nom6</option>
                                <option value="nom">Nom7</option>
                                <option value="nom">Nom8</option>
                                <option value="nom">Nom9</option>
                            </select>
                        </div>
                        <input type="submit" value="Modifier" class="secondary_btn">
                    </form>
                </section>

            </section>

        </div>
    `,
    data(){
        return{
            listeComptes:[]
        }
    },
    mounted(){
        axios.get('http://localhost/AbsoLudo/php/process/listeComptes.php')
            .then(response => {
                this.listeComptes = response.data;
                console.log(this.listeComptes);
                return;
            })
            .catch(error => {
                console.log(error);
            })
    },
    methods:{

    }
})