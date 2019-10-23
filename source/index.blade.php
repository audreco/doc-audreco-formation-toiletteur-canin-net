@extends('_layouts.master')

@section('body')
<section class="bg-cover mt-24 h-screen-60 bg-image-header">
    

</section>
<section itemscope itemtype="https://schema.org/EducationalOrganization" class="container max-w-6xl mx-auto px-6 py-10 md:py-12">
    <div class="sm:w-4/5 mx-auto bg-white text-center rounded shadow-lg-soft">
        <div class="flex -mx-2 mb-10 lg:flex-row lg:mb-24 justify-center">
            <div class="mt-8 px-2 flex-1 text-center">
                <h1 itemprop="name" id="intro-docs-template">{{ $page->siteName }}</h1>
                <h2 itemprop="description" id="intro-powered-by-jigsaw" class="font-light mt-4">{{ $page->siteDescription }}</h2>
                <div class="flex my-10 justify-center">
                    <a href="/docs/formation-toiletteur-canin" title="{{ $page->siteName }} (école de toilettage)" class="bg-blue-500 hover:bg-blue-600 font-normal text-white hover:text-white rounded mr-4 py-2 px-6">Formation Toiletteur Canin</a>
        
                    <a itemprop="url" href="https://audreco.com/?utm_source=formation+toiletteur+canin+net" title="À l'École des Métiers de l'Animal de Compagnie" class="bg-gray-400 hover:bg-gray-600 text-blue-900 font-normal hover:text-white rounded py-2 px-6">Site principal Audreco</a>
                </div>
            </div>

        </div>
    </div>

    <hr class="block my-8 border lg:hidden">
        <div itemscope itemtype="https://schema.org/Offer" class="max-w-xl lg:max-w-7xl mx-auto px-4 pb-12 lg:pb-20 flex flex-col items-center text-center">
            <img src="/assets/img/tmp-img/basic_todolist_pen.svg" class="h-12 w-12" alt="to do list with pen icon">

            <h3 itemprop="description" id="intro-laravel" class="text-2xl text-blue-900 mb-0">Recevez une étude gratuite</h3>

            <p>Téléchargez nos études gratuites sur : <a href="https://audreco.com/?utm_source=ecole+toiletteur+canin+net">Audreco</a> onglet "GRATUIT". <br>
                Vous pouvez également consuler nos services, onglet "SERVICES"<br> ainsi que nos formations de toiletteur canin, longues ou courtes, onglet "FORMATIONS".
            </p>
        </div>

        <div itemscope itemptype="https://schema.org/Blog" class="max-w-xl lg:max-w-7xl mx-auto px-4 pb-12 lg:pb-20 flex flex-col items-center text-center">
            <img src="/assets/img/tmp-img/basic_laptop.svg" class="h-12 w-12" alt="laptop icon">

            <h3 id="intro-markdown" class="text-2xl text-blue-900 mb-0">Consultez nos blogs</h3>

            <p>
                <a itemprop="url" href="https://audreco.com/mon-chien/?utm_source=formation+toiletteur+canin+net">Tout ce que vous avez toujours cru savoir sur votre chien ou votre chat,<br>et qui n'est peut-être pas vrai !</a> <br>
                <a itemprop="url" href="http://entreprendre-animaux.audreco.com/?utm_source=formation+toiletteur+canin+net">Entreprendre dans les métiers de services auprès des animaux !</a>
            </p>
        </div>

        <div itemscope itemptype="https://schema.org/LocalBusiness" class="max-w-xl lg:max-w-7xl mx-auto px-4 pb-12 lg:pb-20 flex flex-col items-center text-center">
            <img src="/assets/img/tmp-img/basic_spread_text_bookmark.svg" class="h-12 w-12" alt="spreaad text book icon">
            <h3 id="intro-mix" class="text-2xl text-blue-900 mb-0">Faites un petit tour dans notre librairie</h3>

            <p><a itemprop="url" href="https://librairie.audreco.com/?utm_source=formation+toiletteur+canin+net">Des livres sur les animaux et le toilettage ! Accéder à la librairie</a>
            </p>
        </div>
    </div>
    <div itemscope itemptype="https://schema.org/CreativeWork" class="text-center">
        <h3>Sommaire</h3>
        <ul>
            <li itemscope itemptype="https://schema.org/Article">
                <a itemprop="url" href="docs/formation-toiletteur-canin/#metier">
                    Formation toiletteur canin : pour quel métier ?
                </a><br />
                <p itemprop="abstract">Pour bien répondre aux questions ci--dessus, ne pensez-vous pas qu'il faille commencer par définir de quoi l'on parle, lorsque l'on parle de toilettage ? Toiletteur : de quoi parle-t-on ? Vous allez voir, cela mérite d'être défini !</p>
            </li>
            <li itemscope itemptype="https://schema.org/Article">
                <a itemprop="url" href="docs/formation-toiletteur-canin/#general">
                    Formation toilettage canin : généralités
                </a><br />
                <p itemprop="abstract">Une formation en toilettage canin doit vous permettre d'entrer dans les meilleures conditions dans la profession. Vous devrez en effet parvenir à combiner deux impératifs, en apparence (mais en apparence seulement) opposés. Le premier impératif vient de vous : vous voulez (bien) gagner votre vie. Et vous avez raison. Le second vient de votre clientèle : cette dernière ne veut (ou ne peut) pas supporter des prix élevés.</p>
            </li>
            <li itemscope itemptype="https://schema.org/Article">
                <a itemprop="url" href="docs/formation-toiletteur-canin/#ergonomie">
                    Formation toilettage canin et ergonomie
                </a><br />
                <p itemprop="abstract">On peut définir l'ergonomie comme l'étude des gestes, des outils et des conditions de travail, en vue de l'amélioration de leur productivité. Travailler plus vite, plus sûrement, en économisant autant que possible son effort, tout cela pour un résultat de qualité supérieure : voilà ce qu'on pourrait définir comme une recherche scientifique ergonomique du toilettage.</p>
            </li>
            <li itemscope itemptype="https://schema.org/Article">
                <a itemprop="url" href="docs/formation-toiletteur-canin/#zoocosmetologie">
                    Formation toilettage canin et Zoocosmétologie
                </a><br />
                <p itemprop="abstract">Physiologie de la peau et du pelage. À l'issue d'une formation, les fonctions de la peau et du pelage, leur physiologie, n'auront évidemment plus de secrets pour vous. Vous comprendrez en particulier les règles régissant la kératine, ce constituant principal des pelages (comme des cheveux...).</p>
            </li>
            <li itemscope itemptype="https://schema.org/Article">
                <a itemprop="url" href="docs/formation-toiletteur-canin/#cynophilie">
                    Formation toiletteur canin et cynophilie
                </a><br />
                <p itemprop="abstract">Connaissance des standards de race et des patrons de toilettage. Le toiletteur a une bonne connaissance des principaux standards de race, mais surtout, il sait adapter les exigences d'un standard à son travail de toilettage.</p>
            </li>
            <li itemscope itemptype="https://schema.org/Article">
                <a itemprop="url" href="docs/formation-toiletteur-canin/#esthetique">
                    Formation toiletteur canin et esthétique
                </a><br />
                <p itemprop="abstract">Une évidence : le toilettage est un travail esthétique. Sans un sens aigu de l'esthétique, de l'harmonie des lignes, de l'équilibre et de la balance des formes, impossible de réussir un beau toilettage.</p>
            </li>
            <li itemscope itemptype="https://schema.org/Article">
                <a itemprop="url" href="docs/formation-toiletteur-canin/#gestion">
                    Formation toiletteur canin : gestion et administration d'un lieu de production de toilettage
                </a><br />
                <p itemprop="abstract">Est-il réellement nécessaire d'y insister ? Le travail du toilettage s'inscrit dans un univers professionnel et commercial. La formation devra donc aborder l'environnement économique et juridique de l'activité, sa réglementation, ainsi que la réglementation des activités connexes ou annexes telles que l'élevage, ou encore l'éducation...</p>
            </li>
            <li itemscope itemptype="https://schema.org/Article">
                <a itemprop="url" href="docs/formation-toiletteur-canin/#comportement">
                    Formation toiletteur canin : étude du comportement animal
                </a><br />
                <p itemprop="abstract">Bien entendu, le toiletteur n'est pas un comportementaliste. Pour autant, une bonne connaissance du comportement du chien et chat lui est parfaitement nécessaire. Cette connaissance lui permettra d'anticiper les réactions des animaux et d'adapter son propre comportement. Cette compréhension et cette adaptation vont conduire à une meilleure communication avec l'animal. Ce dernier se trouve ainsi mis en confiance, rassuré, et plus facilement disposé à bien accepter, voire à apprécier le toilettage.</p>
            </li>
            <li itemscope itemptype="https://schema.org/Article">
                <a itemprop="url" href="docs/formation-toiletteur-canin/#pratique">
                    Formation toiletteur canin et pratique du toilettage
                </a><br />
               <p itemprop="abstract">Le travail pratique aura été préparé par l'étude de la gestuelle des actes. Il permettra d'aborder toutes les phases d'une action de toilettage. Il sera l'occasion d'une observation approfondie et critique des outils et des installations en salon de toilettage. Il permettra aussi d'aborder les sujets connexes comme l'organisation pratique d'une production, la maintenance des locaux et du matériel.</p>
            </li>
            <li itemscope itemptype="https://schema.org/Article">
                <a itemprop="url" href="docs/formation-toiletteur-canin/#centre-formation">
                    Formation toiletteur canin : quel centre de formation ?
                </a><br />
                <p itemprop="abstract">Beaucoup de solutions peuvent se présenter. Essayons un inventaire. Formation toiletteur canin : la formation proposée par les salons de toilettage. Certains salons prétendent offrir en plus du service de toilettage, une offre de formation.</p>
            </li>
            <li itemscope itemptype="https://schema.org/Article">
                <a itemprop="url" href="docs/formation-toiletteur-canin/#diplome">
                   Formation toilettage canin et diplôme
                </a><br />
                <p itemprop="abstract">Diplôme et exercice du métier. Que cela soit clair : il n'existe aucune obligation de diplôme ou de certification pour exercer la profession de toiletteur. On peut s'en réjouir ou s'en indigner, mais c'est ainsi. Le toilettage, dans notre pays, est un métier « libre ».</p>
            </li>
            <li itemscope itemptype="https://schema.org/Article">
                <a itemprop="url" href="docs/formation-toiletteur-canin/#certificat">
                   Formation toiletteur canin : le Certificat de Toiletteur canin
                </a><br />
                <p itemprop="abstract">Formation toiletteur canin : le Certificat de Toiletteur Canin est une certification dite R.N.C.P., inscrite au répertoire. Le Certificat de Toiletteur Canin est une certification dite R.N.C.P., inscrite au répertoire. Il est délivré par l'Union Nationale des Centres de Formation en Toilettage (U.N.C.F.T.).</p>
            </li>
            <li itemscope itemptype="https://schema.org/Article">
                <a itemprop="url" href="docs/formation-toiletteur-canin/#organismes">
                   Formation toiletteur canin : liste et adresses des organismes préparant au Certificat de Toiletteur Canin
                </a><br />
                <p itemprop="abstract">Découvrez la liste d'organismes.</p>
            </li>

            <li itemscope itemptype="https://schema.org/Article">
                <a itemprop="url" href="docs/formation-toiletteur-canin/#toilettage-aller-plus-loin">
                    Toiletteur canin, le métier : aller plus loin !
                </a><br />
                <p itemprop="abstract">Nous vous présentons sur cette page d'autres ressources relatives au toilettage et à la pratique du métier de toiletteur canin, études gratuites, livres, formations, blogues...</p>
            </li>
        </ul>
    </div>
</section>
@endsection
