<!doctype html><script async src="https://www.googletagmanager.com/gtag/js?id=UA-124233327-1"></script><script>function gtag(){dataLayer.push(arguments)}window.dataLayer=window.dataLayer||[],gtag("js",new Date),gtag("config","UA-124233327-1")</script><meta charset=UTF-8><meta content="width=device-width,initial-scale=1"name=viewport><title>Lia Prins</title><?php echo css('assets/css/reset.css') ?><?php echo css('assets/css/fonts.css') ?><?php echo css('assets/css/text-w-mediaqueries.css') ?><?php echo css('assets/css/styles.css') ?><?php echo css('assets/css/mediaqueries.css') ?><link href=/apple-touch-icon.png rel=apple-touch-icon sizes=180x180><link href=/favicon-32x32.png rel=icon sizes=32x32 type=image/png><link href=/favicon-16x16.png rel=icon sizes=16x16 type=image/png><link href=/site.webmanifest rel=manifest><link href=/safari-pinned-tab.svg rel=mask-icon color=#5bbad5><meta content=#da532c name=msapplication-TileColor><meta content=#ffffff name=theme-color><meta content="<?php echo rawurlencode($page->url()); ?>"property=og:url><meta content="Lia Prins"property=og:site_name><meta content="Lia Prins"property=og:title><meta content="I seek to inspire a curiosity and enable an understanding of the natural world. | I’m an information designer with an unflagging affection for science communication, learning, and, perhaps less predictably, antiquated office supplies. Hailing from the Pacific Northwest, I studied biology, art, and design at the University of Washington before moving to Austin a few years ago to collect on my sunlight debt."name=description><meta content=design,ux,visual,research,curiosity,curious,science,communication,write,create,thinking,investigate,data,visualization,biology,thinking,investigate,migratory,birds,lift,flight,lunar name=keywords><meta content="I seek to inspire a curiosity and enable an understanding of the natural world. | I’m an information designer with an unflagging affection for science communication, learning, and, perhaps less predictably, antiquated office supplies. Hailing from the Pacific Northwest, I studied biology, art, and design at the University of Washington before moving to Austin a few years ago to collect on my sunlight debt."property=og:description><meta content="<?php echo url('content/liaprins/lia.jpg') ?>"property=og:image><meta content=website property=og:type><div id=bodysub><details><summary id=aboutsummary><div id=abouttoggle></div><h1><?php echo $page->title()->html() ?></h1><h2><?php echo $page->tagline()->html() ?></h2></summary><div id=photogroup><div id=mobilepic></div><a href=mailto:liajprins@gmail.com id=email>liajprins@gmail.com </a><span id=firstcontactpipe class=contactpipe>|</span> <a href=https://www.instagram.com/liaprins/ target=blank><img alt=Instagram id=instagram src=assets/images/Instagram.svg><span id=instagram-text></span> </a><span class=contactpipe>|</span><a href=content/liaprins/liaprins_resume.pdf id=resume target=blank>Résumé</a></div><span id=abouttext><span id=aboutoverview><?php echo $page->aboutoverview()->kirbytext() ?></span><span id=aboutcurrent><?php echo $page->aboutcurrent()->kirbytext() ?></span><span id=aboutpassion><?php echo $page->aboutpassion()->kirbytext() ?></span></span></details><div><?php foreach ($page->children()
        		            ->visible() as $project): ?><?php snippet('project-list', array('project' => $project)) ?><?php endforeach ?></div><div id=bottomspacer></div></div>