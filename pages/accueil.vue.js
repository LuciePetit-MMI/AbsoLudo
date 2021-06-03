var Accueil = Vue.component('Accueil',{
    template:`
    <div id="home">
        <div class="grid user">
            <router-link :to="{name:'Ludotheque'}" class="user_library grid_item"><h1>Ma Ludothèque</h1></router-link>
            <router-link :to="{name:'Selection'}" class="user_selection grid_item">Sélection du mois</router-link>
            <router-link :to="{name:'TopUser'}" class="user_top grid_item">Top jeux</router-link>
            <router-link :to="{name:'Wishlist'}" class="user_wishlist grid_item">Wishlist</router-link>
            <router-link :to="{name:'Calendrier'}" class="user_calendar grid_item">Agenda</router-link>
            <router-link :to="{name:'Carte'}" class="user_map grid_item">Carte</router-link>
            <router-link :to="{name:'Forum'}" class="user_forum grid_item">Forum</router-link>
        </div>

        <!-- <div class="grid2 pro">
            <router-link :to="{name:''}" class="pro_event grid_item"><h2>Créer un évènement</h2></router-link>
            <router-link :to="{name:'Top'}" class="pro_top grid_item">Top jeux</router-link>
            <router-link :to="{name:'Calendrier'}" class="pro_calendar grid_item">Agenda</router-link>
            <router-link :to="{name:'Carte'}" class="pro_map grid_item">Carte</router-link>
            <router-link :to="{name:'Forum'}" class="pro_forum grid_item">Forum</router-link>
        </div> -->
    </div>
    `,
    data(){
        return{

        }
    },
    mounted(){

    },
    methods:{

    }
})