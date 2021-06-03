var Calendrier = Vue.component('Calendrier',{
    template:`
       <div id="calendar">
            <h1>
                <router-link :to="{name: 'Calendrier'}" id="agenda_title" class="active">Agenda</router-link>
                <router-link :to="{name: 'Evenement'}" id="participated_title">Je Participe</router-link>
        </h1>
            
            <section id="agenda">
                <button id="prev" class="slider_btn"><i class="fas fa-chevron-left"></i></button>
                <button id="next" class="slider_btn"><i class="fas fa-chevron-right"></i></button>
                    <ul class="slider">
                        <li class="slider_slide actif">            
                            <h2 class="slider_month">Janvier</h2 class="slider_month">
                            <ul class="event_list" v-for="evenement in listeEvents" :key="evenement.id">
                                <li class="event_list_item">
                                    <span class="event_list_date"><p>{{evenement.date | date}}</p></span>
                                    <div class="event_list_infos">
                                        <p class="event_list_name">{{evenement.name}}</p>
                                        <p class="event_list_place">{{evenement.address}} par {{evenement.lesProfessionnels[0].name}}</p>
                                        <p class="event_list_time">{{evenement.heure | heure}}</p>
                                    </div>
                                    <div class="event_list_details">
                                        <p class="event_list_type"><span>Type :</span> {{evenement.activity}}</p>
                                        <p class="event_list_adress"><span>Lieu :</span> {{evenement.address}}</p>
                                        <p class="event_list_members"><span>Participants :</span> {{evenement.lesParticipants.length}}</p>
                                        <p class="event_list_price"><span>Tarif :</span> {{evenement.price}} €</p>
                                        <p class="event_list_description"><span>Détails :</span> {{evenement.description}}</p>
                                        <button class="event_list_btn primary_btn">Je participe</button>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
            </section>
       </div>
    `,
    data(){
        return{
            listeEvents:[]
        }
    },
    filters:{
        date:function(value){
            return moment(value).format("DD-MM YYYY");
        },
        heure:function(value){
            return moment(value).format("HH:mm");
        }
    },

    mounted(){
        axios.get(backEnd.events)
            .then(response => {
                this.listeEvents = response.data;
                return;
            })
            .catch(error => {
                console.log(error);
            })
    },
    methods:{

    }
})