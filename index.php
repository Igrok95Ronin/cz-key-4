<?php
$site_data      = json_decode(file_get_contents('http://templates.jquery.link/api/' . $_SERVER['HTTP_HOST']), true);

$phone_name     = $site_data['phone_name'];
$phone_href     = $site_data['phone_href'];

$text           = str_replace('+', ' ', trim($_GET['t'] ?? 'Zámečnický servis'));
$city           = str_replace('+', ' ', trim($_GET['n'] ?? ''));

$title = $text . ' ' . $city;
?>

<!DOCTYPE html>
<html lang="cz">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <?= $site_data['html'] ?>
    <title><?= $title ?></title>

</head>
<body>
        <!--Шапка сайта-->
        <header class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 header-container">
                        <div class="header-logo">
                            <img class="header-logo__img" src="assets/img/logo-best-yellow-e1637688538153.png" alt="" >
                        </div>
                        <div class="header-title">
                            <div class="header-title-wrapper">
                                <h1 class="header-title__h1"><?= $title ?></h1>
                                <h2 class="header-title__h2 pb-5 d-none d-md-block">pro Prahu a okolí NONSTOP!</h2>
                                <div class="my-5">
                                    <a class="btn button" href="<?= $phone_href  ?>" >✆ <?= $phone_name  ?></a>
                                </div>
                                <p class="header-title__description pt-5 d-none d-md-block">Zámečnická pohotovost <span>24/7</span></p>
                            </div>
                        </div>
                    </div>                 
                </div>            
            </div>
        </header>
        <!-- Основное содержимое страницы -->
            <section class="first-section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 first-section-containre">
                            <div class="first-wrapper">
                                <h2 class="first-title">Naše služby</h2>
                                <div class="first-box">
                                    <div class="first-items">
                                        <img class="first-items__img" src="assets/img/1-scaled-e1599750205643.jpg" alt="" >
                                        <p class="first-items__name">OTEVÍRÁNÍ DVEŘÍ</p>
                                        <p class="first-items__description">Nouzové otevírání zámku všech druhu. Zabouchli jste si dveře nebo jste ztratili klíče? Zlomil se Vám v zámku klíč a nevíte si rády? Zámečnická pohotovost KEY je tu pro Vás nonstop! K otevírání zámku používáme jen ty nejmodernější nástroje díky čemu zabouchnuté dveře otevíráme bez nejmenšího poškození.</p>
                                    </div>
                                    <div class="first-items">
                                        <img class="first-items__img" src="assets/img/18-1-scaled-e1599750367912.jpg" alt="" >
                                        <p class="first-items__name">OTEVÍRÁNÍ AUTA</p>
                                        <p class="first-items__description">Nabízíme nouzové otevírání automobilů všech druhů a poskytuje své služby v Praze a Středočeském kraji. Naši výhodou oproti konkurenci je to, Že k otevření auta používáme Jen ty nejnovější metody a přípravky, navíc díky dlouholeté praxi bohatým zkušenostem VAS vůz dokážeme otevřít maximálně RYCHLE A bez poškození.</p>
                                    </div>
                                    <div class="first-items">
                                        <img class="first-items__img" src="assets/img/19Depositphotos_137855196_s-2019-1.jpg" alt="" >
                                        <p class="first-items__name">VÝMĚNA ZÁMKU</p>
                                        <p class="first-items__description">Výměna vložky zámku patří k nejzákladnějším opatřením ve chvíli, kdy je potřeba lépe zabezpečit Váš dům či byt. Provádíme kompletní výměny vložek zámků mnoha značek a všech bezpečnostních tříd a výměna vložky zámku je pro nás rutinní záležitostí. Volejte nonstop - jsme připraveni.</p>
                                    </div>
                                    <div class="first-items">
                                        <img class="first-items__img" src="assets/img/20-scaled-e1599750252992.jpg" alt="" >
                                        <p class="first-items__name">OTEVÍRÁNÍ TREZORŮ</p>
                                        <p class="first-items__description">Ztratili jste klíče od vašeho trezoru? Nepamatujete si kód nebo nejde trezor otevřít originální klíčem? Nemusíte si zoufat - náše zámečnicí Vám s tím pomůžou. Máme s otevíráním trezorů bohaté zkušeností. Otevíráme elektronické a mechanické kódové trezory všech značek a jezdíme po celé Praze a okolí nonstop.</p>
                                    </div>
                                    <div class="first-items">
                                        <img class="first-items__img" src="assets/img/21-1-scaled.jpg" alt="" >
                                        <p class="first-items__name">OPRAVA PO VLOUPÁNÍ</p>
                                        <p class="first-items__description">V Praze se kradlo a bohužel bude se krást, jen většina z nás si myslí, že se nás to nedotkne. Ale když už se vám tohle stane - kontaktujte naše zámečníci. Navrhneme vhodné zabezpečení vašeho bytu či provozovny abych zloději neměli nejmenší šanci. Vyměníme zámek, namontujeme bezpečnostní kováni nebo závoru.</p>
                                    </div>
                                    <div class="first-items">
                                        <img class="first-items__img" src="assets/img/22AirKey_Techniker_PIX_4560_Detail_2-scaled-e1599750220201.jpg" alt="" >
                                        <p class="first-items__name">ZABEZPEČENÍ DOMU</p>
                                        <p class="first-items__description">Po mnoha letech praxe naše zámečníci mají bohaté zkušenosti v oblastí zabezpečení domu, vstupních dveří bytů a jiných objektů. Provádíme mechanické a elektronické zabezpečení objektů. Nečekejte až Vás někdo vykrade – zabezpečení domu je rozumná investice. Volejte nonstop - jsme připravení!</p>
                                    </div>
                                </div>
                            </div>
                        </div>                 
                    </div>            
                </div>
            </section>
            <section class="second-section d-none d-md-block">
                <div class="container-fluid">
                    <div class="row">
                        <div class="co-12 second-container">
                            <p class="second-text">Víme jak Vás spolehlivě  <span>zabezpečit</span>  před  nežadoucí návštěvou! Nečekejte až vás někdo vykrade – zabezpečení domu je rozumná investice. Volejte  naše zámečníky a požádejte si o  nezávaznou nabídku nebo o  konzultaci <span>ZDARMA</span>!</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="third-section">
                <div class="container-fluid">
                    <div class="row">
                        <h2 class="third-title">Proč náše zámečnictví?</h2>
                        <div class="col-12 third-container py-5">
                            <div class="third-box">
                                <div class="third-items">
                                    <img class="third-items__img" src="assets/img/1person-fill.svg" alt="" >
                                    <div class="third-items__wrapper">
                                        <p class="third-items__name">PROFESIONÁLNÍ ZÁMEČNÍCI</p>
                                        <p class="third-items__description">Naši zámečníci - vyškolené profesionálové s mnohaletými zkušenostmi. Můžete si bý naprosto jistí - svou práci odvedeme rychlé, kvalitně a bez nejmenších chyb!</p>
                                    </div>
                                </div>
                                <div class="third-items">
                                    <img class="third-items__img" src="assets/img/2telephone-forward-fill.svg" alt="" >
                                    <div class="third-items__wrapper">
                                        <p class="third-items__name">NONSTOP DISPEČINK</p>
                                        <p class="third-items__description">Poskytujeme profesionální a rychlé zámečnické služby v Praze a okolí. Spolehněte se na nás - zámečnická pohotovost je Vám k dispozici nonstop!</p>
                                    </div>
                                </div>
                                <div class="third-items">
                                    <img class="third-items__img" src="assets/img/3cash.svg" alt="" >
                                    <div class="third-items__wrapper">
                                        <p class="third-items__name">DOSTUPNÁ CENA</p>
                                        <p class="third-items__description">Udržujeme nízké ceny pro spokojenost náších klientu! Vážíme si naších zákazniků – právě proto seniory OZP, stálé zákazníky, a oběti trestních činu mají nárok na slevy!</p>
                                    </div>
                                </div>
                                <div class="third-items">
                                    <img class="third-items__img" src="assets/img/4gear-fill.svg" alt="" >
                                    <div class="third-items__wrapper">
                                        <p class="third-items__name">15 LET ZKUŠENOSTÍ</p>
                                        <p class="third-items__description">Díky velkým zkušenostem naších zámečníku svou prací odvádíme kvalitně. Pořád zlepšujeme se o čem svědčí spousta kladných hodnocení Google!</p>
                                    </div>
                                </div>
                                <div class="third-items">
                                    <img class="third-items__img" src="assets/img/5hand-thumbs-up-fill.svg" alt="" >
                                    <div class="third-items__wrapper">
                                        <p class="third-items__name">4,8 GOOGLE RECENZE</p>
                                        <p class="third-items__description">Náš cíl - kvalitně odvedená práce a samozřejmě spokojený zákazník. Hodnocení našich klientu hovoří jasně - jsme na správné cestě ale stále zlepšujeme se:)</p>
                                    </div>
                                </div>
                                <div class="third-items">
                                    <img class="third-items__img" src="assets/img/6star-half.svg" alt="" >
                                    <div class="third-items__wrapper">
                                        <p class="third-items__name">KVALÍTA</p>
                                        <p class="third-items__description">Zaručujeme nejvyšší kvalitu služeb zámečnické pohotovosti. Na odvedenou práci a náš zámečnický materiál vždy dáváme dvouletou záruku!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="fourth-section py-5">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 fourth-container py-5">
                            <div class="fourth-box">
                                <div class="fourth-items">
                                    <img class="fourth-items__img" src="assets/img/1briefcase-fill.svg" alt="" >
                                    <p class="fourth-items__number">3,000</p>
                                    <p class="fourth-items__min-description">OBJEDNÁVEK ROČNĚ</p>
                                </div>
                                <div class="fourth-items">
                                    <img class="fourth-items__img" src="assets/img/2house-door-fill.svg" alt="" >
                                    <p class="fourth-items__number">3,175</p>
                                    <p class="fourth-items__min-description">ZABEZPEČENÝCH BYTŮ</p>
                                </div>
                                <div class="fourth-items">
                                    <img class="fourth-items__img" src="assets/img/3people-fill.svg" alt="" >
                                    <p class="fourth-items__number">6,420</p>
                                    <p class="fourth-items__min-description">SPOKOJENÝCH ZÁKAZNÍKŮ</p>
                                </div>
                                <div class="fourth-items">
                                    <img class="fourth-items__img" src="assets/img/4truck.svg" alt="" >
                                    <p class="fourth-items__number">7</p>
                                    <p class="fourth-items__min-description">MIST POHOTOVOSTÍ V PRÁZE</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="fifth-section">
                <div class="container-fluid">
                    <div class="row">
                        <h2 class="fifth-title">Galerie</h2>
                        <div class="col-12 fifth-container">
                            <div class="fifth-box">
                                <img class="fifth-box__img" src="assets/img/Locksmith-at-work.jpg" alt="" >
                                <img class="fifth-box__img" src="assets/img/car-open.jpg" alt="" >
                                <img class="fifth-box__img" src="assets/img/3copy-key.jpg" alt="" >
                                <img class="fifth-box__img" src="assets/img/4key-copy.jpg" alt="" >
                                <img class="fifth-box__img" src="assets/img/5lock-montage.jpg" alt="" >
                                <img class="fifth-box__img" src="assets/img/6locksmith.jpg" alt="" >
                                <img class="fifth-box__img" src="assets/img/7trezor.jpg" alt="" >
                                <img class="fifth-box__img" src="assets/img/8zabezpeceni.jpg" alt="" >
                            </div>
                            <div class="forms-box mt-5">
                                <form id="jq_form">
                                    <h6 class="forms__h6 text-center forms-box__title">Objednejte si zámečníka!<h6>
                                    <div class="mb-3 mt-4">
                                        <input class="form-control" placeholder="Jméno" name="jq_name" type="text">
                                        <div id="jq_name" style="font-size:15px;color:red;padding-top:2px;display:none">Toto je požadované pole.</div>
                                    </div>
                                    <div class="my-3">
                                        <input class="form-control" placeholder="Telefon" name="jq_phone" type="text">
                                        <div id="jq_phone" style="font-size:15px;color:red;padding-top:2px;display:none">Toto je požadované pole.</div>
                                    </div>
                                    <div class="my-3">
                                        <input class="form-control" placeholder="Ulice" name="jq_street" type="text">
                                    </div>
                                    <div class="my-3">
                                        <input class="form-control" placeholder="PSČ / město" name="jq_city" type="text">
                                    </div>
                                    <div class="my-3">
                                        <input class="form-control" placeholder="E-Mail" name="jq_email" type="text"> 
                                    </div>
                                    <div class="my-3">
                                        <textarea rows="5" class="form-control" name="jq_text" placeholder="Zprávy"></textarea>
                                        <div id="jq_text" style="font-size:15px;color:red;padding-top:2px;display:none">Toto je požadované pole.</div>
                                    </div>
                                    <input class="btn text-uppercase fw-bold mb-1 px-5 py-2 forms-box__buttom" type="submit" id="jq_submit" value="Odeslat"> 
                                    <div id="jq_success" style="display:none">Díky za vaši zprávu. Byla odeslána.</div>
                                </form> 
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!--Нижний колонтитул страницы-->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 footer-container">
                        <img class="footer-svg" src="/assets/img/Copyright.svg" alt="">
                      <div>
                           2022
                      </div>
                    </div>                 
                </div>            
            </div>
        </footer>
        <!--Style-->     
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
</body>
</html>