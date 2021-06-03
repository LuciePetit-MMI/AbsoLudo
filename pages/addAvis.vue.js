var AddAvis = Vue.component('AddAvis',{
    template:`
    <div id="Avis" style="margin-top:90px">
        <form>
        <input v-model="avis.idProfil" type="hidden" value="1">
        <div>
            <label>Votre note :</label>
            <select v-model="avis.note">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <input v-model="avis.avis" type="message" placeholder="Votre avis">
        <input type="submit" class="secondary_btn">
        </form>
    </div>
    `,
    data(){
        return{
            avis:{
                idJeu: 0,
                idProfil: 0,
                note: 0,
                avis: null,
            }
        }
    },
    mounted(){
    },
    computed:{
    },
    methods:{
        submit: function(){
            let params = new FormData();

            params.append('idJeu',          this.avis.idJeu);
            params.append('idProfil',       this.avis.idProfil);
            params.append('note',           this.avis.note);
            params.append('avis',           this.avis.avis);

            axios.post(backEnd.avis, params)
            .then(promise => {
                console.log(promise);
                this.$router.push("/tousJeux");
            })
            .catch(error => console.log(error))
        }
    }
})