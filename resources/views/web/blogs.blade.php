@section('title', 'Blogs')
@include('web.layouts.header')
<section class="blogs-new-center">
    <div class="blogs-new-content">
        <h1 class="blogs-new-title">Notre méthodologie</h1>
        <p class="blogs-new-subtitle">Créer une équipe pour votre projet c'est bien, avoir <span class="blogs-new-highlight">une organisation sans faille</span> c'est mieux. Pourquoi ? Pour gagner en productivité, en temps et en ébullition d'idées.</p>

        <div class="blogs-new-grid">
            <div class="blogs-new-tool">
                <i class="fas fa-comments blogs-new-icon"></i>
                <div class="blogs-new-tool-name">Ateliers</div>
                <p class="blogs-new-tool-description">Qui vont nous permettre d'échanger, de débattre, de proposer, de co-créer et de valider.</p>
            </div>

            <div class="blogs-new-tool">
                <i class="fas fa-pencil-alt blogs-new-icon"></i>
                <div class="blogs-new-tool-name">Figjam</div>
                <p class="blogs-new-tool-description">Pour itérer sur votre projet, Figjam est un grand tableau blanc digital : Brainstorming, idées... vous allez adorer</p>
            </div>

            <div class="blogs-new-tool">
                <img src="https://placehold.co/24x24" alt="Figma logo icon" class="blogs-new-icon-img">
                <div class="blogs-new-tool-name">Figma</div>
                <p class="blogs-new-tool-description">Pour imaginer ensemble le design et l'expérience de votre projet, Figma est l'outil que nous privilégions.</p>
            </div>

            <div class="blogs-new-tool">
                <i class="fas fa-code blogs-new-icon"></i>
                <div class="blogs-new-tool-name">Développement</div>
                <p class="blogs-new-tool-description">Pour développer vos sites et applications nous favorisons : Webflow, Bubble, Adalo, Shopify et Wordpress.</p>
            </div>

            <div class="blogs-new-tool">
                <img src="https://placehold.co/24x24" alt="Asana logo icon" class="blogs-new-icon-img">
                <div class="blogs-new-tool-name">Asana</div>
                <p class="blogs-new-tool-description">Pour la gestion de votre projet : planning, tâches, ticketing, gestion d'équipe, Asana est un indispensable.</p>
            </div>
        </div>
    </div>
</section>


@include('web.layouts.footer')
