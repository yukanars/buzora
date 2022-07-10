<?php
// Query params are: utm_placement={{placement}}&campaign_id={{campaign.id}}&adset_id={{adset.id}}&ad_id={{ad.id}}&fbpixel=ID_PIXEL 

require_once dirname(FILE) . '/kclient.php';
$client = new KClient('https://superstoreowner.com/', 'z81C4fbx3dJBM2dw');
$client->sendAllParams();       // to send all params from page query
$client->forceRedirectOffer();       // redirect to offer if an offer is chosen
// $client->param('sub_id_5', '123'); // you can send any params
// $client->keyword('PASTE_KEYWORD');  // send custom keyword
// $client->currentPageAsReferrer(); // to send current page URL as click referrer
// $client->disableSessions(); // to disable using session cookie (without this cookie restoreFromSession wouldn't work)
// $client->debug();              // to enable debug mode and show the errors
// $client->execute();             // request to api, show the output and continue
$client->executeAndBreak();     // to stop page execution if there is redirect or some output
?>
<!doctype html>
<html lang="hr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>rješavanje zdravstvenih problema</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/owl.carousel.min.css" rel="stylesheet">

        <link href="css/owl.theme.default.min.css" rel="stylesheet">

        <link href="css/templatemo-medic-care.css" rel="stylesheet">
<!--

TemplateMo 566 Medic Care

https://templatemo.com/tm-566-medic-care

-->
    </head>

    <body id="top">

        <main>

            <nav class="navbar navbar-expand-lg bg-light fixed-top shadow-lg">
                <div class="container">
                    <a class="navbar-brand mx-auto d-lg-none" href="index.html">
                        rješavanje zdravstvenih problema
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div id="wptmbkje" class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#hero">Morsk</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#about">Suho </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#timeline">Riješ</a>
                            </li>

                            <a class="navbar-brand d-none d-lg-block" href="index.html">
                                rješavanje zdravstvenih problema
                            </a>

                            <li class="nav-item">
                                <a class="nav-link" href="#reviews">Insta</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#booking">VIRA </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Imate</a>
                            </li>
                            <li class="nav-item">
                                 <a href="privacy-policy.html">Privacy policy</a>
                                <br />
                                   <a href="terms.html">Terms and Conditions</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>

            <section class="hero" id="hero">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="http://mld.com.hr/wp-content/uploads/2019/01/ATTF7N46.jpg" class="img-fluid" alt="">
                                    </div>

                                    <div class="carousel-item">
                                        <img src="https://www.poslovni.hr/wp-content/uploads/2020/03/PXL_100320_28361357-e1584100173960-1600x1000.jpg" class="img-fluid" alt="">
                                    </div>

                                    <div class="carousel-item">
                                        <img src="https://zupanijakakvutrebam.hr/wp-content/uploads/2021/05/IMG_0284-2048x1365.jpg" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="heroText d-flex flex-column justify-content-center">

                                <h1 class="mt-auto mb-2">
                                    “Eksp
                                    <div class="animated-info">
                                        <span class="animated-item">Nikol</span>
                                        <span class="animated-item">Mašto</span>
                                        <span class="animated-item">ZAŠTI</span>
                                    </div>
                                </h1>

                                <p class="mb-4">Morski psi u Jadranskom moru</p>

                                <div class="heroLinks d-flex flex-wrap align-items-center">
                                    <a class="custom-link me-4" href="#about" data-hover="Learn More">Kada </a>

                                    <p class="contact-phone mb-0"><i class="bi-phone"></i> Polic</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="section-padding" id="about">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-6 col-12">
                            <h2 class="mb-lg-3 mb-3">Površina korišćenog zemljišta 0,9 odsto manja</h2>

                            <p>Suho grlo - Prirodni lijekovi koji mogu pomoći – Biljem do Zdravlja</p>

                            <p>Riješite sve svoje probleme u nekoliko jednostavnih koraka - Ordinacija.hr</p>
                        </div>

                        <div class="col-lg-4 col-md-5 col-12 mx-auto">
                            <div class="featured-circle bg-white shadow-lg d-flex justify-content-center align-items-center">
                                <p class="featured-text"><span class="featured-number">12</span></p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="gallery">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-6 ps-0">
                            <img src="https://www.krizevci.info/wp-content/uploads/2019/03/predstavnici-zupanije-i-zdravstvenih-ustanova-ponovno-se-sastali-s-clanovima-hrvatske-lijecnicke-komore-na-temu-statusa-lijecnika-1.jpg" class="img-fluid galleryImage" alt="get a vaccine" title="get a vaccine for yourself">
                        </div>

                        <div class="col-lg-6 col-6 pe-0">
                            <img src="http://www.bosnjaci.net/foto/Rahima_Halimanovic_1.jpg" class="img-fluid galleryImage" alt="wear a mask" title="wear a mask to protect yourself">
                        </div>

                    </div>
                </div>
            </section>

            <br /><p style="text-align:center;"><iframe width="560" height="315" src="https://www.youtube.com/embed/dObUuMox-lA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>


            <section class="section-padding pb-0" id="timeline">
                <div class="container">
                    <div class="row">

                        <h2 class="text-center mb-lg-5 mb-4">Ako imate problema sa slabim mjehurom, razmišljajte o ljubavi i vezi s partnerom. Znanstveno je dokazano da takva pozitivna razmišljanja skreću pažnju s mjehura.</h2>

                        <div class="timeline">
                            <div class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes">
                                <div class="col-9 col-md-5 me-md-4 me-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                                    <h3 class=" text-light">prije -16 minuta-Bago o krizi i konkurentnosti: "Jao si ga ministru financija"</h3>

                                    <p>Instagram not configured. Please set it up in the WP Admin > Settings > G1 Socials > Instagram.</p>
                                </div>

                                <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                                    <i class="bi-patch-check-fill timeline-icon"></i>
                                </div>

                                <div class="col-9 col-md-5 ps-md-3 ps-lg-0 order-1 order-md-3 py-4 timeline-date">
                                    <time>Tjelesni dismorfni poremećaj – što je, što nije i zašto nevolja rijetko dolazi sama?</time>
                                </div>
                            </div>

                            <div class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes my-lg-5 my-4">
                                <div class="col-9 col-md-5 ms-md-4 ms-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                                    <h3 class=" text-light">PIZZA NA IZVORU GACKE: Kako je povratnik iz Irske ličkim pizzama sa sušenom pastrvom i janjetinom srušio sve poslovne teorije</h3>

                                    <p>VIRA RATSIBORJNSKA: ‘Kina koristi sukob u Ukrajini i preko ekonomije širi svoj utjecaj i uskoro bi mogla postati veća prijetnja NATO-u od Rusije’</p>
                                </div>

                                <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                                    <i class="bi-book timeline-icon"></i>
                                </div>

                                <div class="col-9 col-md-5 pe-md-3 pe-lg-0 order-1 order-md-3 py-4 timeline-date">
                                    <time>Nakupljanje cerumena u ušima može biti posljedica, ali i uzrok infekcije. Hrčci obično nemaju voska u ušima, tako da je svako pojavljivanje tog žutog – znak neke promjene. Iscjedak je isto znak nečega, tako da trk veterinaru.</time>
                                </div>
                            </div>

                            <div class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes">
                                <div class="col-9 col-md-5 me-md-4 me-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                                    <h3 class=" text-light">4. lipnja 2022. 07:42</h3>

                                    <p>Imate problema s začepljenim nosom? Pritisnite jezikom gornje nepce dok u isto vrijeme prstom pritišćete prostor između obrva. Liječnici tvrde da nakon 20 sekundi dolazi do pomicanja čeone kosti, što oslobađa začepljenje i čisti nos. A ako pak vam se “mozak smrzne” prilikom jedenja sladoleda, ponovite isti postupak.</p>
                                </div>

                                <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                                    <i class="bi-file-medical timeline-icon"></i>
                                </div>

                                <div class="col-9 col-md-5 ps-md-3 ps-lg-0 order-1 order-md-3 py-4 timeline-date">
                                    <time>Kamilica, Kurkuma, Limun, Med, Origano, Propolisy</time>
                                </div>
                            </div>

                            <div class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes my-lg-5 my-4">
                                <div class="col-9 col-md-5 ms-md-4 ms-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                                    <h3 class=" text-light">Đeljošaj: Rušenjem Vlade ruši se i evropska budućnost Crne Gore</h3>

                                    <p class="mb-0 pb-0">“Eksperti ukazuju da situacija nije povoljna zbog starosne strukture srednjeg medicinskog kadra u regionu, kao i prakse pojedinih razvijenih zemalja da se “oslanjaju” na međunarodno regrutovanje medicinskih sestara iz drugih zemalja”, navela je Brajović.</p>
                                </div>

                                <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                                    <i class="bi-globe timeline-icon"></i>
                                </div>

                                <div class="col-9 col-md-5 pe-md-3 pe-lg-0 order-1 order-md-3 py-4 timeline-date">
                                    <time>Đokovićev nekadašnji analitičar: ‘Kyrgiosovi nepredvidljivi servisi su veliki problem za Novaka’</time>
                                </div>
                            </div>

                            <div class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes">
                                <div class="col-9 col-md-5 me-md-4 me-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                                    <h3 class=" text-light">Koje voće i povrće pas smije jesti?</h3>

                                    <p>Nikoli Kaliniću u Superkupu slomljen prst</p>
                                </div>

                                <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                                    <i class="bi-person timeline-icon"></i>
                                </div>

                                <div class="col-9 col-md-5 ps-md-3 ps-lg-0 order-1 order-md-3 py-4 timeline-date">
                                    <time>prije -11 minuta-Pijani vozač usmrtio ženu koja je stajala u dvorištu kuće</time>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="section-padding pb-0" id="reviews">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <h2 class="text-center mb-lg-5 mb-4">Imaj na umu da tvoj hrčak ne može imati bijele zube, nego da je sasvim normalno da ima žute ili narančaste.</h2>

                            <div class="owl-carousel reviews-carousel">

                                <figure class="reviews-thumb d-flex flex-wrap align-items-center rounded">
                                    <div class="reviews-stars">
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star"></i>
                                    </div>

                                    <p class="text-primary d-block mt-2 mb-0 w-100"><strong>Ostalih 40% temelji se na vlastitim namjernim naporima da postanete sretniji, što znači da imate veliku moć u tome kako se osjećate.</strong></p>

                                    <p class="reviews-text w-100">Maštoviti medeni mjesec! Evo koje destinacije parovi sve češće odabiru</p>

                                    <img src="https://lupilu.hr/wp-content/uploads/2020/09/shutterstock_1131832418-814x462.jpg" class="img-fluid reviews-image" alt="">

                                    <figcaption class="ms-4">
                                        <strong>Marie</strong>

                                        <span class="text-muted">Korak od obrane naslova! Mektić i Pavić spasili meč loptu i izborili finale Wimbledona</span>
                                    </figcaption>
                                </figure>

                                <figure class="reviews-thumb d-flex flex-wrap align-items-center rounded">
                                    <div class="reviews-stars">
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star"></i>
                                    </div>

                                    <p class="text-primary d-block mt-2 mb-0 w-100"><strong>Stres i zdravstveni problemi</strong></p>

                                    <p class="reviews-text w-100">ZAŠTITA DUPINA U JADRANU: ‘Za dupinima se ne smije juriti niti ih hraniti, a buka ih ugrožava’</p>

                                    <img src="https://www.body-and-soul.com.hr/wp-content/uploads/2019/09/body-and-soul-slider-16.jpg" class="img-fluid reviews-image" alt="">

                                    <figcaption class="ms-4">
                                        <strong>Ben Walker</strong>

                                        <span class="text-muted">Spremi moje ime, e-poštu i web-stranicu u ovom internet pregledniku za sljedeći put kada budem komentirao.</span>
                                    </figcaption>
                                </figure>

                                <figure class="reviews-thumb d-flex flex-wrap align-items-center rounded">
                                    <div class="reviews-stars">
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                    </div>

                                    <p class="text-primary d-block mt-2 mb-0 w-100"><strong>Vrsaljko: ‘S Olympiakosom želim titule i Ligu prvaka’</strong></p>

                                    <p class="reviews-text w-100">Kada se idući puta napijete i imate užasnu vrtoglavicu, stavite ruku na nešto stabilno. Tada dajete mozgu drugu referentnu točku, što vam pomaže da zaustavite vrtoglavicu.</p>

                                    <img src="https://www.adiva.hr/wp-content/uploads/2019/01/debljina.jpg" class="img-fluid reviews-image" alt="">

                                    <figcaption class="ms-4">
                                        <strong>Mnogi sportaši izvode ovakve setove vježbi većim intenzitetom i uz veća opterećenja tijela kako bi postigli što bolje rezultate i savladali druge tehnike potrebne u njihovom sportu.</strong>

                                        <span class="text-muted">Perović 15. jula na profesionalnom ringu</span>
                                    </figcaption>
                                </figure>

                                <figure class="reviews-thumb d-flex flex-wrap align-items-center rounded">
                                    <div class="reviews-stars">
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star"></i>
                                        <i class="bi-star"></i>
                                    </div>

                                    <p class="text-primary d-block mt-2 mb-0 w-100"><strong>Ona je dodala da je svaka deveta medicinska sestra žena, dok je samo u 25 odsto slučajeva neka rukovodeća uloga u rukama medicinskih sestara.</strong></p>

                                    <p class="reviews-text w-100">Policistični jajnici (PCOS)</p>

                                    <img src="https://www.bpkg.gov.ba/media/images/2019/04/IMG_0032.jpg" class="img-fluid reviews-image" alt="">

                                    <figcaption class="ms-4">
                                        <strong>Rosey</strong>

                                        <span class="text-muted">VIDEO Liječnici iz Vinogradske zamrznuli tumor, pacijent za RTL kaže: “Pokusni kunić najčešće dobro prođe”</span>
                                    </figcaption>
                                </figure>

                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <section class="section-padding" id="booking">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-12 mx-auto">
                            <div class="booking-form">

                                <h2 class="text-center mb-lg-3 mb-2">Primorsko-goranska županija</h2>

                                <form role="form" action="#booking" method="post">
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Full name" required>
                                        </div>

                                        <div class="col-lg-6 col-12">
                                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required>
                                        </div>

                                        <div class="col-lg-6 col-12">
                                            <input type="telephone" name="phone" id="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="form-control" placeholder="Phone: 123-456-7890">
                                        </div>

                                        <div class="col-lg-6 col-12">
                                            <input type="date" name="date" id="date" value="" class="form-control">

                                        </div>

                                        <div class="col-12">
                                            <textarea class="form-control" rows="5" id="message" name="message" placeholder="Additional Message"></textarea>
                                        </div>

                                        <div class="col-lg-3 col-md-4 col-6 mx-auto">
                                            <button type="submit" class="form-control" id="submit-button">15. l</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </section>

        </main>

        <footer class="site-footer section-padding" id="contact">
            <div class="container">
                <div class="row">

                    <div class="col-lg-5 me-auto col-12">
                        <h5 class="mb-lg-4 mb-3">1 šalicu vode (250 ml)</h5>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex">
                                Vivie
                            </li>

                            <li class="list-group-item d-flex">
                                JOSIP
                                <span>8:00 AM - 3:30 PM</span>
                            </li>

                            <li class="list-group-item d-flex">
                                Površ
                                <span>10:30 AM - 5:30 PM</span>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 col-12 my-4 my-lg-0">
                        <h5 class="mb-lg-4 mb-3">Tretmani kod ginekoloških tegoba</h5>


                        <p>Ostavi za kasnijeDodaj u favoriteDodaj u Kolekciju</p>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 ms-auto">
                        <h5 class="mb-lg-4 mb-3">Imate li bol u grlu? Vjerojatnost je da je vaše grlo suho. Pokušajte s bilo kojim od lijekova koje smo spomenuli danas i imat ćete 100% prirodno i sigurno liječenje</h5>

                        <ul class="social-icon">
                            <li><a href="#" class="social-icon-link bi-facebook"></a></li>

                            <li><a href="#" class="social-icon-link bi-twitter"></a></li>

                            <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                            <li><a href="#" class="social-icon-link bi-youtube"></a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-12 ms-auto mt-4 mt-lg-0">
                        <p class="copyright-text">Copyright © rješavanje zdravstvenih problema
                    </div>
                    <br />
                     <a href="privacy-policy.html">Privacy policy</a>
                    <br />
                       <a href="terms.html">Terms and Conditions</a>
                </div>
            </section>
        </footer>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/scrollspy.min.js"></script>
        <script src="js/custom.js"></script>
<!--

TemplateMo 566 Medic Care

https://templatemo.com/tm-566-medic-care

-->
    </body>
</html>