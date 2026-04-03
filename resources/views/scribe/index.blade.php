<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.8.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.8.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-documentation">
                                <a href="#endpoints-GETapi-documentation">Handles the API request and renders the Swagger documentation view.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-oauth2-callback">
                                <a href="#endpoints-GETapi-oauth2-callback">Handles the OAuth2 callback and retrieves the required file for the redirect.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-user">
                                <a href="#endpoints-GETapi-user">GET api/user</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-internal-terra-v1-referentiels-pays">
                                <a href="#endpoints-GETapi-internal-terra-v1-referentiels-pays">GET api/internal/terra/v1/referentiels/pays</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-internal-terra-v1-referentiels-pays--id--villes">
                                <a href="#endpoints-GETapi-internal-terra-v1-referentiels-pays--id--villes">GET api/internal/terra/v1/referentiels/pays/{id}/villes</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-internal-terra-v1-referentiels-villes--id--communes">
                                <a href="#endpoints-GETapi-internal-terra-v1-referentiels-villes--id--communes">GET api/internal/terra/v1/referentiels/villes/{id}/communes</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-internal-terra-v1-referentiels-etudes">
                                <a href="#endpoints-GETapi-internal-terra-v1-referentiels-etudes">GET api/internal/terra/v1/referentiels/etudes</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-internal-terra-v1-referentiels-diplomes">
                                <a href="#endpoints-GETapi-internal-terra-v1-referentiels-diplomes">GET api/internal/terra/v1/referentiels/diplomes</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-internal-terra-v1-referentiels-langues">
                                <a href="#endpoints-GETapi-internal-terra-v1-referentiels-langues">GET api/internal/terra/v1/referentiels/langues</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-internal-terra-v1-referentiels-secteurs">
                                <a href="#endpoints-GETapi-internal-terra-v1-referentiels-secteurs">GET api/internal/terra/v1/referentiels/secteurs</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-internal-terra-v1-agent-register">
                                <a href="#endpoints-POSTapi-internal-terra-v1-agent-register">POST api/internal/terra/v1/agent/register</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-internal-terra-v1-agent-login">
                                <a href="#endpoints-POSTapi-internal-terra-v1-agent-login">POST api/internal/terra/v1/agent/login</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-internal-terra-v1-agent-send-otp">
                                <a href="#endpoints-POSTapi-internal-terra-v1-agent-send-otp">POST api/internal/terra/v1/agent/send-otp</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-internal-terra-v1-agent-verify-otp">
                                <a href="#endpoints-POSTapi-internal-terra-v1-agent-verify-otp">POST api/internal/terra/v1/agent/verify-otp</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-internal-terra-v1-agent-forgot-password">
                                <a href="#endpoints-POSTapi-internal-terra-v1-agent-forgot-password">POST api/internal/terra/v1/agent/forgot-password</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-internal-terra-v1-agent-reset-password">
                                <a href="#endpoints-POSTapi-internal-terra-v1-agent-reset-password">POST api/internal/terra/v1/agent/reset-password</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-internal-terra-v1-agent-logout">
                                <a href="#endpoints-POSTapi-internal-terra-v1-agent-logout">POST api/internal/terra/v1/agent/logout</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-internal-terra-v1-agent-me">
                                <a href="#endpoints-GETapi-internal-terra-v1-agent-me">GET api/internal/terra/v1/agent/me</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-internal-terra-v1-agent-me">
                                <a href="#endpoints-PUTapi-internal-terra-v1-agent-me">PUT api/internal/terra/v1/agent/me</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-internal-terra-v1-agent-profile">
                                <a href="#endpoints-GETapi-internal-terra-v1-agent-profile">GET api/internal/terra/v1/agent/profile</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-internal-terra-v1-agent-profile">
                                <a href="#endpoints-PUTapi-internal-terra-v1-agent-profile">PUT api/internal/terra/v1/agent/profile</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-internal-terra-v1-agent-profile-image">
                                <a href="#endpoints-POSTapi-internal-terra-v1-agent-profile-image">POST api/internal/terra/v1/agent/profile/image</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-internal-terra-v1-agent-pieces">
                                <a href="#endpoints-GETapi-internal-terra-v1-agent-pieces">GET api/internal/terra/v1/agent/pieces</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-internal-terra-v1-agent-pieces">
                                <a href="#endpoints-POSTapi-internal-terra-v1-agent-pieces">POST api/internal/terra/v1/agent/pieces</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-internal-terra-v1-agent-pieces--id-">
                                <a href="#endpoints-PUTapi-internal-terra-v1-agent-pieces--id-">PUT api/internal/terra/v1/agent/pieces/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-internal-terra-v1-agent-permis">
                                <a href="#endpoints-GETapi-internal-terra-v1-agent-permis">GET api/internal/terra/v1/agent/permis</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-internal-terra-v1-agent-permis">
                                <a href="#endpoints-POSTapi-internal-terra-v1-agent-permis">POST api/internal/terra/v1/agent/permis</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-internal-terra-v1-agent-permis--id-">
                                <a href="#endpoints-PUTapi-internal-terra-v1-agent-permis--id-">PUT api/internal/terra/v1/agent/permis/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-internal-terra-v1-agent-diplomes">
                                <a href="#endpoints-GETapi-internal-terra-v1-agent-diplomes">GET api/internal/terra/v1/agent/diplomes</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-internal-terra-v1-agent-diplomes">
                                <a href="#endpoints-POSTapi-internal-terra-v1-agent-diplomes">POST api/internal/terra/v1/agent/diplomes</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-internal-terra-v1-agent-diplomes--id-">
                                <a href="#endpoints-PUTapi-internal-terra-v1-agent-diplomes--id-">PUT api/internal/terra/v1/agent/diplomes/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-internal-terra-v1-agent-langues">
                                <a href="#endpoints-GETapi-internal-terra-v1-agent-langues">GET api/internal/terra/v1/agent/langues</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-internal-terra-v1-agent-langues">
                                <a href="#endpoints-POSTapi-internal-terra-v1-agent-langues">POST api/internal/terra/v1/agent/langues</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-internal-terra-v1-agent-langues--id-">
                                <a href="#endpoints-DELETEapi-internal-terra-v1-agent-langues--id-">DELETE api/internal/terra/v1/agent/langues/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-internal-terra-v1-agent-missions-mes-missions">
                                <a href="#endpoints-GETapi-internal-terra-v1-agent-missions-mes-missions">GET api/internal/terra/v1/agent/missions/mes-missions</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-internal-terra-v1-agent-missions">
                                <a href="#endpoints-GETapi-internal-terra-v1-agent-missions">GET api/internal/terra/v1/agent/missions</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-internal-terra-v1-agent-missions--id-">
                                <a href="#endpoints-GETapi-internal-terra-v1-agent-missions--id-">GET api/internal/terra/v1/agent/missions/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-internal-terra-v1-agent-missions--id--rejoindre">
                                <a href="#endpoints-POSTapi-internal-terra-v1-agent-missions--id--rejoindre">POST api/internal/terra/v1/agent/missions/{id}/rejoindre</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-internal-terra-v1-agent-missions--id--formulaire">
                                <a href="#endpoints-GETapi-internal-terra-v1-agent-missions--id--formulaire">GET api/internal/terra/v1/agent/missions/{id}/formulaire</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-internal-terra-v1-agent-missions--id--formulaire-soumettre">
                                <a href="#endpoints-POSTapi-internal-terra-v1-agent-missions--id--formulaire-soumettre">POST api/internal/terra/v1/agent/missions/{id}/formulaire/soumettre</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-internal-terra-v1-agent-missions--id--mes-reponses">
                                <a href="#endpoints-GETapi-internal-terra-v1-agent-missions--id--mes-reponses">GET api/internal/terra/v1/agent/missions/{id}/mes-reponses</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-internal-terra-v1-agent-missions--id--statistiques">
                                <a href="#endpoints-GETapi-internal-terra-v1-agent-missions--id--statistiques">GET api/internal/terra/v1/agent/missions/{id}/statistiques</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-internal-terra-v1-agent-invitations">
                                <a href="#endpoints-GETapi-internal-terra-v1-agent-invitations">GET api/internal/terra/v1/agent/invitations</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-internal-terra-v1-agent-invitations--id-">
                                <a href="#endpoints-GETapi-internal-terra-v1-agent-invitations--id-">GET api/internal/terra/v1/agent/invitations/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-internal-terra-v1-agent-invitations--id--accepter">
                                <a href="#endpoints-POSTapi-internal-terra-v1-agent-invitations--id--accepter">POST api/internal/terra/v1/agent/invitations/{id}/accepter</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-internal-terra-v1-agent-invitations--id--refuser">
                                <a href="#endpoints-POSTapi-internal-terra-v1-agent-invitations--id--refuser">POST api/internal/terra/v1/agent/invitations/{id}/refuser</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-internal-terra-v1-agent-wallet">
                                <a href="#endpoints-GETapi-internal-terra-v1-agent-wallet">GET api/internal/terra/v1/agent/wallet</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-internal-terra-v1-agent-wallet-transactions">
                                <a href="#endpoints-GETapi-internal-terra-v1-agent-wallet-transactions">GET api/internal/terra/v1/agent/wallet/transactions</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-internal-terra-v1-agent-wallet-transactions--id-">
                                <a href="#endpoints-GETapi-internal-terra-v1-agent-wallet-transactions--id-">GET api/internal/terra/v1/agent/wallet/transactions/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-internal-terra-v1-agent-wallet-retrait">
                                <a href="#endpoints-POSTapi-internal-terra-v1-agent-wallet-retrait">POST api/internal/terra/v1/agent/wallet/retrait</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-internal-terra-v1-agent-wallet-retraits">
                                <a href="#endpoints-GETapi-internal-terra-v1-agent-wallet-retraits">GET api/internal/terra/v1/agent/wallet/retraits</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-internal-terra-v1-agent-wallet-retraits--id-">
                                <a href="#endpoints-GETapi-internal-terra-v1-agent-wallet-retraits--id-">GET api/internal/terra/v1/agent/wallet/retraits/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-internal-terra-v1-agent-wallet-retraits--id-">
                                <a href="#endpoints-DELETEapi-internal-terra-v1-agent-wallet-retraits--id-">DELETE api/internal/terra/v1/agent/wallet/retraits/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-internal-terra-v1-business-register">
                                <a href="#endpoints-POSTapi-internal-terra-v1-business-register">POST api/internal/terra/v1/business/register</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-internal-terra-v1-business-login">
                                <a href="#endpoints-POSTapi-internal-terra-v1-business-login">POST api/internal/terra/v1/business/login</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-internal-terra-v1-business-send-otp">
                                <a href="#endpoints-POSTapi-internal-terra-v1-business-send-otp">POST api/internal/terra/v1/business/send-otp</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-internal-terra-v1-business-verify-otp">
                                <a href="#endpoints-POSTapi-internal-terra-v1-business-verify-otp">POST api/internal/terra/v1/business/verify-otp</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-internal-terra-v1-business-forgot-password">
                                <a href="#endpoints-POSTapi-internal-terra-v1-business-forgot-password">POST api/internal/terra/v1/business/forgot-password</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-internal-terra-v1-business-reset-password">
                                <a href="#endpoints-POSTapi-internal-terra-v1-business-reset-password">POST api/internal/terra/v1/business/reset-password</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-internal-terra-v1-business-logout">
                                <a href="#endpoints-POSTapi-internal-terra-v1-business-logout">POST api/internal/terra/v1/business/logout</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-internal-terra-v1-business-me">
                                <a href="#endpoints-GETapi-internal-terra-v1-business-me">GET api/internal/terra/v1/business/me</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-internal-terra-v1-business-me">
                                <a href="#endpoints-PUTapi-internal-terra-v1-business-me">PUT api/internal/terra/v1/business/me</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-internal-terra-v1-business-profile">
                                <a href="#endpoints-GETapi-internal-terra-v1-business-profile">GET api/internal/terra/v1/business/profile</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-internal-terra-v1-business-profile">
                                <a href="#endpoints-PUTapi-internal-terra-v1-business-profile">PUT api/internal/terra/v1/business/profile</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-internal-terra-v1-business-profile-logo">
                                <a href="#endpoints-POSTapi-internal-terra-v1-business-profile-logo">POST api/internal/terra/v1/business/profile/logo</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-internal-terra-v1-business-missions">
                                <a href="#endpoints-GETapi-internal-terra-v1-business-missions">GET api/internal/terra/v1/business/missions</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-internal-terra-v1-business-missions">
                                <a href="#endpoints-POSTapi-internal-terra-v1-business-missions">POST api/internal/terra/v1/business/missions</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-internal-terra-v1-business-missions--id-">
                                <a href="#endpoints-GETapi-internal-terra-v1-business-missions--id-">GET api/internal/terra/v1/business/missions/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-internal-terra-v1-business-missions--id-">
                                <a href="#endpoints-PUTapi-internal-terra-v1-business-missions--id-">PUT api/internal/terra/v1/business/missions/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-internal-terra-v1-business-missions--id-">
                                <a href="#endpoints-DELETEapi-internal-terra-v1-business-missions--id-">DELETE api/internal/terra/v1/business/missions/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-internal-terra-v1-business-missions--id--publier">
                                <a href="#endpoints-POSTapi-internal-terra-v1-business-missions--id--publier">POST api/internal/terra/v1/business/missions/{id}/publier</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-internal-terra-v1-business-missions--id--terminer">
                                <a href="#endpoints-POSTapi-internal-terra-v1-business-missions--id--terminer">POST api/internal/terra/v1/business/missions/{id}/terminer</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-internal-terra-v1-business-missions--id--statistiques">
                                <a href="#endpoints-GETapi-internal-terra-v1-business-missions--id--statistiques">GET api/internal/terra/v1/business/missions/{id}/statistiques</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-internal-terra-v1-business-missions--id--formulaires">
                                <a href="#endpoints-GETapi-internal-terra-v1-business-missions--id--formulaires">GET api/internal/terra/v1/business/missions/{id}/formulaires</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-internal-terra-v1-business-missions--id--formulaires">
                                <a href="#endpoints-POSTapi-internal-terra-v1-business-missions--id--formulaires">POST api/internal/terra/v1/business/missions/{id}/formulaires</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-internal-terra-v1-business-missions--id--formulaires--fid-">
                                <a href="#endpoints-PUTapi-internal-terra-v1-business-missions--id--formulaires--fid-">PUT api/internal/terra/v1/business/missions/{id}/formulaires/{fid}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-internal-terra-v1-business-missions--id--formulaires--fid-">
                                <a href="#endpoints-DELETEapi-internal-terra-v1-business-missions--id--formulaires--fid-">DELETE api/internal/terra/v1/business/missions/{id}/formulaires/{fid}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-internal-terra-v1-business-formulaires--fid--champs">
                                <a href="#endpoints-POSTapi-internal-terra-v1-business-formulaires--fid--champs">POST api/internal/terra/v1/business/formulaires/{fid}/champs</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-internal-terra-v1-business-formulaires--fid--champs--cid-">
                                <a href="#endpoints-PUTapi-internal-terra-v1-business-formulaires--fid--champs--cid-">PUT api/internal/terra/v1/business/formulaires/{fid}/champs/{cid}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-internal-terra-v1-business-formulaires--fid--champs--cid-">
                                <a href="#endpoints-DELETEapi-internal-terra-v1-business-formulaires--fid--champs--cid-">DELETE api/internal/terra/v1/business/formulaires/{fid}/champs/{cid}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-internal-terra-v1-business-formulaires--fid--champs-ordre">
                                <a href="#endpoints-PUTapi-internal-terra-v1-business-formulaires--fid--champs-ordre">PUT api/internal/terra/v1/business/formulaires/{fid}/champs/ordre</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-internal-terra-v1-business-champs--cid--parametres">
                                <a href="#endpoints-PUTapi-internal-terra-v1-business-champs--cid--parametres">PUT api/internal/terra/v1/business/champs/{cid}/parametres</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-internal-terra-v1-business-missions--id--agents">
                                <a href="#endpoints-GETapi-internal-terra-v1-business-missions--id--agents">GET api/internal/terra/v1/business/missions/{id}/agents</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-internal-terra-v1-business-missions--id--agents-inviter">
                                <a href="#endpoints-POSTapi-internal-terra-v1-business-missions--id--agents-inviter">POST api/internal/terra/v1/business/missions/{id}/agents/inviter</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-internal-terra-v1-business-missions--id--agents--aid-">
                                <a href="#endpoints-GETapi-internal-terra-v1-business-missions--id--agents--aid-">GET api/internal/terra/v1/business/missions/{id}/agents/{aid}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-internal-terra-v1-business-missions--id--agents--aid-">
                                <a href="#endpoints-DELETEapi-internal-terra-v1-business-missions--id--agents--aid-">DELETE api/internal/terra/v1/business/missions/{id}/agents/{aid}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-internal-terra-v1-business-missions--id--agents--aid--objectif">
                                <a href="#endpoints-PUTapi-internal-terra-v1-business-missions--id--agents--aid--objectif">PUT api/internal/terra/v1/business/missions/{id}/agents/{aid}/objectif</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-internal-terra-v1-business-missions--id--agents--aid--statistiques">
                                <a href="#endpoints-GETapi-internal-terra-v1-business-missions--id--agents--aid--statistiques">GET api/internal/terra/v1/business/missions/{id}/agents/{aid}/statistiques</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-internal-terra-v1-business-missions--id--agents--aid--reponses">
                                <a href="#endpoints-GETapi-internal-terra-v1-business-missions--id--agents--aid--reponses">GET api/internal/terra/v1/business/missions/{id}/agents/{aid}/reponses</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-internal-terra-v1-business-missions--id--reponses-export">
                                <a href="#endpoints-GETapi-internal-terra-v1-business-missions--id--reponses-export">GET api/internal/terra/v1/business/missions/{id}/reponses/export</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-internal-terra-v1-business-missions--id--reponses">
                                <a href="#endpoints-GETapi-internal-terra-v1-business-missions--id--reponses">GET api/internal/terra/v1/business/missions/{id}/reponses</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-internal-terra-v1-business-missions--id--reponses--rid-">
                                <a href="#endpoints-GETapi-internal-terra-v1-business-missions--id--reponses--rid-">GET api/internal/terra/v1/business/missions/{id}/reponses/{rid}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-internal-terra-v1-business-missions--id--reponses--rid--valider">
                                <a href="#endpoints-PUTapi-internal-terra-v1-business-missions--id--reponses--rid--valider">PUT api/internal/terra/v1/business/missions/{id}/reponses/{rid}/valider</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-internal-terra-v1-business-missions--id--reponses--rid--rejeter">
                                <a href="#endpoints-PUTapi-internal-terra-v1-business-missions--id--reponses--rid--rejeter">PUT api/internal/terra/v1/business/missions/{id}/reponses/{rid}/rejeter</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-internal-terra-v1-business-missions--id--plans">
                                <a href="#endpoints-GETapi-internal-terra-v1-business-missions--id--plans">GET api/internal/terra/v1/business/missions/{id}/plans</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-internal-terra-v1-business-missions--id--plans">
                                <a href="#endpoints-POSTapi-internal-terra-v1-business-missions--id--plans">POST api/internal/terra/v1/business/missions/{id}/plans</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-internal-terra-v1-business-missions--id--plans--pid-">
                                <a href="#endpoints-PUTapi-internal-terra-v1-business-missions--id--plans--pid-">PUT api/internal/terra/v1/business/missions/{id}/plans/{pid}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-internal-terra-v1-business-missions--id--plans--pid-">
                                <a href="#endpoints-DELETEapi-internal-terra-v1-business-missions--id--plans--pid-">DELETE api/internal/terra/v1/business/missions/{id}/plans/{pid}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-internal-terra-v1-business-missions--id--modes-paiement">
                                <a href="#endpoints-GETapi-internal-terra-v1-business-missions--id--modes-paiement">GET api/internal/terra/v1/business/missions/{id}/modes-paiement</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-internal-terra-v1-business-missions--id--modes-paiement">
                                <a href="#endpoints-POSTapi-internal-terra-v1-business-missions--id--modes-paiement">POST api/internal/terra/v1/business/missions/{id}/modes-paiement</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-internal-terra-v1-business-missions--id--modes-paiement--mid-">
                                <a href="#endpoints-DELETEapi-internal-terra-v1-business-missions--id--modes-paiement--mid-">DELETE api/internal/terra/v1/business/missions/{id}/modes-paiement/{mid}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-internal-terra-v1-business-missions--id--agents-payer-tous">
                                <a href="#endpoints-POSTapi-internal-terra-v1-business-missions--id--agents-payer-tous">POST api/internal/terra/v1/business/missions/{id}/agents/payer-tous</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-internal-terra-v1-business-missions--id--agents--aid--payer">
                                <a href="#endpoints-POSTapi-internal-terra-v1-business-missions--id--agents--aid--payer">POST api/internal/terra/v1/business/missions/{id}/agents/{aid}/payer</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-internal-terra-v1-business-missions--id--paiements">
                                <a href="#endpoints-GETapi-internal-terra-v1-business-missions--id--paiements">GET api/internal/terra/v1/business/missions/{id}/paiements</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-internal-terra-v1-statistiques-dashboard">
                                <a href="#endpoints-GETapi-internal-terra-v1-statistiques-dashboard">GET api/internal/terra/v1/statistiques/dashboard</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-internal-terra-v1-statistiques-mission--missionId-">
                                <a href="#endpoints-GETapi-internal-terra-v1-statistiques-mission--missionId-">GET api/internal/terra/v1/statistiques/mission/{missionId}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-internal-terra-v1-statistiques-agent--agentId-">
                                <a href="#endpoints-GETapi-internal-terra-v1-statistiques-agent--agentId-">GET api/internal/terra/v1/statistiques/agent/{agentId}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-internal-terra-v1-statistiques-performance">
                                <a href="#endpoints-GETapi-internal-terra-v1-statistiques-performance">GET api/internal/terra/v1/statistiques/performance</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: March 31, 2026</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-documentation">Handles the API request and renders the Swagger documentation view.</h2>

<p>
</p>



<span id="example-requests-GETapi-documentation">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/documentation" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/documentation"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-documentation">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-documentation" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-documentation"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-documentation"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-documentation" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-documentation">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-documentation" data-method="GET"
      data-path="api/documentation"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-documentation', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-documentation"
                    onclick="tryItOut('GETapi-documentation');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-documentation"
                    onclick="cancelTryOut('GETapi-documentation');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-documentation"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/documentation</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-documentation"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-documentation"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-oauth2-callback">Handles the OAuth2 callback and retrieves the required file for the redirect.</h2>

<p>
</p>



<span id="example-requests-GETapi-oauth2-callback">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/oauth2-callback" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/oauth2-callback"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-oauth2-callback">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=utf-8
cache-control: no-cache, private
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!doctype html&gt;
&lt;html lang=&quot;en-US&quot;&gt;
&lt;body&gt;
&lt;script src=&quot;oauth2-redirect.js&quot;&gt;&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</code>
 </pre>
    </span>
<span id="execution-results-GETapi-oauth2-callback" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-oauth2-callback"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-oauth2-callback"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-oauth2-callback" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-oauth2-callback">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-oauth2-callback" data-method="GET"
      data-path="api/oauth2-callback"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-oauth2-callback', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-oauth2-callback"
                    onclick="tryItOut('GETapi-oauth2-callback');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-oauth2-callback"
                    onclick="cancelTryOut('GETapi-oauth2-callback');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-oauth2-callback"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/oauth2-callback</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-oauth2-callback"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-oauth2-callback"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-user">GET api/user</h2>

<p>
</p>



<span id="example-requests-GETapi-user">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/user" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-user">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-user" data-method="GET"
      data-path="api/user"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-user"
                    onclick="tryItOut('GETapi-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-user"
                    onclick="cancelTryOut('GETapi-user');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-user"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/user</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-internal-terra-v1-referentiels-pays">GET api/internal/terra/v1/referentiels/pays</h2>

<p>
</p>



<span id="example-requests-GETapi-internal-terra-v1-referentiels-pays">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/referentiels/pays" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/referentiels/pays"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-internal-terra-v1-referentiels-pays">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: []
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-internal-terra-v1-referentiels-pays" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-internal-terra-v1-referentiels-pays"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-internal-terra-v1-referentiels-pays"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-internal-terra-v1-referentiels-pays" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-internal-terra-v1-referentiels-pays">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-internal-terra-v1-referentiels-pays" data-method="GET"
      data-path="api/internal/terra/v1/referentiels/pays"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-internal-terra-v1-referentiels-pays', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-internal-terra-v1-referentiels-pays"
                    onclick="tryItOut('GETapi-internal-terra-v1-referentiels-pays');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-internal-terra-v1-referentiels-pays"
                    onclick="cancelTryOut('GETapi-internal-terra-v1-referentiels-pays');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-internal-terra-v1-referentiels-pays"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/internal/terra/v1/referentiels/pays</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-internal-terra-v1-referentiels-pays"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-internal-terra-v1-referentiels-pays"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-internal-terra-v1-referentiels-pays--id--villes">GET api/internal/terra/v1/referentiels/pays/{id}/villes</h2>

<p>
</p>



<span id="example-requests-GETapi-internal-terra-v1-referentiels-pays--id--villes">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/referentiels/pays/consequatur/villes" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/referentiels/pays/consequatur/villes"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-internal-terra-v1-referentiels-pays--id--villes">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Pays introuvable&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-internal-terra-v1-referentiels-pays--id--villes" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-internal-terra-v1-referentiels-pays--id--villes"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-internal-terra-v1-referentiels-pays--id--villes"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-internal-terra-v1-referentiels-pays--id--villes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-internal-terra-v1-referentiels-pays--id--villes">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-internal-terra-v1-referentiels-pays--id--villes" data-method="GET"
      data-path="api/internal/terra/v1/referentiels/pays/{id}/villes"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-internal-terra-v1-referentiels-pays--id--villes', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-internal-terra-v1-referentiels-pays--id--villes"
                    onclick="tryItOut('GETapi-internal-terra-v1-referentiels-pays--id--villes');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-internal-terra-v1-referentiels-pays--id--villes"
                    onclick="cancelTryOut('GETapi-internal-terra-v1-referentiels-pays--id--villes');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-internal-terra-v1-referentiels-pays--id--villes"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/internal/terra/v1/referentiels/pays/{id}/villes</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-internal-terra-v1-referentiels-pays--id--villes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-internal-terra-v1-referentiels-pays--id--villes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-internal-terra-v1-referentiels-pays--id--villes"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the pay. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-internal-terra-v1-referentiels-villes--id--communes">GET api/internal/terra/v1/referentiels/villes/{id}/communes</h2>

<p>
</p>



<span id="example-requests-GETapi-internal-terra-v1-referentiels-villes--id--communes">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/referentiels/villes/consequatur/communes" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/referentiels/villes/consequatur/communes"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-internal-terra-v1-referentiels-villes--id--communes">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Ville introuvable&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-internal-terra-v1-referentiels-villes--id--communes" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-internal-terra-v1-referentiels-villes--id--communes"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-internal-terra-v1-referentiels-villes--id--communes"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-internal-terra-v1-referentiels-villes--id--communes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-internal-terra-v1-referentiels-villes--id--communes">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-internal-terra-v1-referentiels-villes--id--communes" data-method="GET"
      data-path="api/internal/terra/v1/referentiels/villes/{id}/communes"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-internal-terra-v1-referentiels-villes--id--communes', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-internal-terra-v1-referentiels-villes--id--communes"
                    onclick="tryItOut('GETapi-internal-terra-v1-referentiels-villes--id--communes');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-internal-terra-v1-referentiels-villes--id--communes"
                    onclick="cancelTryOut('GETapi-internal-terra-v1-referentiels-villes--id--communes');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-internal-terra-v1-referentiels-villes--id--communes"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/internal/terra/v1/referentiels/villes/{id}/communes</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-internal-terra-v1-referentiels-villes--id--communes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-internal-terra-v1-referentiels-villes--id--communes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-internal-terra-v1-referentiels-villes--id--communes"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the ville. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-internal-terra-v1-referentiels-etudes">GET api/internal/terra/v1/referentiels/etudes</h2>

<p>
</p>



<span id="example-requests-GETapi-internal-terra-v1-referentiels-etudes">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/referentiels/etudes" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/referentiels/etudes"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-internal-terra-v1-referentiels-etudes">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: []
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-internal-terra-v1-referentiels-etudes" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-internal-terra-v1-referentiels-etudes"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-internal-terra-v1-referentiels-etudes"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-internal-terra-v1-referentiels-etudes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-internal-terra-v1-referentiels-etudes">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-internal-terra-v1-referentiels-etudes" data-method="GET"
      data-path="api/internal/terra/v1/referentiels/etudes"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-internal-terra-v1-referentiels-etudes', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-internal-terra-v1-referentiels-etudes"
                    onclick="tryItOut('GETapi-internal-terra-v1-referentiels-etudes');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-internal-terra-v1-referentiels-etudes"
                    onclick="cancelTryOut('GETapi-internal-terra-v1-referentiels-etudes');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-internal-terra-v1-referentiels-etudes"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/internal/terra/v1/referentiels/etudes</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-internal-terra-v1-referentiels-etudes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-internal-terra-v1-referentiels-etudes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-internal-terra-v1-referentiels-diplomes">GET api/internal/terra/v1/referentiels/diplomes</h2>

<p>
</p>



<span id="example-requests-GETapi-internal-terra-v1-referentiels-diplomes">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/referentiels/diplomes" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/referentiels/diplomes"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-internal-terra-v1-referentiels-diplomes">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: []
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-internal-terra-v1-referentiels-diplomes" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-internal-terra-v1-referentiels-diplomes"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-internal-terra-v1-referentiels-diplomes"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-internal-terra-v1-referentiels-diplomes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-internal-terra-v1-referentiels-diplomes">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-internal-terra-v1-referentiels-diplomes" data-method="GET"
      data-path="api/internal/terra/v1/referentiels/diplomes"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-internal-terra-v1-referentiels-diplomes', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-internal-terra-v1-referentiels-diplomes"
                    onclick="tryItOut('GETapi-internal-terra-v1-referentiels-diplomes');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-internal-terra-v1-referentiels-diplomes"
                    onclick="cancelTryOut('GETapi-internal-terra-v1-referentiels-diplomes');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-internal-terra-v1-referentiels-diplomes"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/internal/terra/v1/referentiels/diplomes</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-internal-terra-v1-referentiels-diplomes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-internal-terra-v1-referentiels-diplomes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-internal-terra-v1-referentiels-langues">GET api/internal/terra/v1/referentiels/langues</h2>

<p>
</p>



<span id="example-requests-GETapi-internal-terra-v1-referentiels-langues">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/referentiels/langues" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/referentiels/langues"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-internal-terra-v1-referentiels-langues">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: []
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-internal-terra-v1-referentiels-langues" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-internal-terra-v1-referentiels-langues"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-internal-terra-v1-referentiels-langues"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-internal-terra-v1-referentiels-langues" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-internal-terra-v1-referentiels-langues">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-internal-terra-v1-referentiels-langues" data-method="GET"
      data-path="api/internal/terra/v1/referentiels/langues"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-internal-terra-v1-referentiels-langues', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-internal-terra-v1-referentiels-langues"
                    onclick="tryItOut('GETapi-internal-terra-v1-referentiels-langues');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-internal-terra-v1-referentiels-langues"
                    onclick="cancelTryOut('GETapi-internal-terra-v1-referentiels-langues');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-internal-terra-v1-referentiels-langues"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/internal/terra/v1/referentiels/langues</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-internal-terra-v1-referentiels-langues"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-internal-terra-v1-referentiels-langues"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-internal-terra-v1-referentiels-secteurs">GET api/internal/terra/v1/referentiels/secteurs</h2>

<p>
</p>



<span id="example-requests-GETapi-internal-terra-v1-referentiels-secteurs">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/referentiels/secteurs" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/referentiels/secteurs"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-internal-terra-v1-referentiels-secteurs">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: []
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-internal-terra-v1-referentiels-secteurs" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-internal-terra-v1-referentiels-secteurs"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-internal-terra-v1-referentiels-secteurs"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-internal-terra-v1-referentiels-secteurs" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-internal-terra-v1-referentiels-secteurs">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-internal-terra-v1-referentiels-secteurs" data-method="GET"
      data-path="api/internal/terra/v1/referentiels/secteurs"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-internal-terra-v1-referentiels-secteurs', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-internal-terra-v1-referentiels-secteurs"
                    onclick="tryItOut('GETapi-internal-terra-v1-referentiels-secteurs');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-internal-terra-v1-referentiels-secteurs"
                    onclick="cancelTryOut('GETapi-internal-terra-v1-referentiels-secteurs');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-internal-terra-v1-referentiels-secteurs"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/internal/terra/v1/referentiels/secteurs</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-internal-terra-v1-referentiels-secteurs"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-internal-terra-v1-referentiels-secteurs"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-internal-terra-v1-agent-register">POST api/internal/terra/v1/agent/register</h2>

<p>
</p>



<span id="example-requests-POSTapi-internal-terra-v1-agent-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/agent/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"genre_agent\": \"F\",
    \"name_agent\": \"vmqeopfuudtdsufvyvddq\",
    \"lastname_agent\": \"amniihfqcoynlazghdtqt\",
    \"profession_agent\": \"qxbajwbpilpmufinllwlo\",
    \"naissance_agent\": \"2026-03-31T10:52:59\",
    \"email_agent\": \"schmitt.beulah@example.org\",
    \"phone_agent\": \"consequatur\",
    \"password\": \"[2UZ5ij-e\\/dl4\",
    \"diplome_id\": \"e15a9bfb-eace-33e3-89df-1a8cdec403e3\",
    \"etude_id\": \"8a4d4166-21a5-3744-b088-bc0a097f55a7\",
    \"city_id\": \"92fbec1e-82d1-38b4-a2e3-a0d9f7fdd61a\",
    \"country_id\": \"462ee709-6d9f-345a-95e6-76f833111fb8\",
    \"commune_id\": \"1915c795-5d1c-3def-965b-5abe034dd150\",
    \"experience_mission_agent\": \"non\",
    \"permis_agent\": \"non\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "genre_agent": "F",
    "name_agent": "vmqeopfuudtdsufvyvddq",
    "lastname_agent": "amniihfqcoynlazghdtqt",
    "profession_agent": "qxbajwbpilpmufinllwlo",
    "naissance_agent": "2026-03-31T10:52:59",
    "email_agent": "schmitt.beulah@example.org",
    "phone_agent": "consequatur",
    "password": "[2UZ5ij-e\/dl4",
    "diplome_id": "e15a9bfb-eace-33e3-89df-1a8cdec403e3",
    "etude_id": "8a4d4166-21a5-3744-b088-bc0a097f55a7",
    "city_id": "92fbec1e-82d1-38b4-a2e3-a0d9f7fdd61a",
    "country_id": "462ee709-6d9f-345a-95e6-76f833111fb8",
    "commune_id": "1915c795-5d1c-3def-965b-5abe034dd150",
    "experience_mission_agent": "non",
    "permis_agent": "non"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-agent-register">
</span>
<span id="execution-results-POSTapi-internal-terra-v1-agent-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-internal-terra-v1-agent-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-internal-terra-v1-agent-register"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-internal-terra-v1-agent-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-internal-terra-v1-agent-register">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-internal-terra-v1-agent-register" data-method="POST"
      data-path="api/internal/terra/v1/agent/register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-internal-terra-v1-agent-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-internal-terra-v1-agent-register"
                    onclick="tryItOut('POSTapi-internal-terra-v1-agent-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-internal-terra-v1-agent-register"
                    onclick="cancelTryOut('POSTapi-internal-terra-v1-agent-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-internal-terra-v1-agent-register"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/internal/terra/v1/agent/register</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-internal-terra-v1-agent-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-internal-terra-v1-agent-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>genre_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="genre_agent"                data-endpoint="POSTapi-internal-terra-v1-agent-register"
               value="F"
               data-component="body">
    <br>
<p>Example: <code>F</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>M</code></li> <li><code>F</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name_agent"                data-endpoint="POSTapi-internal-terra-v1-agent-register"
               value="vmqeopfuudtdsufvyvddq"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>vmqeopfuudtdsufvyvddq</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>lastname_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="lastname_agent"                data-endpoint="POSTapi-internal-terra-v1-agent-register"
               value="amniihfqcoynlazghdtqt"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>amniihfqcoynlazghdtqt</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>profession_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="profession_agent"                data-endpoint="POSTapi-internal-terra-v1-agent-register"
               value="qxbajwbpilpmufinllwlo"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>qxbajwbpilpmufinllwlo</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>naissance_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="naissance_agent"                data-endpoint="POSTapi-internal-terra-v1-agent-register"
               value="2026-03-31T10:52:59"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2026-03-31T10:52:59</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email_agent"                data-endpoint="POSTapi-internal-terra-v1-agent-register"
               value="schmitt.beulah@example.org"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>schmitt.beulah@example.org</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone_agent"                data-endpoint="POSTapi-internal-terra-v1-agent-register"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-internal-terra-v1-agent-register"
               value="[2UZ5ij-e/dl4"
               data-component="body">
    <br>
<p>Must be at least 6 characters. Example: <code>[2UZ5ij-e/dl4</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>diplome_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="diplome_id"                data-endpoint="POSTapi-internal-terra-v1-agent-register"
               value="e15a9bfb-eace-33e3-89df-1a8cdec403e3"
               data-component="body">
    <br>
<p>Must be a valid UUID. The <code>id_diplome</code> of an existing record in the diplomes table. Example: <code>e15a9bfb-eace-33e3-89df-1a8cdec403e3</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>etude_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="etude_id"                data-endpoint="POSTapi-internal-terra-v1-agent-register"
               value="8a4d4166-21a5-3744-b088-bc0a097f55a7"
               data-component="body">
    <br>
<p>Must be a valid UUID. The <code>id_etude</code> of an existing record in the etudes table. Example: <code>8a4d4166-21a5-3744-b088-bc0a097f55a7</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>city_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="city_id"                data-endpoint="POSTapi-internal-terra-v1-agent-register"
               value="92fbec1e-82d1-38b4-a2e3-a0d9f7fdd61a"
               data-component="body">
    <br>
<p>Must be a valid UUID. The <code>id_city</code> of an existing record in the city table. Example: <code>92fbec1e-82d1-38b4-a2e3-a0d9f7fdd61a</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>country_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="country_id"                data-endpoint="POSTapi-internal-terra-v1-agent-register"
               value="462ee709-6d9f-345a-95e6-76f833111fb8"
               data-component="body">
    <br>
<p>Must be a valid UUID. The <code>id_country</code> of an existing record in the country table. Example: <code>462ee709-6d9f-345a-95e6-76f833111fb8</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>commune_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="commune_id"                data-endpoint="POSTapi-internal-terra-v1-agent-register"
               value="1915c795-5d1c-3def-965b-5abe034dd150"
               data-component="body">
    <br>
<p>Must be a valid UUID. The <code>id_commune</code> of an existing record in the commune table. Example: <code>1915c795-5d1c-3def-965b-5abe034dd150</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>experience_mission_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="experience_mission_agent"                data-endpoint="POSTapi-internal-terra-v1-agent-register"
               value="non"
               data-component="body">
    <br>
<p>Example: <code>non</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>oui</code></li> <li><code>non</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>permis_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="permis_agent"                data-endpoint="POSTapi-internal-terra-v1-agent-register"
               value="non"
               data-component="body">
    <br>
<p>Example: <code>non</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>oui</code></li> <li><code>non</code></li></ul>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-internal-terra-v1-agent-login">POST api/internal/terra/v1/agent/login</h2>

<p>
</p>



<span id="example-requests-POSTapi-internal-terra-v1-agent-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/agent/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email_agent\": \"qkunze@example.com\",
    \"password\": \"O[2UZ5ij-e\\/dl4m{o,\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email_agent": "qkunze@example.com",
    "password": "O[2UZ5ij-e\/dl4m{o,"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-agent-login">
</span>
<span id="execution-results-POSTapi-internal-terra-v1-agent-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-internal-terra-v1-agent-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-internal-terra-v1-agent-login"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-internal-terra-v1-agent-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-internal-terra-v1-agent-login">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-internal-terra-v1-agent-login" data-method="POST"
      data-path="api/internal/terra/v1/agent/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-internal-terra-v1-agent-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-internal-terra-v1-agent-login"
                    onclick="tryItOut('POSTapi-internal-terra-v1-agent-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-internal-terra-v1-agent-login"
                    onclick="cancelTryOut('POSTapi-internal-terra-v1-agent-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-internal-terra-v1-agent-login"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/internal/terra/v1/agent/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-internal-terra-v1-agent-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-internal-terra-v1-agent-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email_agent"                data-endpoint="POSTapi-internal-terra-v1-agent-login"
               value="qkunze@example.com"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>qkunze@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-internal-terra-v1-agent-login"
               value="O[2UZ5ij-e/dl4m{o,"
               data-component="body">
    <br>
<p>Example: <code>O[2UZ5ij-e/dl4m{o,</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-internal-terra-v1-agent-send-otp">POST api/internal/terra/v1/agent/send-otp</h2>

<p>
</p>



<span id="example-requests-POSTapi-internal-terra-v1-agent-send-otp">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/agent/send-otp" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"phone_agent\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/send-otp"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "phone_agent": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-agent-send-otp">
</span>
<span id="execution-results-POSTapi-internal-terra-v1-agent-send-otp" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-internal-terra-v1-agent-send-otp"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-internal-terra-v1-agent-send-otp"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-internal-terra-v1-agent-send-otp" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-internal-terra-v1-agent-send-otp">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-internal-terra-v1-agent-send-otp" data-method="POST"
      data-path="api/internal/terra/v1/agent/send-otp"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-internal-terra-v1-agent-send-otp', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-internal-terra-v1-agent-send-otp"
                    onclick="tryItOut('POSTapi-internal-terra-v1-agent-send-otp');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-internal-terra-v1-agent-send-otp"
                    onclick="cancelTryOut('POSTapi-internal-terra-v1-agent-send-otp');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-internal-terra-v1-agent-send-otp"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/internal/terra/v1/agent/send-otp</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-internal-terra-v1-agent-send-otp"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-internal-terra-v1-agent-send-otp"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone_agent"                data-endpoint="POSTapi-internal-terra-v1-agent-send-otp"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-internal-terra-v1-agent-verify-otp">POST api/internal/terra/v1/agent/verify-otp</h2>

<p>
</p>



<span id="example-requests-POSTapi-internal-terra-v1-agent-verify-otp">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/agent/verify-otp" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"phone_agent\": \"consequatur\",
    \"otp\": 17
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/verify-otp"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "phone_agent": "consequatur",
    "otp": 17
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-agent-verify-otp">
</span>
<span id="execution-results-POSTapi-internal-terra-v1-agent-verify-otp" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-internal-terra-v1-agent-verify-otp"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-internal-terra-v1-agent-verify-otp"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-internal-terra-v1-agent-verify-otp" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-internal-terra-v1-agent-verify-otp">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-internal-terra-v1-agent-verify-otp" data-method="POST"
      data-path="api/internal/terra/v1/agent/verify-otp"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-internal-terra-v1-agent-verify-otp', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-internal-terra-v1-agent-verify-otp"
                    onclick="tryItOut('POSTapi-internal-terra-v1-agent-verify-otp');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-internal-terra-v1-agent-verify-otp"
                    onclick="cancelTryOut('POSTapi-internal-terra-v1-agent-verify-otp');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-internal-terra-v1-agent-verify-otp"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/internal/terra/v1/agent/verify-otp</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-internal-terra-v1-agent-verify-otp"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-internal-terra-v1-agent-verify-otp"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone_agent"                data-endpoint="POSTapi-internal-terra-v1-agent-verify-otp"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>otp</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="otp"                data-endpoint="POSTapi-internal-terra-v1-agent-verify-otp"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-internal-terra-v1-agent-forgot-password">POST api/internal/terra/v1/agent/forgot-password</h2>

<p>
</p>



<span id="example-requests-POSTapi-internal-terra-v1-agent-forgot-password">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/agent/forgot-password" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email_agent\": \"qkunze@example.com\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/forgot-password"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email_agent": "qkunze@example.com"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-agent-forgot-password">
</span>
<span id="execution-results-POSTapi-internal-terra-v1-agent-forgot-password" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-internal-terra-v1-agent-forgot-password"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-internal-terra-v1-agent-forgot-password"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-internal-terra-v1-agent-forgot-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-internal-terra-v1-agent-forgot-password">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-internal-terra-v1-agent-forgot-password" data-method="POST"
      data-path="api/internal/terra/v1/agent/forgot-password"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-internal-terra-v1-agent-forgot-password', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-internal-terra-v1-agent-forgot-password"
                    onclick="tryItOut('POSTapi-internal-terra-v1-agent-forgot-password');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-internal-terra-v1-agent-forgot-password"
                    onclick="cancelTryOut('POSTapi-internal-terra-v1-agent-forgot-password');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-internal-terra-v1-agent-forgot-password"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/internal/terra/v1/agent/forgot-password</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-internal-terra-v1-agent-forgot-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-internal-terra-v1-agent-forgot-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email_agent"                data-endpoint="POSTapi-internal-terra-v1-agent-forgot-password"
               value="qkunze@example.com"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>qkunze@example.com</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-internal-terra-v1-agent-reset-password">POST api/internal/terra/v1/agent/reset-password</h2>

<p>
</p>



<span id="example-requests-POSTapi-internal-terra-v1-agent-reset-password">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/agent/reset-password" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email_agent\": \"qkunze@example.com\",
    \"otp\": 17,
    \"password\": \"[2UZ5ij-e\\/dl4\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/reset-password"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email_agent": "qkunze@example.com",
    "otp": 17,
    "password": "[2UZ5ij-e\/dl4"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-agent-reset-password">
</span>
<span id="execution-results-POSTapi-internal-terra-v1-agent-reset-password" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-internal-terra-v1-agent-reset-password"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-internal-terra-v1-agent-reset-password"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-internal-terra-v1-agent-reset-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-internal-terra-v1-agent-reset-password">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-internal-terra-v1-agent-reset-password" data-method="POST"
      data-path="api/internal/terra/v1/agent/reset-password"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-internal-terra-v1-agent-reset-password', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-internal-terra-v1-agent-reset-password"
                    onclick="tryItOut('POSTapi-internal-terra-v1-agent-reset-password');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-internal-terra-v1-agent-reset-password"
                    onclick="cancelTryOut('POSTapi-internal-terra-v1-agent-reset-password');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-internal-terra-v1-agent-reset-password"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/internal/terra/v1/agent/reset-password</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-internal-terra-v1-agent-reset-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-internal-terra-v1-agent-reset-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email_agent"                data-endpoint="POSTapi-internal-terra-v1-agent-reset-password"
               value="qkunze@example.com"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>qkunze@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>otp</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="otp"                data-endpoint="POSTapi-internal-terra-v1-agent-reset-password"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-internal-terra-v1-agent-reset-password"
               value="[2UZ5ij-e/dl4"
               data-component="body">
    <br>
<p>Must be at least 6 characters. Example: <code>[2UZ5ij-e/dl4</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-internal-terra-v1-agent-logout">POST api/internal/terra/v1/agent/logout</h2>

<p>
</p>



<span id="example-requests-POSTapi-internal-terra-v1-agent-logout">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/agent/logout" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/logout"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-agent-logout">
</span>
<span id="execution-results-POSTapi-internal-terra-v1-agent-logout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-internal-terra-v1-agent-logout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-internal-terra-v1-agent-logout"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-internal-terra-v1-agent-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-internal-terra-v1-agent-logout">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-internal-terra-v1-agent-logout" data-method="POST"
      data-path="api/internal/terra/v1/agent/logout"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-internal-terra-v1-agent-logout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-internal-terra-v1-agent-logout"
                    onclick="tryItOut('POSTapi-internal-terra-v1-agent-logout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-internal-terra-v1-agent-logout"
                    onclick="cancelTryOut('POSTapi-internal-terra-v1-agent-logout');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-internal-terra-v1-agent-logout"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/internal/terra/v1/agent/logout</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-internal-terra-v1-agent-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-internal-terra-v1-agent-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-internal-terra-v1-agent-me">GET api/internal/terra/v1/agent/me</h2>

<p>
</p>



<span id="example-requests-GETapi-internal-terra-v1-agent-me">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/agent/me" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/me"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-internal-terra-v1-agent-me">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-internal-terra-v1-agent-me" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-internal-terra-v1-agent-me"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-internal-terra-v1-agent-me"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-internal-terra-v1-agent-me" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-internal-terra-v1-agent-me">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-internal-terra-v1-agent-me" data-method="GET"
      data-path="api/internal/terra/v1/agent/me"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-internal-terra-v1-agent-me', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-internal-terra-v1-agent-me"
                    onclick="tryItOut('GETapi-internal-terra-v1-agent-me');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-internal-terra-v1-agent-me"
                    onclick="cancelTryOut('GETapi-internal-terra-v1-agent-me');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-internal-terra-v1-agent-me"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/internal/terra/v1/agent/me</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-internal-terra-v1-agent-me"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-internal-terra-v1-agent-me"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-PUTapi-internal-terra-v1-agent-me">PUT api/internal/terra/v1/agent/me</h2>

<p>
</p>



<span id="example-requests-PUTapi-internal-terra-v1-agent-me">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/internal/terra/v1/agent/me" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name_agent\": \"vmqeopfuudtdsufvyvddq\",
    \"lastname_agent\": \"amniihfqcoynlazghdtqt\",
    \"profession_agent\": \"qxbajwbpilpmufinllwlo\",
    \"naissance_agent\": \"2026-03-31T10:52:59\",
    \"longitude_agent\": \"consequatur\",
    \"latitude_agent\": \"consequatur\",
    \"experience_mission_agent\": \"oui\",
    \"permis_agent\": \"oui\",
    \"city_id\": \"98adc52b-966d-39db-809a-55902ee7228f\",
    \"country_id\": \"d48a46b6-3a18-3763-951d-66b7fdb284ae\",
    \"commune_id\": \"5f74bcbe-0654-30c9-9013-151f9399e192\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/me"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name_agent": "vmqeopfuudtdsufvyvddq",
    "lastname_agent": "amniihfqcoynlazghdtqt",
    "profession_agent": "qxbajwbpilpmufinllwlo",
    "naissance_agent": "2026-03-31T10:52:59",
    "longitude_agent": "consequatur",
    "latitude_agent": "consequatur",
    "experience_mission_agent": "oui",
    "permis_agent": "oui",
    "city_id": "98adc52b-966d-39db-809a-55902ee7228f",
    "country_id": "d48a46b6-3a18-3763-951d-66b7fdb284ae",
    "commune_id": "5f74bcbe-0654-30c9-9013-151f9399e192"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-internal-terra-v1-agent-me">
</span>
<span id="execution-results-PUTapi-internal-terra-v1-agent-me" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-internal-terra-v1-agent-me"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-internal-terra-v1-agent-me"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-internal-terra-v1-agent-me" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-internal-terra-v1-agent-me">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-internal-terra-v1-agent-me" data-method="PUT"
      data-path="api/internal/terra/v1/agent/me"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-internal-terra-v1-agent-me', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-internal-terra-v1-agent-me"
                    onclick="tryItOut('PUTapi-internal-terra-v1-agent-me');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-internal-terra-v1-agent-me"
                    onclick="cancelTryOut('PUTapi-internal-terra-v1-agent-me');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-internal-terra-v1-agent-me"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/internal/terra/v1/agent/me</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-internal-terra-v1-agent-me"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-internal-terra-v1-agent-me"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name_agent"                data-endpoint="PUTapi-internal-terra-v1-agent-me"
               value="vmqeopfuudtdsufvyvddq"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>vmqeopfuudtdsufvyvddq</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>lastname_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="lastname_agent"                data-endpoint="PUTapi-internal-terra-v1-agent-me"
               value="amniihfqcoynlazghdtqt"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>amniihfqcoynlazghdtqt</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>profession_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="profession_agent"                data-endpoint="PUTapi-internal-terra-v1-agent-me"
               value="qxbajwbpilpmufinllwlo"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>qxbajwbpilpmufinllwlo</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>naissance_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="naissance_agent"                data-endpoint="PUTapi-internal-terra-v1-agent-me"
               value="2026-03-31T10:52:59"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2026-03-31T10:52:59</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone_agent"                data-endpoint="PUTapi-internal-terra-v1-agent-me"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>longitude_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="longitude_agent"                data-endpoint="PUTapi-internal-terra-v1-agent-me"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>latitude_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="latitude_agent"                data-endpoint="PUTapi-internal-terra-v1-agent-me"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>experience_mission_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="experience_mission_agent"                data-endpoint="PUTapi-internal-terra-v1-agent-me"
               value="oui"
               data-component="body">
    <br>
<p>Example: <code>oui</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>oui</code></li> <li><code>non</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>permis_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="permis_agent"                data-endpoint="PUTapi-internal-terra-v1-agent-me"
               value="oui"
               data-component="body">
    <br>
<p>Example: <code>oui</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>oui</code></li> <li><code>non</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>city_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="city_id"                data-endpoint="PUTapi-internal-terra-v1-agent-me"
               value="98adc52b-966d-39db-809a-55902ee7228f"
               data-component="body">
    <br>
<p>Must be a valid UUID. The <code>id_city</code> of an existing record in the city table. Example: <code>98adc52b-966d-39db-809a-55902ee7228f</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>country_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="country_id"                data-endpoint="PUTapi-internal-terra-v1-agent-me"
               value="d48a46b6-3a18-3763-951d-66b7fdb284ae"
               data-component="body">
    <br>
<p>Must be a valid UUID. The <code>id_country</code> of an existing record in the country table. Example: <code>d48a46b6-3a18-3763-951d-66b7fdb284ae</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>commune_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="commune_id"                data-endpoint="PUTapi-internal-terra-v1-agent-me"
               value="5f74bcbe-0654-30c9-9013-151f9399e192"
               data-component="body">
    <br>
<p>Must be a valid UUID. The <code>id_commune</code> of an existing record in the commune table. Example: <code>5f74bcbe-0654-30c9-9013-151f9399e192</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-internal-terra-v1-agent-profile">GET api/internal/terra/v1/agent/profile</h2>

<p>
</p>



<span id="example-requests-GETapi-internal-terra-v1-agent-profile">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/agent/profile" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/profile"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-internal-terra-v1-agent-profile">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-internal-terra-v1-agent-profile" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-internal-terra-v1-agent-profile"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-internal-terra-v1-agent-profile"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-internal-terra-v1-agent-profile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-internal-terra-v1-agent-profile">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-internal-terra-v1-agent-profile" data-method="GET"
      data-path="api/internal/terra/v1/agent/profile"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-internal-terra-v1-agent-profile', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-internal-terra-v1-agent-profile"
                    onclick="tryItOut('GETapi-internal-terra-v1-agent-profile');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-internal-terra-v1-agent-profile"
                    onclick="cancelTryOut('GETapi-internal-terra-v1-agent-profile');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-internal-terra-v1-agent-profile"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/internal/terra/v1/agent/profile</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-internal-terra-v1-agent-profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-internal-terra-v1-agent-profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-PUTapi-internal-terra-v1-agent-profile">PUT api/internal/terra/v1/agent/profile</h2>

<p>
</p>



<span id="example-requests-PUTapi-internal-terra-v1-agent-profile">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/internal/terra/v1/agent/profile" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"genre_agent\": \"M\",
    \"name_agent\": \"vmqeopfuudtdsufvyvddq\",
    \"lastname_agent\": \"amniihfqcoynlazghdtqt\",
    \"profession_agent\": \"qxbajwbpilpmufinllwlo\",
    \"naissance_agent\": \"2026-03-31T10:52:59\",
    \"longitude_agent\": \"consequatur\",
    \"latitude_agent\": \"consequatur\",
    \"experience_mission_agent\": \"non\",
    \"permis_agent\": \"non\",
    \"city_id\": \"98adc52b-966d-39db-809a-55902ee7228f\",
    \"country_id\": \"d48a46b6-3a18-3763-951d-66b7fdb284ae\",
    \"commune_id\": \"5f74bcbe-0654-30c9-9013-151f9399e192\",
    \"diplome_id\": \"6236c53f-4012-396c-a2dd-e4020c7638c8\",
    \"etude_id\": \"fefb079f-5b81-3552-831f-ed3f89669781\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/profile"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "genre_agent": "M",
    "name_agent": "vmqeopfuudtdsufvyvddq",
    "lastname_agent": "amniihfqcoynlazghdtqt",
    "profession_agent": "qxbajwbpilpmufinllwlo",
    "naissance_agent": "2026-03-31T10:52:59",
    "longitude_agent": "consequatur",
    "latitude_agent": "consequatur",
    "experience_mission_agent": "non",
    "permis_agent": "non",
    "city_id": "98adc52b-966d-39db-809a-55902ee7228f",
    "country_id": "d48a46b6-3a18-3763-951d-66b7fdb284ae",
    "commune_id": "5f74bcbe-0654-30c9-9013-151f9399e192",
    "diplome_id": "6236c53f-4012-396c-a2dd-e4020c7638c8",
    "etude_id": "fefb079f-5b81-3552-831f-ed3f89669781"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-internal-terra-v1-agent-profile">
</span>
<span id="execution-results-PUTapi-internal-terra-v1-agent-profile" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-internal-terra-v1-agent-profile"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-internal-terra-v1-agent-profile"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-internal-terra-v1-agent-profile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-internal-terra-v1-agent-profile">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-internal-terra-v1-agent-profile" data-method="PUT"
      data-path="api/internal/terra/v1/agent/profile"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-internal-terra-v1-agent-profile', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-internal-terra-v1-agent-profile"
                    onclick="tryItOut('PUTapi-internal-terra-v1-agent-profile');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-internal-terra-v1-agent-profile"
                    onclick="cancelTryOut('PUTapi-internal-terra-v1-agent-profile');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-internal-terra-v1-agent-profile"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/internal/terra/v1/agent/profile</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-internal-terra-v1-agent-profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-internal-terra-v1-agent-profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>genre_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="genre_agent"                data-endpoint="PUTapi-internal-terra-v1-agent-profile"
               value="M"
               data-component="body">
    <br>
<p>Example: <code>M</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>M</code></li> <li><code>F</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name_agent"                data-endpoint="PUTapi-internal-terra-v1-agent-profile"
               value="vmqeopfuudtdsufvyvddq"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>vmqeopfuudtdsufvyvddq</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>lastname_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="lastname_agent"                data-endpoint="PUTapi-internal-terra-v1-agent-profile"
               value="amniihfqcoynlazghdtqt"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>amniihfqcoynlazghdtqt</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>profession_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="profession_agent"                data-endpoint="PUTapi-internal-terra-v1-agent-profile"
               value="qxbajwbpilpmufinllwlo"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>qxbajwbpilpmufinllwlo</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>naissance_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="naissance_agent"                data-endpoint="PUTapi-internal-terra-v1-agent-profile"
               value="2026-03-31T10:52:59"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2026-03-31T10:52:59</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone_agent"                data-endpoint="PUTapi-internal-terra-v1-agent-profile"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>longitude_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="longitude_agent"                data-endpoint="PUTapi-internal-terra-v1-agent-profile"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>latitude_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="latitude_agent"                data-endpoint="PUTapi-internal-terra-v1-agent-profile"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>experience_mission_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="experience_mission_agent"                data-endpoint="PUTapi-internal-terra-v1-agent-profile"
               value="non"
               data-component="body">
    <br>
<p>Example: <code>non</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>oui</code></li> <li><code>non</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>permis_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="permis_agent"                data-endpoint="PUTapi-internal-terra-v1-agent-profile"
               value="non"
               data-component="body">
    <br>
<p>Example: <code>non</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>oui</code></li> <li><code>non</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>city_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="city_id"                data-endpoint="PUTapi-internal-terra-v1-agent-profile"
               value="98adc52b-966d-39db-809a-55902ee7228f"
               data-component="body">
    <br>
<p>Must be a valid UUID. The <code>id_city</code> of an existing record in the city table. Example: <code>98adc52b-966d-39db-809a-55902ee7228f</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>country_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="country_id"                data-endpoint="PUTapi-internal-terra-v1-agent-profile"
               value="d48a46b6-3a18-3763-951d-66b7fdb284ae"
               data-component="body">
    <br>
<p>Must be a valid UUID. The <code>id_country</code> of an existing record in the country table. Example: <code>d48a46b6-3a18-3763-951d-66b7fdb284ae</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>commune_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="commune_id"                data-endpoint="PUTapi-internal-terra-v1-agent-profile"
               value="5f74bcbe-0654-30c9-9013-151f9399e192"
               data-component="body">
    <br>
<p>Must be a valid UUID. The <code>id_commune</code> of an existing record in the commune table. Example: <code>5f74bcbe-0654-30c9-9013-151f9399e192</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>diplome_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="diplome_id"                data-endpoint="PUTapi-internal-terra-v1-agent-profile"
               value="6236c53f-4012-396c-a2dd-e4020c7638c8"
               data-component="body">
    <br>
<p>Must be a valid UUID. The <code>id_diplome</code> of an existing record in the diplomes table. Example: <code>6236c53f-4012-396c-a2dd-e4020c7638c8</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>etude_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="etude_id"                data-endpoint="PUTapi-internal-terra-v1-agent-profile"
               value="fefb079f-5b81-3552-831f-ed3f89669781"
               data-component="body">
    <br>
<p>Must be a valid UUID. The <code>id_etude</code> of an existing record in the etudes table. Example: <code>fefb079f-5b81-3552-831f-ed3f89669781</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-internal-terra-v1-agent-profile-image">POST api/internal/terra/v1/agent/profile/image</h2>

<p>
</p>



<span id="example-requests-POSTapi-internal-terra-v1-agent-profile-image">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/agent/profile/image" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "image=@C:\Users\theod\AppData\Local\Temp\php5DD6.tmp" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/profile/image"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('image', document.querySelector('input[name="image"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-agent-profile-image">
</span>
<span id="execution-results-POSTapi-internal-terra-v1-agent-profile-image" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-internal-terra-v1-agent-profile-image"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-internal-terra-v1-agent-profile-image"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-internal-terra-v1-agent-profile-image" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-internal-terra-v1-agent-profile-image">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-internal-terra-v1-agent-profile-image" data-method="POST"
      data-path="api/internal/terra/v1/agent/profile/image"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-internal-terra-v1-agent-profile-image', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-internal-terra-v1-agent-profile-image"
                    onclick="tryItOut('POSTapi-internal-terra-v1-agent-profile-image');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-internal-terra-v1-agent-profile-image"
                    onclick="cancelTryOut('POSTapi-internal-terra-v1-agent-profile-image');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-internal-terra-v1-agent-profile-image"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/internal/terra/v1/agent/profile/image</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-internal-terra-v1-agent-profile-image"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-internal-terra-v1-agent-profile-image"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>image</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="image"                data-endpoint="POSTapi-internal-terra-v1-agent-profile-image"
               value=""
               data-component="body">
    <br>
<p>Must be an image. Must not be greater than 2048 kilobytes. Example: <code>C:\Users\theod\AppData\Local\Temp\php5DD6.tmp</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-internal-terra-v1-agent-pieces">GET api/internal/terra/v1/agent/pieces</h2>

<p>
</p>



<span id="example-requests-GETapi-internal-terra-v1-agent-pieces">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/agent/pieces" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/pieces"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-internal-terra-v1-agent-pieces">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-internal-terra-v1-agent-pieces" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-internal-terra-v1-agent-pieces"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-internal-terra-v1-agent-pieces"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-internal-terra-v1-agent-pieces" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-internal-terra-v1-agent-pieces">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-internal-terra-v1-agent-pieces" data-method="GET"
      data-path="api/internal/terra/v1/agent/pieces"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-internal-terra-v1-agent-pieces', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-internal-terra-v1-agent-pieces"
                    onclick="tryItOut('GETapi-internal-terra-v1-agent-pieces');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-internal-terra-v1-agent-pieces"
                    onclick="cancelTryOut('GETapi-internal-terra-v1-agent-pieces');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-internal-terra-v1-agent-pieces"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/internal/terra/v1/agent/pieces</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-internal-terra-v1-agent-pieces"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-internal-terra-v1-agent-pieces"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-internal-terra-v1-agent-pieces">POST api/internal/terra/v1/agent/pieces</h2>

<p>
</p>



<span id="example-requests-POSTapi-internal-terra-v1-agent-pieces">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/agent/pieces" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "recto_piece=@C:\Users\theod\AppData\Local\Temp\php5DF7.tmp" \
    --form "verso_piece=@C:\Users\theod\AppData\Local\Temp\php5DF8.tmp" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/pieces"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('recto_piece', document.querySelector('input[name="recto_piece"]').files[0]);
body.append('verso_piece', document.querySelector('input[name="verso_piece"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-agent-pieces">
</span>
<span id="execution-results-POSTapi-internal-terra-v1-agent-pieces" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-internal-terra-v1-agent-pieces"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-internal-terra-v1-agent-pieces"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-internal-terra-v1-agent-pieces" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-internal-terra-v1-agent-pieces">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-internal-terra-v1-agent-pieces" data-method="POST"
      data-path="api/internal/terra/v1/agent/pieces"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-internal-terra-v1-agent-pieces', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-internal-terra-v1-agent-pieces"
                    onclick="tryItOut('POSTapi-internal-terra-v1-agent-pieces');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-internal-terra-v1-agent-pieces"
                    onclick="cancelTryOut('POSTapi-internal-terra-v1-agent-pieces');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-internal-terra-v1-agent-pieces"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/internal/terra/v1/agent/pieces</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-internal-terra-v1-agent-pieces"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-internal-terra-v1-agent-pieces"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>recto_piece</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="recto_piece"                data-endpoint="POSTapi-internal-terra-v1-agent-pieces"
               value=""
               data-component="body">
    <br>
<p>Must be a file. Must not be greater than 3072 kilobytes. Example: <code>C:\Users\theod\AppData\Local\Temp\php5DF7.tmp</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>verso_piece</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="verso_piece"                data-endpoint="POSTapi-internal-terra-v1-agent-pieces"
               value=""
               data-component="body">
    <br>
<p>Must be a file. Must not be greater than 3072 kilobytes. Example: <code>C:\Users\theod\AppData\Local\Temp\php5DF8.tmp</code></p>
        </div>
        </form>

                    <h2 id="endpoints-PUTapi-internal-terra-v1-agent-pieces--id-">PUT api/internal/terra/v1/agent/pieces/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-internal-terra-v1-agent-pieces--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/internal/terra/v1/agent/pieces/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/pieces/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-internal-terra-v1-agent-pieces--id-">
</span>
<span id="execution-results-PUTapi-internal-terra-v1-agent-pieces--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-internal-terra-v1-agent-pieces--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-internal-terra-v1-agent-pieces--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-internal-terra-v1-agent-pieces--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-internal-terra-v1-agent-pieces--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-internal-terra-v1-agent-pieces--id-" data-method="PUT"
      data-path="api/internal/terra/v1/agent/pieces/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-internal-terra-v1-agent-pieces--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-internal-terra-v1-agent-pieces--id-"
                    onclick="tryItOut('PUTapi-internal-terra-v1-agent-pieces--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-internal-terra-v1-agent-pieces--id-"
                    onclick="cancelTryOut('PUTapi-internal-terra-v1-agent-pieces--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-internal-terra-v1-agent-pieces--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/internal/terra/v1/agent/pieces/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-internal-terra-v1-agent-pieces--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-internal-terra-v1-agent-pieces--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-internal-terra-v1-agent-pieces--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the piece. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-internal-terra-v1-agent-permis">GET api/internal/terra/v1/agent/permis</h2>

<p>
</p>



<span id="example-requests-GETapi-internal-terra-v1-agent-permis">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/agent/permis" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/permis"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-internal-terra-v1-agent-permis">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-internal-terra-v1-agent-permis" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-internal-terra-v1-agent-permis"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-internal-terra-v1-agent-permis"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-internal-terra-v1-agent-permis" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-internal-terra-v1-agent-permis">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-internal-terra-v1-agent-permis" data-method="GET"
      data-path="api/internal/terra/v1/agent/permis"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-internal-terra-v1-agent-permis', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-internal-terra-v1-agent-permis"
                    onclick="tryItOut('GETapi-internal-terra-v1-agent-permis');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-internal-terra-v1-agent-permis"
                    onclick="cancelTryOut('GETapi-internal-terra-v1-agent-permis');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-internal-terra-v1-agent-permis"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/internal/terra/v1/agent/permis</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-internal-terra-v1-agent-permis"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-internal-terra-v1-agent-permis"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-internal-terra-v1-agent-permis">POST api/internal/terra/v1/agent/permis</h2>

<p>
</p>



<span id="example-requests-POSTapi-internal-terra-v1-agent-permis">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/agent/permis" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "recto_permis=@C:\Users\theod\AppData\Local\Temp\php5E2A.tmp" \
    --form "verso_permis=@C:\Users\theod\AppData\Local\Temp\php5E2B.tmp" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/permis"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('recto_permis', document.querySelector('input[name="recto_permis"]').files[0]);
body.append('verso_permis', document.querySelector('input[name="verso_permis"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-agent-permis">
</span>
<span id="execution-results-POSTapi-internal-terra-v1-agent-permis" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-internal-terra-v1-agent-permis"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-internal-terra-v1-agent-permis"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-internal-terra-v1-agent-permis" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-internal-terra-v1-agent-permis">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-internal-terra-v1-agent-permis" data-method="POST"
      data-path="api/internal/terra/v1/agent/permis"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-internal-terra-v1-agent-permis', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-internal-terra-v1-agent-permis"
                    onclick="tryItOut('POSTapi-internal-terra-v1-agent-permis');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-internal-terra-v1-agent-permis"
                    onclick="cancelTryOut('POSTapi-internal-terra-v1-agent-permis');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-internal-terra-v1-agent-permis"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/internal/terra/v1/agent/permis</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-internal-terra-v1-agent-permis"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-internal-terra-v1-agent-permis"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>recto_permis</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="recto_permis"                data-endpoint="POSTapi-internal-terra-v1-agent-permis"
               value=""
               data-component="body">
    <br>
<p>Must be a file. Must not be greater than 3072 kilobytes. Example: <code>C:\Users\theod\AppData\Local\Temp\php5E2A.tmp</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>verso_permis</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="verso_permis"                data-endpoint="POSTapi-internal-terra-v1-agent-permis"
               value=""
               data-component="body">
    <br>
<p>Must be a file. Must not be greater than 3072 kilobytes. Example: <code>C:\Users\theod\AppData\Local\Temp\php5E2B.tmp</code></p>
        </div>
        </form>

                    <h2 id="endpoints-PUTapi-internal-terra-v1-agent-permis--id-">PUT api/internal/terra/v1/agent/permis/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-internal-terra-v1-agent-permis--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/internal/terra/v1/agent/permis/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/permis/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-internal-terra-v1-agent-permis--id-">
</span>
<span id="execution-results-PUTapi-internal-terra-v1-agent-permis--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-internal-terra-v1-agent-permis--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-internal-terra-v1-agent-permis--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-internal-terra-v1-agent-permis--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-internal-terra-v1-agent-permis--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-internal-terra-v1-agent-permis--id-" data-method="PUT"
      data-path="api/internal/terra/v1/agent/permis/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-internal-terra-v1-agent-permis--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-internal-terra-v1-agent-permis--id-"
                    onclick="tryItOut('PUTapi-internal-terra-v1-agent-permis--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-internal-terra-v1-agent-permis--id-"
                    onclick="cancelTryOut('PUTapi-internal-terra-v1-agent-permis--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-internal-terra-v1-agent-permis--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/internal/terra/v1/agent/permis/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-internal-terra-v1-agent-permis--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-internal-terra-v1-agent-permis--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-internal-terra-v1-agent-permis--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the permi. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-internal-terra-v1-agent-diplomes">GET api/internal/terra/v1/agent/diplomes</h2>

<p>
</p>



<span id="example-requests-GETapi-internal-terra-v1-agent-diplomes">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/agent/diplomes" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/diplomes"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-internal-terra-v1-agent-diplomes">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-internal-terra-v1-agent-diplomes" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-internal-terra-v1-agent-diplomes"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-internal-terra-v1-agent-diplomes"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-internal-terra-v1-agent-diplomes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-internal-terra-v1-agent-diplomes">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-internal-terra-v1-agent-diplomes" data-method="GET"
      data-path="api/internal/terra/v1/agent/diplomes"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-internal-terra-v1-agent-diplomes', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-internal-terra-v1-agent-diplomes"
                    onclick="tryItOut('GETapi-internal-terra-v1-agent-diplomes');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-internal-terra-v1-agent-diplomes"
                    onclick="cancelTryOut('GETapi-internal-terra-v1-agent-diplomes');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-internal-terra-v1-agent-diplomes"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/internal/terra/v1/agent/diplomes</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-internal-terra-v1-agent-diplomes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-internal-terra-v1-agent-diplomes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-internal-terra-v1-agent-diplomes">POST api/internal/terra/v1/agent/diplomes</h2>

<p>
</p>



<span id="example-requests-POSTapi-internal-terra-v1-agent-diplomes">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/agent/diplomes" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "recto_diplome=@C:\Users\theod\AppData\Local\Temp\php5E5D.tmp" \
    --form "verso_diplome=@C:\Users\theod\AppData\Local\Temp\php5E5E.tmp" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/diplomes"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('recto_diplome', document.querySelector('input[name="recto_diplome"]').files[0]);
body.append('verso_diplome', document.querySelector('input[name="verso_diplome"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-agent-diplomes">
</span>
<span id="execution-results-POSTapi-internal-terra-v1-agent-diplomes" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-internal-terra-v1-agent-diplomes"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-internal-terra-v1-agent-diplomes"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-internal-terra-v1-agent-diplomes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-internal-terra-v1-agent-diplomes">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-internal-terra-v1-agent-diplomes" data-method="POST"
      data-path="api/internal/terra/v1/agent/diplomes"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-internal-terra-v1-agent-diplomes', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-internal-terra-v1-agent-diplomes"
                    onclick="tryItOut('POSTapi-internal-terra-v1-agent-diplomes');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-internal-terra-v1-agent-diplomes"
                    onclick="cancelTryOut('POSTapi-internal-terra-v1-agent-diplomes');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-internal-terra-v1-agent-diplomes"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/internal/terra/v1/agent/diplomes</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-internal-terra-v1-agent-diplomes"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-internal-terra-v1-agent-diplomes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>recto_diplome</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="recto_diplome"                data-endpoint="POSTapi-internal-terra-v1-agent-diplomes"
               value=""
               data-component="body">
    <br>
<p>Must be a file. Must not be greater than 3072 kilobytes. Example: <code>C:\Users\theod\AppData\Local\Temp\php5E5D.tmp</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>verso_diplome</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="verso_diplome"                data-endpoint="POSTapi-internal-terra-v1-agent-diplomes"
               value=""
               data-component="body">
    <br>
<p>Must be a file. Must not be greater than 3072 kilobytes. Example: <code>C:\Users\theod\AppData\Local\Temp\php5E5E.tmp</code></p>
        </div>
        </form>

                    <h2 id="endpoints-PUTapi-internal-terra-v1-agent-diplomes--id-">PUT api/internal/terra/v1/agent/diplomes/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-internal-terra-v1-agent-diplomes--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/internal/terra/v1/agent/diplomes/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/diplomes/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-internal-terra-v1-agent-diplomes--id-">
</span>
<span id="execution-results-PUTapi-internal-terra-v1-agent-diplomes--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-internal-terra-v1-agent-diplomes--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-internal-terra-v1-agent-diplomes--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-internal-terra-v1-agent-diplomes--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-internal-terra-v1-agent-diplomes--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-internal-terra-v1-agent-diplomes--id-" data-method="PUT"
      data-path="api/internal/terra/v1/agent/diplomes/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-internal-terra-v1-agent-diplomes--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-internal-terra-v1-agent-diplomes--id-"
                    onclick="tryItOut('PUTapi-internal-terra-v1-agent-diplomes--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-internal-terra-v1-agent-diplomes--id-"
                    onclick="cancelTryOut('PUTapi-internal-terra-v1-agent-diplomes--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-internal-terra-v1-agent-diplomes--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/internal/terra/v1/agent/diplomes/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-internal-terra-v1-agent-diplomes--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-internal-terra-v1-agent-diplomes--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-internal-terra-v1-agent-diplomes--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the diplome. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-internal-terra-v1-agent-langues">GET api/internal/terra/v1/agent/langues</h2>

<p>
</p>



<span id="example-requests-GETapi-internal-terra-v1-agent-langues">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/agent/langues" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/langues"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-internal-terra-v1-agent-langues">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-internal-terra-v1-agent-langues" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-internal-terra-v1-agent-langues"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-internal-terra-v1-agent-langues"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-internal-terra-v1-agent-langues" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-internal-terra-v1-agent-langues">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-internal-terra-v1-agent-langues" data-method="GET"
      data-path="api/internal/terra/v1/agent/langues"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-internal-terra-v1-agent-langues', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-internal-terra-v1-agent-langues"
                    onclick="tryItOut('GETapi-internal-terra-v1-agent-langues');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-internal-terra-v1-agent-langues"
                    onclick="cancelTryOut('GETapi-internal-terra-v1-agent-langues');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-internal-terra-v1-agent-langues"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/internal/terra/v1/agent/langues</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-internal-terra-v1-agent-langues"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-internal-terra-v1-agent-langues"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-internal-terra-v1-agent-langues">POST api/internal/terra/v1/agent/langues</h2>

<p>
</p>



<span id="example-requests-POSTapi-internal-terra-v1-agent-langues">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/agent/langues" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"langue_id\": \"66529e01-d113-3473-8d6f-9e11e09332ea\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/langues"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "langue_id": "66529e01-d113-3473-8d6f-9e11e09332ea"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-agent-langues">
</span>
<span id="execution-results-POSTapi-internal-terra-v1-agent-langues" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-internal-terra-v1-agent-langues"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-internal-terra-v1-agent-langues"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-internal-terra-v1-agent-langues" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-internal-terra-v1-agent-langues">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-internal-terra-v1-agent-langues" data-method="POST"
      data-path="api/internal/terra/v1/agent/langues"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-internal-terra-v1-agent-langues', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-internal-terra-v1-agent-langues"
                    onclick="tryItOut('POSTapi-internal-terra-v1-agent-langues');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-internal-terra-v1-agent-langues"
                    onclick="cancelTryOut('POSTapi-internal-terra-v1-agent-langues');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-internal-terra-v1-agent-langues"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/internal/terra/v1/agent/langues</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-internal-terra-v1-agent-langues"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-internal-terra-v1-agent-langues"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>langue_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="langue_id"                data-endpoint="POSTapi-internal-terra-v1-agent-langues"
               value="66529e01-d113-3473-8d6f-9e11e09332ea"
               data-component="body">
    <br>
<p>Must be a valid UUID. The <code>id_langue</code> of an existing record in the langues table. Example: <code>66529e01-d113-3473-8d6f-9e11e09332ea</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-internal-terra-v1-agent-langues--id-">DELETE api/internal/terra/v1/agent/langues/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-internal-terra-v1-agent-langues--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/internal/terra/v1/agent/langues/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/langues/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-internal-terra-v1-agent-langues--id-">
</span>
<span id="execution-results-DELETEapi-internal-terra-v1-agent-langues--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-internal-terra-v1-agent-langues--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-internal-terra-v1-agent-langues--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-internal-terra-v1-agent-langues--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-internal-terra-v1-agent-langues--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-internal-terra-v1-agent-langues--id-" data-method="DELETE"
      data-path="api/internal/terra/v1/agent/langues/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-internal-terra-v1-agent-langues--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-internal-terra-v1-agent-langues--id-"
                    onclick="tryItOut('DELETEapi-internal-terra-v1-agent-langues--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-internal-terra-v1-agent-langues--id-"
                    onclick="cancelTryOut('DELETEapi-internal-terra-v1-agent-langues--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-internal-terra-v1-agent-langues--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/internal/terra/v1/agent/langues/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-internal-terra-v1-agent-langues--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-internal-terra-v1-agent-langues--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-internal-terra-v1-agent-langues--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the langue. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-internal-terra-v1-agent-missions-mes-missions">GET api/internal/terra/v1/agent/missions/mes-missions</h2>

<p>
</p>



<span id="example-requests-GETapi-internal-terra-v1-agent-missions-mes-missions">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/agent/missions/mes-missions" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/missions/mes-missions"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-internal-terra-v1-agent-missions-mes-missions">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-internal-terra-v1-agent-missions-mes-missions" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-internal-terra-v1-agent-missions-mes-missions"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-internal-terra-v1-agent-missions-mes-missions"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-internal-terra-v1-agent-missions-mes-missions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-internal-terra-v1-agent-missions-mes-missions">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-internal-terra-v1-agent-missions-mes-missions" data-method="GET"
      data-path="api/internal/terra/v1/agent/missions/mes-missions"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-internal-terra-v1-agent-missions-mes-missions', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-internal-terra-v1-agent-missions-mes-missions"
                    onclick="tryItOut('GETapi-internal-terra-v1-agent-missions-mes-missions');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-internal-terra-v1-agent-missions-mes-missions"
                    onclick="cancelTryOut('GETapi-internal-terra-v1-agent-missions-mes-missions');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-internal-terra-v1-agent-missions-mes-missions"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/internal/terra/v1/agent/missions/mes-missions</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-internal-terra-v1-agent-missions-mes-missions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-internal-terra-v1-agent-missions-mes-missions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-internal-terra-v1-agent-missions">GET api/internal/terra/v1/agent/missions</h2>

<p>
</p>



<span id="example-requests-GETapi-internal-terra-v1-agent-missions">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/agent/missions" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/missions"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-internal-terra-v1-agent-missions">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-internal-terra-v1-agent-missions" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-internal-terra-v1-agent-missions"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-internal-terra-v1-agent-missions"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-internal-terra-v1-agent-missions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-internal-terra-v1-agent-missions">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-internal-terra-v1-agent-missions" data-method="GET"
      data-path="api/internal/terra/v1/agent/missions"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-internal-terra-v1-agent-missions', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-internal-terra-v1-agent-missions"
                    onclick="tryItOut('GETapi-internal-terra-v1-agent-missions');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-internal-terra-v1-agent-missions"
                    onclick="cancelTryOut('GETapi-internal-terra-v1-agent-missions');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-internal-terra-v1-agent-missions"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/internal/terra/v1/agent/missions</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-internal-terra-v1-agent-missions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-internal-terra-v1-agent-missions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-internal-terra-v1-agent-missions--id-">GET api/internal/terra/v1/agent/missions/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-internal-terra-v1-agent-missions--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/agent/missions/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/missions/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-internal-terra-v1-agent-missions--id-">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-internal-terra-v1-agent-missions--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-internal-terra-v1-agent-missions--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-internal-terra-v1-agent-missions--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-internal-terra-v1-agent-missions--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-internal-terra-v1-agent-missions--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-internal-terra-v1-agent-missions--id-" data-method="GET"
      data-path="api/internal/terra/v1/agent/missions/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-internal-terra-v1-agent-missions--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-internal-terra-v1-agent-missions--id-"
                    onclick="tryItOut('GETapi-internal-terra-v1-agent-missions--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-internal-terra-v1-agent-missions--id-"
                    onclick="cancelTryOut('GETapi-internal-terra-v1-agent-missions--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-internal-terra-v1-agent-missions--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/internal/terra/v1/agent/missions/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-internal-terra-v1-agent-missions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-internal-terra-v1-agent-missions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-internal-terra-v1-agent-missions--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the mission. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-internal-terra-v1-agent-missions--id--rejoindre">POST api/internal/terra/v1/agent/missions/{id}/rejoindre</h2>

<p>
</p>



<span id="example-requests-POSTapi-internal-terra-v1-agent-missions--id--rejoindre">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/agent/missions/consequatur/rejoindre" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/missions/consequatur/rejoindre"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-agent-missions--id--rejoindre">
</span>
<span id="execution-results-POSTapi-internal-terra-v1-agent-missions--id--rejoindre" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-internal-terra-v1-agent-missions--id--rejoindre"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-internal-terra-v1-agent-missions--id--rejoindre"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-internal-terra-v1-agent-missions--id--rejoindre" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-internal-terra-v1-agent-missions--id--rejoindre">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-internal-terra-v1-agent-missions--id--rejoindre" data-method="POST"
      data-path="api/internal/terra/v1/agent/missions/{id}/rejoindre"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-internal-terra-v1-agent-missions--id--rejoindre', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-internal-terra-v1-agent-missions--id--rejoindre"
                    onclick="tryItOut('POSTapi-internal-terra-v1-agent-missions--id--rejoindre');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-internal-terra-v1-agent-missions--id--rejoindre"
                    onclick="cancelTryOut('POSTapi-internal-terra-v1-agent-missions--id--rejoindre');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-internal-terra-v1-agent-missions--id--rejoindre"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/internal/terra/v1/agent/missions/{id}/rejoindre</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-internal-terra-v1-agent-missions--id--rejoindre"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-internal-terra-v1-agent-missions--id--rejoindre"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-internal-terra-v1-agent-missions--id--rejoindre"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the mission. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-internal-terra-v1-agent-missions--id--formulaire">GET api/internal/terra/v1/agent/missions/{id}/formulaire</h2>

<p>
</p>



<span id="example-requests-GETapi-internal-terra-v1-agent-missions--id--formulaire">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/agent/missions/consequatur/formulaire" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/missions/consequatur/formulaire"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-internal-terra-v1-agent-missions--id--formulaire">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-internal-terra-v1-agent-missions--id--formulaire" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-internal-terra-v1-agent-missions--id--formulaire"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-internal-terra-v1-agent-missions--id--formulaire"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-internal-terra-v1-agent-missions--id--formulaire" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-internal-terra-v1-agent-missions--id--formulaire">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-internal-terra-v1-agent-missions--id--formulaire" data-method="GET"
      data-path="api/internal/terra/v1/agent/missions/{id}/formulaire"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-internal-terra-v1-agent-missions--id--formulaire', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-internal-terra-v1-agent-missions--id--formulaire"
                    onclick="tryItOut('GETapi-internal-terra-v1-agent-missions--id--formulaire');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-internal-terra-v1-agent-missions--id--formulaire"
                    onclick="cancelTryOut('GETapi-internal-terra-v1-agent-missions--id--formulaire');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-internal-terra-v1-agent-missions--id--formulaire"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/internal/terra/v1/agent/missions/{id}/formulaire</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-internal-terra-v1-agent-missions--id--formulaire"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-internal-terra-v1-agent-missions--id--formulaire"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-internal-terra-v1-agent-missions--id--formulaire"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the mission. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-internal-terra-v1-agent-missions--id--formulaire-soumettre">POST api/internal/terra/v1/agent/missions/{id}/formulaire/soumettre</h2>

<p>
</p>



<span id="example-requests-POSTapi-internal-terra-v1-agent-missions--id--formulaire-soumettre">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/agent/missions/consequatur/formulaire/soumettre" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"formulaire_id\": \"66529e01-d113-3473-8d6f-9e11e09332ea\",
    \"donnees\": [],
    \"longitude\": \"consequatur\",
    \"latitude\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/missions/consequatur/formulaire/soumettre"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "formulaire_id": "66529e01-d113-3473-8d6f-9e11e09332ea",
    "donnees": [],
    "longitude": "consequatur",
    "latitude": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-agent-missions--id--formulaire-soumettre">
</span>
<span id="execution-results-POSTapi-internal-terra-v1-agent-missions--id--formulaire-soumettre" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-internal-terra-v1-agent-missions--id--formulaire-soumettre"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-internal-terra-v1-agent-missions--id--formulaire-soumettre"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-internal-terra-v1-agent-missions--id--formulaire-soumettre" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-internal-terra-v1-agent-missions--id--formulaire-soumettre">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-internal-terra-v1-agent-missions--id--formulaire-soumettre" data-method="POST"
      data-path="api/internal/terra/v1/agent/missions/{id}/formulaire/soumettre"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-internal-terra-v1-agent-missions--id--formulaire-soumettre', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-internal-terra-v1-agent-missions--id--formulaire-soumettre"
                    onclick="tryItOut('POSTapi-internal-terra-v1-agent-missions--id--formulaire-soumettre');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-internal-terra-v1-agent-missions--id--formulaire-soumettre"
                    onclick="cancelTryOut('POSTapi-internal-terra-v1-agent-missions--id--formulaire-soumettre');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-internal-terra-v1-agent-missions--id--formulaire-soumettre"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/internal/terra/v1/agent/missions/{id}/formulaire/soumettre</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-internal-terra-v1-agent-missions--id--formulaire-soumettre"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-internal-terra-v1-agent-missions--id--formulaire-soumettre"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-internal-terra-v1-agent-missions--id--formulaire-soumettre"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the mission. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>formulaire_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="formulaire_id"                data-endpoint="POSTapi-internal-terra-v1-agent-missions--id--formulaire-soumettre"
               value="66529e01-d113-3473-8d6f-9e11e09332ea"
               data-component="body">
    <br>
<p>Must be a valid UUID. The <code>id_formulaire</code> of an existing record in the formulaires table. Example: <code>66529e01-d113-3473-8d6f-9e11e09332ea</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>donnees</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="donnees"                data-endpoint="POSTapi-internal-terra-v1-agent-missions--id--formulaire-soumettre"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>longitude</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="longitude"                data-endpoint="POSTapi-internal-terra-v1-agent-missions--id--formulaire-soumettre"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>latitude</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="latitude"                data-endpoint="POSTapi-internal-terra-v1-agent-missions--id--formulaire-soumettre"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-internal-terra-v1-agent-missions--id--mes-reponses">GET api/internal/terra/v1/agent/missions/{id}/mes-reponses</h2>

<p>
</p>



<span id="example-requests-GETapi-internal-terra-v1-agent-missions--id--mes-reponses">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/agent/missions/consequatur/mes-reponses" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/missions/consequatur/mes-reponses"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-internal-terra-v1-agent-missions--id--mes-reponses">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-internal-terra-v1-agent-missions--id--mes-reponses" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-internal-terra-v1-agent-missions--id--mes-reponses"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-internal-terra-v1-agent-missions--id--mes-reponses"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-internal-terra-v1-agent-missions--id--mes-reponses" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-internal-terra-v1-agent-missions--id--mes-reponses">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-internal-terra-v1-agent-missions--id--mes-reponses" data-method="GET"
      data-path="api/internal/terra/v1/agent/missions/{id}/mes-reponses"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-internal-terra-v1-agent-missions--id--mes-reponses', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-internal-terra-v1-agent-missions--id--mes-reponses"
                    onclick="tryItOut('GETapi-internal-terra-v1-agent-missions--id--mes-reponses');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-internal-terra-v1-agent-missions--id--mes-reponses"
                    onclick="cancelTryOut('GETapi-internal-terra-v1-agent-missions--id--mes-reponses');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-internal-terra-v1-agent-missions--id--mes-reponses"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/internal/terra/v1/agent/missions/{id}/mes-reponses</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-internal-terra-v1-agent-missions--id--mes-reponses"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-internal-terra-v1-agent-missions--id--mes-reponses"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-internal-terra-v1-agent-missions--id--mes-reponses"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the mission. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-internal-terra-v1-agent-missions--id--statistiques">GET api/internal/terra/v1/agent/missions/{id}/statistiques</h2>

<p>
</p>



<span id="example-requests-GETapi-internal-terra-v1-agent-missions--id--statistiques">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/agent/missions/consequatur/statistiques" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/missions/consequatur/statistiques"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-internal-terra-v1-agent-missions--id--statistiques">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-internal-terra-v1-agent-missions--id--statistiques" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-internal-terra-v1-agent-missions--id--statistiques"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-internal-terra-v1-agent-missions--id--statistiques"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-internal-terra-v1-agent-missions--id--statistiques" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-internal-terra-v1-agent-missions--id--statistiques">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-internal-terra-v1-agent-missions--id--statistiques" data-method="GET"
      data-path="api/internal/terra/v1/agent/missions/{id}/statistiques"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-internal-terra-v1-agent-missions--id--statistiques', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-internal-terra-v1-agent-missions--id--statistiques"
                    onclick="tryItOut('GETapi-internal-terra-v1-agent-missions--id--statistiques');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-internal-terra-v1-agent-missions--id--statistiques"
                    onclick="cancelTryOut('GETapi-internal-terra-v1-agent-missions--id--statistiques');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-internal-terra-v1-agent-missions--id--statistiques"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/internal/terra/v1/agent/missions/{id}/statistiques</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-internal-terra-v1-agent-missions--id--statistiques"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-internal-terra-v1-agent-missions--id--statistiques"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-internal-terra-v1-agent-missions--id--statistiques"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the mission. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-internal-terra-v1-agent-invitations">GET api/internal/terra/v1/agent/invitations</h2>

<p>
</p>



<span id="example-requests-GETapi-internal-terra-v1-agent-invitations">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/agent/invitations" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/invitations"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-internal-terra-v1-agent-invitations">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-internal-terra-v1-agent-invitations" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-internal-terra-v1-agent-invitations"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-internal-terra-v1-agent-invitations"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-internal-terra-v1-agent-invitations" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-internal-terra-v1-agent-invitations">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-internal-terra-v1-agent-invitations" data-method="GET"
      data-path="api/internal/terra/v1/agent/invitations"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-internal-terra-v1-agent-invitations', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-internal-terra-v1-agent-invitations"
                    onclick="tryItOut('GETapi-internal-terra-v1-agent-invitations');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-internal-terra-v1-agent-invitations"
                    onclick="cancelTryOut('GETapi-internal-terra-v1-agent-invitations');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-internal-terra-v1-agent-invitations"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/internal/terra/v1/agent/invitations</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-internal-terra-v1-agent-invitations"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-internal-terra-v1-agent-invitations"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-internal-terra-v1-agent-invitations--id-">GET api/internal/terra/v1/agent/invitations/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-internal-terra-v1-agent-invitations--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/agent/invitations/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/invitations/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-internal-terra-v1-agent-invitations--id-">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-internal-terra-v1-agent-invitations--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-internal-terra-v1-agent-invitations--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-internal-terra-v1-agent-invitations--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-internal-terra-v1-agent-invitations--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-internal-terra-v1-agent-invitations--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-internal-terra-v1-agent-invitations--id-" data-method="GET"
      data-path="api/internal/terra/v1/agent/invitations/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-internal-terra-v1-agent-invitations--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-internal-terra-v1-agent-invitations--id-"
                    onclick="tryItOut('GETapi-internal-terra-v1-agent-invitations--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-internal-terra-v1-agent-invitations--id-"
                    onclick="cancelTryOut('GETapi-internal-terra-v1-agent-invitations--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-internal-terra-v1-agent-invitations--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/internal/terra/v1/agent/invitations/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-internal-terra-v1-agent-invitations--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-internal-terra-v1-agent-invitations--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-internal-terra-v1-agent-invitations--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the invitation. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-internal-terra-v1-agent-invitations--id--accepter">POST api/internal/terra/v1/agent/invitations/{id}/accepter</h2>

<p>
</p>



<span id="example-requests-POSTapi-internal-terra-v1-agent-invitations--id--accepter">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/agent/invitations/consequatur/accepter" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/invitations/consequatur/accepter"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-agent-invitations--id--accepter">
</span>
<span id="execution-results-POSTapi-internal-terra-v1-agent-invitations--id--accepter" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-internal-terra-v1-agent-invitations--id--accepter"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-internal-terra-v1-agent-invitations--id--accepter"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-internal-terra-v1-agent-invitations--id--accepter" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-internal-terra-v1-agent-invitations--id--accepter">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-internal-terra-v1-agent-invitations--id--accepter" data-method="POST"
      data-path="api/internal/terra/v1/agent/invitations/{id}/accepter"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-internal-terra-v1-agent-invitations--id--accepter', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-internal-terra-v1-agent-invitations--id--accepter"
                    onclick="tryItOut('POSTapi-internal-terra-v1-agent-invitations--id--accepter');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-internal-terra-v1-agent-invitations--id--accepter"
                    onclick="cancelTryOut('POSTapi-internal-terra-v1-agent-invitations--id--accepter');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-internal-terra-v1-agent-invitations--id--accepter"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/internal/terra/v1/agent/invitations/{id}/accepter</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-internal-terra-v1-agent-invitations--id--accepter"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-internal-terra-v1-agent-invitations--id--accepter"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-internal-terra-v1-agent-invitations--id--accepter"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the invitation. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-internal-terra-v1-agent-invitations--id--refuser">POST api/internal/terra/v1/agent/invitations/{id}/refuser</h2>

<p>
</p>



<span id="example-requests-POSTapi-internal-terra-v1-agent-invitations--id--refuser">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/agent/invitations/consequatur/refuser" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/invitations/consequatur/refuser"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-agent-invitations--id--refuser">
</span>
<span id="execution-results-POSTapi-internal-terra-v1-agent-invitations--id--refuser" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-internal-terra-v1-agent-invitations--id--refuser"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-internal-terra-v1-agent-invitations--id--refuser"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-internal-terra-v1-agent-invitations--id--refuser" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-internal-terra-v1-agent-invitations--id--refuser">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-internal-terra-v1-agent-invitations--id--refuser" data-method="POST"
      data-path="api/internal/terra/v1/agent/invitations/{id}/refuser"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-internal-terra-v1-agent-invitations--id--refuser', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-internal-terra-v1-agent-invitations--id--refuser"
                    onclick="tryItOut('POSTapi-internal-terra-v1-agent-invitations--id--refuser');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-internal-terra-v1-agent-invitations--id--refuser"
                    onclick="cancelTryOut('POSTapi-internal-terra-v1-agent-invitations--id--refuser');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-internal-terra-v1-agent-invitations--id--refuser"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/internal/terra/v1/agent/invitations/{id}/refuser</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-internal-terra-v1-agent-invitations--id--refuser"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-internal-terra-v1-agent-invitations--id--refuser"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-internal-terra-v1-agent-invitations--id--refuser"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the invitation. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-internal-terra-v1-agent-wallet">GET api/internal/terra/v1/agent/wallet</h2>

<p>
</p>



<span id="example-requests-GETapi-internal-terra-v1-agent-wallet">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/agent/wallet" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/wallet"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-internal-terra-v1-agent-wallet">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-internal-terra-v1-agent-wallet" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-internal-terra-v1-agent-wallet"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-internal-terra-v1-agent-wallet"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-internal-terra-v1-agent-wallet" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-internal-terra-v1-agent-wallet">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-internal-terra-v1-agent-wallet" data-method="GET"
      data-path="api/internal/terra/v1/agent/wallet"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-internal-terra-v1-agent-wallet', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-internal-terra-v1-agent-wallet"
                    onclick="tryItOut('GETapi-internal-terra-v1-agent-wallet');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-internal-terra-v1-agent-wallet"
                    onclick="cancelTryOut('GETapi-internal-terra-v1-agent-wallet');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-internal-terra-v1-agent-wallet"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/internal/terra/v1/agent/wallet</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-internal-terra-v1-agent-wallet"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-internal-terra-v1-agent-wallet"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-internal-terra-v1-agent-wallet-transactions">GET api/internal/terra/v1/agent/wallet/transactions</h2>

<p>
</p>



<span id="example-requests-GETapi-internal-terra-v1-agent-wallet-transactions">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/agent/wallet/transactions" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/wallet/transactions"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-internal-terra-v1-agent-wallet-transactions">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-internal-terra-v1-agent-wallet-transactions" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-internal-terra-v1-agent-wallet-transactions"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-internal-terra-v1-agent-wallet-transactions"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-internal-terra-v1-agent-wallet-transactions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-internal-terra-v1-agent-wallet-transactions">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-internal-terra-v1-agent-wallet-transactions" data-method="GET"
      data-path="api/internal/terra/v1/agent/wallet/transactions"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-internal-terra-v1-agent-wallet-transactions', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-internal-terra-v1-agent-wallet-transactions"
                    onclick="tryItOut('GETapi-internal-terra-v1-agent-wallet-transactions');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-internal-terra-v1-agent-wallet-transactions"
                    onclick="cancelTryOut('GETapi-internal-terra-v1-agent-wallet-transactions');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-internal-terra-v1-agent-wallet-transactions"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/internal/terra/v1/agent/wallet/transactions</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-internal-terra-v1-agent-wallet-transactions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-internal-terra-v1-agent-wallet-transactions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-internal-terra-v1-agent-wallet-transactions--id-">GET api/internal/terra/v1/agent/wallet/transactions/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-internal-terra-v1-agent-wallet-transactions--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/agent/wallet/transactions/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/wallet/transactions/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-internal-terra-v1-agent-wallet-transactions--id-">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-internal-terra-v1-agent-wallet-transactions--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-internal-terra-v1-agent-wallet-transactions--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-internal-terra-v1-agent-wallet-transactions--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-internal-terra-v1-agent-wallet-transactions--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-internal-terra-v1-agent-wallet-transactions--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-internal-terra-v1-agent-wallet-transactions--id-" data-method="GET"
      data-path="api/internal/terra/v1/agent/wallet/transactions/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-internal-terra-v1-agent-wallet-transactions--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-internal-terra-v1-agent-wallet-transactions--id-"
                    onclick="tryItOut('GETapi-internal-terra-v1-agent-wallet-transactions--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-internal-terra-v1-agent-wallet-transactions--id-"
                    onclick="cancelTryOut('GETapi-internal-terra-v1-agent-wallet-transactions--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-internal-terra-v1-agent-wallet-transactions--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/internal/terra/v1/agent/wallet/transactions/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-internal-terra-v1-agent-wallet-transactions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-internal-terra-v1-agent-wallet-transactions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-internal-terra-v1-agent-wallet-transactions--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the transaction. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-internal-terra-v1-agent-wallet-retrait">POST api/internal/terra/v1/agent/wallet/retrait</h2>

<p>
</p>



<span id="example-requests-POSTapi-internal-terra-v1-agent-wallet-retrait">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/agent/wallet/retrait" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"montant\": 423,
    \"provider\": \"wave\",
    \"numero_compte\": \"mqeopfuudtdsufvyvddqa\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/wallet/retrait"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "montant": 423,
    "provider": "wave",
    "numero_compte": "mqeopfuudtdsufvyvddqa"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-agent-wallet-retrait">
</span>
<span id="execution-results-POSTapi-internal-terra-v1-agent-wallet-retrait" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-internal-terra-v1-agent-wallet-retrait"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-internal-terra-v1-agent-wallet-retrait"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-internal-terra-v1-agent-wallet-retrait" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-internal-terra-v1-agent-wallet-retrait">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-internal-terra-v1-agent-wallet-retrait" data-method="POST"
      data-path="api/internal/terra/v1/agent/wallet/retrait"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-internal-terra-v1-agent-wallet-retrait', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-internal-terra-v1-agent-wallet-retrait"
                    onclick="tryItOut('POSTapi-internal-terra-v1-agent-wallet-retrait');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-internal-terra-v1-agent-wallet-retrait"
                    onclick="cancelTryOut('POSTapi-internal-terra-v1-agent-wallet-retrait');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-internal-terra-v1-agent-wallet-retrait"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/internal/terra/v1/agent/wallet/retrait</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-internal-terra-v1-agent-wallet-retrait"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-internal-terra-v1-agent-wallet-retrait"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>montant</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="montant"                data-endpoint="POSTapi-internal-terra-v1-agent-wallet-retrait"
               value="423"
               data-component="body">
    <br>
<p>Must be at least 500. Example: <code>423</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>provider</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="provider"                data-endpoint="POSTapi-internal-terra-v1-agent-wallet-retrait"
               value="wave"
               data-component="body">
    <br>
<p>Example: <code>wave</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>wave</code></li> <li><code>orange</code></li> <li><code>mtn</code></li> <li><code>moov</code></li> <li><code>visa</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>numero_compte</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="numero_compte"                data-endpoint="POSTapi-internal-terra-v1-agent-wallet-retrait"
               value="mqeopfuudtdsufvyvddqa"
               data-component="body">
    <br>
<p>Must not be greater than 50 characters. Example: <code>mqeopfuudtdsufvyvddqa</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-internal-terra-v1-agent-wallet-retraits">GET api/internal/terra/v1/agent/wallet/retraits</h2>

<p>
</p>



<span id="example-requests-GETapi-internal-terra-v1-agent-wallet-retraits">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/agent/wallet/retraits" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/wallet/retraits"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-internal-terra-v1-agent-wallet-retraits">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-internal-terra-v1-agent-wallet-retraits" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-internal-terra-v1-agent-wallet-retraits"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-internal-terra-v1-agent-wallet-retraits"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-internal-terra-v1-agent-wallet-retraits" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-internal-terra-v1-agent-wallet-retraits">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-internal-terra-v1-agent-wallet-retraits" data-method="GET"
      data-path="api/internal/terra/v1/agent/wallet/retraits"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-internal-terra-v1-agent-wallet-retraits', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-internal-terra-v1-agent-wallet-retraits"
                    onclick="tryItOut('GETapi-internal-terra-v1-agent-wallet-retraits');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-internal-terra-v1-agent-wallet-retraits"
                    onclick="cancelTryOut('GETapi-internal-terra-v1-agent-wallet-retraits');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-internal-terra-v1-agent-wallet-retraits"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/internal/terra/v1/agent/wallet/retraits</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-internal-terra-v1-agent-wallet-retraits"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-internal-terra-v1-agent-wallet-retraits"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-internal-terra-v1-agent-wallet-retraits--id-">GET api/internal/terra/v1/agent/wallet/retraits/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-internal-terra-v1-agent-wallet-retraits--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/agent/wallet/retraits/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/wallet/retraits/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-internal-terra-v1-agent-wallet-retraits--id-">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-internal-terra-v1-agent-wallet-retraits--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-internal-terra-v1-agent-wallet-retraits--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-internal-terra-v1-agent-wallet-retraits--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-internal-terra-v1-agent-wallet-retraits--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-internal-terra-v1-agent-wallet-retraits--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-internal-terra-v1-agent-wallet-retraits--id-" data-method="GET"
      data-path="api/internal/terra/v1/agent/wallet/retraits/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-internal-terra-v1-agent-wallet-retraits--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-internal-terra-v1-agent-wallet-retraits--id-"
                    onclick="tryItOut('GETapi-internal-terra-v1-agent-wallet-retraits--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-internal-terra-v1-agent-wallet-retraits--id-"
                    onclick="cancelTryOut('GETapi-internal-terra-v1-agent-wallet-retraits--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-internal-terra-v1-agent-wallet-retraits--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/internal/terra/v1/agent/wallet/retraits/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-internal-terra-v1-agent-wallet-retraits--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-internal-terra-v1-agent-wallet-retraits--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-internal-terra-v1-agent-wallet-retraits--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the retrait. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-DELETEapi-internal-terra-v1-agent-wallet-retraits--id-">DELETE api/internal/terra/v1/agent/wallet/retraits/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-internal-terra-v1-agent-wallet-retraits--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/internal/terra/v1/agent/wallet/retraits/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/wallet/retraits/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-internal-terra-v1-agent-wallet-retraits--id-">
</span>
<span id="execution-results-DELETEapi-internal-terra-v1-agent-wallet-retraits--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-internal-terra-v1-agent-wallet-retraits--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-internal-terra-v1-agent-wallet-retraits--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-internal-terra-v1-agent-wallet-retraits--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-internal-terra-v1-agent-wallet-retraits--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-internal-terra-v1-agent-wallet-retraits--id-" data-method="DELETE"
      data-path="api/internal/terra/v1/agent/wallet/retraits/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-internal-terra-v1-agent-wallet-retraits--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-internal-terra-v1-agent-wallet-retraits--id-"
                    onclick="tryItOut('DELETEapi-internal-terra-v1-agent-wallet-retraits--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-internal-terra-v1-agent-wallet-retraits--id-"
                    onclick="cancelTryOut('DELETEapi-internal-terra-v1-agent-wallet-retraits--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-internal-terra-v1-agent-wallet-retraits--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/internal/terra/v1/agent/wallet/retraits/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-internal-terra-v1-agent-wallet-retraits--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-internal-terra-v1-agent-wallet-retraits--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-internal-terra-v1-agent-wallet-retraits--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the retrait. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-internal-terra-v1-business-register">POST api/internal/terra/v1/business/register</h2>

<p>
</p>



<span id="example-requests-POSTapi-internal-terra-v1-business-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/business/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name_business\": \"vmqeopfuudtdsufvyvddq\",
    \"prenom_business\": \"amniihfqcoynlazghdtqt\",
    \"phone_business\": \"consequatur\",
    \"email_business\": \"carolyne.luettgen@example.org\",
    \"entreprise_business\": \"consequatur\",
    \"email_entreprise_business\": \"carolyne.luettgen@example.org\",
    \"password\": \"ij-e\\/dl4m\",
    \"secteur_id\": \"edd82fb4-33c6-3f3e-9585-5d16cbef8718\",
    \"city_id\": \"92f7c094-3063-3c79-bbfc-7e096d42f6dd\",
    \"country_id\": \"e1062c55-7a55-3291-9268-21343a4e4d6a\",
    \"localisation_entreprise_business\": \"consequatur\",
    \"description_business\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name_business": "vmqeopfuudtdsufvyvddq",
    "prenom_business": "amniihfqcoynlazghdtqt",
    "phone_business": "consequatur",
    "email_business": "carolyne.luettgen@example.org",
    "entreprise_business": "consequatur",
    "email_entreprise_business": "carolyne.luettgen@example.org",
    "password": "ij-e\/dl4m",
    "secteur_id": "edd82fb4-33c6-3f3e-9585-5d16cbef8718",
    "city_id": "92f7c094-3063-3c79-bbfc-7e096d42f6dd",
    "country_id": "e1062c55-7a55-3291-9268-21343a4e4d6a",
    "localisation_entreprise_business": "consequatur",
    "description_business": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-business-register">
</span>
<span id="execution-results-POSTapi-internal-terra-v1-business-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-internal-terra-v1-business-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-internal-terra-v1-business-register"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-internal-terra-v1-business-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-internal-terra-v1-business-register">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-internal-terra-v1-business-register" data-method="POST"
      data-path="api/internal/terra/v1/business/register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-internal-terra-v1-business-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-internal-terra-v1-business-register"
                    onclick="tryItOut('POSTapi-internal-terra-v1-business-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-internal-terra-v1-business-register"
                    onclick="cancelTryOut('POSTapi-internal-terra-v1-business-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-internal-terra-v1-business-register"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/internal/terra/v1/business/register</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-internal-terra-v1-business-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-internal-terra-v1-business-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name_business</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name_business"                data-endpoint="POSTapi-internal-terra-v1-business-register"
               value="vmqeopfuudtdsufvyvddq"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>vmqeopfuudtdsufvyvddq</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>prenom_business</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="prenom_business"                data-endpoint="POSTapi-internal-terra-v1-business-register"
               value="amniihfqcoynlazghdtqt"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>amniihfqcoynlazghdtqt</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone_business</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone_business"                data-endpoint="POSTapi-internal-terra-v1-business-register"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email_business</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email_business"                data-endpoint="POSTapi-internal-terra-v1-business-register"
               value="carolyne.luettgen@example.org"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>carolyne.luettgen@example.org</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>entreprise_business</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="entreprise_business"                data-endpoint="POSTapi-internal-terra-v1-business-register"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email_entreprise_business</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email_entreprise_business"                data-endpoint="POSTapi-internal-terra-v1-business-register"
               value="carolyne.luettgen@example.org"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>carolyne.luettgen@example.org</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-internal-terra-v1-business-register"
               value="ij-e/dl4m"
               data-component="body">
    <br>
<p>Must be at least 6 characters. Example: <code>ij-e/dl4m</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>secteur_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="secteur_id"                data-endpoint="POSTapi-internal-terra-v1-business-register"
               value="edd82fb4-33c6-3f3e-9585-5d16cbef8718"
               data-component="body">
    <br>
<p>Must be a valid UUID. The <code>id_secteur</code> of an existing record in the secteur_activite table. Example: <code>edd82fb4-33c6-3f3e-9585-5d16cbef8718</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>city_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="city_id"                data-endpoint="POSTapi-internal-terra-v1-business-register"
               value="92f7c094-3063-3c79-bbfc-7e096d42f6dd"
               data-component="body">
    <br>
<p>Must be a valid UUID. The <code>id_city</code> of an existing record in the city table. Example: <code>92f7c094-3063-3c79-bbfc-7e096d42f6dd</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>country_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="country_id"                data-endpoint="POSTapi-internal-terra-v1-business-register"
               value="e1062c55-7a55-3291-9268-21343a4e4d6a"
               data-component="body">
    <br>
<p>Must be a valid UUID. The <code>id_country</code> of an existing record in the country table. Example: <code>e1062c55-7a55-3291-9268-21343a4e4d6a</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>localisation_entreprise_business</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="localisation_entreprise_business"                data-endpoint="POSTapi-internal-terra-v1-business-register"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description_business</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description_business"                data-endpoint="POSTapi-internal-terra-v1-business-register"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-internal-terra-v1-business-login">POST api/internal/terra/v1/business/login</h2>

<p>
</p>



<span id="example-requests-POSTapi-internal-terra-v1-business-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/business/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email_business\": \"qkunze@example.com\",
    \"password\": \"O[2UZ5ij-e\\/dl4m{o,\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email_business": "qkunze@example.com",
    "password": "O[2UZ5ij-e\/dl4m{o,"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-business-login">
</span>
<span id="execution-results-POSTapi-internal-terra-v1-business-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-internal-terra-v1-business-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-internal-terra-v1-business-login"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-internal-terra-v1-business-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-internal-terra-v1-business-login">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-internal-terra-v1-business-login" data-method="POST"
      data-path="api/internal/terra/v1/business/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-internal-terra-v1-business-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-internal-terra-v1-business-login"
                    onclick="tryItOut('POSTapi-internal-terra-v1-business-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-internal-terra-v1-business-login"
                    onclick="cancelTryOut('POSTapi-internal-terra-v1-business-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-internal-terra-v1-business-login"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/internal/terra/v1/business/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-internal-terra-v1-business-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-internal-terra-v1-business-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email_business</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email_business"                data-endpoint="POSTapi-internal-terra-v1-business-login"
               value="qkunze@example.com"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>qkunze@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-internal-terra-v1-business-login"
               value="O[2UZ5ij-e/dl4m{o,"
               data-component="body">
    <br>
<p>Example: <code>O[2UZ5ij-e/dl4m{o,</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-internal-terra-v1-business-send-otp">POST api/internal/terra/v1/business/send-otp</h2>

<p>
</p>



<span id="example-requests-POSTapi-internal-terra-v1-business-send-otp">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/business/send-otp" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"phone_business\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/send-otp"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "phone_business": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-business-send-otp">
</span>
<span id="execution-results-POSTapi-internal-terra-v1-business-send-otp" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-internal-terra-v1-business-send-otp"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-internal-terra-v1-business-send-otp"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-internal-terra-v1-business-send-otp" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-internal-terra-v1-business-send-otp">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-internal-terra-v1-business-send-otp" data-method="POST"
      data-path="api/internal/terra/v1/business/send-otp"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-internal-terra-v1-business-send-otp', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-internal-terra-v1-business-send-otp"
                    onclick="tryItOut('POSTapi-internal-terra-v1-business-send-otp');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-internal-terra-v1-business-send-otp"
                    onclick="cancelTryOut('POSTapi-internal-terra-v1-business-send-otp');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-internal-terra-v1-business-send-otp"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/internal/terra/v1/business/send-otp</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-internal-terra-v1-business-send-otp"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-internal-terra-v1-business-send-otp"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone_business</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone_business"                data-endpoint="POSTapi-internal-terra-v1-business-send-otp"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-internal-terra-v1-business-verify-otp">POST api/internal/terra/v1/business/verify-otp</h2>

<p>
</p>



<span id="example-requests-POSTapi-internal-terra-v1-business-verify-otp">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/business/verify-otp" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"phone_business\": \"consequatur\",
    \"otp\": 17
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/verify-otp"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "phone_business": "consequatur",
    "otp": 17
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-business-verify-otp">
</span>
<span id="execution-results-POSTapi-internal-terra-v1-business-verify-otp" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-internal-terra-v1-business-verify-otp"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-internal-terra-v1-business-verify-otp"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-internal-terra-v1-business-verify-otp" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-internal-terra-v1-business-verify-otp">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-internal-terra-v1-business-verify-otp" data-method="POST"
      data-path="api/internal/terra/v1/business/verify-otp"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-internal-terra-v1-business-verify-otp', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-internal-terra-v1-business-verify-otp"
                    onclick="tryItOut('POSTapi-internal-terra-v1-business-verify-otp');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-internal-terra-v1-business-verify-otp"
                    onclick="cancelTryOut('POSTapi-internal-terra-v1-business-verify-otp');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-internal-terra-v1-business-verify-otp"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/internal/terra/v1/business/verify-otp</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-internal-terra-v1-business-verify-otp"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-internal-terra-v1-business-verify-otp"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone_business</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone_business"                data-endpoint="POSTapi-internal-terra-v1-business-verify-otp"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>otp</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="otp"                data-endpoint="POSTapi-internal-terra-v1-business-verify-otp"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-internal-terra-v1-business-forgot-password">POST api/internal/terra/v1/business/forgot-password</h2>

<p>
</p>



<span id="example-requests-POSTapi-internal-terra-v1-business-forgot-password">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/business/forgot-password" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email_business\": \"qkunze@example.com\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/forgot-password"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email_business": "qkunze@example.com"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-business-forgot-password">
</span>
<span id="execution-results-POSTapi-internal-terra-v1-business-forgot-password" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-internal-terra-v1-business-forgot-password"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-internal-terra-v1-business-forgot-password"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-internal-terra-v1-business-forgot-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-internal-terra-v1-business-forgot-password">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-internal-terra-v1-business-forgot-password" data-method="POST"
      data-path="api/internal/terra/v1/business/forgot-password"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-internal-terra-v1-business-forgot-password', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-internal-terra-v1-business-forgot-password"
                    onclick="tryItOut('POSTapi-internal-terra-v1-business-forgot-password');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-internal-terra-v1-business-forgot-password"
                    onclick="cancelTryOut('POSTapi-internal-terra-v1-business-forgot-password');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-internal-terra-v1-business-forgot-password"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/internal/terra/v1/business/forgot-password</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-internal-terra-v1-business-forgot-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-internal-terra-v1-business-forgot-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email_business</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email_business"                data-endpoint="POSTapi-internal-terra-v1-business-forgot-password"
               value="qkunze@example.com"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>qkunze@example.com</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-internal-terra-v1-business-reset-password">POST api/internal/terra/v1/business/reset-password</h2>

<p>
</p>



<span id="example-requests-POSTapi-internal-terra-v1-business-reset-password">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/business/reset-password" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email_business\": \"qkunze@example.com\",
    \"otp\": 17,
    \"password\": \"[2UZ5ij-e\\/dl4\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/reset-password"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email_business": "qkunze@example.com",
    "otp": 17,
    "password": "[2UZ5ij-e\/dl4"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-business-reset-password">
</span>
<span id="execution-results-POSTapi-internal-terra-v1-business-reset-password" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-internal-terra-v1-business-reset-password"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-internal-terra-v1-business-reset-password"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-internal-terra-v1-business-reset-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-internal-terra-v1-business-reset-password">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-internal-terra-v1-business-reset-password" data-method="POST"
      data-path="api/internal/terra/v1/business/reset-password"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-internal-terra-v1-business-reset-password', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-internal-terra-v1-business-reset-password"
                    onclick="tryItOut('POSTapi-internal-terra-v1-business-reset-password');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-internal-terra-v1-business-reset-password"
                    onclick="cancelTryOut('POSTapi-internal-terra-v1-business-reset-password');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-internal-terra-v1-business-reset-password"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/internal/terra/v1/business/reset-password</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-internal-terra-v1-business-reset-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-internal-terra-v1-business-reset-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email_business</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email_business"                data-endpoint="POSTapi-internal-terra-v1-business-reset-password"
               value="qkunze@example.com"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>qkunze@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>otp</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="otp"                data-endpoint="POSTapi-internal-terra-v1-business-reset-password"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-internal-terra-v1-business-reset-password"
               value="[2UZ5ij-e/dl4"
               data-component="body">
    <br>
<p>Must be at least 6 characters. Example: <code>[2UZ5ij-e/dl4</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-internal-terra-v1-business-logout">POST api/internal/terra/v1/business/logout</h2>

<p>
</p>



<span id="example-requests-POSTapi-internal-terra-v1-business-logout">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/business/logout" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/logout"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-business-logout">
</span>
<span id="execution-results-POSTapi-internal-terra-v1-business-logout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-internal-terra-v1-business-logout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-internal-terra-v1-business-logout"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-internal-terra-v1-business-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-internal-terra-v1-business-logout">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-internal-terra-v1-business-logout" data-method="POST"
      data-path="api/internal/terra/v1/business/logout"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-internal-terra-v1-business-logout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-internal-terra-v1-business-logout"
                    onclick="tryItOut('POSTapi-internal-terra-v1-business-logout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-internal-terra-v1-business-logout"
                    onclick="cancelTryOut('POSTapi-internal-terra-v1-business-logout');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-internal-terra-v1-business-logout"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/internal/terra/v1/business/logout</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-internal-terra-v1-business-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-internal-terra-v1-business-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-internal-terra-v1-business-me">GET api/internal/terra/v1/business/me</h2>

<p>
</p>



<span id="example-requests-GETapi-internal-terra-v1-business-me">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/business/me" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/me"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-internal-terra-v1-business-me">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-internal-terra-v1-business-me" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-internal-terra-v1-business-me"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-internal-terra-v1-business-me"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-internal-terra-v1-business-me" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-internal-terra-v1-business-me">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-internal-terra-v1-business-me" data-method="GET"
      data-path="api/internal/terra/v1/business/me"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-internal-terra-v1-business-me', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-internal-terra-v1-business-me"
                    onclick="tryItOut('GETapi-internal-terra-v1-business-me');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-internal-terra-v1-business-me"
                    onclick="cancelTryOut('GETapi-internal-terra-v1-business-me');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-internal-terra-v1-business-me"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/internal/terra/v1/business/me</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-internal-terra-v1-business-me"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-internal-terra-v1-business-me"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-PUTapi-internal-terra-v1-business-me">PUT api/internal/terra/v1/business/me</h2>

<p>
</p>



<span id="example-requests-PUTapi-internal-terra-v1-business-me">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/internal/terra/v1/business/me" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name_business\": \"vmqeopfuudtdsufvyvddq\",
    \"prenom_business\": \"amniihfqcoynlazghdtqt\",
    \"localisation_entreprise_business\": \"consequatur\",
    \"description_business\": \"consequatur\",
    \"city_id\": \"98adc52b-966d-39db-809a-55902ee7228f\",
    \"country_id\": \"d48a46b6-3a18-3763-951d-66b7fdb284ae\",
    \"secteur_id\": \"5f74bcbe-0654-30c9-9013-151f9399e192\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/me"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name_business": "vmqeopfuudtdsufvyvddq",
    "prenom_business": "amniihfqcoynlazghdtqt",
    "localisation_entreprise_business": "consequatur",
    "description_business": "consequatur",
    "city_id": "98adc52b-966d-39db-809a-55902ee7228f",
    "country_id": "d48a46b6-3a18-3763-951d-66b7fdb284ae",
    "secteur_id": "5f74bcbe-0654-30c9-9013-151f9399e192"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-internal-terra-v1-business-me">
</span>
<span id="execution-results-PUTapi-internal-terra-v1-business-me" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-internal-terra-v1-business-me"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-internal-terra-v1-business-me"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-internal-terra-v1-business-me" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-internal-terra-v1-business-me">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-internal-terra-v1-business-me" data-method="PUT"
      data-path="api/internal/terra/v1/business/me"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-internal-terra-v1-business-me', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-internal-terra-v1-business-me"
                    onclick="tryItOut('PUTapi-internal-terra-v1-business-me');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-internal-terra-v1-business-me"
                    onclick="cancelTryOut('PUTapi-internal-terra-v1-business-me');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-internal-terra-v1-business-me"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/internal/terra/v1/business/me</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-internal-terra-v1-business-me"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-internal-terra-v1-business-me"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name_business</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name_business"                data-endpoint="PUTapi-internal-terra-v1-business-me"
               value="vmqeopfuudtdsufvyvddq"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>vmqeopfuudtdsufvyvddq</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>prenom_business</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="prenom_business"                data-endpoint="PUTapi-internal-terra-v1-business-me"
               value="amniihfqcoynlazghdtqt"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>amniihfqcoynlazghdtqt</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone_business</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone_business"                data-endpoint="PUTapi-internal-terra-v1-business-me"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>localisation_entreprise_business</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="localisation_entreprise_business"                data-endpoint="PUTapi-internal-terra-v1-business-me"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description_business</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description_business"                data-endpoint="PUTapi-internal-terra-v1-business-me"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>city_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="city_id"                data-endpoint="PUTapi-internal-terra-v1-business-me"
               value="98adc52b-966d-39db-809a-55902ee7228f"
               data-component="body">
    <br>
<p>Must be a valid UUID. The <code>id_city</code> of an existing record in the city table. Example: <code>98adc52b-966d-39db-809a-55902ee7228f</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>country_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="country_id"                data-endpoint="PUTapi-internal-terra-v1-business-me"
               value="d48a46b6-3a18-3763-951d-66b7fdb284ae"
               data-component="body">
    <br>
<p>Must be a valid UUID. The <code>id_country</code> of an existing record in the country table. Example: <code>d48a46b6-3a18-3763-951d-66b7fdb284ae</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>secteur_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="secteur_id"                data-endpoint="PUTapi-internal-terra-v1-business-me"
               value="5f74bcbe-0654-30c9-9013-151f9399e192"
               data-component="body">
    <br>
<p>Must be a valid UUID. The <code>id_secteur</code> of an existing record in the secteur_activite table. Example: <code>5f74bcbe-0654-30c9-9013-151f9399e192</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-internal-terra-v1-business-profile">GET api/internal/terra/v1/business/profile</h2>

<p>
</p>



<span id="example-requests-GETapi-internal-terra-v1-business-profile">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/business/profile" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/profile"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-internal-terra-v1-business-profile">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-internal-terra-v1-business-profile" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-internal-terra-v1-business-profile"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-internal-terra-v1-business-profile"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-internal-terra-v1-business-profile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-internal-terra-v1-business-profile">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-internal-terra-v1-business-profile" data-method="GET"
      data-path="api/internal/terra/v1/business/profile"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-internal-terra-v1-business-profile', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-internal-terra-v1-business-profile"
                    onclick="tryItOut('GETapi-internal-terra-v1-business-profile');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-internal-terra-v1-business-profile"
                    onclick="cancelTryOut('GETapi-internal-terra-v1-business-profile');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-internal-terra-v1-business-profile"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/internal/terra/v1/business/profile</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-internal-terra-v1-business-profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-internal-terra-v1-business-profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-PUTapi-internal-terra-v1-business-profile">PUT api/internal/terra/v1/business/profile</h2>

<p>
</p>



<span id="example-requests-PUTapi-internal-terra-v1-business-profile">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/internal/terra/v1/business/profile" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name_business\": \"vmqeopfuudtdsufvyvddq\",
    \"prenom_business\": \"amniihfqcoynlazghdtqt\",
    \"localisation_entreprise_business\": \"consequatur\",
    \"description_business\": \"consequatur\",
    \"city_id\": \"98adc52b-966d-39db-809a-55902ee7228f\",
    \"country_id\": \"d48a46b6-3a18-3763-951d-66b7fdb284ae\",
    \"secteur_id\": \"5f74bcbe-0654-30c9-9013-151f9399e192\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/profile"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name_business": "vmqeopfuudtdsufvyvddq",
    "prenom_business": "amniihfqcoynlazghdtqt",
    "localisation_entreprise_business": "consequatur",
    "description_business": "consequatur",
    "city_id": "98adc52b-966d-39db-809a-55902ee7228f",
    "country_id": "d48a46b6-3a18-3763-951d-66b7fdb284ae",
    "secteur_id": "5f74bcbe-0654-30c9-9013-151f9399e192"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-internal-terra-v1-business-profile">
</span>
<span id="execution-results-PUTapi-internal-terra-v1-business-profile" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-internal-terra-v1-business-profile"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-internal-terra-v1-business-profile"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-internal-terra-v1-business-profile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-internal-terra-v1-business-profile">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-internal-terra-v1-business-profile" data-method="PUT"
      data-path="api/internal/terra/v1/business/profile"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-internal-terra-v1-business-profile', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-internal-terra-v1-business-profile"
                    onclick="tryItOut('PUTapi-internal-terra-v1-business-profile');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-internal-terra-v1-business-profile"
                    onclick="cancelTryOut('PUTapi-internal-terra-v1-business-profile');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-internal-terra-v1-business-profile"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/internal/terra/v1/business/profile</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-internal-terra-v1-business-profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-internal-terra-v1-business-profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name_business</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name_business"                data-endpoint="PUTapi-internal-terra-v1-business-profile"
               value="vmqeopfuudtdsufvyvddq"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>vmqeopfuudtdsufvyvddq</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>prenom_business</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="prenom_business"                data-endpoint="PUTapi-internal-terra-v1-business-profile"
               value="amniihfqcoynlazghdtqt"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>amniihfqcoynlazghdtqt</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone_business</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone_business"                data-endpoint="PUTapi-internal-terra-v1-business-profile"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>localisation_entreprise_business</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="localisation_entreprise_business"                data-endpoint="PUTapi-internal-terra-v1-business-profile"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description_business</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description_business"                data-endpoint="PUTapi-internal-terra-v1-business-profile"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>city_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="city_id"                data-endpoint="PUTapi-internal-terra-v1-business-profile"
               value="98adc52b-966d-39db-809a-55902ee7228f"
               data-component="body">
    <br>
<p>Must be a valid UUID. The <code>id_city</code> of an existing record in the city table. Example: <code>98adc52b-966d-39db-809a-55902ee7228f</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>country_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="country_id"                data-endpoint="PUTapi-internal-terra-v1-business-profile"
               value="d48a46b6-3a18-3763-951d-66b7fdb284ae"
               data-component="body">
    <br>
<p>Must be a valid UUID. The <code>id_country</code> of an existing record in the country table. Example: <code>d48a46b6-3a18-3763-951d-66b7fdb284ae</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>secteur_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="secteur_id"                data-endpoint="PUTapi-internal-terra-v1-business-profile"
               value="5f74bcbe-0654-30c9-9013-151f9399e192"
               data-component="body">
    <br>
<p>Must be a valid UUID. The <code>id_secteur</code> of an existing record in the secteur_activite table. Example: <code>5f74bcbe-0654-30c9-9013-151f9399e192</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-internal-terra-v1-business-profile-logo">POST api/internal/terra/v1/business/profile/logo</h2>

<p>
</p>



<span id="example-requests-POSTapi-internal-terra-v1-business-profile-logo">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/business/profile/logo" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "logo=@C:\Users\theod\AppData\Local\Temp\php5FB8.tmp" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/profile/logo"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('logo', document.querySelector('input[name="logo"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-business-profile-logo">
</span>
<span id="execution-results-POSTapi-internal-terra-v1-business-profile-logo" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-internal-terra-v1-business-profile-logo"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-internal-terra-v1-business-profile-logo"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-internal-terra-v1-business-profile-logo" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-internal-terra-v1-business-profile-logo">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-internal-terra-v1-business-profile-logo" data-method="POST"
      data-path="api/internal/terra/v1/business/profile/logo"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-internal-terra-v1-business-profile-logo', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-internal-terra-v1-business-profile-logo"
                    onclick="tryItOut('POSTapi-internal-terra-v1-business-profile-logo');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-internal-terra-v1-business-profile-logo"
                    onclick="cancelTryOut('POSTapi-internal-terra-v1-business-profile-logo');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-internal-terra-v1-business-profile-logo"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/internal/terra/v1/business/profile/logo</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-internal-terra-v1-business-profile-logo"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-internal-terra-v1-business-profile-logo"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>logo</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="logo"                data-endpoint="POSTapi-internal-terra-v1-business-profile-logo"
               value=""
               data-component="body">
    <br>
<p>Must be an image. Must not be greater than 2048 kilobytes. Example: <code>C:\Users\theod\AppData\Local\Temp\php5FB8.tmp</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-internal-terra-v1-business-missions">GET api/internal/terra/v1/business/missions</h2>

<p>
</p>



<span id="example-requests-GETapi-internal-terra-v1-business-missions">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/business/missions" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-internal-terra-v1-business-missions">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-internal-terra-v1-business-missions" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-internal-terra-v1-business-missions"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-internal-terra-v1-business-missions"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-internal-terra-v1-business-missions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-internal-terra-v1-business-missions">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-internal-terra-v1-business-missions" data-method="GET"
      data-path="api/internal/terra/v1/business/missions"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-internal-terra-v1-business-missions', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-internal-terra-v1-business-missions"
                    onclick="tryItOut('GETapi-internal-terra-v1-business-missions');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-internal-terra-v1-business-missions"
                    onclick="cancelTryOut('GETapi-internal-terra-v1-business-missions');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-internal-terra-v1-business-missions"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/internal/terra/v1/business/missions</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-internal-terra-v1-business-missions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-internal-terra-v1-business-missions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-internal-terra-v1-business-missions">POST api/internal/terra/v1/business/missions</h2>

<p>
</p>



<span id="example-requests-POSTapi-internal-terra-v1-business-missions">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/business/missions" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"type_mission\": \"vmqeopfuudtdsufvyvddq\",
    \"cible\": \"personnes\",
    \"nom_application\": \"amniihfqcoynlazghdtqt\",
    \"logo_url\": \"http:\\/\\/towne.com\\/consequatur-debitis-et-id\",
    \"couleur_primaire\": \"ilpmufi\",
    \"couleur_secondaire\": \"nllwloa\",
    \"dark_mode\": true,
    \"date_debut\": \"2026-03-31T10:52:59\",
    \"date_fin\": \"2107-04-29\",
    \"country_id\": \"98adc52b-966d-39db-809a-55902ee7228f\",
    \"city_id\": \"d48a46b6-3a18-3763-951d-66b7fdb284ae\",
    \"commune_id\": \"5f74bcbe-0654-30c9-9013-151f9399e192\",
    \"objectif_nombre\": 70,
    \"objectif_duree\": 71,
    \"objectif_unite\": \"jours\",
    \"methode_api\": true
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "type_mission": "vmqeopfuudtdsufvyvddq",
    "cible": "personnes",
    "nom_application": "amniihfqcoynlazghdtqt",
    "logo_url": "http:\/\/towne.com\/consequatur-debitis-et-id",
    "couleur_primaire": "ilpmufi",
    "couleur_secondaire": "nllwloa",
    "dark_mode": true,
    "date_debut": "2026-03-31T10:52:59",
    "date_fin": "2107-04-29",
    "country_id": "98adc52b-966d-39db-809a-55902ee7228f",
    "city_id": "d48a46b6-3a18-3763-951d-66b7fdb284ae",
    "commune_id": "5f74bcbe-0654-30c9-9013-151f9399e192",
    "objectif_nombre": 70,
    "objectif_duree": 71,
    "objectif_unite": "jours",
    "methode_api": true
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-business-missions">
</span>
<span id="execution-results-POSTapi-internal-terra-v1-business-missions" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-internal-terra-v1-business-missions"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-internal-terra-v1-business-missions"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-internal-terra-v1-business-missions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-internal-terra-v1-business-missions">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-internal-terra-v1-business-missions" data-method="POST"
      data-path="api/internal/terra/v1/business/missions"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-internal-terra-v1-business-missions', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-internal-terra-v1-business-missions"
                    onclick="tryItOut('POSTapi-internal-terra-v1-business-missions');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-internal-terra-v1-business-missions"
                    onclick="cancelTryOut('POSTapi-internal-terra-v1-business-missions');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-internal-terra-v1-business-missions"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/internal/terra/v1/business/missions</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-internal-terra-v1-business-missions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-internal-terra-v1-business-missions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>type_mission</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="type_mission"                data-endpoint="POSTapi-internal-terra-v1-business-missions"
               value="vmqeopfuudtdsufvyvddq"
               data-component="body">
    <br>
<p>Must not be greater than 50 characters. Example: <code>vmqeopfuudtdsufvyvddq</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>cible</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="cible"                data-endpoint="POSTapi-internal-terra-v1-business-missions"
               value="personnes"
               data-component="body">
    <br>
<p>Example: <code>personnes</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>entreprises</code></li> <li><code>personnes</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>nom_application</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="nom_application"                data-endpoint="POSTapi-internal-terra-v1-business-missions"
               value="amniihfqcoynlazghdtqt"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>amniihfqcoynlazghdtqt</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>logo_url</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="logo_url"                data-endpoint="POSTapi-internal-terra-v1-business-missions"
               value="http://towne.com/consequatur-debitis-et-id"
               data-component="body">
    <br>
<p>Must be a valid URL. Example: <code>http://towne.com/consequatur-debitis-et-id</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>couleur_primaire</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="couleur_primaire"                data-endpoint="POSTapi-internal-terra-v1-business-missions"
               value="ilpmufi"
               data-component="body">
    <br>
<p>Must be 7 characters. Example: <code>ilpmufi</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>couleur_secondaire</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="couleur_secondaire"                data-endpoint="POSTapi-internal-terra-v1-business-missions"
               value="nllwloa"
               data-component="body">
    <br>
<p>Must be 7 characters. Example: <code>nllwloa</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>dark_mode</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-internal-terra-v1-business-missions" style="display: none">
            <input type="radio" name="dark_mode"
                   value="true"
                   data-endpoint="POSTapi-internal-terra-v1-business-missions"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-internal-terra-v1-business-missions" style="display: none">
            <input type="radio" name="dark_mode"
                   value="false"
                   data-endpoint="POSTapi-internal-terra-v1-business-missions"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>date_debut</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="date_debut"                data-endpoint="POSTapi-internal-terra-v1-business-missions"
               value="2026-03-31T10:52:59"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2026-03-31T10:52:59</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>date_fin</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="date_fin"                data-endpoint="POSTapi-internal-terra-v1-business-missions"
               value="2107-04-29"
               data-component="body">
    <br>
<p>Must be a valid date. Must be a date after or equal to <code>date_debut</code>. Example: <code>2107-04-29</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>country_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="country_id"                data-endpoint="POSTapi-internal-terra-v1-business-missions"
               value="98adc52b-966d-39db-809a-55902ee7228f"
               data-component="body">
    <br>
<p>Must be a valid UUID. The <code>id_country</code> of an existing record in the country table. Example: <code>98adc52b-966d-39db-809a-55902ee7228f</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>city_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="city_id"                data-endpoint="POSTapi-internal-terra-v1-business-missions"
               value="d48a46b6-3a18-3763-951d-66b7fdb284ae"
               data-component="body">
    <br>
<p>Must be a valid UUID. The <code>id_city</code> of an existing record in the city table. Example: <code>d48a46b6-3a18-3763-951d-66b7fdb284ae</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>commune_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="commune_id"                data-endpoint="POSTapi-internal-terra-v1-business-missions"
               value="5f74bcbe-0654-30c9-9013-151f9399e192"
               data-component="body">
    <br>
<p>Must be a valid UUID. The <code>id_commune</code> of an existing record in the commune table. Example: <code>5f74bcbe-0654-30c9-9013-151f9399e192</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>objectif_nombre</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="objectif_nombre"                data-endpoint="POSTapi-internal-terra-v1-business-missions"
               value="70"
               data-component="body">
    <br>
<p>Must be at least 1. Example: <code>70</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>objectif_duree</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="objectif_duree"                data-endpoint="POSTapi-internal-terra-v1-business-missions"
               value="71"
               data-component="body">
    <br>
<p>Must be at least 1. Example: <code>71</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>objectif_unite</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="objectif_unite"                data-endpoint="POSTapi-internal-terra-v1-business-missions"
               value="jours"
               data-component="body">
    <br>
<p>Example: <code>jours</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>jours</code></li> <li><code>mois</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>methode_api</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-internal-terra-v1-business-missions" style="display: none">
            <input type="radio" name="methode_api"
                   value="true"
                   data-endpoint="POSTapi-internal-terra-v1-business-missions"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-internal-terra-v1-business-missions" style="display: none">
            <input type="radio" name="methode_api"
                   value="false"
                   data-endpoint="POSTapi-internal-terra-v1-business-missions"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-internal-terra-v1-business-missions--id-">GET api/internal/terra/v1/business/missions/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-internal-terra-v1-business-missions--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/business/missions/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-internal-terra-v1-business-missions--id-">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-internal-terra-v1-business-missions--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-internal-terra-v1-business-missions--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-internal-terra-v1-business-missions--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-internal-terra-v1-business-missions--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-internal-terra-v1-business-missions--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-internal-terra-v1-business-missions--id-" data-method="GET"
      data-path="api/internal/terra/v1/business/missions/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-internal-terra-v1-business-missions--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-internal-terra-v1-business-missions--id-"
                    onclick="tryItOut('GETapi-internal-terra-v1-business-missions--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-internal-terra-v1-business-missions--id-"
                    onclick="cancelTryOut('GETapi-internal-terra-v1-business-missions--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-internal-terra-v1-business-missions--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/internal/terra/v1/business/missions/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-internal-terra-v1-business-missions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-internal-terra-v1-business-missions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-internal-terra-v1-business-missions--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the mission. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-internal-terra-v1-business-missions--id-">PUT api/internal/terra/v1/business/missions/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-internal-terra-v1-business-missions--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/internal/terra/v1/business/missions/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"type_mission\": \"vmqeopfuudtdsufvyvddq\",
    \"cible\": \"entreprises\",
    \"nom_application\": \"amniihfqcoynlazghdtqt\",
    \"logo_url\": \"http:\\/\\/towne.com\\/consequatur-debitis-et-id\",
    \"couleur_primaire\": \"ilpmufi\",
    \"couleur_secondaire\": \"nllwloa\",
    \"dark_mode\": true,
    \"date_debut\": \"2026-03-31T10:53:00\",
    \"date_fin\": \"2026-03-31T10:53:00\",
    \"country_id\": \"0926ae27-427d-350e-aa2e-95b14501671d\",
    \"city_id\": \"e85b0427-07fa-3ed4-92bb-daabff685a73\",
    \"commune_id\": \"bf7c1d71-86ac-3553-b993-13642f61513d\",
    \"objectif_nombre\": 64,
    \"objectif_duree\": 34,
    \"objectif_unite\": \"jours\",
    \"methode_api\": false
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "type_mission": "vmqeopfuudtdsufvyvddq",
    "cible": "entreprises",
    "nom_application": "amniihfqcoynlazghdtqt",
    "logo_url": "http:\/\/towne.com\/consequatur-debitis-et-id",
    "couleur_primaire": "ilpmufi",
    "couleur_secondaire": "nllwloa",
    "dark_mode": true,
    "date_debut": "2026-03-31T10:53:00",
    "date_fin": "2026-03-31T10:53:00",
    "country_id": "0926ae27-427d-350e-aa2e-95b14501671d",
    "city_id": "e85b0427-07fa-3ed4-92bb-daabff685a73",
    "commune_id": "bf7c1d71-86ac-3553-b993-13642f61513d",
    "objectif_nombre": 64,
    "objectif_duree": 34,
    "objectif_unite": "jours",
    "methode_api": false
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-internal-terra-v1-business-missions--id-">
</span>
<span id="execution-results-PUTapi-internal-terra-v1-business-missions--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-internal-terra-v1-business-missions--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-internal-terra-v1-business-missions--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-internal-terra-v1-business-missions--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-internal-terra-v1-business-missions--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-internal-terra-v1-business-missions--id-" data-method="PUT"
      data-path="api/internal/terra/v1/business/missions/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-internal-terra-v1-business-missions--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-internal-terra-v1-business-missions--id-"
                    onclick="tryItOut('PUTapi-internal-terra-v1-business-missions--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-internal-terra-v1-business-missions--id-"
                    onclick="cancelTryOut('PUTapi-internal-terra-v1-business-missions--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-internal-terra-v1-business-missions--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/internal/terra/v1/business/missions/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the mission. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>type_mission</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="type_mission"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id-"
               value="vmqeopfuudtdsufvyvddq"
               data-component="body">
    <br>
<p>Must not be greater than 50 characters. Example: <code>vmqeopfuudtdsufvyvddq</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>cible</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="cible"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id-"
               value="entreprises"
               data-component="body">
    <br>
<p>Example: <code>entreprises</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>entreprises</code></li> <li><code>personnes</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>nom_application</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="nom_application"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id-"
               value="amniihfqcoynlazghdtqt"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>amniihfqcoynlazghdtqt</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>logo_url</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="logo_url"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id-"
               value="http://towne.com/consequatur-debitis-et-id"
               data-component="body">
    <br>
<p>Must be a valid URL. Example: <code>http://towne.com/consequatur-debitis-et-id</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>couleur_primaire</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="couleur_primaire"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id-"
               value="ilpmufi"
               data-component="body">
    <br>
<p>Must be 7 characters. Example: <code>ilpmufi</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>couleur_secondaire</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="couleur_secondaire"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id-"
               value="nllwloa"
               data-component="body">
    <br>
<p>Must be 7 characters. Example: <code>nllwloa</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>dark_mode</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="PUTapi-internal-terra-v1-business-missions--id-" style="display: none">
            <input type="radio" name="dark_mode"
                   value="true"
                   data-endpoint="PUTapi-internal-terra-v1-business-missions--id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-internal-terra-v1-business-missions--id-" style="display: none">
            <input type="radio" name="dark_mode"
                   value="false"
                   data-endpoint="PUTapi-internal-terra-v1-business-missions--id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>date_debut</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="date_debut"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id-"
               value="2026-03-31T10:53:00"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2026-03-31T10:53:00</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>date_fin</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="date_fin"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id-"
               value="2026-03-31T10:53:00"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2026-03-31T10:53:00</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>country_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="country_id"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id-"
               value="0926ae27-427d-350e-aa2e-95b14501671d"
               data-component="body">
    <br>
<p>Must be a valid UUID. The <code>id_country</code> of an existing record in the country table. Example: <code>0926ae27-427d-350e-aa2e-95b14501671d</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>city_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="city_id"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id-"
               value="e85b0427-07fa-3ed4-92bb-daabff685a73"
               data-component="body">
    <br>
<p>Must be a valid UUID. The <code>id_city</code> of an existing record in the city table. Example: <code>e85b0427-07fa-3ed4-92bb-daabff685a73</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>commune_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="commune_id"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id-"
               value="bf7c1d71-86ac-3553-b993-13642f61513d"
               data-component="body">
    <br>
<p>Must be a valid UUID. The <code>id_commune</code> of an existing record in the commune table. Example: <code>bf7c1d71-86ac-3553-b993-13642f61513d</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>objectif_nombre</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="objectif_nombre"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id-"
               value="64"
               data-component="body">
    <br>
<p>Must be at least 1. Example: <code>64</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>objectif_duree</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="objectif_duree"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id-"
               value="34"
               data-component="body">
    <br>
<p>Must be at least 1. Example: <code>34</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>objectif_unite</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="objectif_unite"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id-"
               value="jours"
               data-component="body">
    <br>
<p>Example: <code>jours</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>jours</code></li> <li><code>mois</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>methode_api</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="PUTapi-internal-terra-v1-business-missions--id-" style="display: none">
            <input type="radio" name="methode_api"
                   value="true"
                   data-endpoint="PUTapi-internal-terra-v1-business-missions--id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-internal-terra-v1-business-missions--id-" style="display: none">
            <input type="radio" name="methode_api"
                   value="false"
                   data-endpoint="PUTapi-internal-terra-v1-business-missions--id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-internal-terra-v1-business-missions--id-">DELETE api/internal/terra/v1/business/missions/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-internal-terra-v1-business-missions--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/internal/terra/v1/business/missions/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-internal-terra-v1-business-missions--id-">
</span>
<span id="execution-results-DELETEapi-internal-terra-v1-business-missions--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-internal-terra-v1-business-missions--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-internal-terra-v1-business-missions--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-internal-terra-v1-business-missions--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-internal-terra-v1-business-missions--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-internal-terra-v1-business-missions--id-" data-method="DELETE"
      data-path="api/internal/terra/v1/business/missions/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-internal-terra-v1-business-missions--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-internal-terra-v1-business-missions--id-"
                    onclick="tryItOut('DELETEapi-internal-terra-v1-business-missions--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-internal-terra-v1-business-missions--id-"
                    onclick="cancelTryOut('DELETEapi-internal-terra-v1-business-missions--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-internal-terra-v1-business-missions--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/internal/terra/v1/business/missions/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-internal-terra-v1-business-missions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-internal-terra-v1-business-missions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-internal-terra-v1-business-missions--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the mission. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-internal-terra-v1-business-missions--id--publier">POST api/internal/terra/v1/business/missions/{id}/publier</h2>

<p>
</p>



<span id="example-requests-POSTapi-internal-terra-v1-business-missions--id--publier">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/business/missions/consequatur/publier" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/consequatur/publier"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-business-missions--id--publier">
</span>
<span id="execution-results-POSTapi-internal-terra-v1-business-missions--id--publier" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-internal-terra-v1-business-missions--id--publier"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-internal-terra-v1-business-missions--id--publier"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-internal-terra-v1-business-missions--id--publier" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-internal-terra-v1-business-missions--id--publier">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-internal-terra-v1-business-missions--id--publier" data-method="POST"
      data-path="api/internal/terra/v1/business/missions/{id}/publier"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-internal-terra-v1-business-missions--id--publier', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-internal-terra-v1-business-missions--id--publier"
                    onclick="tryItOut('POSTapi-internal-terra-v1-business-missions--id--publier');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-internal-terra-v1-business-missions--id--publier"
                    onclick="cancelTryOut('POSTapi-internal-terra-v1-business-missions--id--publier');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-internal-terra-v1-business-missions--id--publier"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/internal/terra/v1/business/missions/{id}/publier</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--publier"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--publier"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--publier"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the mission. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-internal-terra-v1-business-missions--id--terminer">POST api/internal/terra/v1/business/missions/{id}/terminer</h2>

<p>
</p>



<span id="example-requests-POSTapi-internal-terra-v1-business-missions--id--terminer">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/business/missions/consequatur/terminer" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/consequatur/terminer"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-business-missions--id--terminer">
</span>
<span id="execution-results-POSTapi-internal-terra-v1-business-missions--id--terminer" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-internal-terra-v1-business-missions--id--terminer"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-internal-terra-v1-business-missions--id--terminer"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-internal-terra-v1-business-missions--id--terminer" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-internal-terra-v1-business-missions--id--terminer">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-internal-terra-v1-business-missions--id--terminer" data-method="POST"
      data-path="api/internal/terra/v1/business/missions/{id}/terminer"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-internal-terra-v1-business-missions--id--terminer', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-internal-terra-v1-business-missions--id--terminer"
                    onclick="tryItOut('POSTapi-internal-terra-v1-business-missions--id--terminer');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-internal-terra-v1-business-missions--id--terminer"
                    onclick="cancelTryOut('POSTapi-internal-terra-v1-business-missions--id--terminer');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-internal-terra-v1-business-missions--id--terminer"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/internal/terra/v1/business/missions/{id}/terminer</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--terminer"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--terminer"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--terminer"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the mission. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-internal-terra-v1-business-missions--id--statistiques">GET api/internal/terra/v1/business/missions/{id}/statistiques</h2>

<p>
</p>



<span id="example-requests-GETapi-internal-terra-v1-business-missions--id--statistiques">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/business/missions/consequatur/statistiques" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/consequatur/statistiques"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-internal-terra-v1-business-missions--id--statistiques">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-internal-terra-v1-business-missions--id--statistiques" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-internal-terra-v1-business-missions--id--statistiques"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-internal-terra-v1-business-missions--id--statistiques"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-internal-terra-v1-business-missions--id--statistiques" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-internal-terra-v1-business-missions--id--statistiques">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-internal-terra-v1-business-missions--id--statistiques" data-method="GET"
      data-path="api/internal/terra/v1/business/missions/{id}/statistiques"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-internal-terra-v1-business-missions--id--statistiques', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-internal-terra-v1-business-missions--id--statistiques"
                    onclick="tryItOut('GETapi-internal-terra-v1-business-missions--id--statistiques');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-internal-terra-v1-business-missions--id--statistiques"
                    onclick="cancelTryOut('GETapi-internal-terra-v1-business-missions--id--statistiques');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-internal-terra-v1-business-missions--id--statistiques"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/internal/terra/v1/business/missions/{id}/statistiques</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-internal-terra-v1-business-missions--id--statistiques"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-internal-terra-v1-business-missions--id--statistiques"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-internal-terra-v1-business-missions--id--statistiques"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the mission. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-internal-terra-v1-business-missions--id--formulaires">GET api/internal/terra/v1/business/missions/{id}/formulaires</h2>

<p>
</p>



<span id="example-requests-GETapi-internal-terra-v1-business-missions--id--formulaires">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/business/missions/consequatur/formulaires" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/consequatur/formulaires"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-internal-terra-v1-business-missions--id--formulaires">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-internal-terra-v1-business-missions--id--formulaires" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-internal-terra-v1-business-missions--id--formulaires"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-internal-terra-v1-business-missions--id--formulaires"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-internal-terra-v1-business-missions--id--formulaires" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-internal-terra-v1-business-missions--id--formulaires">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-internal-terra-v1-business-missions--id--formulaires" data-method="GET"
      data-path="api/internal/terra/v1/business/missions/{id}/formulaires"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-internal-terra-v1-business-missions--id--formulaires', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-internal-terra-v1-business-missions--id--formulaires"
                    onclick="tryItOut('GETapi-internal-terra-v1-business-missions--id--formulaires');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-internal-terra-v1-business-missions--id--formulaires"
                    onclick="cancelTryOut('GETapi-internal-terra-v1-business-missions--id--formulaires');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-internal-terra-v1-business-missions--id--formulaires"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/internal/terra/v1/business/missions/{id}/formulaires</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-internal-terra-v1-business-missions--id--formulaires"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-internal-terra-v1-business-missions--id--formulaires"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-internal-terra-v1-business-missions--id--formulaires"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the mission. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-internal-terra-v1-business-missions--id--formulaires">POST api/internal/terra/v1/business/missions/{id}/formulaires</h2>

<p>
</p>



<span id="example-requests-POSTapi-internal-terra-v1-business-missions--id--formulaires">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/business/missions/consequatur/formulaires" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"nom\": \"vmqeopfuudtdsufvyvddq\",
    \"ordre\": 1
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/consequatur/formulaires"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nom": "vmqeopfuudtdsufvyvddq",
    "ordre": 1
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-business-missions--id--formulaires">
</span>
<span id="execution-results-POSTapi-internal-terra-v1-business-missions--id--formulaires" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-internal-terra-v1-business-missions--id--formulaires"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-internal-terra-v1-business-missions--id--formulaires"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-internal-terra-v1-business-missions--id--formulaires" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-internal-terra-v1-business-missions--id--formulaires">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-internal-terra-v1-business-missions--id--formulaires" data-method="POST"
      data-path="api/internal/terra/v1/business/missions/{id}/formulaires"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-internal-terra-v1-business-missions--id--formulaires', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-internal-terra-v1-business-missions--id--formulaires"
                    onclick="tryItOut('POSTapi-internal-terra-v1-business-missions--id--formulaires');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-internal-terra-v1-business-missions--id--formulaires"
                    onclick="cancelTryOut('POSTapi-internal-terra-v1-business-missions--id--formulaires');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-internal-terra-v1-business-missions--id--formulaires"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/internal/terra/v1/business/missions/{id}/formulaires</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--formulaires"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--formulaires"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--formulaires"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the mission. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>nom</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="nom"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--formulaires"
               value="vmqeopfuudtdsufvyvddq"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>vmqeopfuudtdsufvyvddq</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>ordre</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="ordre"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--formulaires"
               value="1"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>1</code></p>
        </div>
        </form>

                    <h2 id="endpoints-PUTapi-internal-terra-v1-business-missions--id--formulaires--fid-">PUT api/internal/terra/v1/business/missions/{id}/formulaires/{fid}</h2>

<p>
</p>



<span id="example-requests-PUTapi-internal-terra-v1-business-missions--id--formulaires--fid-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/internal/terra/v1/business/missions/consequatur/formulaires/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"nom\": \"vmqeopfuudtdsufvyvddq\",
    \"ordre\": 1
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/consequatur/formulaires/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nom": "vmqeopfuudtdsufvyvddq",
    "ordre": 1
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-internal-terra-v1-business-missions--id--formulaires--fid-">
</span>
<span id="execution-results-PUTapi-internal-terra-v1-business-missions--id--formulaires--fid-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-internal-terra-v1-business-missions--id--formulaires--fid-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-internal-terra-v1-business-missions--id--formulaires--fid-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-internal-terra-v1-business-missions--id--formulaires--fid-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-internal-terra-v1-business-missions--id--formulaires--fid-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-internal-terra-v1-business-missions--id--formulaires--fid-" data-method="PUT"
      data-path="api/internal/terra/v1/business/missions/{id}/formulaires/{fid}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-internal-terra-v1-business-missions--id--formulaires--fid-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-internal-terra-v1-business-missions--id--formulaires--fid-"
                    onclick="tryItOut('PUTapi-internal-terra-v1-business-missions--id--formulaires--fid-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-internal-terra-v1-business-missions--id--formulaires--fid-"
                    onclick="cancelTryOut('PUTapi-internal-terra-v1-business-missions--id--formulaires--fid-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-internal-terra-v1-business-missions--id--formulaires--fid-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/internal/terra/v1/business/missions/{id}/formulaires/{fid}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id--formulaires--fid-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id--formulaires--fid-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id--formulaires--fid-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the mission. Example: <code>consequatur</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>fid</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="fid"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id--formulaires--fid-"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>nom</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="nom"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id--formulaires--fid-"
               value="vmqeopfuudtdsufvyvddq"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>vmqeopfuudtdsufvyvddq</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>ordre</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="ordre"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id--formulaires--fid-"
               value="1"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>1</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-internal-terra-v1-business-missions--id--formulaires--fid-">DELETE api/internal/terra/v1/business/missions/{id}/formulaires/{fid}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-internal-terra-v1-business-missions--id--formulaires--fid-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/internal/terra/v1/business/missions/consequatur/formulaires/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/consequatur/formulaires/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-internal-terra-v1-business-missions--id--formulaires--fid-">
</span>
<span id="execution-results-DELETEapi-internal-terra-v1-business-missions--id--formulaires--fid-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-internal-terra-v1-business-missions--id--formulaires--fid-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-internal-terra-v1-business-missions--id--formulaires--fid-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-internal-terra-v1-business-missions--id--formulaires--fid-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-internal-terra-v1-business-missions--id--formulaires--fid-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-internal-terra-v1-business-missions--id--formulaires--fid-" data-method="DELETE"
      data-path="api/internal/terra/v1/business/missions/{id}/formulaires/{fid}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-internal-terra-v1-business-missions--id--formulaires--fid-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-internal-terra-v1-business-missions--id--formulaires--fid-"
                    onclick="tryItOut('DELETEapi-internal-terra-v1-business-missions--id--formulaires--fid-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-internal-terra-v1-business-missions--id--formulaires--fid-"
                    onclick="cancelTryOut('DELETEapi-internal-terra-v1-business-missions--id--formulaires--fid-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-internal-terra-v1-business-missions--id--formulaires--fid-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/internal/terra/v1/business/missions/{id}/formulaires/{fid}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-internal-terra-v1-business-missions--id--formulaires--fid-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-internal-terra-v1-business-missions--id--formulaires--fid-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-internal-terra-v1-business-missions--id--formulaires--fid-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the mission. Example: <code>consequatur</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>fid</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="fid"                data-endpoint="DELETEapi-internal-terra-v1-business-missions--id--formulaires--fid-"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-internal-terra-v1-business-formulaires--fid--champs">POST api/internal/terra/v1/business/formulaires/{fid}/champs</h2>

<p>
</p>



<span id="example-requests-POSTapi-internal-terra-v1-business-formulaires--fid--champs">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/business/formulaires/consequatur/champs" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"nom\": \"vmqeopfuudtdsufvyvddq\",
    \"ordre\": 1
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/formulaires/consequatur/champs"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nom": "vmqeopfuudtdsufvyvddq",
    "ordre": 1
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-business-formulaires--fid--champs">
</span>
<span id="execution-results-POSTapi-internal-terra-v1-business-formulaires--fid--champs" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-internal-terra-v1-business-formulaires--fid--champs"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-internal-terra-v1-business-formulaires--fid--champs"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-internal-terra-v1-business-formulaires--fid--champs" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-internal-terra-v1-business-formulaires--fid--champs">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-internal-terra-v1-business-formulaires--fid--champs" data-method="POST"
      data-path="api/internal/terra/v1/business/formulaires/{fid}/champs"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-internal-terra-v1-business-formulaires--fid--champs', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-internal-terra-v1-business-formulaires--fid--champs"
                    onclick="tryItOut('POSTapi-internal-terra-v1-business-formulaires--fid--champs');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-internal-terra-v1-business-formulaires--fid--champs"
                    onclick="cancelTryOut('POSTapi-internal-terra-v1-business-formulaires--fid--champs');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-internal-terra-v1-business-formulaires--fid--champs"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/internal/terra/v1/business/formulaires/{fid}/champs</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-internal-terra-v1-business-formulaires--fid--champs"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-internal-terra-v1-business-formulaires--fid--champs"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>fid</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="fid"                data-endpoint="POSTapi-internal-terra-v1-business-formulaires--fid--champs"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>nom</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="nom"                data-endpoint="POSTapi-internal-terra-v1-business-formulaires--fid--champs"
               value="vmqeopfuudtdsufvyvddq"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>vmqeopfuudtdsufvyvddq</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>ordre</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="ordre"                data-endpoint="POSTapi-internal-terra-v1-business-formulaires--fid--champs"
               value="1"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>1</code></p>
        </div>
        </form>

                    <h2 id="endpoints-PUTapi-internal-terra-v1-business-formulaires--fid--champs--cid-">PUT api/internal/terra/v1/business/formulaires/{fid}/champs/{cid}</h2>

<p>
</p>



<span id="example-requests-PUTapi-internal-terra-v1-business-formulaires--fid--champs--cid-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/internal/terra/v1/business/formulaires/consequatur/champs/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"nom\": \"vmqeopfuudtdsufvyvddq\",
    \"ordre\": 1
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/formulaires/consequatur/champs/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nom": "vmqeopfuudtdsufvyvddq",
    "ordre": 1
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-internal-terra-v1-business-formulaires--fid--champs--cid-">
</span>
<span id="execution-results-PUTapi-internal-terra-v1-business-formulaires--fid--champs--cid-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-internal-terra-v1-business-formulaires--fid--champs--cid-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-internal-terra-v1-business-formulaires--fid--champs--cid-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-internal-terra-v1-business-formulaires--fid--champs--cid-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-internal-terra-v1-business-formulaires--fid--champs--cid-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-internal-terra-v1-business-formulaires--fid--champs--cid-" data-method="PUT"
      data-path="api/internal/terra/v1/business/formulaires/{fid}/champs/{cid}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-internal-terra-v1-business-formulaires--fid--champs--cid-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-internal-terra-v1-business-formulaires--fid--champs--cid-"
                    onclick="tryItOut('PUTapi-internal-terra-v1-business-formulaires--fid--champs--cid-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-internal-terra-v1-business-formulaires--fid--champs--cid-"
                    onclick="cancelTryOut('PUTapi-internal-terra-v1-business-formulaires--fid--champs--cid-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-internal-terra-v1-business-formulaires--fid--champs--cid-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/internal/terra/v1/business/formulaires/{fid}/champs/{cid}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-internal-terra-v1-business-formulaires--fid--champs--cid-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-internal-terra-v1-business-formulaires--fid--champs--cid-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>fid</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="fid"                data-endpoint="PUTapi-internal-terra-v1-business-formulaires--fid--champs--cid-"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>cid</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="cid"                data-endpoint="PUTapi-internal-terra-v1-business-formulaires--fid--champs--cid-"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>nom</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="nom"                data-endpoint="PUTapi-internal-terra-v1-business-formulaires--fid--champs--cid-"
               value="vmqeopfuudtdsufvyvddq"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>vmqeopfuudtdsufvyvddq</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>ordre</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="ordre"                data-endpoint="PUTapi-internal-terra-v1-business-formulaires--fid--champs--cid-"
               value="1"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>1</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-internal-terra-v1-business-formulaires--fid--champs--cid-">DELETE api/internal/terra/v1/business/formulaires/{fid}/champs/{cid}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-internal-terra-v1-business-formulaires--fid--champs--cid-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/internal/terra/v1/business/formulaires/consequatur/champs/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/formulaires/consequatur/champs/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-internal-terra-v1-business-formulaires--fid--champs--cid-">
</span>
<span id="execution-results-DELETEapi-internal-terra-v1-business-formulaires--fid--champs--cid-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-internal-terra-v1-business-formulaires--fid--champs--cid-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-internal-terra-v1-business-formulaires--fid--champs--cid-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-internal-terra-v1-business-formulaires--fid--champs--cid-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-internal-terra-v1-business-formulaires--fid--champs--cid-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-internal-terra-v1-business-formulaires--fid--champs--cid-" data-method="DELETE"
      data-path="api/internal/terra/v1/business/formulaires/{fid}/champs/{cid}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-internal-terra-v1-business-formulaires--fid--champs--cid-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-internal-terra-v1-business-formulaires--fid--champs--cid-"
                    onclick="tryItOut('DELETEapi-internal-terra-v1-business-formulaires--fid--champs--cid-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-internal-terra-v1-business-formulaires--fid--champs--cid-"
                    onclick="cancelTryOut('DELETEapi-internal-terra-v1-business-formulaires--fid--champs--cid-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-internal-terra-v1-business-formulaires--fid--champs--cid-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/internal/terra/v1/business/formulaires/{fid}/champs/{cid}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-internal-terra-v1-business-formulaires--fid--champs--cid-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-internal-terra-v1-business-formulaires--fid--champs--cid-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>fid</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="fid"                data-endpoint="DELETEapi-internal-terra-v1-business-formulaires--fid--champs--cid-"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>cid</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="cid"                data-endpoint="DELETEapi-internal-terra-v1-business-formulaires--fid--champs--cid-"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-internal-terra-v1-business-formulaires--fid--champs-ordre">PUT api/internal/terra/v1/business/formulaires/{fid}/champs/ordre</h2>

<p>
</p>



<span id="example-requests-PUTapi-internal-terra-v1-business-formulaires--fid--champs-ordre">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/internal/terra/v1/business/formulaires/consequatur/champs/ordre" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"ordre\": [
        {
            \"id\": \"66529e01-d113-3473-8d6f-9e11e09332ea\",
            \"position\": 56
        }
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/formulaires/consequatur/champs/ordre"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "ordre": [
        {
            "id": "66529e01-d113-3473-8d6f-9e11e09332ea",
            "position": 56
        }
    ]
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-internal-terra-v1-business-formulaires--fid--champs-ordre">
</span>
<span id="execution-results-PUTapi-internal-terra-v1-business-formulaires--fid--champs-ordre" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-internal-terra-v1-business-formulaires--fid--champs-ordre"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-internal-terra-v1-business-formulaires--fid--champs-ordre"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-internal-terra-v1-business-formulaires--fid--champs-ordre" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-internal-terra-v1-business-formulaires--fid--champs-ordre">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-internal-terra-v1-business-formulaires--fid--champs-ordre" data-method="PUT"
      data-path="api/internal/terra/v1/business/formulaires/{fid}/champs/ordre"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-internal-terra-v1-business-formulaires--fid--champs-ordre', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-internal-terra-v1-business-formulaires--fid--champs-ordre"
                    onclick="tryItOut('PUTapi-internal-terra-v1-business-formulaires--fid--champs-ordre');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-internal-terra-v1-business-formulaires--fid--champs-ordre"
                    onclick="cancelTryOut('PUTapi-internal-terra-v1-business-formulaires--fid--champs-ordre');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-internal-terra-v1-business-formulaires--fid--champs-ordre"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/internal/terra/v1/business/formulaires/{fid}/champs/ordre</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-internal-terra-v1-business-formulaires--fid--champs-ordre"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-internal-terra-v1-business-formulaires--fid--champs-ordre"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>fid</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="fid"                data-endpoint="PUTapi-internal-terra-v1-business-formulaires--fid--champs-ordre"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>ordre</code></b>&nbsp;&nbsp;
<small>object[]</small>&nbsp;
 &nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="ordre.0.id"                data-endpoint="PUTapi-internal-terra-v1-business-formulaires--fid--champs-ordre"
               value="66529e01-d113-3473-8d6f-9e11e09332ea"
               data-component="body">
    <br>
<p>Must be a valid UUID. Example: <code>66529e01-d113-3473-8d6f-9e11e09332ea</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>position</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="ordre.0.position"                data-endpoint="PUTapi-internal-terra-v1-business-formulaires--fid--champs-ordre"
               value="56"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>56</code></p>
                    </div>
                                    </details>
        </div>
        </form>

                    <h2 id="endpoints-PUTapi-internal-terra-v1-business-champs--cid--parametres">PUT api/internal/terra/v1/business/champs/{cid}/parametres</h2>

<p>
</p>



<span id="example-requests-PUTapi-internal-terra-v1-business-champs--cid--parametres">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/internal/terra/v1/business/champs/consequatur/parametres" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"rendre_facultatif\": false,
    \"rendre_obligatoire\": true,
    \"gestion_appelite\": false
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/champs/consequatur/parametres"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "rendre_facultatif": false,
    "rendre_obligatoire": true,
    "gestion_appelite": false
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-internal-terra-v1-business-champs--cid--parametres">
</span>
<span id="execution-results-PUTapi-internal-terra-v1-business-champs--cid--parametres" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-internal-terra-v1-business-champs--cid--parametres"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-internal-terra-v1-business-champs--cid--parametres"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-internal-terra-v1-business-champs--cid--parametres" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-internal-terra-v1-business-champs--cid--parametres">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-internal-terra-v1-business-champs--cid--parametres" data-method="PUT"
      data-path="api/internal/terra/v1/business/champs/{cid}/parametres"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-internal-terra-v1-business-champs--cid--parametres', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-internal-terra-v1-business-champs--cid--parametres"
                    onclick="tryItOut('PUTapi-internal-terra-v1-business-champs--cid--parametres');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-internal-terra-v1-business-champs--cid--parametres"
                    onclick="cancelTryOut('PUTapi-internal-terra-v1-business-champs--cid--parametres');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-internal-terra-v1-business-champs--cid--parametres"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/internal/terra/v1/business/champs/{cid}/parametres</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-internal-terra-v1-business-champs--cid--parametres"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-internal-terra-v1-business-champs--cid--parametres"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>cid</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="cid"                data-endpoint="PUTapi-internal-terra-v1-business-champs--cid--parametres"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>rendre_facultatif</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="PUTapi-internal-terra-v1-business-champs--cid--parametres" style="display: none">
            <input type="radio" name="rendre_facultatif"
                   value="true"
                   data-endpoint="PUTapi-internal-terra-v1-business-champs--cid--parametres"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-internal-terra-v1-business-champs--cid--parametres" style="display: none">
            <input type="radio" name="rendre_facultatif"
                   value="false"
                   data-endpoint="PUTapi-internal-terra-v1-business-champs--cid--parametres"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>rendre_obligatoire</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="PUTapi-internal-terra-v1-business-champs--cid--parametres" style="display: none">
            <input type="radio" name="rendre_obligatoire"
                   value="true"
                   data-endpoint="PUTapi-internal-terra-v1-business-champs--cid--parametres"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-internal-terra-v1-business-champs--cid--parametres" style="display: none">
            <input type="radio" name="rendre_obligatoire"
                   value="false"
                   data-endpoint="PUTapi-internal-terra-v1-business-champs--cid--parametres"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>gestion_appelite</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="PUTapi-internal-terra-v1-business-champs--cid--parametres" style="display: none">
            <input type="radio" name="gestion_appelite"
                   value="true"
                   data-endpoint="PUTapi-internal-terra-v1-business-champs--cid--parametres"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-internal-terra-v1-business-champs--cid--parametres" style="display: none">
            <input type="radio" name="gestion_appelite"
                   value="false"
                   data-endpoint="PUTapi-internal-terra-v1-business-champs--cid--parametres"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-internal-terra-v1-business-missions--id--agents">GET api/internal/terra/v1/business/missions/{id}/agents</h2>

<p>
</p>



<span id="example-requests-GETapi-internal-terra-v1-business-missions--id--agents">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/business/missions/consequatur/agents" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/consequatur/agents"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-internal-terra-v1-business-missions--id--agents">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-internal-terra-v1-business-missions--id--agents" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-internal-terra-v1-business-missions--id--agents"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-internal-terra-v1-business-missions--id--agents"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-internal-terra-v1-business-missions--id--agents" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-internal-terra-v1-business-missions--id--agents">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-internal-terra-v1-business-missions--id--agents" data-method="GET"
      data-path="api/internal/terra/v1/business/missions/{id}/agents"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-internal-terra-v1-business-missions--id--agents', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-internal-terra-v1-business-missions--id--agents"
                    onclick="tryItOut('GETapi-internal-terra-v1-business-missions--id--agents');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-internal-terra-v1-business-missions--id--agents"
                    onclick="cancelTryOut('GETapi-internal-terra-v1-business-missions--id--agents');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-internal-terra-v1-business-missions--id--agents"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/internal/terra/v1/business/missions/{id}/agents</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-internal-terra-v1-business-missions--id--agents"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-internal-terra-v1-business-missions--id--agents"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-internal-terra-v1-business-missions--id--agents"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the mission. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-internal-terra-v1-business-missions--id--agents-inviter">POST api/internal/terra/v1/business/missions/{id}/agents/inviter</h2>

<p>
</p>



<span id="example-requests-POSTapi-internal-terra-v1-business-missions--id--agents-inviter">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/business/missions/consequatur/agents/inviter" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"agent_ids\": [
        \"66529e01-d113-3473-8d6f-9e11e09332ea\"
    ],
    \"remuneration\": 56,
    \"objectif_agent\": 17
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/consequatur/agents/inviter"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "agent_ids": [
        "66529e01-d113-3473-8d6f-9e11e09332ea"
    ],
    "remuneration": 56,
    "objectif_agent": 17
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-business-missions--id--agents-inviter">
</span>
<span id="execution-results-POSTapi-internal-terra-v1-business-missions--id--agents-inviter" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-internal-terra-v1-business-missions--id--agents-inviter"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-internal-terra-v1-business-missions--id--agents-inviter"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-internal-terra-v1-business-missions--id--agents-inviter" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-internal-terra-v1-business-missions--id--agents-inviter">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-internal-terra-v1-business-missions--id--agents-inviter" data-method="POST"
      data-path="api/internal/terra/v1/business/missions/{id}/agents/inviter"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-internal-terra-v1-business-missions--id--agents-inviter', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-internal-terra-v1-business-missions--id--agents-inviter"
                    onclick="tryItOut('POSTapi-internal-terra-v1-business-missions--id--agents-inviter');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-internal-terra-v1-business-missions--id--agents-inviter"
                    onclick="cancelTryOut('POSTapi-internal-terra-v1-business-missions--id--agents-inviter');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-internal-terra-v1-business-missions--id--agents-inviter"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/internal/terra/v1/business/missions/{id}/agents/inviter</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--agents-inviter"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--agents-inviter"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--agents-inviter"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the mission. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>agent_ids</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="agent_ids[0]"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--agents-inviter"
               data-component="body">
        <input type="text" style="display: none"
               name="agent_ids[1]"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--agents-inviter"
               data-component="body">
    <br>
<p>Must be a valid UUID. The <code>id_agent</code> of an existing record in the agents table.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>remuneration</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="remuneration"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--agents-inviter"
               value="56"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>56</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>objectif_agent</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="objectif_agent"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--agents-inviter"
               value="17"
               data-component="body">
    <br>
<p>Must be at least 1. Example: <code>17</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-internal-terra-v1-business-missions--id--agents--aid-">GET api/internal/terra/v1/business/missions/{id}/agents/{aid}</h2>

<p>
</p>



<span id="example-requests-GETapi-internal-terra-v1-business-missions--id--agents--aid-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/business/missions/consequatur/agents/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/consequatur/agents/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-internal-terra-v1-business-missions--id--agents--aid-">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-internal-terra-v1-business-missions--id--agents--aid-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-internal-terra-v1-business-missions--id--agents--aid-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-internal-terra-v1-business-missions--id--agents--aid-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-internal-terra-v1-business-missions--id--agents--aid-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-internal-terra-v1-business-missions--id--agents--aid-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-internal-terra-v1-business-missions--id--agents--aid-" data-method="GET"
      data-path="api/internal/terra/v1/business/missions/{id}/agents/{aid}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-internal-terra-v1-business-missions--id--agents--aid-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-internal-terra-v1-business-missions--id--agents--aid-"
                    onclick="tryItOut('GETapi-internal-terra-v1-business-missions--id--agents--aid-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-internal-terra-v1-business-missions--id--agents--aid-"
                    onclick="cancelTryOut('GETapi-internal-terra-v1-business-missions--id--agents--aid-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-internal-terra-v1-business-missions--id--agents--aid-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/internal/terra/v1/business/missions/{id}/agents/{aid}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-internal-terra-v1-business-missions--id--agents--aid-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-internal-terra-v1-business-missions--id--agents--aid-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-internal-terra-v1-business-missions--id--agents--aid-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the mission. Example: <code>consequatur</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>aid</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="aid"                data-endpoint="GETapi-internal-terra-v1-business-missions--id--agents--aid-"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-DELETEapi-internal-terra-v1-business-missions--id--agents--aid-">DELETE api/internal/terra/v1/business/missions/{id}/agents/{aid}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-internal-terra-v1-business-missions--id--agents--aid-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/internal/terra/v1/business/missions/consequatur/agents/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/consequatur/agents/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-internal-terra-v1-business-missions--id--agents--aid-">
</span>
<span id="execution-results-DELETEapi-internal-terra-v1-business-missions--id--agents--aid-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-internal-terra-v1-business-missions--id--agents--aid-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-internal-terra-v1-business-missions--id--agents--aid-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-internal-terra-v1-business-missions--id--agents--aid-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-internal-terra-v1-business-missions--id--agents--aid-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-internal-terra-v1-business-missions--id--agents--aid-" data-method="DELETE"
      data-path="api/internal/terra/v1/business/missions/{id}/agents/{aid}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-internal-terra-v1-business-missions--id--agents--aid-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-internal-terra-v1-business-missions--id--agents--aid-"
                    onclick="tryItOut('DELETEapi-internal-terra-v1-business-missions--id--agents--aid-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-internal-terra-v1-business-missions--id--agents--aid-"
                    onclick="cancelTryOut('DELETEapi-internal-terra-v1-business-missions--id--agents--aid-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-internal-terra-v1-business-missions--id--agents--aid-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/internal/terra/v1/business/missions/{id}/agents/{aid}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-internal-terra-v1-business-missions--id--agents--aid-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-internal-terra-v1-business-missions--id--agents--aid-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-internal-terra-v1-business-missions--id--agents--aid-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the mission. Example: <code>consequatur</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>aid</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="aid"                data-endpoint="DELETEapi-internal-terra-v1-business-missions--id--agents--aid-"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-internal-terra-v1-business-missions--id--agents--aid--objectif">PUT api/internal/terra/v1/business/missions/{id}/agents/{aid}/objectif</h2>

<p>
</p>



<span id="example-requests-PUTapi-internal-terra-v1-business-missions--id--agents--aid--objectif">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/internal/terra/v1/business/missions/consequatur/agents/consequatur/objectif" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"objectif_agent\": 73,
    \"remuneration\": 45
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/consequatur/agents/consequatur/objectif"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "objectif_agent": 73,
    "remuneration": 45
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-internal-terra-v1-business-missions--id--agents--aid--objectif">
</span>
<span id="execution-results-PUTapi-internal-terra-v1-business-missions--id--agents--aid--objectif" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-internal-terra-v1-business-missions--id--agents--aid--objectif"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-internal-terra-v1-business-missions--id--agents--aid--objectif"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-internal-terra-v1-business-missions--id--agents--aid--objectif" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-internal-terra-v1-business-missions--id--agents--aid--objectif">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-internal-terra-v1-business-missions--id--agents--aid--objectif" data-method="PUT"
      data-path="api/internal/terra/v1/business/missions/{id}/agents/{aid}/objectif"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-internal-terra-v1-business-missions--id--agents--aid--objectif', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-internal-terra-v1-business-missions--id--agents--aid--objectif"
                    onclick="tryItOut('PUTapi-internal-terra-v1-business-missions--id--agents--aid--objectif');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-internal-terra-v1-business-missions--id--agents--aid--objectif"
                    onclick="cancelTryOut('PUTapi-internal-terra-v1-business-missions--id--agents--aid--objectif');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-internal-terra-v1-business-missions--id--agents--aid--objectif"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/internal/terra/v1/business/missions/{id}/agents/{aid}/objectif</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id--agents--aid--objectif"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id--agents--aid--objectif"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id--agents--aid--objectif"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the mission. Example: <code>consequatur</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>aid</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="aid"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id--agents--aid--objectif"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>objectif_agent</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="objectif_agent"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id--agents--aid--objectif"
               value="73"
               data-component="body">
    <br>
<p>Must be at least 1. Example: <code>73</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>remuneration</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="remuneration"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id--agents--aid--objectif"
               value="45"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>45</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-internal-terra-v1-business-missions--id--agents--aid--statistiques">GET api/internal/terra/v1/business/missions/{id}/agents/{aid}/statistiques</h2>

<p>
</p>



<span id="example-requests-GETapi-internal-terra-v1-business-missions--id--agents--aid--statistiques">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/business/missions/consequatur/agents/consequatur/statistiques" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/consequatur/agents/consequatur/statistiques"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-internal-terra-v1-business-missions--id--agents--aid--statistiques">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-internal-terra-v1-business-missions--id--agents--aid--statistiques" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-internal-terra-v1-business-missions--id--agents--aid--statistiques"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-internal-terra-v1-business-missions--id--agents--aid--statistiques"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-internal-terra-v1-business-missions--id--agents--aid--statistiques" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-internal-terra-v1-business-missions--id--agents--aid--statistiques">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-internal-terra-v1-business-missions--id--agents--aid--statistiques" data-method="GET"
      data-path="api/internal/terra/v1/business/missions/{id}/agents/{aid}/statistiques"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-internal-terra-v1-business-missions--id--agents--aid--statistiques', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-internal-terra-v1-business-missions--id--agents--aid--statistiques"
                    onclick="tryItOut('GETapi-internal-terra-v1-business-missions--id--agents--aid--statistiques');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-internal-terra-v1-business-missions--id--agents--aid--statistiques"
                    onclick="cancelTryOut('GETapi-internal-terra-v1-business-missions--id--agents--aid--statistiques');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-internal-terra-v1-business-missions--id--agents--aid--statistiques"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/internal/terra/v1/business/missions/{id}/agents/{aid}/statistiques</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-internal-terra-v1-business-missions--id--agents--aid--statistiques"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-internal-terra-v1-business-missions--id--agents--aid--statistiques"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-internal-terra-v1-business-missions--id--agents--aid--statistiques"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the mission. Example: <code>consequatur</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>aid</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="aid"                data-endpoint="GETapi-internal-terra-v1-business-missions--id--agents--aid--statistiques"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-internal-terra-v1-business-missions--id--agents--aid--reponses">GET api/internal/terra/v1/business/missions/{id}/agents/{aid}/reponses</h2>

<p>
</p>



<span id="example-requests-GETapi-internal-terra-v1-business-missions--id--agents--aid--reponses">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/business/missions/consequatur/agents/consequatur/reponses" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/consequatur/agents/consequatur/reponses"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-internal-terra-v1-business-missions--id--agents--aid--reponses">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-internal-terra-v1-business-missions--id--agents--aid--reponses" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-internal-terra-v1-business-missions--id--agents--aid--reponses"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-internal-terra-v1-business-missions--id--agents--aid--reponses"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-internal-terra-v1-business-missions--id--agents--aid--reponses" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-internal-terra-v1-business-missions--id--agents--aid--reponses">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-internal-terra-v1-business-missions--id--agents--aid--reponses" data-method="GET"
      data-path="api/internal/terra/v1/business/missions/{id}/agents/{aid}/reponses"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-internal-terra-v1-business-missions--id--agents--aid--reponses', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-internal-terra-v1-business-missions--id--agents--aid--reponses"
                    onclick="tryItOut('GETapi-internal-terra-v1-business-missions--id--agents--aid--reponses');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-internal-terra-v1-business-missions--id--agents--aid--reponses"
                    onclick="cancelTryOut('GETapi-internal-terra-v1-business-missions--id--agents--aid--reponses');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-internal-terra-v1-business-missions--id--agents--aid--reponses"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/internal/terra/v1/business/missions/{id}/agents/{aid}/reponses</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-internal-terra-v1-business-missions--id--agents--aid--reponses"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-internal-terra-v1-business-missions--id--agents--aid--reponses"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-internal-terra-v1-business-missions--id--agents--aid--reponses"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the mission. Example: <code>consequatur</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>aid</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="aid"                data-endpoint="GETapi-internal-terra-v1-business-missions--id--agents--aid--reponses"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-internal-terra-v1-business-missions--id--reponses-export">GET api/internal/terra/v1/business/missions/{id}/reponses/export</h2>

<p>
</p>



<span id="example-requests-GETapi-internal-terra-v1-business-missions--id--reponses-export">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/business/missions/consequatur/reponses/export" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/consequatur/reponses/export"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-internal-terra-v1-business-missions--id--reponses-export">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-internal-terra-v1-business-missions--id--reponses-export" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-internal-terra-v1-business-missions--id--reponses-export"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-internal-terra-v1-business-missions--id--reponses-export"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-internal-terra-v1-business-missions--id--reponses-export" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-internal-terra-v1-business-missions--id--reponses-export">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-internal-terra-v1-business-missions--id--reponses-export" data-method="GET"
      data-path="api/internal/terra/v1/business/missions/{id}/reponses/export"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-internal-terra-v1-business-missions--id--reponses-export', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-internal-terra-v1-business-missions--id--reponses-export"
                    onclick="tryItOut('GETapi-internal-terra-v1-business-missions--id--reponses-export');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-internal-terra-v1-business-missions--id--reponses-export"
                    onclick="cancelTryOut('GETapi-internal-terra-v1-business-missions--id--reponses-export');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-internal-terra-v1-business-missions--id--reponses-export"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/internal/terra/v1/business/missions/{id}/reponses/export</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-internal-terra-v1-business-missions--id--reponses-export"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-internal-terra-v1-business-missions--id--reponses-export"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-internal-terra-v1-business-missions--id--reponses-export"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the mission. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-internal-terra-v1-business-missions--id--reponses">GET api/internal/terra/v1/business/missions/{id}/reponses</h2>

<p>
</p>



<span id="example-requests-GETapi-internal-terra-v1-business-missions--id--reponses">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/business/missions/consequatur/reponses" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/consequatur/reponses"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-internal-terra-v1-business-missions--id--reponses">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-internal-terra-v1-business-missions--id--reponses" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-internal-terra-v1-business-missions--id--reponses"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-internal-terra-v1-business-missions--id--reponses"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-internal-terra-v1-business-missions--id--reponses" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-internal-terra-v1-business-missions--id--reponses">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-internal-terra-v1-business-missions--id--reponses" data-method="GET"
      data-path="api/internal/terra/v1/business/missions/{id}/reponses"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-internal-terra-v1-business-missions--id--reponses', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-internal-terra-v1-business-missions--id--reponses"
                    onclick="tryItOut('GETapi-internal-terra-v1-business-missions--id--reponses');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-internal-terra-v1-business-missions--id--reponses"
                    onclick="cancelTryOut('GETapi-internal-terra-v1-business-missions--id--reponses');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-internal-terra-v1-business-missions--id--reponses"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/internal/terra/v1/business/missions/{id}/reponses</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-internal-terra-v1-business-missions--id--reponses"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-internal-terra-v1-business-missions--id--reponses"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-internal-terra-v1-business-missions--id--reponses"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the mission. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-internal-terra-v1-business-missions--id--reponses--rid-">GET api/internal/terra/v1/business/missions/{id}/reponses/{rid}</h2>

<p>
</p>



<span id="example-requests-GETapi-internal-terra-v1-business-missions--id--reponses--rid-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/business/missions/consequatur/reponses/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/consequatur/reponses/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-internal-terra-v1-business-missions--id--reponses--rid-">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-internal-terra-v1-business-missions--id--reponses--rid-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-internal-terra-v1-business-missions--id--reponses--rid-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-internal-terra-v1-business-missions--id--reponses--rid-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-internal-terra-v1-business-missions--id--reponses--rid-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-internal-terra-v1-business-missions--id--reponses--rid-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-internal-terra-v1-business-missions--id--reponses--rid-" data-method="GET"
      data-path="api/internal/terra/v1/business/missions/{id}/reponses/{rid}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-internal-terra-v1-business-missions--id--reponses--rid-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-internal-terra-v1-business-missions--id--reponses--rid-"
                    onclick="tryItOut('GETapi-internal-terra-v1-business-missions--id--reponses--rid-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-internal-terra-v1-business-missions--id--reponses--rid-"
                    onclick="cancelTryOut('GETapi-internal-terra-v1-business-missions--id--reponses--rid-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-internal-terra-v1-business-missions--id--reponses--rid-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/internal/terra/v1/business/missions/{id}/reponses/{rid}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-internal-terra-v1-business-missions--id--reponses--rid-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-internal-terra-v1-business-missions--id--reponses--rid-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-internal-terra-v1-business-missions--id--reponses--rid-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the mission. Example: <code>consequatur</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>rid</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="rid"                data-endpoint="GETapi-internal-terra-v1-business-missions--id--reponses--rid-"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-internal-terra-v1-business-missions--id--reponses--rid--valider">PUT api/internal/terra/v1/business/missions/{id}/reponses/{rid}/valider</h2>

<p>
</p>



<span id="example-requests-PUTapi-internal-terra-v1-business-missions--id--reponses--rid--valider">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/internal/terra/v1/business/missions/consequatur/reponses/consequatur/valider" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/consequatur/reponses/consequatur/valider"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-internal-terra-v1-business-missions--id--reponses--rid--valider">
</span>
<span id="execution-results-PUTapi-internal-terra-v1-business-missions--id--reponses--rid--valider" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-internal-terra-v1-business-missions--id--reponses--rid--valider"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-internal-terra-v1-business-missions--id--reponses--rid--valider"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-internal-terra-v1-business-missions--id--reponses--rid--valider" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-internal-terra-v1-business-missions--id--reponses--rid--valider">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-internal-terra-v1-business-missions--id--reponses--rid--valider" data-method="PUT"
      data-path="api/internal/terra/v1/business/missions/{id}/reponses/{rid}/valider"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-internal-terra-v1-business-missions--id--reponses--rid--valider', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-internal-terra-v1-business-missions--id--reponses--rid--valider"
                    onclick="tryItOut('PUTapi-internal-terra-v1-business-missions--id--reponses--rid--valider');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-internal-terra-v1-business-missions--id--reponses--rid--valider"
                    onclick="cancelTryOut('PUTapi-internal-terra-v1-business-missions--id--reponses--rid--valider');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-internal-terra-v1-business-missions--id--reponses--rid--valider"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/internal/terra/v1/business/missions/{id}/reponses/{rid}/valider</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id--reponses--rid--valider"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id--reponses--rid--valider"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id--reponses--rid--valider"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the mission. Example: <code>consequatur</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>rid</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="rid"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id--reponses--rid--valider"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-internal-terra-v1-business-missions--id--reponses--rid--rejeter">PUT api/internal/terra/v1/business/missions/{id}/reponses/{rid}/rejeter</h2>

<p>
</p>



<span id="example-requests-PUTapi-internal-terra-v1-business-missions--id--reponses--rid--rejeter">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/internal/terra/v1/business/missions/consequatur/reponses/consequatur/rejeter" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"motif\": \"vmqeopfuudtdsufvyvddq\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/consequatur/reponses/consequatur/rejeter"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "motif": "vmqeopfuudtdsufvyvddq"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-internal-terra-v1-business-missions--id--reponses--rid--rejeter">
</span>
<span id="execution-results-PUTapi-internal-terra-v1-business-missions--id--reponses--rid--rejeter" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-internal-terra-v1-business-missions--id--reponses--rid--rejeter"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-internal-terra-v1-business-missions--id--reponses--rid--rejeter"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-internal-terra-v1-business-missions--id--reponses--rid--rejeter" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-internal-terra-v1-business-missions--id--reponses--rid--rejeter">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-internal-terra-v1-business-missions--id--reponses--rid--rejeter" data-method="PUT"
      data-path="api/internal/terra/v1/business/missions/{id}/reponses/{rid}/rejeter"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-internal-terra-v1-business-missions--id--reponses--rid--rejeter', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-internal-terra-v1-business-missions--id--reponses--rid--rejeter"
                    onclick="tryItOut('PUTapi-internal-terra-v1-business-missions--id--reponses--rid--rejeter');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-internal-terra-v1-business-missions--id--reponses--rid--rejeter"
                    onclick="cancelTryOut('PUTapi-internal-terra-v1-business-missions--id--reponses--rid--rejeter');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-internal-terra-v1-business-missions--id--reponses--rid--rejeter"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/internal/terra/v1/business/missions/{id}/reponses/{rid}/rejeter</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id--reponses--rid--rejeter"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id--reponses--rid--rejeter"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id--reponses--rid--rejeter"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the mission. Example: <code>consequatur</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>rid</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="rid"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id--reponses--rid--rejeter"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>motif</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="motif"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id--reponses--rid--rejeter"
               value="vmqeopfuudtdsufvyvddq"
               data-component="body">
    <br>
<p>Must not be greater than 500 characters. Example: <code>vmqeopfuudtdsufvyvddq</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-internal-terra-v1-business-missions--id--plans">GET api/internal/terra/v1/business/missions/{id}/plans</h2>

<p>
</p>



<span id="example-requests-GETapi-internal-terra-v1-business-missions--id--plans">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/business/missions/consequatur/plans" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/consequatur/plans"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-internal-terra-v1-business-missions--id--plans">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-internal-terra-v1-business-missions--id--plans" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-internal-terra-v1-business-missions--id--plans"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-internal-terra-v1-business-missions--id--plans"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-internal-terra-v1-business-missions--id--plans" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-internal-terra-v1-business-missions--id--plans">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-internal-terra-v1-business-missions--id--plans" data-method="GET"
      data-path="api/internal/terra/v1/business/missions/{id}/plans"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-internal-terra-v1-business-missions--id--plans', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-internal-terra-v1-business-missions--id--plans"
                    onclick="tryItOut('GETapi-internal-terra-v1-business-missions--id--plans');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-internal-terra-v1-business-missions--id--plans"
                    onclick="cancelTryOut('GETapi-internal-terra-v1-business-missions--id--plans');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-internal-terra-v1-business-missions--id--plans"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/internal/terra/v1/business/missions/{id}/plans</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-internal-terra-v1-business-missions--id--plans"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-internal-terra-v1-business-missions--id--plans"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-internal-terra-v1-business-missions--id--plans"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the mission. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-internal-terra-v1-business-missions--id--plans">POST api/internal/terra/v1/business/missions/{id}/plans</h2>

<p>
</p>



<span id="example-requests-POSTapi-internal-terra-v1-business-missions--id--plans">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/business/missions/consequatur/plans" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"montant\": 73,
    \"duree\": 45,
    \"unite_duree\": \"jours\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/consequatur/plans"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "montant": 73,
    "duree": 45,
    "unite_duree": "jours"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-business-missions--id--plans">
</span>
<span id="execution-results-POSTapi-internal-terra-v1-business-missions--id--plans" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-internal-terra-v1-business-missions--id--plans"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-internal-terra-v1-business-missions--id--plans"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-internal-terra-v1-business-missions--id--plans" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-internal-terra-v1-business-missions--id--plans">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-internal-terra-v1-business-missions--id--plans" data-method="POST"
      data-path="api/internal/terra/v1/business/missions/{id}/plans"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-internal-terra-v1-business-missions--id--plans', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-internal-terra-v1-business-missions--id--plans"
                    onclick="tryItOut('POSTapi-internal-terra-v1-business-missions--id--plans');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-internal-terra-v1-business-missions--id--plans"
                    onclick="cancelTryOut('POSTapi-internal-terra-v1-business-missions--id--plans');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-internal-terra-v1-business-missions--id--plans"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/internal/terra/v1/business/missions/{id}/plans</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--plans"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--plans"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--plans"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the mission. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>montant</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="montant"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--plans"
               value="73"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>73</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>duree</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="duree"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--plans"
               value="45"
               data-component="body">
    <br>
<p>Must be at least 1. Example: <code>45</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>unite_duree</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="unite_duree"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--plans"
               value="jours"
               data-component="body">
    <br>
<p>Example: <code>jours</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>jours</code></li> <li><code>mois</code></li> <li><code>annees</code></li></ul>
        </div>
        </form>

                    <h2 id="endpoints-PUTapi-internal-terra-v1-business-missions--id--plans--pid-">PUT api/internal/terra/v1/business/missions/{id}/plans/{pid}</h2>

<p>
</p>



<span id="example-requests-PUTapi-internal-terra-v1-business-missions--id--plans--pid-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/internal/terra/v1/business/missions/consequatur/plans/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"montant\": 73,
    \"duree\": 45,
    \"unite_duree\": \"jours\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/consequatur/plans/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "montant": 73,
    "duree": 45,
    "unite_duree": "jours"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-internal-terra-v1-business-missions--id--plans--pid-">
</span>
<span id="execution-results-PUTapi-internal-terra-v1-business-missions--id--plans--pid-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-internal-terra-v1-business-missions--id--plans--pid-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-internal-terra-v1-business-missions--id--plans--pid-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-internal-terra-v1-business-missions--id--plans--pid-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-internal-terra-v1-business-missions--id--plans--pid-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-internal-terra-v1-business-missions--id--plans--pid-" data-method="PUT"
      data-path="api/internal/terra/v1/business/missions/{id}/plans/{pid}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-internal-terra-v1-business-missions--id--plans--pid-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-internal-terra-v1-business-missions--id--plans--pid-"
                    onclick="tryItOut('PUTapi-internal-terra-v1-business-missions--id--plans--pid-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-internal-terra-v1-business-missions--id--plans--pid-"
                    onclick="cancelTryOut('PUTapi-internal-terra-v1-business-missions--id--plans--pid-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-internal-terra-v1-business-missions--id--plans--pid-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/internal/terra/v1/business/missions/{id}/plans/{pid}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id--plans--pid-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id--plans--pid-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id--plans--pid-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the mission. Example: <code>consequatur</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>pid</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="pid"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id--plans--pid-"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>montant</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="montant"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id--plans--pid-"
               value="73"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>73</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>duree</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="duree"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id--plans--pid-"
               value="45"
               data-component="body">
    <br>
<p>Must be at least 1. Example: <code>45</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>unite_duree</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="unite_duree"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id--plans--pid-"
               value="jours"
               data-component="body">
    <br>
<p>Example: <code>jours</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>jours</code></li> <li><code>mois</code></li> <li><code>annees</code></li></ul>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-internal-terra-v1-business-missions--id--plans--pid-">DELETE api/internal/terra/v1/business/missions/{id}/plans/{pid}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-internal-terra-v1-business-missions--id--plans--pid-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/internal/terra/v1/business/missions/consequatur/plans/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/consequatur/plans/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-internal-terra-v1-business-missions--id--plans--pid-">
</span>
<span id="execution-results-DELETEapi-internal-terra-v1-business-missions--id--plans--pid-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-internal-terra-v1-business-missions--id--plans--pid-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-internal-terra-v1-business-missions--id--plans--pid-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-internal-terra-v1-business-missions--id--plans--pid-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-internal-terra-v1-business-missions--id--plans--pid-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-internal-terra-v1-business-missions--id--plans--pid-" data-method="DELETE"
      data-path="api/internal/terra/v1/business/missions/{id}/plans/{pid}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-internal-terra-v1-business-missions--id--plans--pid-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-internal-terra-v1-business-missions--id--plans--pid-"
                    onclick="tryItOut('DELETEapi-internal-terra-v1-business-missions--id--plans--pid-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-internal-terra-v1-business-missions--id--plans--pid-"
                    onclick="cancelTryOut('DELETEapi-internal-terra-v1-business-missions--id--plans--pid-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-internal-terra-v1-business-missions--id--plans--pid-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/internal/terra/v1/business/missions/{id}/plans/{pid}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-internal-terra-v1-business-missions--id--plans--pid-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-internal-terra-v1-business-missions--id--plans--pid-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-internal-terra-v1-business-missions--id--plans--pid-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the mission. Example: <code>consequatur</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>pid</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="pid"                data-endpoint="DELETEapi-internal-terra-v1-business-missions--id--plans--pid-"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-internal-terra-v1-business-missions--id--modes-paiement">GET api/internal/terra/v1/business/missions/{id}/modes-paiement</h2>

<p>
</p>



<span id="example-requests-GETapi-internal-terra-v1-business-missions--id--modes-paiement">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/business/missions/consequatur/modes-paiement" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/consequatur/modes-paiement"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-internal-terra-v1-business-missions--id--modes-paiement">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-internal-terra-v1-business-missions--id--modes-paiement" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-internal-terra-v1-business-missions--id--modes-paiement"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-internal-terra-v1-business-missions--id--modes-paiement"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-internal-terra-v1-business-missions--id--modes-paiement" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-internal-terra-v1-business-missions--id--modes-paiement">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-internal-terra-v1-business-missions--id--modes-paiement" data-method="GET"
      data-path="api/internal/terra/v1/business/missions/{id}/modes-paiement"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-internal-terra-v1-business-missions--id--modes-paiement', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-internal-terra-v1-business-missions--id--modes-paiement"
                    onclick="tryItOut('GETapi-internal-terra-v1-business-missions--id--modes-paiement');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-internal-terra-v1-business-missions--id--modes-paiement"
                    onclick="cancelTryOut('GETapi-internal-terra-v1-business-missions--id--modes-paiement');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-internal-terra-v1-business-missions--id--modes-paiement"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/internal/terra/v1/business/missions/{id}/modes-paiement</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-internal-terra-v1-business-missions--id--modes-paiement"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-internal-terra-v1-business-missions--id--modes-paiement"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-internal-terra-v1-business-missions--id--modes-paiement"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the mission. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-internal-terra-v1-business-missions--id--modes-paiement">POST api/internal/terra/v1/business/missions/{id}/modes-paiement</h2>

<p>
</p>



<span id="example-requests-POSTapi-internal-terra-v1-business-missions--id--modes-paiement">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/business/missions/consequatur/modes-paiement" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"montant\": 73,
    \"duree\": 45,
    \"unite_duree\": \"jours\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/consequatur/modes-paiement"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "montant": 73,
    "duree": 45,
    "unite_duree": "jours"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-business-missions--id--modes-paiement">
</span>
<span id="execution-results-POSTapi-internal-terra-v1-business-missions--id--modes-paiement" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-internal-terra-v1-business-missions--id--modes-paiement"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-internal-terra-v1-business-missions--id--modes-paiement"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-internal-terra-v1-business-missions--id--modes-paiement" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-internal-terra-v1-business-missions--id--modes-paiement">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-internal-terra-v1-business-missions--id--modes-paiement" data-method="POST"
      data-path="api/internal/terra/v1/business/missions/{id}/modes-paiement"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-internal-terra-v1-business-missions--id--modes-paiement', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-internal-terra-v1-business-missions--id--modes-paiement"
                    onclick="tryItOut('POSTapi-internal-terra-v1-business-missions--id--modes-paiement');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-internal-terra-v1-business-missions--id--modes-paiement"
                    onclick="cancelTryOut('POSTapi-internal-terra-v1-business-missions--id--modes-paiement');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-internal-terra-v1-business-missions--id--modes-paiement"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/internal/terra/v1/business/missions/{id}/modes-paiement</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--modes-paiement"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--modes-paiement"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--modes-paiement"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the mission. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>montant</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="montant"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--modes-paiement"
               value="73"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>73</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>duree</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="duree"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--modes-paiement"
               value="45"
               data-component="body">
    <br>
<p>Must be at least 1. Example: <code>45</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>unite_duree</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="unite_duree"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--modes-paiement"
               value="jours"
               data-component="body">
    <br>
<p>Example: <code>jours</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>jours</code></li> <li><code>mois</code></li> <li><code>annees</code></li></ul>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-internal-terra-v1-business-missions--id--modes-paiement--mid-">DELETE api/internal/terra/v1/business/missions/{id}/modes-paiement/{mid}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-internal-terra-v1-business-missions--id--modes-paiement--mid-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/internal/terra/v1/business/missions/consequatur/modes-paiement/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/consequatur/modes-paiement/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-internal-terra-v1-business-missions--id--modes-paiement--mid-">
</span>
<span id="execution-results-DELETEapi-internal-terra-v1-business-missions--id--modes-paiement--mid-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-internal-terra-v1-business-missions--id--modes-paiement--mid-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-internal-terra-v1-business-missions--id--modes-paiement--mid-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-internal-terra-v1-business-missions--id--modes-paiement--mid-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-internal-terra-v1-business-missions--id--modes-paiement--mid-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-internal-terra-v1-business-missions--id--modes-paiement--mid-" data-method="DELETE"
      data-path="api/internal/terra/v1/business/missions/{id}/modes-paiement/{mid}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-internal-terra-v1-business-missions--id--modes-paiement--mid-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-internal-terra-v1-business-missions--id--modes-paiement--mid-"
                    onclick="tryItOut('DELETEapi-internal-terra-v1-business-missions--id--modes-paiement--mid-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-internal-terra-v1-business-missions--id--modes-paiement--mid-"
                    onclick="cancelTryOut('DELETEapi-internal-terra-v1-business-missions--id--modes-paiement--mid-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-internal-terra-v1-business-missions--id--modes-paiement--mid-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/internal/terra/v1/business/missions/{id}/modes-paiement/{mid}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-internal-terra-v1-business-missions--id--modes-paiement--mid-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-internal-terra-v1-business-missions--id--modes-paiement--mid-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-internal-terra-v1-business-missions--id--modes-paiement--mid-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the mission. Example: <code>consequatur</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>mid</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="mid"                data-endpoint="DELETEapi-internal-terra-v1-business-missions--id--modes-paiement--mid-"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-internal-terra-v1-business-missions--id--agents-payer-tous">POST api/internal/terra/v1/business/missions/{id}/agents/payer-tous</h2>

<p>
</p>



<span id="example-requests-POSTapi-internal-terra-v1-business-missions--id--agents-payer-tous">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/business/missions/consequatur/agents/payer-tous" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"provider\": \"orange\",
    \"reference_paiement\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/consequatur/agents/payer-tous"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "provider": "orange",
    "reference_paiement": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-business-missions--id--agents-payer-tous">
</span>
<span id="execution-results-POSTapi-internal-terra-v1-business-missions--id--agents-payer-tous" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-internal-terra-v1-business-missions--id--agents-payer-tous"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-internal-terra-v1-business-missions--id--agents-payer-tous"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-internal-terra-v1-business-missions--id--agents-payer-tous" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-internal-terra-v1-business-missions--id--agents-payer-tous">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-internal-terra-v1-business-missions--id--agents-payer-tous" data-method="POST"
      data-path="api/internal/terra/v1/business/missions/{id}/agents/payer-tous"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-internal-terra-v1-business-missions--id--agents-payer-tous', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-internal-terra-v1-business-missions--id--agents-payer-tous"
                    onclick="tryItOut('POSTapi-internal-terra-v1-business-missions--id--agents-payer-tous');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-internal-terra-v1-business-missions--id--agents-payer-tous"
                    onclick="cancelTryOut('POSTapi-internal-terra-v1-business-missions--id--agents-payer-tous');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-internal-terra-v1-business-missions--id--agents-payer-tous"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/internal/terra/v1/business/missions/{id}/agents/payer-tous</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--agents-payer-tous"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--agents-payer-tous"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--agents-payer-tous"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the mission. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>provider</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="provider"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--agents-payer-tous"
               value="orange"
               data-component="body">
    <br>
<p>Example: <code>orange</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>wave</code></li> <li><code>orange</code></li> <li><code>mtn</code></li> <li><code>moov</code></li> <li><code>visa</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>reference_paiement</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="reference_paiement"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--agents-payer-tous"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-internal-terra-v1-business-missions--id--agents--aid--payer">POST api/internal/terra/v1/business/missions/{id}/agents/{aid}/payer</h2>

<p>
</p>



<span id="example-requests-POSTapi-internal-terra-v1-business-missions--id--agents--aid--payer">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/business/missions/consequatur/agents/consequatur/payer" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"montant\": 73,
    \"provider\": \"wave\",
    \"reference_paiement\": \"mqeopfuudtdsufvyvddqa\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/consequatur/agents/consequatur/payer"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "montant": 73,
    "provider": "wave",
    "reference_paiement": "mqeopfuudtdsufvyvddqa"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-business-missions--id--agents--aid--payer">
</span>
<span id="execution-results-POSTapi-internal-terra-v1-business-missions--id--agents--aid--payer" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-internal-terra-v1-business-missions--id--agents--aid--payer"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-internal-terra-v1-business-missions--id--agents--aid--payer"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-internal-terra-v1-business-missions--id--agents--aid--payer" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-internal-terra-v1-business-missions--id--agents--aid--payer">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-internal-terra-v1-business-missions--id--agents--aid--payer" data-method="POST"
      data-path="api/internal/terra/v1/business/missions/{id}/agents/{aid}/payer"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-internal-terra-v1-business-missions--id--agents--aid--payer', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-internal-terra-v1-business-missions--id--agents--aid--payer"
                    onclick="tryItOut('POSTapi-internal-terra-v1-business-missions--id--agents--aid--payer');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-internal-terra-v1-business-missions--id--agents--aid--payer"
                    onclick="cancelTryOut('POSTapi-internal-terra-v1-business-missions--id--agents--aid--payer');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-internal-terra-v1-business-missions--id--agents--aid--payer"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/internal/terra/v1/business/missions/{id}/agents/{aid}/payer</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--agents--aid--payer"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--agents--aid--payer"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--agents--aid--payer"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the mission. Example: <code>consequatur</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>aid</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="aid"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--agents--aid--payer"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>montant</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="montant"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--agents--aid--payer"
               value="73"
               data-component="body">
    <br>
<p>Must be at least 1. Example: <code>73</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>provider</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="provider"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--agents--aid--payer"
               value="wave"
               data-component="body">
    <br>
<p>Example: <code>wave</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>wave</code></li> <li><code>orange</code></li> <li><code>mtn</code></li> <li><code>moov</code></li> <li><code>visa</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>reference_paiement</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="reference_paiement"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--agents--aid--payer"
               value="mqeopfuudtdsufvyvddqa"
               data-component="body">
    <br>
<p>Must not be greater than 100 characters. Example: <code>mqeopfuudtdsufvyvddqa</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-internal-terra-v1-business-missions--id--paiements">GET api/internal/terra/v1/business/missions/{id}/paiements</h2>

<p>
</p>



<span id="example-requests-GETapi-internal-terra-v1-business-missions--id--paiements">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/business/missions/consequatur/paiements" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/consequatur/paiements"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-internal-terra-v1-business-missions--id--paiements">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-internal-terra-v1-business-missions--id--paiements" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-internal-terra-v1-business-missions--id--paiements"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-internal-terra-v1-business-missions--id--paiements"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-internal-terra-v1-business-missions--id--paiements" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-internal-terra-v1-business-missions--id--paiements">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-internal-terra-v1-business-missions--id--paiements" data-method="GET"
      data-path="api/internal/terra/v1/business/missions/{id}/paiements"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-internal-terra-v1-business-missions--id--paiements', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-internal-terra-v1-business-missions--id--paiements"
                    onclick="tryItOut('GETapi-internal-terra-v1-business-missions--id--paiements');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-internal-terra-v1-business-missions--id--paiements"
                    onclick="cancelTryOut('GETapi-internal-terra-v1-business-missions--id--paiements');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-internal-terra-v1-business-missions--id--paiements"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/internal/terra/v1/business/missions/{id}/paiements</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-internal-terra-v1-business-missions--id--paiements"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-internal-terra-v1-business-missions--id--paiements"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-internal-terra-v1-business-missions--id--paiements"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the mission. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-internal-terra-v1-statistiques-dashboard">GET api/internal/terra/v1/statistiques/dashboard</h2>

<p>
</p>



<span id="example-requests-GETapi-internal-terra-v1-statistiques-dashboard">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/statistiques/dashboard" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/statistiques/dashboard"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-internal-terra-v1-statistiques-dashboard">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-internal-terra-v1-statistiques-dashboard" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-internal-terra-v1-statistiques-dashboard"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-internal-terra-v1-statistiques-dashboard"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-internal-terra-v1-statistiques-dashboard" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-internal-terra-v1-statistiques-dashboard">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-internal-terra-v1-statistiques-dashboard" data-method="GET"
      data-path="api/internal/terra/v1/statistiques/dashboard"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-internal-terra-v1-statistiques-dashboard', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-internal-terra-v1-statistiques-dashboard"
                    onclick="tryItOut('GETapi-internal-terra-v1-statistiques-dashboard');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-internal-terra-v1-statistiques-dashboard"
                    onclick="cancelTryOut('GETapi-internal-terra-v1-statistiques-dashboard');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-internal-terra-v1-statistiques-dashboard"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/internal/terra/v1/statistiques/dashboard</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-internal-terra-v1-statistiques-dashboard"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-internal-terra-v1-statistiques-dashboard"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-internal-terra-v1-statistiques-mission--missionId-">GET api/internal/terra/v1/statistiques/mission/{missionId}</h2>

<p>
</p>



<span id="example-requests-GETapi-internal-terra-v1-statistiques-mission--missionId-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/statistiques/mission/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/statistiques/mission/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-internal-terra-v1-statistiques-mission--missionId-">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-internal-terra-v1-statistiques-mission--missionId-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-internal-terra-v1-statistiques-mission--missionId-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-internal-terra-v1-statistiques-mission--missionId-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-internal-terra-v1-statistiques-mission--missionId-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-internal-terra-v1-statistiques-mission--missionId-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-internal-terra-v1-statistiques-mission--missionId-" data-method="GET"
      data-path="api/internal/terra/v1/statistiques/mission/{missionId}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-internal-terra-v1-statistiques-mission--missionId-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-internal-terra-v1-statistiques-mission--missionId-"
                    onclick="tryItOut('GETapi-internal-terra-v1-statistiques-mission--missionId-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-internal-terra-v1-statistiques-mission--missionId-"
                    onclick="cancelTryOut('GETapi-internal-terra-v1-statistiques-mission--missionId-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-internal-terra-v1-statistiques-mission--missionId-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/internal/terra/v1/statistiques/mission/{missionId}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-internal-terra-v1-statistiques-mission--missionId-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-internal-terra-v1-statistiques-mission--missionId-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>missionId</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="missionId"                data-endpoint="GETapi-internal-terra-v1-statistiques-mission--missionId-"
               value="17"
               data-component="url">
    <br>
<p>Example: <code>17</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-internal-terra-v1-statistiques-agent--agentId-">GET api/internal/terra/v1/statistiques/agent/{agentId}</h2>

<p>
</p>



<span id="example-requests-GETapi-internal-terra-v1-statistiques-agent--agentId-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/statistiques/agent/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/statistiques/agent/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-internal-terra-v1-statistiques-agent--agentId-">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;No query results for model [App\\Models\\User] consequatur&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-internal-terra-v1-statistiques-agent--agentId-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-internal-terra-v1-statistiques-agent--agentId-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-internal-terra-v1-statistiques-agent--agentId-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-internal-terra-v1-statistiques-agent--agentId-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-internal-terra-v1-statistiques-agent--agentId-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-internal-terra-v1-statistiques-agent--agentId-" data-method="GET"
      data-path="api/internal/terra/v1/statistiques/agent/{agentId}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-internal-terra-v1-statistiques-agent--agentId-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-internal-terra-v1-statistiques-agent--agentId-"
                    onclick="tryItOut('GETapi-internal-terra-v1-statistiques-agent--agentId-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-internal-terra-v1-statistiques-agent--agentId-"
                    onclick="cancelTryOut('GETapi-internal-terra-v1-statistiques-agent--agentId-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-internal-terra-v1-statistiques-agent--agentId-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/internal/terra/v1/statistiques/agent/{agentId}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-internal-terra-v1-statistiques-agent--agentId-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-internal-terra-v1-statistiques-agent--agentId-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>agentId</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="agentId"                data-endpoint="GETapi-internal-terra-v1-statistiques-agent--agentId-"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-internal-terra-v1-statistiques-performance">GET api/internal/terra/v1/statistiques/performance</h2>

<p>
</p>



<span id="example-requests-GETapi-internal-terra-v1-statistiques-performance">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/statistiques/performance" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/statistiques/performance"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-internal-terra-v1-statistiques-performance">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;missions_par_type&quot;: [],
    &quot;reponses_par_statut&quot;: [],
    &quot;taux_completion&quot;: 0
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-internal-terra-v1-statistiques-performance" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-internal-terra-v1-statistiques-performance"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-internal-terra-v1-statistiques-performance"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-internal-terra-v1-statistiques-performance" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-internal-terra-v1-statistiques-performance">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-internal-terra-v1-statistiques-performance" data-method="GET"
      data-path="api/internal/terra/v1/statistiques/performance"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-internal-terra-v1-statistiques-performance', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-internal-terra-v1-statistiques-performance"
                    onclick="tryItOut('GETapi-internal-terra-v1-statistiques-performance');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-internal-terra-v1-statistiques-performance"
                    onclick="cancelTryOut('GETapi-internal-terra-v1-statistiques-performance');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-internal-terra-v1-statistiques-performance"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/internal/terra/v1/statistiques/performance</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-internal-terra-v1-statistiques-performance"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-internal-terra-v1-statistiques-performance"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
