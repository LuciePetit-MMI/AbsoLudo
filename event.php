<!DOCTYPE html>
<html lang="fr">
    <head>    
        <?php require "./html/head.html"; ?>
        <title>Mon Compte | AbsoLudo</title>
    </head>
<body id="calendar">
    <header>
        <?php require "./html/nav.html"; ?>
        <h1>
            <div id="agenda_title" class="active">Agenda</div>
            <div id="participated_title">Je Participe</div>
        </h1>
    </header> 

    <section id="agenda">
        <button id="prev" class="slider_btn"><i class="fas fa-chevron-left"></i></button>
        <button id="next" class="slider_btn"><i class="fas fa-chevron-right"></i></button>
            <ul class="slider">
                <li class="slider_slide actif">            
                    <h2 class="slider_month">Janvier</h2 class="slider_month">
                    <ul class="event_list">
                    <?php require "./html/event.html"; ?>
                    <?php require "./html/event.html"; ?>
                    </ul>
                </li>
                <li class="slider_slide">            
                    <h2 class="slider_month">Fevrier</h2 class="slider_month">
                    <ul class="event_list">
                    <?php require "./html/event.html"; ?>
                    <?php require "./html/event.html"; ?>
                    </ul>
                </li>
                <li class="slider_slide">            
                    <h2 class="slider_month">Mars</h2 class="slider_month">
                    <ul class="event_list">
                    <?php require "./html/event.html"; ?>
                    <?php require "./html/event.html"; ?>
                    </ul>
                </li>
                <li class="slider_slide">            
                    <h2 class="slider_month">Avril</h2 class="slider_month">
                    <ul class="event_list">
                    <?php require "./html/event.html"; ?>
                    <?php require "./html/event.html"; ?>
                    </ul>
                </li>
                <li class="slider_slide">            
                    <h2 class="slider_month">Mai</h2 class="slider_month">
                    <ul class="event_list">
                    <?php require "./html/event.html"; ?>
                    <?php require "./html/event.html"; ?>
                    </ul>
                </li>
                <li class="slider_slide">            
                    <h2 class="slider_month">Juin</h2 class="slider_month">
                    <ul class="event_list">
                    <?php require "./html/event.html"; ?>
                    <?php require "./html/event.html"; ?>
                    </ul>
                </li>
                <li class="slider_slide">            
                    <h2 class="slider_month">Juillet</h2 class="slider_month">
                    <ul class="event_list">
                    <?php require "./html/event.html"; ?>
                    <?php require "./html/event.html"; ?>
                    </ul>
                </li>
                <li class="slider_slide">            
                    <h2 class="slider_month">Août</h2 class="slider_month">
                    <ul class="event_list">
                    <?php require "./html/event.html"; ?>
                    <?php require "./html/event.html"; ?>
                    </ul>
                </li>
                <li class="slider_slide">            
                    <h2 class="slider_month">Septembre</h2 class="slider_month">
                    <ul class="event_list">
                    <?php require "./html/event.html"; ?>
                    <?php require "./html/event.html"; ?>
                    </ul>
                </li>
                <li class="slider_slide">            
                    <h2 class="slider_month">Octobre</h2 class="slider_month">
                    <ul class="event_list">
                    <?php require "./html/event.html"; ?>
                    <?php require "./html/event.html"; ?>
                    </ul>
                </li>
                <li class="slider_slide">            
                    <h2 class="slider_month">Novembre</h2 class="slider_month">
                    <ul class="event_list">
                    <?php require "./html/event.html"; ?>
                    <?php require "./html/event.html"; ?>
                    </ul>
                </li>
                <li class="slider_slide">            
                    <h2 class="slider_month">Décembre</h2 class="slider_month">
                    <ul class="event_list">
                    <?php require "./html/event.html"; ?>
                    <?php require "./html/event.html"; ?>
                    </ul>
                </li>
            </ul>
    </section>

    <section id="participated" class="hidden">
        <button id="prev_participated" class="slider_btn"><i class="fas fa-chevron-left"></i></button>
        <button id="next_participated" class="slider_btn"><i class="fas fa-chevron-right"></i></button>
            <ul class="slider">
                <li class="slider_slide actif_participated">            
                    <h2 class="slider_month">Janvier</h2 class="slider_month">
                    <ul class="event_list">
                    <?php require "./html/event.html"; ?>
                    <?php require "./html/event.html"; ?>
                    </ul>
                </li>
                <li class="slider_slide">            
                    <h2 class="slider_month">Fevrier</h2 class="slider_month">
                    <ul class="event_list">
                    <?php require "./html/event.html"; ?>
                    <?php require "./html/event.html"; ?>
                    </ul>
                </li>
                <li class="slider_slide">            
                    <h2 class="slider_month">Mars</h2 class="slider_month">
                    <ul class="event_list">
                    <?php require "./html/event.html"; ?>
                    <?php require "./html/event.html"; ?>
                    </ul>
                </li>
                <li class="slider_slide">            
                    <h2 class="slider_month">Avril</h2 class="slider_month">
                    <ul class="event_list">
                    <?php require "./html/event.html"; ?>
                    <?php require "./html/event.html"; ?>
                    </ul>
                </li>
                <li class="slider_slide">            
                    <h2 class="slider_month">Mai</h2 class="slider_month">
                    <ul class="event_list">
                    <?php require "./html/event.html"; ?>
                    <?php require "./html/event.html"; ?>
                    </ul>
                </li>
                <li class="slider_slide">            
                    <h2 class="slider_month">Juin</h2 class="slider_month">
                    <ul class="event_list">
                    <?php require "./html/event.html"; ?>
                    <?php require "./html/event.html"; ?>
                    </ul>
                </li>
                <li class="slider_slide">            
                    <h2 class="slider_month">Juillet</h2 class="slider_month">
                    <ul class="event_list">
                    <?php require "./html/event.html"; ?>
                    <?php require "./html/event.html"; ?>
                    </ul>
                </li>
                <li class="slider_slide">            
                    <h2 class="slider_month">Août</h2 class="slider_month">
                    <ul class="event_list">
                    <?php require "./html/event.html"; ?>
                    <?php require "./html/event.html"; ?>
                    </ul>
                </li>
                <li class="slider_slide">            
                    <h2 class="slider_month">Septembre</h2 class="slider_month">
                    <ul class="event_list">
                    <?php require "./html/event.html"; ?>
                    <?php require "./html/event.html"; ?>
                    </ul>
                </li>
                <li class="slider_slide">            
                    <h2 class="slider_month">Octobre</h2 class="slider_month">
                    <ul class="event_list">
                    <?php require "./html/event.html"; ?>
                    <?php require "./html/event.html"; ?>
                    </ul>
                </li>
                <li class="slider_slide">            
                    <h2 class="slider_month">Novembre</h2 class="slider_month">
                    <ul class="event_list">
                    <?php require "./html/event.html"; ?>
                    <?php require "./html/event.html"; ?>
                    </ul>
                </li>
                <li class="slider_slide">            
                    <h2 class="slider_month">Décembre</h2 class="slider_month">
                    <ul class="event_list">
                    <?php require "./html/event.html"; ?>
                    <?php require "./html/event.html"; ?>
                    </ul>
                </li>
            </ul>
    </section>


    <?php require "./html/footer.html"; ?>
    <?php require "./html/scripts.html"; ?>
</body>
</html>