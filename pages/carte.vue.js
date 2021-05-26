var Carte = Vue.component('Carte',{
    template:`
    <div id="map">
        <h1>Trouvez ce que vous cherchez !</h1>
        <form action="">
            <input type="checkbox" id="shop" name="scales" checked>
            <label for="shop"><i class="fas fa-map-marker shop"></i>Boutiques spécialisées</label>
            <input type="checkbox" id="bar" name="scales" checked>
            <label for="bar"><i class="fas fa-map-marker bar"></i>Bars à jeux</label>
            <input type="checkbox" id="asso" name="scales" checked>
            <label for="asso"><i class="fas fa-map-marker association"></i>Associations</label>
        </form>

        <div class="container">
            <div id="map-container">
                <div id="map-canvas"></div>
            </div>
        </div>
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