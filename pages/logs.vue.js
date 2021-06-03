var Logs = Vue.component('Logs',{
    template:`
    <div id="logs">
        <h1>Bienvenue sur <img src="./dist/img/svg/logo_absoludo_grand.svg" alt="AbsoLudo"></h1>
        <form action="" id="form-signin" class="form">
            <h2 v-if="mode == 'login'">Connectez-vous</h2>
            <h2 v-else>Inscrivez-vous</h2>

            <div v-if="mode =='parti'">
                <input v-model="nom" type="text" placeholder="Nom">
                <input v-model="prenom" type="text" placeholder="Prénom">
            </div>

            <div v-if="mode =='pro'">
                <input v-model="societe" type="text" placeholder="Nom société">
                <input v-model="siret" type="text" placeholder="N° Siret">
            </div>

            <input v-model="email" type="text" placeholder="Email">
            <input v-model="mdp" type="text" placeholder="Mot de passe">

            <div v-if="mode !== 'login'" class="checkbox">
                <label for="cg">J'accepte les <a href=''>conditions générales d'utilisation</a></label>
                <input type="checkbox" id="cg">
            </div>


            <input v-if="mode =='login'" type="submit" class="form-btn primary_btn" value="Se connecter">
            <input @click="createAccount()" v-else type="submit" class="form-btn primary_btn" value="S'inscrire">

            <p v-if="mode =='login'">Pas encore de compte ? <a @click="switchToParti()">Inscrivez-vous</a></p>
            <p v-else>Déjà un compte ? <a @click="switchToLogin()">Connectez-vous</a></p>
            <p v-if="mode =='parti'">Vous êtes un professionnel ? <a @click="switchToPro()">Inscrivez-vous ici</a></p>
            <p v-if="mode =='pro'">Vous êtes un particulier ? <a @click="switchToParti()">Inscrivez-vous ici</a></p>

        </form>
    </div>
    `,
    data(){
        return{
            mode: 'login',
            email: '',
            mdp: '',
            nom: '',
            prenom: '',
            siret: '',
            societe: '',

        }
    },
    mounted(){

    },
    methods:{
        switchToLogin: function(){
            this.mode = 'login';
        },
        switchToPro: function(){
            this.mode = 'pro';
        },
        switchToParti: function(){
            this.mode = 'parti';
        },
    }
})