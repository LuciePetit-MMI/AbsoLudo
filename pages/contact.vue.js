var Contact = Vue.component('Contact',{
    template:`
    <div id="contact">
        <h1><span>Un problème ? Une question ?</span> Contactez-nous, on vous aidera !</h1>

        <form action="">
            <input type="text" placeholder="Nom (obligatoire)">
            <input type="text" placeholder="Prénom (obligatoire)">
            <input type="text" placeholder="Mail (obligatoire)">
            <input type="message" placeholder="Message (obligatoire)">
            <input type="submit" class="form-btn secondary_btn" value="Envoyer">
        </form>
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