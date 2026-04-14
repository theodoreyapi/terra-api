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
                    <ul id="tocify-header-auth-agent" class="tocify-header">
                <li class="tocify-item level-1" data-unique="auth-agent">
                    <a href="#auth-agent">Auth Agent</a>
                </li>
                                    <ul id="tocify-subheader-auth-agent" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="auth-agent-POSTapi-internal-terra-v1-agent-register">
                                <a href="#auth-agent-POSTapi-internal-terra-v1-agent-register">Inscription d’un agent</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="auth-agent-POSTapi-internal-terra-v1-agent-login">
                                <a href="#auth-agent-POSTapi-internal-terra-v1-agent-login">Connexion agent</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="auth-agent-POSTapi-internal-terra-v1-agent-send-otp">
                                <a href="#auth-agent-POSTapi-internal-terra-v1-agent-send-otp">Envoyer OTP</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="auth-agent-POSTapi-internal-terra-v1-agent-verify-otp">
                                <a href="#auth-agent-POSTapi-internal-terra-v1-agent-verify-otp">Vérifier OTP</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="auth-agent-POSTapi-internal-terra-v1-agent-forgot-password">
                                <a href="#auth-agent-POSTapi-internal-terra-v1-agent-forgot-password">Mot de passe oublié</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="auth-agent-POSTapi-internal-terra-v1-agent-reset-password">
                                <a href="#auth-agent-POSTapi-internal-terra-v1-agent-reset-password">Réinitialiser mot de passe</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="auth-agent-POSTapi-internal-terra-v1-agent-logout">
                                <a href="#auth-agent-POSTapi-internal-terra-v1-agent-logout">Déconnexion agent</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="auth-agent-GETapi-internal-terra-v1-agent-me">
                                <a href="#auth-agent-GETapi-internal-terra-v1-agent-me">Profil de l’agent connecté</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="auth-agent-PUTapi-internal-terra-v1-agent-me">
                                <a href="#auth-agent-PUTapi-internal-terra-v1-agent-me">Mettre à jour le profil</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-auth-business" class="tocify-header">
                <li class="tocify-item level-1" data-unique="auth-business">
                    <a href="#auth-business">Auth Business</a>
                </li>
                                    <ul id="tocify-subheader-auth-business" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="auth-business-POSTapi-internal-terra-v1-business-register">
                                <a href="#auth-business-POSTapi-internal-terra-v1-business-register">Inscription d’un business</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="auth-business-POSTapi-internal-terra-v1-business-login">
                                <a href="#auth-business-POSTapi-internal-terra-v1-business-login">Connexion business</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="auth-business-POSTapi-internal-terra-v1-business-send-otp">
                                <a href="#auth-business-POSTapi-internal-terra-v1-business-send-otp">Envoyer un OTP</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="auth-business-POSTapi-internal-terra-v1-business-verify-otp">
                                <a href="#auth-business-POSTapi-internal-terra-v1-business-verify-otp">Vérifier OTP</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="auth-business-POSTapi-internal-terra-v1-business-forgot-password">
                                <a href="#auth-business-POSTapi-internal-terra-v1-business-forgot-password">Mot de passe oublié</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="auth-business-POSTapi-internal-terra-v1-business-reset-password">
                                <a href="#auth-business-POSTapi-internal-terra-v1-business-reset-password">Réinitialiser le mot de passe</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="auth-business-POSTapi-internal-terra-v1-business-logout">
                                <a href="#auth-business-POSTapi-internal-terra-v1-business-logout">Déconnexion business</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-business-champs" class="tocify-header">
                <li class="tocify-item level-1" data-unique="business-champs">
                    <a href="#business-champs">Business Champs</a>
                </li>
                                    <ul id="tocify-subheader-business-champs" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="business-champs-POSTapi-internal-terra-v1-business-formulaires--fid--champs">
                                <a href="#business-champs-POSTapi-internal-terra-v1-business-formulaires--fid--champs">Ajouter un champ à un formulaire</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="business-champs-PUTapi-internal-terra-v1-business-formulaires--fid--champs--cid-">
                                <a href="#business-champs-PUTapi-internal-terra-v1-business-formulaires--fid--champs--cid-">Mettre à jour un champ</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="business-champs-DELETEapi-internal-terra-v1-business-formulaires--fid--champs--cid-">
                                <a href="#business-champs-DELETEapi-internal-terra-v1-business-formulaires--fid--champs--cid-">Supprimer un champ</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="business-champs-PUTapi-internal-terra-v1-business-formulaires--fid--champs-ordre">
                                <a href="#business-champs-PUTapi-internal-terra-v1-business-formulaires--fid--champs-ordre">Réordonner les champs d’un formulaire</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="business-champs-PUTapi-internal-terra-v1-business-champs--cid--parametres">
                                <a href="#business-champs-PUTapi-internal-terra-v1-business-champs--cid--parametres">Mettre à jour les paramètres d’un champ</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-business-formulaires" class="tocify-header">
                <li class="tocify-item level-1" data-unique="business-formulaires">
                    <a href="#business-formulaires">Business Formulaires</a>
                </li>
                                    <ul id="tocify-subheader-business-formulaires" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="business-formulaires-GETapi-internal-terra-v1-business-missions--id--formulaires">
                                <a href="#business-formulaires-GETapi-internal-terra-v1-business-missions--id--formulaires">Liste des formulaires d’une mission</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="business-formulaires-POSTapi-internal-terra-v1-business-missions--id--formulaires">
                                <a href="#business-formulaires-POSTapi-internal-terra-v1-business-missions--id--formulaires">Créer un formulaire pour une mission</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="business-formulaires-PUTapi-internal-terra-v1-business-missions--id--formulaires--fid-">
                                <a href="#business-formulaires-PUTapi-internal-terra-v1-business-missions--id--formulaires--fid-">Mettre à jour un formulaire</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="business-formulaires-DELETEapi-internal-terra-v1-business-missions--id--formulaires--fid-">
                                <a href="#business-formulaires-DELETEapi-internal-terra-v1-business-missions--id--formulaires--fid-">Supprimer un formulaire</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-business-mission-agents" class="tocify-header">
                <li class="tocify-item level-1" data-unique="business-mission-agents">
                    <a href="#business-mission-agents">Business Mission Agents</a>
                </li>
                                    <ul id="tocify-subheader-business-mission-agents" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="business-mission-agents-GETapi-internal-terra-v1-business-missions--id--agents">
                                <a href="#business-mission-agents-GETapi-internal-terra-v1-business-missions--id--agents">Liste des agents d’une mission</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="business-mission-agents-POSTapi-internal-terra-v1-business-missions--id--agents-inviter">
                                <a href="#business-mission-agents-POSTapi-internal-terra-v1-business-missions--id--agents-inviter">Inviter des agents à une mission</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="business-mission-agents-GETapi-internal-terra-v1-business-missions--id--agents--aid-">
                                <a href="#business-mission-agents-GETapi-internal-terra-v1-business-missions--id--agents--aid-">Détail d’un agent dans une mission</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="business-mission-agents-DELETEapi-internal-terra-v1-business-missions--id--agents--aid-">
                                <a href="#business-mission-agents-DELETEapi-internal-terra-v1-business-missions--id--agents--aid-">Retirer un agent d’une mission</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="business-mission-agents-PUTapi-internal-terra-v1-business-missions--id--agents--aid--objectif">
                                <a href="#business-mission-agents-PUTapi-internal-terra-v1-business-missions--id--agents--aid--objectif">Mettre à jour l’objectif d’un agent</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="business-mission-agents-GETapi-internal-terra-v1-business-missions--id--agents--aid--statistiques">
                                <a href="#business-mission-agents-GETapi-internal-terra-v1-business-missions--id--agents--aid--statistiques">Statistiques d’un agent dans une mission</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="business-mission-agents-GETapi-internal-terra-v1-business-missions--id--agents--aid--reponses">
                                <a href="#business-mission-agents-GETapi-internal-terra-v1-business-missions--id--agents--aid--reponses">Liste des réponses d’un agent</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-business-missions" class="tocify-header">
                <li class="tocify-item level-1" data-unique="business-missions">
                    <a href="#business-missions">Business Missions</a>
                </li>
                                    <ul id="tocify-subheader-business-missions" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="business-missions-GETapi-internal-terra-v1-business-missions">
                                <a href="#business-missions-GETapi-internal-terra-v1-business-missions">Liste des missions du business</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="business-missions-POSTapi-internal-terra-v1-business-missions">
                                <a href="#business-missions-POSTapi-internal-terra-v1-business-missions">Créer une mission</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="business-missions-GETapi-internal-terra-v1-business-missions--id-">
                                <a href="#business-missions-GETapi-internal-terra-v1-business-missions--id-">Détail d’une mission</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="business-missions-PUTapi-internal-terra-v1-business-missions--id-">
                                <a href="#business-missions-PUTapi-internal-terra-v1-business-missions--id-">Mettre à jour une mission</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="business-missions-DELETEapi-internal-terra-v1-business-missions--id-">
                                <a href="#business-missions-DELETEapi-internal-terra-v1-business-missions--id-">Supprimer une mission (brouillon uniquement)</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="business-missions-POSTapi-internal-terra-v1-business-missions--id--publier">
                                <a href="#business-missions-POSTapi-internal-terra-v1-business-missions--id--publier">Publier une mission</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="business-missions-POSTapi-internal-terra-v1-business-missions--id--terminer">
                                <a href="#business-missions-POSTapi-internal-terra-v1-business-missions--id--terminer">Terminer une mission</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="business-missions-GETapi-internal-terra-v1-business-missions--id--statistiques">
                                <a href="#business-missions-GETapi-internal-terra-v1-business-missions--id--statistiques">Statistiques d’une mission</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-business-paiements" class="tocify-header">
                <li class="tocify-item level-1" data-unique="business-paiements">
                    <a href="#business-paiements">Business Paiements</a>
                </li>
                                    <ul id="tocify-subheader-business-paiements" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="business-paiements-GETapi-internal-terra-v1-business-missions--id--modes-paiement">
                                <a href="#business-paiements-GETapi-internal-terra-v1-business-missions--id--modes-paiement">Lister les modes de paiement d'une mission</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="business-paiements-POSTapi-internal-terra-v1-business-missions--id--modes-paiement">
                                <a href="#business-paiements-POSTapi-internal-terra-v1-business-missions--id--modes-paiement">Ajouter un mode de paiement</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="business-paiements-DELETEapi-internal-terra-v1-business-missions--id--modes-paiement--mid-">
                                <a href="#business-paiements-DELETEapi-internal-terra-v1-business-missions--id--modes-paiement--mid-">Supprimer un mode de paiement</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="business-paiements-POSTapi-internal-terra-v1-business-missions--id--agents-payer-tous">
                                <a href="#business-paiements-POSTapi-internal-terra-v1-business-missions--id--agents-payer-tous">Paiement groupé des agents</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="business-paiements-POSTapi-internal-terra-v1-business-missions--id--agents--aid--payer">
                                <a href="#business-paiements-POSTapi-internal-terra-v1-business-missions--id--agents--aid--payer">Payer un agent pour une mission</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="business-paiements-GETapi-internal-terra-v1-business-missions--id--paiements">
                                <a href="#business-paiements-GETapi-internal-terra-v1-business-missions--id--paiements">Historique des paiements d'une mission</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-business-plans" class="tocify-header">
                <li class="tocify-item level-1" data-unique="business-plans">
                    <a href="#business-plans">Business Plans</a>
                </li>
                                    <ul id="tocify-subheader-business-plans" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="business-plans-GETapi-internal-terra-v1-business-missions--id--plans">
                                <a href="#business-plans-GETapi-internal-terra-v1-business-missions--id--plans">Lister les plans d'une mission</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="business-plans-POSTapi-internal-terra-v1-business-missions--id--plans">
                                <a href="#business-plans-POSTapi-internal-terra-v1-business-missions--id--plans">Créer un plan</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="business-plans-PUTapi-internal-terra-v1-business-missions--id--plans--pid-">
                                <a href="#business-plans-PUTapi-internal-terra-v1-business-missions--id--plans--pid-">Mettre à jour un plan</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="business-plans-DELETEapi-internal-terra-v1-business-missions--id--plans--pid-">
                                <a href="#business-plans-DELETEapi-internal-terra-v1-business-missions--id--plans--pid-">Supprimer un plan</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-business-profil" class="tocify-header">
                <li class="tocify-item level-1" data-unique="business-profil">
                    <a href="#business-profil">Business Profil</a>
                </li>
                                    <ul id="tocify-subheader-business-profil" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="business-profil-GETapi-internal-terra-v1-business-me">
                                <a href="#business-profil-GETapi-internal-terra-v1-business-me">Profil du business connecté</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="business-profil-PUTapi-internal-terra-v1-business-me">
                                <a href="#business-profil-PUTapi-internal-terra-v1-business-me">Mettre à jour le profil business</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="business-profil-GETapi-internal-terra-v1-business-profile">
                                <a href="#business-profil-GETapi-internal-terra-v1-business-profile">Profil complet du business</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="business-profil-PUTapi-internal-terra-v1-business-profile">
                                <a href="#business-profil-PUTapi-internal-terra-v1-business-profile">Mettre à jour le profil business</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="business-profil-POSTapi-internal-terra-v1-business-profile-logo">
                                <a href="#business-profil-POSTapi-internal-terra-v1-business-profile-logo">Upload du logo business</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-business-reponses" class="tocify-header">
                <li class="tocify-item level-1" data-unique="business-reponses">
                    <a href="#business-reponses">Business Réponses</a>
                </li>
                                    <ul id="tocify-subheader-business-reponses" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="business-reponses-GETapi-internal-terra-v1-business-missions--id--reponses-export">
                                <a href="#business-reponses-GETapi-internal-terra-v1-business-missions--id--reponses-export">Exporter les réponses en CSV</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="business-reponses-GETapi-internal-terra-v1-business-missions--id--reponses">
                                <a href="#business-reponses-GETapi-internal-terra-v1-business-missions--id--reponses">Lister les réponses d'une mission</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="business-reponses-GETapi-internal-terra-v1-business-missions--id--reponses--rid-">
                                <a href="#business-reponses-GETapi-internal-terra-v1-business-missions--id--reponses--rid-">Détail d'une réponse</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="business-reponses-PUTapi-internal-terra-v1-business-missions--id--reponses--rid--valider">
                                <a href="#business-reponses-PUTapi-internal-terra-v1-business-missions--id--reponses--rid--valider">Valider une réponse</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="business-reponses-PUTapi-internal-terra-v1-business-missions--id--reponses--rid--rejeter">
                                <a href="#business-reponses-PUTapi-internal-terra-v1-business-missions--id--reponses--rid--rejeter">Rejeter une réponse</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-diplomes-agent" class="tocify-header">
                <li class="tocify-item level-1" data-unique="diplomes-agent">
                    <a href="#diplomes-agent">Diplômes Agent</a>
                </li>
                                    <ul id="tocify-subheader-diplomes-agent" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="diplomes-agent-GETapi-internal-terra-v1-agent-diplomes">
                                <a href="#diplomes-agent-GETapi-internal-terra-v1-agent-diplomes">Liste des diplômes de l’agent</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="diplomes-agent-POSTapi-internal-terra-v1-agent-diplomes">
                                <a href="#diplomes-agent-POSTapi-internal-terra-v1-agent-diplomes">Ajouter un diplôme</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="diplomes-agent-PUTapi-internal-terra-v1-agent-diplomes--id-">
                                <a href="#diplomes-agent-PUTapi-internal-terra-v1-agent-diplomes--id-">Modifier un diplôme</a>
                            </li>
                                                                        </ul>
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
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-internal-terra-v1-agent-profile">
                                <a href="#endpoints-GETapi-internal-terra-v1-agent-profile">GET api/internal/terra/v1/agent/profile</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-formulaires-mission" class="tocify-header">
                <li class="tocify-item level-1" data-unique="formulaires-mission">
                    <a href="#formulaires-mission">Formulaires Mission</a>
                </li>
                                    <ul id="tocify-subheader-formulaires-mission" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="formulaires-mission-GETapi-internal-terra-v1-agent-missions--id--formulaire">
                                <a href="#formulaires-mission-GETapi-internal-terra-v1-agent-missions--id--formulaire">Récupérer les formulaires d’une mission</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-invitations-agent" class="tocify-header">
                <li class="tocify-item level-1" data-unique="invitations-agent">
                    <a href="#invitations-agent">Invitations Agent</a>
                </li>
                                    <ul id="tocify-subheader-invitations-agent" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="invitations-agent-GETapi-internal-terra-v1-agent-invitations">
                                <a href="#invitations-agent-GETapi-internal-terra-v1-agent-invitations">Liste des invitations de l’agent</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="invitations-agent-GETapi-internal-terra-v1-agent-invitations--id-">
                                <a href="#invitations-agent-GETapi-internal-terra-v1-agent-invitations--id-">Détails d’une invitation</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="invitations-agent-POSTapi-internal-terra-v1-agent-invitations--id--accepter">
                                <a href="#invitations-agent-POSTapi-internal-terra-v1-agent-invitations--id--accepter">Accepter une invitation de mission</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="invitations-agent-POSTapi-internal-terra-v1-agent-invitations--id--refuser">
                                <a href="#invitations-agent-POSTapi-internal-terra-v1-agent-invitations--id--refuser">Refuser une invitation de mission</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-langues-agent" class="tocify-header">
                <li class="tocify-item level-1" data-unique="langues-agent">
                    <a href="#langues-agent">Langues Agent</a>
                </li>
                                    <ul id="tocify-subheader-langues-agent" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="langues-agent-GETapi-internal-terra-v1-agent-langues">
                                <a href="#langues-agent-GETapi-internal-terra-v1-agent-langues">Liste des langues de l’agent</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="langues-agent-POSTapi-internal-terra-v1-agent-langues">
                                <a href="#langues-agent-POSTapi-internal-terra-v1-agent-langues">Ajouter une langue au profil</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="langues-agent-DELETEapi-internal-terra-v1-agent-langues--id-">
                                <a href="#langues-agent-DELETEapi-internal-terra-v1-agent-langues--id-">Supprimer une langue du profil</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-missions-agent" class="tocify-header">
                <li class="tocify-item level-1" data-unique="missions-agent">
                    <a href="#missions-agent">Missions Agent</a>
                </li>
                                    <ul id="tocify-subheader-missions-agent" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="missions-agent-GETapi-internal-terra-v1-agent-missions-mes-missions">
                                <a href="#missions-agent-GETapi-internal-terra-v1-agent-missions-mes-missions">Liste des missions de l’agent connecté</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="missions-agent-GETapi-internal-terra-v1-agent-missions">
                                <a href="#missions-agent-GETapi-internal-terra-v1-agent-missions">Liste des missions actives disponibles</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="missions-agent-GETapi-internal-terra-v1-agent-missions--id-">
                                <a href="#missions-agent-GETapi-internal-terra-v1-agent-missions--id-">Détails d’une mission</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="missions-agent-POSTapi-internal-terra-v1-agent-missions--id--rejoindre">
                                <a href="#missions-agent-POSTapi-internal-terra-v1-agent-missions--id--rejoindre">Rejoindre une mission</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="missions-agent-GETapi-internal-terra-v1-agent-missions--id--statistiques">
                                <a href="#missions-agent-GETapi-internal-terra-v1-agent-missions--id--statistiques">Statistiques de mission pour l’agent</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-permis-agent" class="tocify-header">
                <li class="tocify-item level-1" data-unique="permis-agent">
                    <a href="#permis-agent">Permis Agent</a>
                </li>
                                    <ul id="tocify-subheader-permis-agent" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="permis-agent-GETapi-internal-terra-v1-agent-permis">
                                <a href="#permis-agent-GETapi-internal-terra-v1-agent-permis">Liste des permis de conduire de l’agent</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="permis-agent-POSTapi-internal-terra-v1-agent-permis">
                                <a href="#permis-agent-POSTapi-internal-terra-v1-agent-permis">Ajouter un permis de conduire</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="permis-agent-PUTapi-internal-terra-v1-agent-permis--id-">
                                <a href="#permis-agent-PUTapi-internal-terra-v1-agent-permis--id-">Modifier un permis de conduire</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-pieces-agent" class="tocify-header">
                <li class="tocify-item level-1" data-unique="pieces-agent">
                    <a href="#pieces-agent">Pièces Agent</a>
                </li>
                                    <ul id="tocify-subheader-pieces-agent" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="pieces-agent-GETapi-internal-terra-v1-agent-pieces">
                                <a href="#pieces-agent-GETapi-internal-terra-v1-agent-pieces">Liste des pièces d’identité de l’agent</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="pieces-agent-POSTapi-internal-terra-v1-agent-pieces">
                                <a href="#pieces-agent-POSTapi-internal-terra-v1-agent-pieces">Ajouter une pièce d’identité</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="pieces-agent-PUTapi-internal-terra-v1-agent-pieces--id-">
                                <a href="#pieces-agent-PUTapi-internal-terra-v1-agent-pieces--id-">Modifier une pièce d’identité</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-profil-agent" class="tocify-header">
                <li class="tocify-item level-1" data-unique="profil-agent">
                    <a href="#profil-agent">Profil Agent</a>
                </li>
                                    <ul id="tocify-subheader-profil-agent" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="profil-agent-PUTapi-internal-terra-v1-agent-profile">
                                <a href="#profil-agent-PUTapi-internal-terra-v1-agent-profile">Mettre à jour le profil de l’agent</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="profil-agent-POSTapi-internal-terra-v1-agent-profile-image">
                                <a href="#profil-agent-POSTapi-internal-terra-v1-agent-profile-image">Upload photo de profil</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-referentiels" class="tocify-header">
                <li class="tocify-item level-1" data-unique="referentiels">
                    <a href="#referentiels">Référentiels</a>
                </li>
                                    <ul id="tocify-subheader-referentiels" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="referentiels-GETapi-internal-terra-v1-referentiels-pays">
                                <a href="#referentiels-GETapi-internal-terra-v1-referentiels-pays">Liste des pays</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="referentiels-GETapi-internal-terra-v1-referentiels-pays--id--villes">
                                <a href="#referentiels-GETapi-internal-terra-v1-referentiels-pays--id--villes">Liste des villes par pays</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="referentiels-GETapi-internal-terra-v1-referentiels-villes--id--communes">
                                <a href="#referentiels-GETapi-internal-terra-v1-referentiels-villes--id--communes">Liste des communes par ville</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="referentiels-GETapi-internal-terra-v1-referentiels-etudes">
                                <a href="#referentiels-GETapi-internal-terra-v1-referentiels-etudes">Liste des niveaux d'étude</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="referentiels-GETapi-internal-terra-v1-referentiels-diplomes">
                                <a href="#referentiels-GETapi-internal-terra-v1-referentiels-diplomes">Liste des diplômes</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="referentiels-GETapi-internal-terra-v1-referentiels-langues">
                                <a href="#referentiels-GETapi-internal-terra-v1-referentiels-langues">Liste des langues</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="referentiels-GETapi-internal-terra-v1-referentiels-secteurs">
                                <a href="#referentiels-GETapi-internal-terra-v1-referentiels-secteurs">Liste des secteurs d'activité</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-reponses-agent" class="tocify-header">
                <li class="tocify-item level-1" data-unique="reponses-agent">
                    <a href="#reponses-agent">Réponses Agent</a>
                </li>
                                    <ul id="tocify-subheader-reponses-agent" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="reponses-agent-POSTapi-internal-terra-v1-agent-missions--id--formulaire-soumettre">
                                <a href="#reponses-agent-POSTapi-internal-terra-v1-agent-missions--id--formulaire-soumettre">Soumettre une réponse à un formulaire</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="reponses-agent-GETapi-internal-terra-v1-agent-missions--id--mes-reponses">
                                <a href="#reponses-agent-GETapi-internal-terra-v1-agent-missions--id--mes-reponses">Historique des réponses de l’agent sur une mission</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-statistiques" class="tocify-header">
                <li class="tocify-item level-1" data-unique="statistiques">
                    <a href="#statistiques">Statistiques</a>
                </li>
                                    <ul id="tocify-subheader-statistiques" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="statistiques-GETapi-internal-terra-v1-statistiques-dashboard">
                                <a href="#statistiques-GETapi-internal-terra-v1-statistiques-dashboard">Dashboard global des statistiques</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="statistiques-GETapi-internal-terra-v1-statistiques-mission--missionId-">
                                <a href="#statistiques-GETapi-internal-terra-v1-statistiques-mission--missionId-">Statistiques d'une mission</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="statistiques-GETapi-internal-terra-v1-statistiques-agent--agentId-">
                                <a href="#statistiques-GETapi-internal-terra-v1-statistiques-agent--agentId-">Statistiques d'un agent</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="statistiques-GETapi-internal-terra-v1-statistiques-performance">
                                <a href="#statistiques-GETapi-internal-terra-v1-statistiques-performance">Analyse de performance globale</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-wallet-agent" class="tocify-header">
                <li class="tocify-item level-1" data-unique="wallet-agent">
                    <a href="#wallet-agent">Wallet Agent</a>
                </li>
                                    <ul id="tocify-subheader-wallet-agent" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="wallet-agent-GETapi-internal-terra-v1-agent-wallet">
                                <a href="#wallet-agent-GETapi-internal-terra-v1-agent-wallet">Informations du portefeuille agent</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="wallet-agent-GETapi-internal-terra-v1-agent-wallet-transactions">
                                <a href="#wallet-agent-GETapi-internal-terra-v1-agent-wallet-transactions">Liste des transactions du portefeuille</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="wallet-agent-GETapi-internal-terra-v1-agent-wallet-transactions--id-">
                                <a href="#wallet-agent-GETapi-internal-terra-v1-agent-wallet-transactions--id-">Détail d’une transaction</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="wallet-agent-POSTapi-internal-terra-v1-agent-wallet-retrait">
                                <a href="#wallet-agent-POSTapi-internal-terra-v1-agent-wallet-retrait">Créer une demande de retrait</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="wallet-agent-GETapi-internal-terra-v1-agent-wallet-retraits">
                                <a href="#wallet-agent-GETapi-internal-terra-v1-agent-wallet-retraits">Liste des retraits de l’agent</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="wallet-agent-GETapi-internal-terra-v1-agent-wallet-retraits--id-">
                                <a href="#wallet-agent-GETapi-internal-terra-v1-agent-wallet-retraits--id-">Détail d’un retrait</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="wallet-agent-DELETEapi-internal-terra-v1-agent-wallet-retraits--id-">
                                <a href="#wallet-agent-DELETEapi-internal-terra-v1-agent-wallet-retraits--id-">Annuler une demande de retrait</a>
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
        <li>Last updated: April 14, 2026</li>
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

        <h1 id="auth-agent">Auth Agent</h1>

    

                                <h2 id="auth-agent-POSTapi-internal-terra-v1-agent-register">Inscription d’un agent</h2>

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
    \"genre_agent\": \"architecto\",
    \"name_agent\": \"architecto\",
    \"lastname_agent\": \"architecto\",
    \"profession_agent\": \"architecto\",
    \"naissance_agent\": \"architecto\",
    \"email_agent\": \"architecto\",
    \"phone_agent\": \"architecto\",
    \"password\": \"|]|{+-\",
    \"diplome_id\": \"architecto\",
    \"etude_id\": \"architecto\",
    \"city_id\": \"architecto\",
    \"country_id\": \"architecto\",
    \"commune_id\": \"architecto\",
    \"experience_mission_agent\": \"architecto\",
    \"permis_agent\": \"architecto\",
    \"password_confirmation\": \"architecto\"
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
    "genre_agent": "architecto",
    "name_agent": "architecto",
    "lastname_agent": "architecto",
    "profession_agent": "architecto",
    "naissance_agent": "architecto",
    "email_agent": "architecto",
    "phone_agent": "architecto",
    "password": "|]|{+-",
    "diplome_id": "architecto",
    "etude_id": "architecto",
    "city_id": "architecto",
    "country_id": "architecto",
    "commune_id": "architecto",
    "experience_mission_agent": "architecto",
    "permis_agent": "architecto",
    "password_confirmation": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-agent-register">
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Compte cr&eacute;&eacute;. Veuillez v&eacute;rifier votre t&eacute;l&eacute;phone.&quot;,
    &quot;data&quot;: {
        &quot;id_agent&quot;: &quot;uuid&quot;,
        &quot;email_agent&quot;: &quot;test@mail.com&quot;
    }
}</code>
 </pre>
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
               value="architecto"
               data-component="body">
    <br>
<p>Genre (M ou F). Exemple: M Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name_agent"                data-endpoint="POSTapi-internal-terra-v1-agent-register"
               value="architecto"
               data-component="body">
    <br>
<p>Nom. Exemple: Yapi Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>lastname_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="lastname_agent"                data-endpoint="POSTapi-internal-terra-v1-agent-register"
               value="architecto"
               data-component="body">
    <br>
<p>Prénom. Exemple: Theodore Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>profession_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="profession_agent"                data-endpoint="POSTapi-internal-terra-v1-agent-register"
               value="architecto"
               data-component="body">
    <br>
<p>Profession. Exemple: Développeur Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>naissance_agent</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="naissance_agent"                data-endpoint="POSTapi-internal-terra-v1-agent-register"
               value="architecto"
               data-component="body">
    <br>
<p>Date de naissance. Exemple: 1995-01-01 Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email_agent"                data-endpoint="POSTapi-internal-terra-v1-agent-register"
               value="architecto"
               data-component="body">
    <br>
<p>Email. Exemple: test@mail.com Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone_agent"                data-endpoint="POSTapi-internal-terra-v1-agent-register"
               value="architecto"
               data-component="body">
    <br>
<p>Téléphone. Exemple: 0700000000 Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-internal-terra-v1-agent-register"
               value="|]|{+-"
               data-component="body">
    <br>
<p>Mot de passe (min 6 caractères) Example: <code>|]|{+-</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>diplome_id</code></b>&nbsp;&nbsp;
<small>uuid</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="diplome_id"                data-endpoint="POSTapi-internal-terra-v1-agent-register"
               value="architecto"
               data-component="body">
    <br>
<p>ID diplôme Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>etude_id</code></b>&nbsp;&nbsp;
<small>uuid</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="etude_id"                data-endpoint="POSTapi-internal-terra-v1-agent-register"
               value="architecto"
               data-component="body">
    <br>
<p>ID étude Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>city_id</code></b>&nbsp;&nbsp;
<small>uuid</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="city_id"                data-endpoint="POSTapi-internal-terra-v1-agent-register"
               value="architecto"
               data-component="body">
    <br>
<p>ID ville Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>country_id</code></b>&nbsp;&nbsp;
<small>uuid</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="country_id"                data-endpoint="POSTapi-internal-terra-v1-agent-register"
               value="architecto"
               data-component="body">
    <br>
<p>ID pays Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>commune_id</code></b>&nbsp;&nbsp;
<small>uuid</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="commune_id"                data-endpoint="POSTapi-internal-terra-v1-agent-register"
               value="architecto"
               data-component="body">
    <br>
<p>ID commune Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>experience_mission_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="experience_mission_agent"                data-endpoint="POSTapi-internal-terra-v1-agent-register"
               value="architecto"
               data-component="body">
    <br>
<p>oui ou non Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>permis_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="permis_agent"                data-endpoint="POSTapi-internal-terra-v1-agent-register"
               value="architecto"
               data-component="body">
    <br>
<p>oui ou non Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password_confirmation</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password_confirmation"                data-endpoint="POSTapi-internal-terra-v1-agent-register"
               value="architecto"
               data-component="body">
    <br>
<p>Confirmation mot de passe Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="auth-agent-POSTapi-internal-terra-v1-agent-login">Connexion agent</h2>

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
    \"email_agent\": \"architecto\",
    \"password\": \"|]|{+-\"
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
    "email_agent": "architecto",
    "password": "|]|{+-"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-agent-login">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;token&quot;: &quot;random_token&quot;,
    &quot;data&quot;: {
        &quot;id_agent&quot;: &quot;uuid&quot;,
        &quot;name_agent&quot;: &quot;Yapi&quot;,
        &quot;lastname_agent&quot;: &quot;Theodore&quot;,
        &quot;email_agent&quot;: &quot;test@mail.com&quot;,
        &quot;phone_agent&quot;: &quot;0700000000&quot;,
        &quot;status&quot;: &quot;active&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Identifiants incorrects&quot;
}</code>
 </pre>
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
               value="architecto"
               data-component="body">
    <br>
<p>Email Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-internal-terra-v1-agent-login"
               value="|]|{+-"
               data-component="body">
    <br>
<p>Mot de passe Example: <code>|]|{+-</code></p>
        </div>
        </form>

                    <h2 id="auth-agent-POSTapi-internal-terra-v1-agent-send-otp">Envoyer OTP</h2>

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
    \"phone_agent\": \"architecto\"
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
    "phone_agent": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-agent-send-otp">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;OTP envoy&eacute;&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Num&eacute;ro introuvable&quot;
}</code>
 </pre>
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
               value="architecto"
               data-component="body">
    <br>
<p>Numéro téléphone Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="auth-agent-POSTapi-internal-terra-v1-agent-verify-otp">Vérifier OTP</h2>

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
    \"phone_agent\": \"architecto\",
    \"otp\": 16
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
    "phone_agent": "architecto",
    "otp": 16
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-agent-verify-otp">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;OTP v&eacute;rifi&eacute;&quot;,
    &quot;token&quot;: &quot;random_token&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;OTP invalide&quot;
}</code>
 </pre>
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
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>otp</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="otp"                data-endpoint="POSTapi-internal-terra-v1-agent-verify-otp"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
        </div>
        </form>

                    <h2 id="auth-agent-POSTapi-internal-terra-v1-agent-forgot-password">Mot de passe oublié</h2>

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
    \"email_agent\": \"architecto\"
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
    "email_agent": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-agent-forgot-password">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Code de r&eacute;initialisation envoy&eacute;&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Email introuvable&quot;
}</code>
 </pre>
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
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="auth-agent-POSTapi-internal-terra-v1-agent-reset-password">Réinitialiser mot de passe</h2>

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
    \"email_agent\": \"architecto\",
    \"otp\": 16,
    \"password\": \"|]|{+-\",
    \"password_confirmation\": \"architecto\"
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
    "email_agent": "architecto",
    "otp": 16,
    "password": "|]|{+-",
    "password_confirmation": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-agent-reset-password">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Mot de passe r&eacute;initialis&eacute; avec succ&egrave;s&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Code invalide ou expir&eacute;&quot;
}</code>
 </pre>
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
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>otp</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="otp"                data-endpoint="POSTapi-internal-terra-v1-agent-reset-password"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-internal-terra-v1-agent-reset-password"
               value="|]|{+-"
               data-component="body">
    <br>
<p>Example: <code>|]|{+-</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password_confirmation</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password_confirmation"                data-endpoint="POSTapi-internal-terra-v1-agent-reset-password"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="auth-agent-POSTapi-internal-terra-v1-agent-logout">Déconnexion agent</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
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
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;D&eacute;connexion r&eacute;ussie&quot;
}</code>
 </pre>
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
      data-authed="1"
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

                    <h2 id="auth-agent-GETapi-internal-terra-v1-agent-me">Profil de l’agent connecté</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
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
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: {
        &quot;id_agent&quot;: &quot;uuid&quot;,
        &quot;name_agent&quot;: &quot;Yapi&quot;,
        &quot;lastname_agent&quot;: &quot;Theodore&quot;,
        &quot;email_agent&quot;: &quot;test@mail.com&quot;,
        &quot;name_city&quot;: &quot;Abidjan&quot;,
        &quot;name_country&quot;: &quot;C&ocirc;te d&#039;Ivoire&quot;,
        &quot;name_commune&quot;: &quot;Yopougon&quot;,
        &quot;name_diplome&quot;: &quot;Master&quot;,
        &quot;name_etude&quot;: &quot;Licence&quot;,
        &quot;langues&quot;: [
            {
                &quot;id_langue_agent&quot;: &quot;uuid&quot;,
                &quot;name_langue&quot;: &quot;Fran&ccedil;ais&quot;
            }
        ]
    }
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
      data-authed="1"
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

                    <h2 id="auth-agent-PUTapi-internal-terra-v1-agent-me">Mettre à jour le profil</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-internal-terra-v1-agent-me">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/internal/terra/v1/agent/me" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name_agent\": \"architecto\",
    \"lastname_agent\": \"architecto\",
    \"profession_agent\": \"architecto\",
    \"naissance_agent\": \"2026-04-14T22:58:39\",
    \"phone_agent\": \"architecto\",
    \"longitude_agent\": \"architecto\",
    \"latitude_agent\": \"architecto\",
    \"experience_mission_agent\": \"non\",
    \"permis_agent\": \"non\",
    \"city_id\": \"a4855dc5-0acb-33c3-b921-f4291f719ca0\",
    \"country_id\": \"c90237e9-ced5-3af6-88ea-84aeaa148878\",
    \"commune_id\": \"a1a0a47d-e8c3-3cf0-8e6e-c1ff9dca5d1f\"
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
    "name_agent": "architecto",
    "lastname_agent": "architecto",
    "profession_agent": "architecto",
    "naissance_agent": "2026-04-14T22:58:39",
    "phone_agent": "architecto",
    "longitude_agent": "architecto",
    "latitude_agent": "architecto",
    "experience_mission_agent": "non",
    "permis_agent": "non",
    "city_id": "a4855dc5-0acb-33c3-b921-f4291f719ca0",
    "country_id": "c90237e9-ced5-3af6-88ea-84aeaa148878",
    "commune_id": "a1a0a47d-e8c3-3cf0-8e6e-c1ff9dca5d1f"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-internal-terra-v1-agent-me">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Profil mis &agrave; jour&quot;,
    &quot;data&quot;: {
        &quot;id_agent&quot;: &quot;uuid&quot;,
        &quot;name_agent&quot;: &quot;Yapi&quot;
    }
}</code>
 </pre>
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
      data-authed="1"
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
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>lastname_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="lastname_agent"                data-endpoint="PUTapi-internal-terra-v1-agent-me"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>profession_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="profession_agent"                data-endpoint="PUTapi-internal-terra-v1-agent-me"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>naissance_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="naissance_agent"                data-endpoint="PUTapi-internal-terra-v1-agent-me"
               value="2026-04-14T22:58:39"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2026-04-14T22:58:39</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone_agent"                data-endpoint="PUTapi-internal-terra-v1-agent-me"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>longitude_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="longitude_agent"                data-endpoint="PUTapi-internal-terra-v1-agent-me"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>latitude_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="latitude_agent"                data-endpoint="PUTapi-internal-terra-v1-agent-me"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>experience_mission_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="experience_mission_agent"                data-endpoint="PUTapi-internal-terra-v1-agent-me"
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
                              name="permis_agent"                data-endpoint="PUTapi-internal-terra-v1-agent-me"
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
                              name="city_id"                data-endpoint="PUTapi-internal-terra-v1-agent-me"
               value="a4855dc5-0acb-33c3-b921-f4291f719ca0"
               data-component="body">
    <br>
<p>Must be a valid UUID. The <code>id_city</code> of an existing record in the city table. Example: <code>a4855dc5-0acb-33c3-b921-f4291f719ca0</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>country_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="country_id"                data-endpoint="PUTapi-internal-terra-v1-agent-me"
               value="c90237e9-ced5-3af6-88ea-84aeaa148878"
               data-component="body">
    <br>
<p>Must be a valid UUID. The <code>id_country</code> of an existing record in the country table. Example: <code>c90237e9-ced5-3af6-88ea-84aeaa148878</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>commune_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="commune_id"                data-endpoint="PUTapi-internal-terra-v1-agent-me"
               value="a1a0a47d-e8c3-3cf0-8e6e-c1ff9dca5d1f"
               data-component="body">
    <br>
<p>Must be a valid UUID. The <code>id_commune</code> of an existing record in the commune table. Example: <code>a1a0a47d-e8c3-3cf0-8e6e-c1ff9dca5d1f</code></p>
        </div>
        </form>

                <h1 id="auth-business">Auth Business</h1>

    

                                <h2 id="auth-business-POSTapi-internal-terra-v1-business-register">Inscription d’un business</h2>

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
    \"name_business\": \"Yapi\",
    \"prenom_business\": \"Theodore\",
    \"phone_business\": \"0700000000\",
    \"email_business\": \"yapi@mail.com\",
    \"entreprise_business\": \"YapiTech\",
    \"email_entreprise_business\": \"contact@yapitech.com\",
    \"password\": \"|]|{+-\",
    \"secteur_id\": \"architecto\",
    \"city_id\": \"architecto\",
    \"country_id\": \"architecto\",
    \"localisation_entreprise_business\": \"architecto\",
    \"description_business\": \"architecto\",
    \"password_confirmation\": \"architecto\"
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
    "name_business": "Yapi",
    "prenom_business": "Theodore",
    "phone_business": "0700000000",
    "email_business": "yapi@mail.com",
    "entreprise_business": "YapiTech",
    "email_entreprise_business": "contact@yapitech.com",
    "password": "|]|{+-",
    "secteur_id": "architecto",
    "city_id": "architecto",
    "country_id": "architecto",
    "localisation_entreprise_business": "architecto",
    "description_business": "architecto",
    "password_confirmation": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-business-register">
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Compte business cr&eacute;&eacute;. V&eacute;rifiez votre t&eacute;l&eacute;phone/email.&quot;,
    &quot;data&quot;: {
        &quot;id_business&quot;: &quot;uuid&quot;,
        &quot;email_business&quot;: &quot;yapi@mail.com&quot;
    }
}</code>
 </pre>
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
               value="Yapi"
               data-component="body">
    <br>
<p>Nom du responsable. Example: <code>Yapi</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>prenom_business</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="prenom_business"                data-endpoint="POSTapi-internal-terra-v1-business-register"
               value="Theodore"
               data-component="body">
    <br>
<p>Prénom du responsable. Example: <code>Theodore</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone_business</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone_business"                data-endpoint="POSTapi-internal-terra-v1-business-register"
               value="0700000000"
               data-component="body">
    <br>
<p>Numéro de téléphone. Example: <code>0700000000</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email_business</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email_business"                data-endpoint="POSTapi-internal-terra-v1-business-register"
               value="yapi@mail.com"
               data-component="body">
    <br>
<p>Email personnel. Example: <code>yapi@mail.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>entreprise_business</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="entreprise_business"                data-endpoint="POSTapi-internal-terra-v1-business-register"
               value="YapiTech"
               data-component="body">
    <br>
<p>Nom de l’entreprise. Example: <code>YapiTech</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email_entreprise_business</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email_entreprise_business"                data-endpoint="POSTapi-internal-terra-v1-business-register"
               value="contact@yapitech.com"
               data-component="body">
    <br>
<p>Email entreprise. Example: <code>contact@yapitech.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-internal-terra-v1-business-register"
               value="|]|{+-"
               data-component="body">
    <br>
<p>Mot de passe (min 6 caractères) Example: <code>|]|{+-</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>secteur_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="secteur_id"                data-endpoint="POSTapi-internal-terra-v1-business-register"
               value="architecto"
               data-component="body">
    <br>
<p>UUID du secteur Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>city_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="city_id"                data-endpoint="POSTapi-internal-terra-v1-business-register"
               value="architecto"
               data-component="body">
    <br>
<p>UUID de la ville Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>country_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="country_id"                data-endpoint="POSTapi-internal-terra-v1-business-register"
               value="architecto"
               data-component="body">
    <br>
<p>UUID du pays Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>localisation_entreprise_business</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="localisation_entreprise_business"                data-endpoint="POSTapi-internal-terra-v1-business-register"
               value="architecto"
               data-component="body">
    <br>
<p>Localisation de l’entreprise Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description_business</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description_business"                data-endpoint="POSTapi-internal-terra-v1-business-register"
               value="architecto"
               data-component="body">
    <br>
<p>Description Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password_confirmation</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password_confirmation"                data-endpoint="POSTapi-internal-terra-v1-business-register"
               value="architecto"
               data-component="body">
    <br>
<p>Confirmation du mot de passe Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="auth-business-POSTapi-internal-terra-v1-business-login">Connexion business</h2>

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
    \"email_business\": \"yapi@mail.com\",
    \"password\": \"|]|{+-\"
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
    "email_business": "yapi@mail.com",
    "password": "|]|{+-"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-business-login">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;token&quot;: &quot;token_string&quot;,
    &quot;data&quot;: {
        &quot;id_business&quot;: &quot;uuid&quot;,
        &quot;name_business&quot;: &quot;Yapi&quot;,
        &quot;entreprise_business&quot;: &quot;YapiTech&quot;,
        &quot;email_business&quot;: &quot;yapi@mail.com&quot;,
        &quot;status&quot;: &quot;active&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Identifiants incorrects&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Compte inactif ou suspendu&quot;
}</code>
 </pre>
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
               value="yapi@mail.com"
               data-component="body">
    <br>
<p>Email. Example: <code>yapi@mail.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-internal-terra-v1-business-login"
               value="|]|{+-"
               data-component="body">
    <br>
<p>Mot de passe Example: <code>|]|{+-</code></p>
        </div>
        </form>

                    <h2 id="auth-business-POSTapi-internal-terra-v1-business-send-otp">Envoyer un OTP</h2>

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
    \"phone_business\": \"0700000000\"
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
    "phone_business": "0700000000"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-business-send-otp">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;OTP envoy&eacute;&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Num&eacute;ro introuvable&quot;
}</code>
 </pre>
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
               value="0700000000"
               data-component="body">
    <br>
<p>Numéro de téléphone. Example: <code>0700000000</code></p>
        </div>
        </form>

                    <h2 id="auth-business-POSTapi-internal-terra-v1-business-verify-otp">Vérifier OTP</h2>

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
    \"phone_business\": \"0700000000\",
    \"otp\": 123456
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
    "phone_business": "0700000000",
    "otp": 123456
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-business-verify-otp">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;OTP v&eacute;rifi&eacute;&quot;,
    &quot;token&quot;: &quot;token_string&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;OTP invalide&quot;
}</code>
 </pre>
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
               value="0700000000"
               data-component="body">
    <br>
<p>Numéro. Example: <code>0700000000</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>otp</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="otp"                data-endpoint="POSTapi-internal-terra-v1-business-verify-otp"
               value="123456"
               data-component="body">
    <br>
<p>Code OTP. Example: <code>123456</code></p>
        </div>
        </form>

                    <h2 id="auth-business-POSTapi-internal-terra-v1-business-forgot-password">Mot de passe oublié</h2>

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
    \"email_business\": \"yapi@mail.com\"
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
    "email_business": "yapi@mail.com"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-business-forgot-password">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Code de r&eacute;initialisation envoy&eacute;&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Email introuvable&quot;
}</code>
 </pre>
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
               value="yapi@mail.com"
               data-component="body">
    <br>
<p>Email. Example: <code>yapi@mail.com</code></p>
        </div>
        </form>

                    <h2 id="auth-business-POSTapi-internal-terra-v1-business-reset-password">Réinitialiser le mot de passe</h2>

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
    \"email_business\": \"architecto\",
    \"otp\": 16,
    \"password\": \"|]|{+-\",
    \"password_confirmation\": \"architecto\"
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
    "email_business": "architecto",
    "otp": 16,
    "password": "|]|{+-",
    "password_confirmation": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-business-reset-password">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Mot de passe r&eacute;initialis&eacute; avec succ&egrave;s&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Code invalide ou expir&eacute;&quot;
}</code>
 </pre>
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
               value="architecto"
               data-component="body">
    <br>
<p>Email Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>otp</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="otp"                data-endpoint="POSTapi-internal-terra-v1-business-reset-password"
               value="16"
               data-component="body">
    <br>
<p>Code OTP Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-internal-terra-v1-business-reset-password"
               value="|]|{+-"
               data-component="body">
    <br>
<p>Nouveau mot de passe Example: <code>|]|{+-</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password_confirmation</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password_confirmation"                data-endpoint="POSTapi-internal-terra-v1-business-reset-password"
               value="architecto"
               data-component="body">
    <br>
<p>Confirmation Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="auth-business-POSTapi-internal-terra-v1-business-logout">Déconnexion business</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
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
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;D&eacute;connexion r&eacute;ussie&quot;
}</code>
 </pre>
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
      data-authed="1"
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

                <h1 id="business-champs">Business Champs</h1>

    

                                <h2 id="business-champs-POSTapi-internal-terra-v1-business-formulaires--fid--champs">Ajouter un champ à un formulaire</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-internal-terra-v1-business-formulaires--fid--champs">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/business/formulaires/architecto/champs" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"type_champ\": \"architecto\",
    \"label\": \"architecto\",
    \"obligatoire\": true,
    \"ordre\": 16,
    \"options\": [
        \"architecto\"
    ],
    \"jours_options\": [
        \"architecto\"
    ],
    \"mois_options\": [
        \"architecto\"
    ],
    \"annee_options\": [
        \"architecto\"
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/formulaires/architecto/champs"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "type_champ": "architecto",
    "label": "architecto",
    "obligatoire": true,
    "ordre": 16,
    "options": [
        "architecto"
    ],
    "jours_options": [
        "architecto"
    ],
    "mois_options": [
        "architecto"
    ],
    "annee_options": [
        "architecto"
    ]
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-business-formulaires--fid--champs">
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Champ ajout&eacute;&quot;,
    &quot;data&quot;: {
        &quot;id_champ_formulaire&quot;: &quot;uuid&quot;,
        &quot;type_champ&quot;: &quot;text&quot;,
        &quot;label&quot;: &quot;Nom&quot;,
        &quot;obligatoire&quot;: true,
        &quot;ordre&quot;: 0,
        &quot;options&quot;: null
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Formulaire introuvable&quot;
}</code>
 </pre>
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
      data-authed="1"
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
               value="architecto"
               data-component="url">
    <br>
<p>ID du formulaire Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>type_champ</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="type_champ"                data-endpoint="POSTapi-internal-terra-v1-business-formulaires--fid--champs"
               value="architecto"
               data-component="body">
    <br>
<p>Type du champ (text, number, select, radio, checkbox, date, etc.) Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>label</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="label"                data-endpoint="POSTapi-internal-terra-v1-business-formulaires--fid--champs"
               value="architecto"
               data-component="body">
    <br>
<p>Libellé du champ Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>obligatoire</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-internal-terra-v1-business-formulaires--fid--champs" style="display: none">
            <input type="radio" name="obligatoire"
                   value="true"
                   data-endpoint="POSTapi-internal-terra-v1-business-formulaires--fid--champs"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-internal-terra-v1-business-formulaires--fid--champs" style="display: none">
            <input type="radio" name="obligatoire"
                   value="false"
                   data-endpoint="POSTapi-internal-terra-v1-business-formulaires--fid--champs"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Champ obligatoire ou non. Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>ordre</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="ordre"                data-endpoint="POSTapi-internal-terra-v1-business-formulaires--fid--champs"
               value="16"
               data-component="body">
    <br>
<p>Position du champ Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>options</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="options[0]"                data-endpoint="POSTapi-internal-terra-v1-business-formulaires--fid--champs"
               data-component="body">
        <input type="text" style="display: none"
               name="options[1]"                data-endpoint="POSTapi-internal-terra-v1-business-formulaires--fid--champs"
               data-component="body">
    <br>
<p>Liste d’options (pour select, radio, checkbox)</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>jours_options</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="jours_options[0]"                data-endpoint="POSTapi-internal-terra-v1-business-formulaires--fid--champs"
               data-component="body">
        <input type="text" style="display: none"
               name="jours_options[1]"                data-endpoint="POSTapi-internal-terra-v1-business-formulaires--fid--champs"
               data-component="body">
    <br>
<p>Options jours</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>mois_options</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="mois_options[0]"                data-endpoint="POSTapi-internal-terra-v1-business-formulaires--fid--champs"
               data-component="body">
        <input type="text" style="display: none"
               name="mois_options[1]"                data-endpoint="POSTapi-internal-terra-v1-business-formulaires--fid--champs"
               data-component="body">
    <br>
<p>Options mois</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>annee_options</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="annee_options[0]"                data-endpoint="POSTapi-internal-terra-v1-business-formulaires--fid--champs"
               data-component="body">
        <input type="text" style="display: none"
               name="annee_options[1]"                data-endpoint="POSTapi-internal-terra-v1-business-formulaires--fid--champs"
               data-component="body">
    <br>
<p>Options années</p>
        </div>
        </form>

                    <h2 id="business-champs-PUTapi-internal-terra-v1-business-formulaires--fid--champs--cid-">Mettre à jour un champ</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-internal-terra-v1-business-formulaires--fid--champs--cid-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/internal/terra/v1/business/formulaires/architecto/champs/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"type_champ\": \"architecto\",
    \"label\": \"architecto\",
    \"obligatoire\": false,
    \"ordre\": 16,
    \"options\": [
        \"architecto\"
    ],
    \"jours_options\": [
        \"architecto\"
    ],
    \"mois_options\": [
        \"architecto\"
    ],
    \"annee_options\": [
        \"architecto\"
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/formulaires/architecto/champs/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "type_champ": "architecto",
    "label": "architecto",
    "obligatoire": false,
    "ordre": 16,
    "options": [
        "architecto"
    ],
    "jours_options": [
        "architecto"
    ],
    "mois_options": [
        "architecto"
    ],
    "annee_options": [
        "architecto"
    ]
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-internal-terra-v1-business-formulaires--fid--champs--cid-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Champ mis &agrave; jour&quot;,
    &quot;data&quot;: {
        &quot;id_champ_formulaire&quot;: &quot;uuid&quot;,
        &quot;label&quot;: &quot;Nom modifi&eacute;&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Champ introuvable&quot;
}</code>
 </pre>
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
      data-authed="1"
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
               value="architecto"
               data-component="url">
    <br>
<p>ID formulaire Example: <code>architecto</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>cid</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="cid"                data-endpoint="PUTapi-internal-terra-v1-business-formulaires--fid--champs--cid-"
               value="architecto"
               data-component="url">
    <br>
<p>ID champ Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>type_champ</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="type_champ"                data-endpoint="PUTapi-internal-terra-v1-business-formulaires--fid--champs--cid-"
               value="architecto"
               data-component="body">
    <br>
<p>Type du champ Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>label</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="label"                data-endpoint="PUTapi-internal-terra-v1-business-formulaires--fid--champs--cid-"
               value="architecto"
               data-component="body">
    <br>
<p>Libellé Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>obligatoire</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="PUTapi-internal-terra-v1-business-formulaires--fid--champs--cid-" style="display: none">
            <input type="radio" name="obligatoire"
                   value="true"
                   data-endpoint="PUTapi-internal-terra-v1-business-formulaires--fid--champs--cid-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-internal-terra-v1-business-formulaires--fid--champs--cid-" style="display: none">
            <input type="radio" name="obligatoire"
                   value="false"
                   data-endpoint="PUTapi-internal-terra-v1-business-formulaires--fid--champs--cid-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Champ obligatoire Example: <code>false</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>ordre</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="ordre"                data-endpoint="PUTapi-internal-terra-v1-business-formulaires--fid--champs--cid-"
               value="16"
               data-component="body">
    <br>
<p>Position Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>options</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="options[0]"                data-endpoint="PUTapi-internal-terra-v1-business-formulaires--fid--champs--cid-"
               data-component="body">
        <input type="text" style="display: none"
               name="options[1]"                data-endpoint="PUTapi-internal-terra-v1-business-formulaires--fid--champs--cid-"
               data-component="body">
    <br>
<p>Liste d’options</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>jours_options</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="jours_options[0]"                data-endpoint="PUTapi-internal-terra-v1-business-formulaires--fid--champs--cid-"
               data-component="body">
        <input type="text" style="display: none"
               name="jours_options[1]"                data-endpoint="PUTapi-internal-terra-v1-business-formulaires--fid--champs--cid-"
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>mois_options</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="mois_options[0]"                data-endpoint="PUTapi-internal-terra-v1-business-formulaires--fid--champs--cid-"
               data-component="body">
        <input type="text" style="display: none"
               name="mois_options[1]"                data-endpoint="PUTapi-internal-terra-v1-business-formulaires--fid--champs--cid-"
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>annee_options</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="annee_options[0]"                data-endpoint="PUTapi-internal-terra-v1-business-formulaires--fid--champs--cid-"
               data-component="body">
        <input type="text" style="display: none"
               name="annee_options[1]"                data-endpoint="PUTapi-internal-terra-v1-business-formulaires--fid--champs--cid-"
               data-component="body">
    <br>

        </div>
        </form>

                    <h2 id="business-champs-DELETEapi-internal-terra-v1-business-formulaires--fid--champs--cid-">Supprimer un champ</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-internal-terra-v1-business-formulaires--fid--champs--cid-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/internal/terra/v1/business/formulaires/architecto/champs/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/formulaires/architecto/champs/architecto"
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
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Champ supprim&eacute;&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Champ introuvable&quot;
}</code>
 </pre>
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
      data-authed="1"
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
               value="architecto"
               data-component="url">
    <br>
<p>ID formulaire Example: <code>architecto</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>cid</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="cid"                data-endpoint="DELETEapi-internal-terra-v1-business-formulaires--fid--champs--cid-"
               value="architecto"
               data-component="url">
    <br>
<p>ID champ Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="business-champs-PUTapi-internal-terra-v1-business-formulaires--fid--champs-ordre">Réordonner les champs d’un formulaire</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-internal-terra-v1-business-formulaires--fid--champs-ordre">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/internal/terra/v1/business/formulaires/architecto/champs/ordre" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"ordre\": [
        \"architecto\"
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/formulaires/architecto/champs/ordre"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "ordre": [
        "architecto"
    ]
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-internal-terra-v1-business-formulaires--fid--champs-ordre">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Ordre des champs mis &agrave; jour&quot;,
    &quot;data&quot;: [
        {
            &quot;id_champ_formulaire&quot;: &quot;uuid&quot;,
            &quot;ordre&quot;: 0
        }
    ]
}</code>
 </pre>
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
      data-authed="1"
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
               value="architecto"
               data-component="url">
    <br>
<p>ID formulaire Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>ordre</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
 &nbsp;
 &nbsp;
<br>
<p>Liste des champs avec leur position</p>
            </summary>
                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="ordre.0.id"                data-endpoint="PUTapi-internal-terra-v1-business-formulaires--fid--champs-ordre"
               value="architecto"
               data-component="body">
    <br>
<p>ID du champ Example: <code>architecto</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>position</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="ordre.0.position"                data-endpoint="PUTapi-internal-terra-v1-business-formulaires--fid--champs-ordre"
               value="16"
               data-component="body">
    <br>
<p>Nouvelle position Example: <code>16</code></p>
                    </div>
                                    </details>
        </div>
        </form>

                    <h2 id="business-champs-PUTapi-internal-terra-v1-business-champs--cid--parametres">Mettre à jour les paramètres d’un champ</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-internal-terra-v1-business-champs--cid--parametres">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/internal/terra/v1/business/champs/architecto/parametres" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"rendre_facultatif\": false,
    \"rendre_obligatoire\": false,
    \"gestion_appelite\": false
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/champs/architecto/parametres"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "rendre_facultatif": false,
    "rendre_obligatoire": false,
    "gestion_appelite": false
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-internal-terra-v1-business-champs--cid--parametres">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Param&egrave;tres du champ mis &agrave; jour&quot;,
    &quot;data&quot;: {
        &quot;champ_id&quot;: &quot;uuid&quot;,
        &quot;rendre_facultatif&quot;: false,
        &quot;rendre_obligatoire&quot;: true,
        &quot;gestion_appelite&quot;: false
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Champ introuvable&quot;
}</code>
 </pre>
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
      data-authed="1"
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
               value="architecto"
               data-component="url">
    <br>
<p>ID du champ Example: <code>architecto</code></p>
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
<p>Example: <code>false</code></p>
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

                <h1 id="business-formulaires">Business Formulaires</h1>

    

                                <h2 id="business-formulaires-GETapi-internal-terra-v1-business-missions--id--formulaires">Liste des formulaires d’une mission</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-internal-terra-v1-business-missions--id--formulaires">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/business/missions/architecto/formulaires" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/architecto/formulaires"
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
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: [
        {
            &quot;id_formulaire&quot;: &quot;uuid&quot;,
            &quot;nom&quot;: &quot;Formulaire principal&quot;,
            &quot;ordre&quot;: 0,
            &quot;champs&quot;: [
                {
                    &quot;id_champ_formulaire&quot;: &quot;uuid&quot;,
                    &quot;label&quot;: &quot;Nom&quot;,
                    &quot;type&quot;: &quot;text&quot;,
                    &quot;ordre&quot;: 0,
                    &quot;rendre_facultatif&quot;: false,
                    &quot;rendre_obligatoire&quot;: true,
                    &quot;gestion_appelite&quot;: false
                }
            ]
        }
    ]
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Mission introuvable&quot;
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
      data-authed="1"
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
               value="architecto"
               data-component="url">
    <br>
<p>ID de la mission Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="business-formulaires-POSTapi-internal-terra-v1-business-missions--id--formulaires">Créer un formulaire pour une mission</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-internal-terra-v1-business-missions--id--formulaires">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/business/missions/architecto/formulaires" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"nom\": \"Informations client\",
    \"ordre\": 0
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/architecto/formulaires"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nom": "Informations client",
    "ordre": 0
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-business-missions--id--formulaires">
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Formulaire cr&eacute;&eacute;&quot;,
    &quot;data&quot;: {
        &quot;id_formulaire&quot;: &quot;uuid&quot;,
        &quot;nom&quot;: &quot;Informations client&quot;,
        &quot;ordre&quot;: 0
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Mission introuvable&quot;
}</code>
 </pre>
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
      data-authed="1"
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
               value="architecto"
               data-component="url">
    <br>
<p>ID de la mission Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>nom</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="nom"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--formulaires"
               value="Informations client"
               data-component="body">
    <br>
<p>Nom du formulaire. Example: <code>Informations client</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>ordre</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="ordre"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--formulaires"
               value="0"
               data-component="body">
    <br>
<p>Ordre d'affichage. Example: <code>0</code></p>
        </div>
        </form>

                    <h2 id="business-formulaires-PUTapi-internal-terra-v1-business-missions--id--formulaires--fid-">Mettre à jour un formulaire</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-internal-terra-v1-business-missions--id--formulaires--fid-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/internal/terra/v1/business/missions/architecto/formulaires/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"nom\": \"architecto\",
    \"ordre\": 16
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/architecto/formulaires/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nom": "architecto",
    "ordre": 16
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-internal-terra-v1-business-missions--id--formulaires--fid-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Formulaire mis &agrave; jour&quot;,
    &quot;data&quot;: {
        &quot;id_formulaire&quot;: &quot;uuid&quot;,
        &quot;nom&quot;: &quot;Nouveau nom&quot;,
        &quot;ordre&quot;: 1
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Formulaire introuvable&quot;
}</code>
 </pre>
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
      data-authed="1"
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
               value="architecto"
               data-component="url">
    <br>
<p>ID mission Example: <code>architecto</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>fid</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="fid"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id--formulaires--fid-"
               value="architecto"
               data-component="url">
    <br>
<p>ID formulaire Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>nom</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="nom"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id--formulaires--fid-"
               value="architecto"
               data-component="body">
    <br>
<p>Nom du formulaire Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>ordre</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="ordre"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id--formulaires--fid-"
               value="16"
               data-component="body">
    <br>
<p>Ordre d'affichage Example: <code>16</code></p>
        </div>
        </form>

                    <h2 id="business-formulaires-DELETEapi-internal-terra-v1-business-missions--id--formulaires--fid-">Supprimer un formulaire</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-internal-terra-v1-business-missions--id--formulaires--fid-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/internal/terra/v1/business/missions/architecto/formulaires/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/architecto/formulaires/architecto"
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
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Formulaire supprim&eacute;&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Formulaire introuvable&quot;
}</code>
 </pre>
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
      data-authed="1"
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
               value="architecto"
               data-component="url">
    <br>
<p>ID mission Example: <code>architecto</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>fid</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="fid"                data-endpoint="DELETEapi-internal-terra-v1-business-missions--id--formulaires--fid-"
               value="architecto"
               data-component="url">
    <br>
<p>ID formulaire Example: <code>architecto</code></p>
            </div>
                    </form>

                <h1 id="business-mission-agents">Business Mission Agents</h1>

    

                                <h2 id="business-mission-agents-GETapi-internal-terra-v1-business-missions--id--agents">Liste des agents d’une mission</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-internal-terra-v1-business-missions--id--agents">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/business/missions/architecto/agents?statut=architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/architecto/agents"
);

const params = {
    "statut": "architecto",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

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
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: {
        &quot;data&quot;: [
            {
                &quot;id_agent&quot;: &quot;uuid&quot;,
                &quot;name_agent&quot;: &quot;Koffi&quot;,
                &quot;lastname_agent&quot;: &quot;Jean&quot;,
                &quot;statut_mission&quot;: &quot;actif&quot;,
                &quot;remuneration&quot;: 5000,
                &quot;objectif_agent&quot;: 50,
                &quot;nb_reponses&quot;: 30
            }
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Mission introuvable&quot;
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
      data-authed="1"
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
               value="architecto"
               data-component="url">
    <br>
<p>ID mission Example: <code>architecto</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>statut</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="statut"                data-endpoint="GETapi-internal-terra-v1-business-missions--id--agents"
               value="architecto"
               data-component="query">
    <br>
<p>Filtrer par statut (invite, accepte, refuse, actif) Example: <code>architecto</code></p>
            </div>
                </form>

                    <h2 id="business-mission-agents-POSTapi-internal-terra-v1-business-missions--id--agents-inviter">Inviter des agents à une mission</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-internal-terra-v1-business-missions--id--agents-inviter">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/business/missions/architecto/agents/inviter" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"agent_ids\": [
        \"architecto\"
    ],
    \"remuneration\": 4326.41688,
    \"objectif_agent\": 16
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/architecto/agents/inviter"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "agent_ids": [
        "architecto"
    ],
    "remuneration": 4326.41688,
    "objectif_agent": 16
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-business-missions--id--agents-inviter">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;5 agent(s) invit&eacute;(s). 2 d&eacute;j&agrave; dans la mission.&quot;
}</code>
 </pre>
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
      data-authed="1"
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
               value="architecto"
               data-component="url">
    <br>
<p>ID mission Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>agent_ids</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
 &nbsp;
 &nbsp;
<br>
<p>Liste des IDs agents</p>
            </summary>
                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>*</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="agent_ids.*"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--agents-inviter"
               value="architecto"
               data-component="body">
    <br>
<p>UUID agent Example: <code>architecto</code></p>
                    </div>
                                    </details>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>remuneration</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="remuneration"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--agents-inviter"
               value="4326.41688"
               data-component="body">
    <br>
<p>Montant par agent Example: <code>4326.41688</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>objectif_agent</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="objectif_agent"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--agents-inviter"
               value="16"
               data-component="body">
    <br>
<p>Objectif par agent Example: <code>16</code></p>
        </div>
        </form>

                    <h2 id="business-mission-agents-GETapi-internal-terra-v1-business-missions--id--agents--aid-">Détail d’un agent dans une mission</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-internal-terra-v1-business-missions--id--agents--aid-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/business/missions/architecto/agents/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/architecto/agents/architecto"
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
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: {
        &quot;id_agent&quot;: &quot;uuid&quot;,
        &quot;name_agent&quot;: &quot;Koffi&quot;,
        &quot;lastname_agent&quot;: &quot;Jean&quot;,
        &quot;email_agent&quot;: &quot;agent@mail.com&quot;,
        &quot;profession_agent&quot;: &quot;Commercial&quot;,
        &quot;name_city&quot;: &quot;Abidjan&quot;,
        &quot;name_country&quot;: &quot;C&ocirc;te d&#039;Ivoire&quot;,
        &quot;langues&quot;: [
            {
                &quot;name_langue&quot;: &quot;Fran&ccedil;ais&quot;
            }
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Agent introuvable dans cette mission&quot;
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
      data-authed="1"
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
               value="architecto"
               data-component="url">
    <br>
<p>ID mission Example: <code>architecto</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>aid</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="aid"                data-endpoint="GETapi-internal-terra-v1-business-missions--id--agents--aid-"
               value="architecto"
               data-component="url">
    <br>
<p>ID agent Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="business-mission-agents-DELETEapi-internal-terra-v1-business-missions--id--agents--aid-">Retirer un agent d’une mission</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-internal-terra-v1-business-missions--id--agents--aid-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/internal/terra/v1/business/missions/architecto/agents/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/architecto/agents/architecto"
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
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Agent retir&eacute; de la mission&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Impossible de retirer cet agent (actif ou inexistant)&quot;
}</code>
 </pre>
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
      data-authed="1"
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
               value="architecto"
               data-component="url">
    <br>
<p>ID mission Example: <code>architecto</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>aid</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="aid"                data-endpoint="DELETEapi-internal-terra-v1-business-missions--id--agents--aid-"
               value="architecto"
               data-component="url">
    <br>
<p>ID agent Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="business-mission-agents-PUTapi-internal-terra-v1-business-missions--id--agents--aid--objectif">Mettre à jour l’objectif d’un agent</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-internal-terra-v1-business-missions--id--agents--aid--objectif">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/internal/terra/v1/business/missions/architecto/agents/architecto/objectif" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"objectif_agent\": 16,
    \"remuneration\": 4326.41688
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/architecto/agents/architecto/objectif"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "objectif_agent": 16,
    "remuneration": 4326.41688
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-internal-terra-v1-business-missions--id--agents--aid--objectif">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Objectif mis &agrave; jour&quot;,
    &quot;data&quot;: {
        &quot;objectif_agent&quot;: 100,
        &quot;remuneration&quot;: 10000
    }
}</code>
 </pre>
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
      data-authed="1"
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
               value="architecto"
               data-component="url">
    <br>
<p>ID mission Example: <code>architecto</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>aid</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="aid"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id--agents--aid--objectif"
               value="architecto"
               data-component="url">
    <br>
<p>ID agent Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>objectif_agent</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="objectif_agent"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id--agents--aid--objectif"
               value="16"
               data-component="body">
    <br>
<p>Objectif de l’agent Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>remuneration</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="remuneration"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id--agents--aid--objectif"
               value="4326.41688"
               data-component="body">
    <br>
<p>Rémunération Example: <code>4326.41688</code></p>
        </div>
        </form>

                    <h2 id="business-mission-agents-GETapi-internal-terra-v1-business-missions--id--agents--aid--statistiques">Statistiques d’un agent dans une mission</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-internal-terra-v1-business-missions--id--agents--aid--statistiques">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/business/missions/architecto/agents/architecto/statistiques" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/architecto/agents/architecto/statistiques"
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
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: {
        &quot;agent_id&quot;: &quot;uuid&quot;,
        &quot;statut&quot;: &quot;actif&quot;,
        &quot;objectif_agent&quot;: 50,
        &quot;total_reponses&quot;: 40,
        &quot;reponses_validees&quot;: 30,
        &quot;reponses_rejetees&quot;: 10,
        &quot;progression&quot;: &quot;80%&quot;,
        &quot;stats_par_jour&quot;: [
            {
                &quot;date&quot;: &quot;2026-01-01&quot;,
                &quot;nb&quot;: 5
            }
        ]
    }
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
      data-authed="1"
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
               value="architecto"
               data-component="url">
    <br>
<p>ID mission Example: <code>architecto</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>aid</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="aid"                data-endpoint="GETapi-internal-terra-v1-business-missions--id--agents--aid--statistiques"
               value="architecto"
               data-component="url">
    <br>
<p>ID agent Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="business-mission-agents-GETapi-internal-terra-v1-business-missions--id--agents--aid--reponses">Liste des réponses d’un agent</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-internal-terra-v1-business-missions--id--agents--aid--reponses">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/business/missions/architecto/agents/architecto/reponses" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/architecto/agents/architecto/reponses"
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
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: {
        &quot;data&quot;: [
            {
                &quot;id_reponse&quot;: &quot;uuid&quot;,
                &quot;nom_formulaire&quot;: &quot;Formulaire client&quot;,
                &quot;statut&quot;: &quot;valide&quot;,
                &quot;submitted_at&quot;: &quot;2026-01-01&quot;
            }
        ]
    }
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
      data-authed="1"
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
               value="architecto"
               data-component="url">
    <br>
<p>ID mission Example: <code>architecto</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>aid</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="aid"                data-endpoint="GETapi-internal-terra-v1-business-missions--id--agents--aid--reponses"
               value="architecto"
               data-component="url">
    <br>
<p>ID agent Example: <code>architecto</code></p>
            </div>
                    </form>

                <h1 id="business-missions">Business Missions</h1>

    

                                <h2 id="business-missions-GETapi-internal-terra-v1-business-missions">Liste des missions du business</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-internal-terra-v1-business-missions">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/business/missions?statut=actif" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions"
);

const params = {
    "statut": "actif",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

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
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: {
        &quot;data&quot;: [
            {
                &quot;id_mission&quot;: &quot;uuid&quot;,
                &quot;nom_application&quot;: &quot;App X&quot;,
                &quot;type_mission&quot;: &quot;recensement&quot;,
                &quot;statut&quot;: &quot;actif&quot;,
                &quot;pays&quot;: &quot;C&ocirc;te d&#039;Ivoire&quot;,
                &quot;ville&quot;: &quot;Abidjan&quot;,
                &quot;commune&quot;: &quot;Cocody&quot;,
                &quot;nb_agents&quot;: 20,
                &quot;nb_reponses&quot;: 150
            }
        ]
    }
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
      data-authed="1"
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
                            <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>statut</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="statut"                data-endpoint="GETapi-internal-terra-v1-business-missions"
               value="actif"
               data-component="query">
    <br>
<p>Filtrer par statut (brouillon, actif, termine). Example: <code>actif</code></p>
            </div>
                </form>

                    <h2 id="business-missions-POSTapi-internal-terra-v1-business-missions">Créer une mission</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-internal-terra-v1-business-missions">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/business/missions" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"type_mission\": \"recensement\",
    \"cible\": \"architecto\",
    \"nom_application\": \"architecto\",
    \"logo_url\": \"http:\\/\\/www.bailey.biz\\/quos-velit-et-fugiat-sunt-nihil-accusantium-harum.html\",
    \"couleur_primaire\": \"architecto\",
    \"couleur_secondaire\": \"architecto\",
    \"dark_mode\": false,
    \"date_debut\": \"architecto\",
    \"date_fin\": \"architecto\",
    \"country_id\": \"architecto\",
    \"city_id\": \"architecto\",
    \"commune_id\": \"architecto\",
    \"objectif_nombre\": 16,
    \"objectif_duree\": 16,
    \"objectif_unite\": \"architecto\",
    \"methode_api\": false
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
    "type_mission": "recensement",
    "cible": "architecto",
    "nom_application": "architecto",
    "logo_url": "http:\/\/www.bailey.biz\/quos-velit-et-fugiat-sunt-nihil-accusantium-harum.html",
    "couleur_primaire": "architecto",
    "couleur_secondaire": "architecto",
    "dark_mode": false,
    "date_debut": "architecto",
    "date_fin": "architecto",
    "country_id": "architecto",
    "city_id": "architecto",
    "commune_id": "architecto",
    "objectif_nombre": 16,
    "objectif_duree": 16,
    "objectif_unite": "architecto",
    "methode_api": false
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-business-missions">
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Mission cr&eacute;&eacute;e en brouillon&quot;,
    &quot;data&quot;: {
        &quot;id_mission&quot;: &quot;uuid&quot;,
        &quot;statut&quot;: &quot;brouillon&quot;
    }
}</code>
 </pre>
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
      data-authed="1"
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
               value="recensement"
               data-component="body">
    <br>
<p>Type de mission. Example: <code>recensement</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>cible</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="cible"                data-endpoint="POSTapi-internal-terra-v1-business-missions"
               value="architecto"
               data-component="body">
    <br>
<p>(entreprises, personnes) Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>nom_application</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="nom_application"                data-endpoint="POSTapi-internal-terra-v1-business-missions"
               value="architecto"
               data-component="body">
    <br>
<p>Nom de l’application Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>logo_url</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="logo_url"                data-endpoint="POSTapi-internal-terra-v1-business-missions"
               value="http://www.bailey.biz/quos-velit-et-fugiat-sunt-nihil-accusantium-harum.html"
               data-component="body">
    <br>
<p>URL du logo Example: <code>http://www.bailey.biz/quos-velit-et-fugiat-sunt-nihil-accusantium-harum.html</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>couleur_primaire</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="couleur_primaire"                data-endpoint="POSTapi-internal-terra-v1-business-missions"
               value="architecto"
               data-component="body">
    <br>
<p>Code couleur HEX (#FFFFFF) Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>couleur_secondaire</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="couleur_secondaire"                data-endpoint="POSTapi-internal-terra-v1-business-missions"
               value="architecto"
               data-component="body">
    <br>
<p>Code couleur HEX (#000000) Example: <code>architecto</code></p>
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
<p>Mode sombre Example: <code>false</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>date_debut</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="date_debut"                data-endpoint="POSTapi-internal-terra-v1-business-missions"
               value="architecto"
               data-component="body">
    <br>
<p>Date début Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>date_fin</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="date_fin"                data-endpoint="POSTapi-internal-terra-v1-business-missions"
               value="architecto"
               data-component="body">
    <br>
<p>Date fin Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>country_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="country_id"                data-endpoint="POSTapi-internal-terra-v1-business-missions"
               value="architecto"
               data-component="body">
    <br>
<p>UUID pays Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>city_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="city_id"                data-endpoint="POSTapi-internal-terra-v1-business-missions"
               value="architecto"
               data-component="body">
    <br>
<p>UUID ville Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>commune_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="commune_id"                data-endpoint="POSTapi-internal-terra-v1-business-missions"
               value="architecto"
               data-component="body">
    <br>
<p>UUID commune Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>objectif_nombre</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="objectif_nombre"                data-endpoint="POSTapi-internal-terra-v1-business-missions"
               value="16"
               data-component="body">
    <br>
<p>Objectif nombre Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>objectif_duree</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="objectif_duree"                data-endpoint="POSTapi-internal-terra-v1-business-missions"
               value="16"
               data-component="body">
    <br>
<p>Durée Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>objectif_unite</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="objectif_unite"                data-endpoint="POSTapi-internal-terra-v1-business-missions"
               value="architecto"
               data-component="body">
    <br>
<p>(jours, mois) Example: <code>architecto</code></p>
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
<p>API externe Example: <code>false</code></p>
        </div>
        </form>

                    <h2 id="business-missions-GETapi-internal-terra-v1-business-missions--id-">Détail d’une mission</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-internal-terra-v1-business-missions--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/business/missions/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/architecto"
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
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: {
        &quot;id_mission&quot;: &quot;uuid&quot;,
        &quot;nom_application&quot;: &quot;App X&quot;,
        &quot;statut&quot;: &quot;actif&quot;,
        &quot;formulaires&quot;: [],
        &quot;plans&quot;: [],
        &quot;modes_paiement&quot;: [],
        &quot;nb_agents&quot;: 20,
        &quot;nb_reponses&quot;: 150
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Mission introuvable&quot;
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
      data-authed="1"
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
               value="architecto"
               data-component="url">
    <br>
<p>ID mission Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="business-missions-PUTapi-internal-terra-v1-business-missions--id-">Mettre à jour une mission</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-internal-terra-v1-business-missions--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/internal/terra/v1/business/missions/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"type_mission\": \"b\",
    \"cible\": \"entreprises\",
    \"nom_application\": \"n\",
    \"logo_url\": \"http:\\/\\/crooks.biz\\/et-fugiat-sunt-nihil-accusantium\",
    \"couleur_primaire\": \"nikhway\",
    \"couleur_secondaire\": \"kcmyuwp\",
    \"dark_mode\": true,
    \"date_debut\": \"2026-04-14T22:58:40\",
    \"date_fin\": \"2026-04-14T22:58:40\",
    \"country_id\": \"7212c28d-f9ab-3dd7-af8a-06584a0d4cb7\",
    \"city_id\": \"0a9446d3-4070-3757-8926-67a9d2adbc0e\",
    \"commune_id\": \"c68e0767-6220-31fb-a489-61093ff79529\",
    \"objectif_nombre\": 45,
    \"objectif_duree\": 75,
    \"objectif_unite\": \"jours\",
    \"methode_api\": true
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "type_mission": "b",
    "cible": "entreprises",
    "nom_application": "n",
    "logo_url": "http:\/\/crooks.biz\/et-fugiat-sunt-nihil-accusantium",
    "couleur_primaire": "nikhway",
    "couleur_secondaire": "kcmyuwp",
    "dark_mode": true,
    "date_debut": "2026-04-14T22:58:40",
    "date_fin": "2026-04-14T22:58:40",
    "country_id": "7212c28d-f9ab-3dd7-af8a-06584a0d4cb7",
    "city_id": "0a9446d3-4070-3757-8926-67a9d2adbc0e",
    "commune_id": "c68e0767-6220-31fb-a489-61093ff79529",
    "objectif_nombre": 45,
    "objectif_duree": 75,
    "objectif_unite": "jours",
    "methode_api": true
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-internal-terra-v1-business-missions--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Mission mise &agrave; jour&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Mission introuvable&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Impossible de modifier une mission termin&eacute;e&quot;
}</code>
 </pre>
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
      data-authed="1"
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
               value="architecto"
               data-component="url">
    <br>
<p>ID mission Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>type_mission</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="type_mission"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id-"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 50 characters. Example: <code>b</code></p>
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
               value="n"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>n</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>logo_url</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="logo_url"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id-"
               value="http://crooks.biz/et-fugiat-sunt-nihil-accusantium"
               data-component="body">
    <br>
<p>Must be a valid URL. Example: <code>http://crooks.biz/et-fugiat-sunt-nihil-accusantium</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>couleur_primaire</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="couleur_primaire"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id-"
               value="nikhway"
               data-component="body">
    <br>
<p>Must be 7 characters. Example: <code>nikhway</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>couleur_secondaire</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="couleur_secondaire"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id-"
               value="kcmyuwp"
               data-component="body">
    <br>
<p>Must be 7 characters. Example: <code>kcmyuwp</code></p>
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
               value="2026-04-14T22:58:40"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2026-04-14T22:58:40</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>date_fin</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="date_fin"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id-"
               value="2026-04-14T22:58:40"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2026-04-14T22:58:40</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>country_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="country_id"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id-"
               value="7212c28d-f9ab-3dd7-af8a-06584a0d4cb7"
               data-component="body">
    <br>
<p>Must be a valid UUID. The <code>id_country</code> of an existing record in the country table. Example: <code>7212c28d-f9ab-3dd7-af8a-06584a0d4cb7</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>city_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="city_id"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id-"
               value="0a9446d3-4070-3757-8926-67a9d2adbc0e"
               data-component="body">
    <br>
<p>Must be a valid UUID. The <code>id_city</code> of an existing record in the city table. Example: <code>0a9446d3-4070-3757-8926-67a9d2adbc0e</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>commune_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="commune_id"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id-"
               value="c68e0767-6220-31fb-a489-61093ff79529"
               data-component="body">
    <br>
<p>Must be a valid UUID. The <code>id_commune</code> of an existing record in the commune table. Example: <code>c68e0767-6220-31fb-a489-61093ff79529</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>objectif_nombre</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="objectif_nombre"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id-"
               value="45"
               data-component="body">
    <br>
<p>Must be at least 1. Example: <code>45</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>objectif_duree</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="objectif_duree"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id-"
               value="75"
               data-component="body">
    <br>
<p>Must be at least 1. Example: <code>75</code></p>
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
<p>Example: <code>true</code></p>
        </div>
        </form>

                    <h2 id="business-missions-DELETEapi-internal-terra-v1-business-missions--id-">Supprimer une mission (brouillon uniquement)</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-internal-terra-v1-business-missions--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/internal/terra/v1/business/missions/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/architecto"
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
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Mission supprim&eacute;e&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Mission introuvable ou non supprimable (brouillon seulement)&quot;
}</code>
 </pre>
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
      data-authed="1"
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
               value="architecto"
               data-component="url">
    <br>
<p>ID mission Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="business-missions-POSTapi-internal-terra-v1-business-missions--id--publier">Publier une mission</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-internal-terra-v1-business-missions--id--publier">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/business/missions/architecto/publier" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/architecto/publier"
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
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Mission publi&eacute;e et maintenant active&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Veuillez ajouter au moins un formulaire avant de publier&quot;
}</code>
 </pre>
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
      data-authed="1"
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
               value="architecto"
               data-component="url">
    <br>
<p>ID mission Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="business-missions-POSTapi-internal-terra-v1-business-missions--id--terminer">Terminer une mission</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-internal-terra-v1-business-missions--id--terminer">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/business/missions/architecto/terminer" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/architecto/terminer"
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
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Mission termin&eacute;e&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Mission introuvable ou non active&quot;
}</code>
 </pre>
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
      data-authed="1"
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
               value="architecto"
               data-component="url">
    <br>
<p>ID mission Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="business-missions-GETapi-internal-terra-v1-business-missions--id--statistiques">Statistiques d’une mission</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-internal-terra-v1-business-missions--id--statistiques">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/business/missions/architecto/statistiques" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/architecto/statistiques"
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
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: {
        &quot;mission_id&quot;: &quot;uuid&quot;,
        &quot;nom_application&quot;: &quot;App X&quot;,
        &quot;statut&quot;: &quot;actif&quot;,
        &quot;objectif_total&quot;: 500,
        &quot;reponses_soumises&quot;: 300,
        &quot;reponses_validees&quot;: 250,
        &quot;reponses_rejetees&quot;: 50,
        &quot;en_attente&quot;: 0,
        &quot;taux_completion&quot;: &quot;60%&quot;,
        &quot;agents_invites&quot;: 100,
        &quot;agents_actifs&quot;: 60,
        &quot;jours_restants&quot;: 10,
        &quot;top_agents&quot;: [
            {
                &quot;agent_id&quot;: &quot;uuid&quot;,
                &quot;name_agent&quot;: &quot;Koffi&quot;,
                &quot;lastname_agent&quot;: &quot;Jean&quot;,
                &quot;nb_reponses&quot;: 50
            }
        ],
        &quot;stats_7_jours&quot;: [
            {
                &quot;date&quot;: &quot;2026-01-01&quot;,
                &quot;nb&quot;: 40
            }
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Mission introuvable&quot;
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
      data-authed="1"
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
               value="architecto"
               data-component="url">
    <br>
<p>ID mission Example: <code>architecto</code></p>
            </div>
                    </form>

                <h1 id="business-paiements">Business Paiements</h1>

    

                                <h2 id="business-paiements-GETapi-internal-terra-v1-business-missions--id--modes-paiement">Lister les modes de paiement d&#039;une mission</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Récupère tous les moyens de paiement configurés pour une mission.</p>

<span id="example-requests-GETapi-internal-terra-v1-business-missions--id--modes-paiement">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/business/missions/8f3a-uuid/modes-paiement" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/8f3a-uuid/modes-paiement"
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
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: [
        {
            &quot;id_mode_paiemnt&quot;: &quot;uuid&quot;,
            &quot;provider&quot;: &quot;wave&quot;,
            &quot;actif&quot;: true
        }
    ]
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
      data-authed="1"
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
               value="8f3a-uuid"
               data-component="url">
    <br>
<p>ID de la mission. Example: <code>8f3a-uuid</code></p>
            </div>
                    </form>

                    <h2 id="business-paiements-POSTapi-internal-terra-v1-business-missions--id--modes-paiement">Ajouter un mode de paiement</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Permet d’ajouter un provider de paiement à une mission.</p>

<span id="example-requests-POSTapi-internal-terra-v1-business-missions--id--modes-paiement">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/business/missions/architecto/modes-paiement" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"provider\": \"wave. Enum: wave,orange,moov,mtn,visa\",
    \"actif\": true
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/architecto/modes-paiement"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "provider": "wave. Enum: wave,orange,moov,mtn,visa",
    "actif": true
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-business-missions--id--modes-paiement">
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Mode de paiement ajout&eacute;&quot;,
    &quot;data&quot;: {
        &quot;id_mode_paiemnt&quot;: &quot;uuid&quot;,
        &quot;provider&quot;: &quot;wave&quot;,
        &quot;actif&quot;: true
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Ce mode de paiement existe d&eacute;j&agrave;&quot;
}</code>
 </pre>
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
      data-authed="1"
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
               value="architecto"
               data-component="url">
    <br>
<p>ID de la mission Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>provider</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="provider"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--modes-paiement"
               value="wave. Enum: wave,orange,moov,mtn,visa"
               data-component="body">
    <br>
<p>Fournisseur de paiement. Example: <code>wave. Enum: wave,orange,moov,mtn,visa</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>actif</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-internal-terra-v1-business-missions--id--modes-paiement" style="display: none">
            <input type="radio" name="actif"
                   value="true"
                   data-endpoint="POSTapi-internal-terra-v1-business-missions--id--modes-paiement"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-internal-terra-v1-business-missions--id--modes-paiement" style="display: none">
            <input type="radio" name="actif"
                   value="false"
                   data-endpoint="POSTapi-internal-terra-v1-business-missions--id--modes-paiement"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Activer immédiatement le mode. Example: <code>true</code></p>
        </div>
        </form>

                    <h2 id="business-paiements-DELETEapi-internal-terra-v1-business-missions--id--modes-paiement--mid-">Supprimer un mode de paiement</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Supprime un provider de paiement d’une mission.</p>

<span id="example-requests-DELETEapi-internal-terra-v1-business-missions--id--modes-paiement--mid-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/internal/terra/v1/business/missions/architecto/modes-paiement/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/architecto/modes-paiement/architecto"
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
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Mode de paiement supprim&eacute;&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Mode de paiement introuvable&quot;
}</code>
 </pre>
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
      data-authed="1"
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
               value="architecto"
               data-component="url">
    <br>
<p>ID mission Example: <code>architecto</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>mid</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="mid"                data-endpoint="DELETEapi-internal-terra-v1-business-missions--id--modes-paiement--mid-"
               value="architecto"
               data-component="url">
    <br>
<p>ID mode de paiement Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="business-paiements-POSTapi-internal-terra-v1-business-missions--id--agents-payer-tous">Paiement groupé des agents</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Permet de payer tous les agents éligibles d'une mission en une seule opération.</p>

<span id="example-requests-POSTapi-internal-terra-v1-business-missions--id--agents-payer-tous">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/business/missions/architecto/agents/payer-tous" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"provider\": \"orange. Enum: wave,orange,mtn,moov,visa\",
    \"reference_paiement\": \"GROUP_TXN_001\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/architecto/agents/payer-tous"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "provider": "orange. Enum: wave,orange,mtn,moov,visa",
    "reference_paiement": "GROUP_TXN_001"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-business-missions--id--agents-payer-tous">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;3 agent(s) pay&eacute;(s). 1 ignor&eacute;(s).&quot;,
    &quot;data&quot;: {
        &quot;agents_payes&quot;: 3,
        &quot;agents_ignores&quot;: 1,
        &quot;montant_total&quot;: 15000
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Aucun agent &eacute;ligible au paiement&quot;
}</code>
 </pre>
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
      data-authed="1"
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
               value="architecto"
               data-component="url">
    <br>
<p>ID de la mission Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>provider</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="provider"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--agents-payer-tous"
               value="orange. Enum: wave,orange,mtn,moov,visa"
               data-component="body">
    <br>
<p>Provider de paiement. Example: <code>orange. Enum: wave,orange,mtn,moov,visa</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>reference_paiement</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="reference_paiement"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--agents-payer-tous"
               value="GROUP_TXN_001"
               data-component="body">
    <br>
<p>Référence de paiement globale. Example: <code>GROUP_TXN_001</code></p>
        </div>
        </form>

                    <h2 id="business-paiements-POSTapi-internal-terra-v1-business-missions--id--agents--aid--payer">Payer un agent pour une mission</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Permet d'effectuer un paiement individuel vers un agent et de créditer automatiquement son wallet.</p>

<span id="example-requests-POSTapi-internal-terra-v1-business-missions--id--agents--aid--payer">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/business/missions/architecto/agents/architecto/payer" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"montant\": 5000,
    \"provider\": \"wave. Enum: wave,orange,mtn,moov,visa\",
    \"reference_paiement\": \"TXN123456\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/architecto/agents/architecto/payer"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "montant": 5000,
    "provider": "wave. Enum: wave,orange,mtn,moov,visa",
    "reference_paiement": "TXN123456"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-business-missions--id--agents--aid--payer">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Paiement effectu&eacute; avec succ&egrave;s&quot;,
    &quot;data&quot;: {
        &quot;id_paiement&quot;: &quot;uuid&quot;,
        &quot;montant&quot;: 5000,
        &quot;statut&quot;: &quot;complete&quot;,
        &quot;provider&quot;: &quot;wave&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Agent introuvable dans cette mission&quot;
}</code>
 </pre>
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
      data-authed="1"
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
               value="architecto"
               data-component="url">
    <br>
<p>ID de la mission Example: <code>architecto</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>aid</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="aid"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--agents--aid--payer"
               value="architecto"
               data-component="url">
    <br>
<p>ID de l'agent Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>montant</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="montant"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--agents--aid--payer"
               value="5000"
               data-component="body">
    <br>
<p>Montant à payer. Example: <code>5000</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>provider</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="provider"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--agents--aid--payer"
               value="wave. Enum: wave,orange,mtn,moov,visa"
               data-component="body">
    <br>
<p>Provider de paiement. Example: <code>wave. Enum: wave,orange,mtn,moov,visa</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>reference_paiement</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="reference_paiement"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--agents--aid--payer"
               value="TXN123456"
               data-component="body">
    <br>
<p>Référence de transaction. Example: <code>TXN123456</code></p>
        </div>
        </form>

                    <h2 id="business-paiements-GETapi-internal-terra-v1-business-missions--id--paiements">Historique des paiements d&#039;une mission</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Retourne tous les paiements effectués pour une mission avec filtres optionnels.</p>

<span id="example-requests-GETapi-internal-terra-v1-business-missions--id--paiements">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/business/missions/architecto/paiements?statut=complete" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/architecto/paiements"
);

const params = {
    "statut": "complete",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

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
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: [
        {
            &quot;id_paiement&quot;: &quot;uuid&quot;,
            &quot;montant&quot;: 5000,
            &quot;statut&quot;: &quot;complete&quot;,
            &quot;provider&quot;: &quot;wave&quot;,
            &quot;agent&quot;: {
                &quot;name_agent&quot;: &quot;John&quot;,
                &quot;lastname_agent&quot;: &quot;Doe&quot;
            }
        }
    ],
    &quot;meta&quot;: {
        &quot;total_paye&quot;: 25000
    }
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
      data-authed="1"
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
               value="architecto"
               data-component="url">
    <br>
<p>ID de la mission Example: <code>architecto</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>statut</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="statut"                data-endpoint="GETapi-internal-terra-v1-business-missions--id--paiements"
               value="complete"
               data-component="query">
    <br>
<p>Filtrer par statut. Example: <code>complete</code></p>
            </div>
                </form>

                <h1 id="business-plans">Business Plans</h1>

    

                                <h2 id="business-plans-GETapi-internal-terra-v1-business-missions--id--plans">Lister les plans d&#039;une mission</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Récupère tous les plans tarifaires associés à une mission.</p>

<span id="example-requests-GETapi-internal-terra-v1-business-missions--id--plans">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/business/missions/8f3a-uuid/plans" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/8f3a-uuid/plans"
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
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: [
        {
            &quot;id_plan&quot;: &quot;uuid&quot;,
            &quot;montant&quot;: 5000,
            &quot;duree&quot;: 30,
            &quot;unite_duree&quot;: &quot;jours&quot;
        }
    ]
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
      data-authed="1"
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
               value="8f3a-uuid"
               data-component="url">
    <br>
<p>ID de la mission. Example: <code>8f3a-uuid</code></p>
            </div>
                    </form>

                    <h2 id="business-plans-POSTapi-internal-terra-v1-business-missions--id--plans">Créer un plan</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Permet d’ajouter un plan tarifaire à une mission.</p>

<span id="example-requests-POSTapi-internal-terra-v1-business-missions--id--plans">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/business/missions/architecto/plans" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"montant\": 10000,
    \"duree\": 30,
    \"unite_duree\": \"jours\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/architecto/plans"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "montant": 10000,
    "duree": 30,
    "unite_duree": "jours"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-business-missions--id--plans">
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Plan cr&eacute;&eacute;&quot;,
    &quot;data&quot;: {
        &quot;id_plan&quot;: &quot;uuid&quot;,
        &quot;montant&quot;: 10000,
        &quot;duree&quot;: 30,
        &quot;unite_duree&quot;: &quot;jours&quot;
    }
}</code>
 </pre>
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
      data-authed="1"
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
               value="architecto"
               data-component="url">
    <br>
<p>ID de la mission Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>montant</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="montant"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--plans"
               value="10000"
               data-component="body">
    <br>
<p>Montant du plan. Example: <code>10000</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>duree</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="duree"                data-endpoint="POSTapi-internal-terra-v1-business-missions--id--plans"
               value="30"
               data-component="body">
    <br>
<p>Durée. Example: <code>30</code></p>
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
<p>Unité de durée. Example: <code>jours</code></p>
        </div>
        </form>

                    <h2 id="business-plans-PUTapi-internal-terra-v1-business-missions--id--plans--pid-">Mettre à jour un plan</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Permet de modifier un plan existant.</p>

<span id="example-requests-PUTapi-internal-terra-v1-business-missions--id--plans--pid-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/internal/terra/v1/business/missions/architecto/plans/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"montant\": 15000,
    \"duree\": 60,
    \"unite_duree\": \"mois\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/architecto/plans/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "montant": 15000,
    "duree": 60,
    "unite_duree": "mois"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-internal-terra-v1-business-missions--id--plans--pid-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Plan mis &agrave; jour&quot;
}</code>
 </pre>
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
      data-authed="1"
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
               value="architecto"
               data-component="url">
    <br>
<p>ID mission Example: <code>architecto</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>pid</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="pid"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id--plans--pid-"
               value="architecto"
               data-component="url">
    <br>
<p>ID plan Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>montant</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="montant"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id--plans--pid-"
               value="15000"
               data-component="body">
    <br>
<p>Montant du plan. Example: <code>15000</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>duree</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="duree"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id--plans--pid-"
               value="60"
               data-component="body">
    <br>
<p>Durée. Example: <code>60</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>unite_duree</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="unite_duree"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id--plans--pid-"
               value="mois"
               data-component="body">
    <br>
<p>Unité de durée. Example: <code>mois</code></p>
        </div>
        </form>

                    <h2 id="business-plans-DELETEapi-internal-terra-v1-business-missions--id--plans--pid-">Supprimer un plan</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Supprime un plan associé à une mission.</p>

<span id="example-requests-DELETEapi-internal-terra-v1-business-missions--id--plans--pid-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/internal/terra/v1/business/missions/architecto/plans/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/architecto/plans/architecto"
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
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Plan supprim&eacute;&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Plan introuvable&quot;
}</code>
 </pre>
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
      data-authed="1"
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
               value="architecto"
               data-component="url">
    <br>
<p>ID mission Example: <code>architecto</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>pid</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="pid"                data-endpoint="DELETEapi-internal-terra-v1-business-missions--id--plans--pid-"
               value="architecto"
               data-component="url">
    <br>
<p>ID plan Example: <code>architecto</code></p>
            </div>
                    </form>

                <h1 id="business-profil">Business Profil</h1>

    

                                <h2 id="business-profil-GETapi-internal-terra-v1-business-me">Profil du business connecté</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
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
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: {
        &quot;id_business&quot;: &quot;uuid&quot;,
        &quot;name_business&quot;: &quot;Yapi&quot;,
        &quot;prenom_business&quot;: &quot;Theodore&quot;,
        &quot;phone_business&quot;: &quot;0700000000&quot;,
        &quot;email_business&quot;: &quot;yapi@mail.com&quot;,
        &quot;entreprise_business&quot;: &quot;YapiTech&quot;,
        &quot;email_entreprise_business&quot;: &quot;contact@yapitech.com&quot;,
        &quot;localisation_entreprise_business&quot;: &quot;Abidjan&quot;,
        &quot;description_business&quot;: &quot;Entreprise tech&quot;,
        &quot;status&quot;: &quot;active&quot;,
        &quot;name_city&quot;: &quot;Abidjan&quot;,
        &quot;name_country&quot;: &quot;C&ocirc;te d&#039;Ivoire&quot;,
        &quot;name_secteur&quot;: &quot;Technologie&quot;
    }
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
      data-authed="1"
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

                    <h2 id="business-profil-PUTapi-internal-terra-v1-business-me">Mettre à jour le profil business</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-internal-terra-v1-business-me">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/internal/terra/v1/business/me" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name_business\": \"architecto\",
    \"prenom_business\": \"architecto\",
    \"phone_business\": \"architecto\",
    \"localisation_entreprise_business\": \"architecto\",
    \"description_business\": \"architecto\",
    \"city_id\": \"architecto\",
    \"country_id\": \"architecto\",
    \"secteur_id\": \"architecto\"
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
    "name_business": "architecto",
    "prenom_business": "architecto",
    "phone_business": "architecto",
    "localisation_entreprise_business": "architecto",
    "description_business": "architecto",
    "city_id": "architecto",
    "country_id": "architecto",
    "secteur_id": "architecto"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-internal-terra-v1-business-me">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Profil mis &agrave; jour&quot;,
    &quot;data&quot;: {
        &quot;id_business&quot;: &quot;uuid&quot;,
        &quot;name_business&quot;: &quot;Yapi&quot;
    }
}</code>
 </pre>
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
      data-authed="1"
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
               value="architecto"
               data-component="body">
    <br>
<p>Nom Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>prenom_business</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="prenom_business"                data-endpoint="PUTapi-internal-terra-v1-business-me"
               value="architecto"
               data-component="body">
    <br>
<p>Prénom Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone_business</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone_business"                data-endpoint="PUTapi-internal-terra-v1-business-me"
               value="architecto"
               data-component="body">
    <br>
<p>Téléphone Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>localisation_entreprise_business</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="localisation_entreprise_business"                data-endpoint="PUTapi-internal-terra-v1-business-me"
               value="architecto"
               data-component="body">
    <br>
<p>Localisation Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description_business</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description_business"                data-endpoint="PUTapi-internal-terra-v1-business-me"
               value="architecto"
               data-component="body">
    <br>
<p>Description Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>city_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="city_id"                data-endpoint="PUTapi-internal-terra-v1-business-me"
               value="architecto"
               data-component="body">
    <br>
<p>UUID ville Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>country_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="country_id"                data-endpoint="PUTapi-internal-terra-v1-business-me"
               value="architecto"
               data-component="body">
    <br>
<p>UUID pays Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>secteur_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="secteur_id"                data-endpoint="PUTapi-internal-terra-v1-business-me"
               value="architecto"
               data-component="body">
    <br>
<p>UUID secteur Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="business-profil-GETapi-internal-terra-v1-business-profile">Profil complet du business</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
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
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: {
        &quot;id_business&quot;: &quot;uuid&quot;,
        &quot;name_business&quot;: &quot;Yapi&quot;,
        &quot;prenom_business&quot;: &quot;Theodore&quot;,
        &quot;phone_business&quot;: &quot;0700000000&quot;,
        &quot;email_business&quot;: &quot;yapi@mail.com&quot;,
        &quot;entreprise_business&quot;: &quot;YapiTech&quot;,
        &quot;email_entreprise_business&quot;: &quot;contact@yapitech.com&quot;,
        &quot;localisation_entreprise_business&quot;: &quot;Abidjan&quot;,
        &quot;description_business&quot;: &quot;Entreprise tech&quot;,
        &quot;status&quot;: &quot;active&quot;,
        &quot;created_at&quot;: &quot;2026-01-01 10:00:00&quot;,
        &quot;id_city&quot;: &quot;uuid&quot;,
        &quot;name_city&quot;: &quot;Abidjan&quot;,
        &quot;id_country&quot;: &quot;uuid&quot;,
        &quot;name_country&quot;: &quot;C&ocirc;te d&#039;Ivoire&quot;,
        &quot;id_secteur&quot;: &quot;uuid&quot;,
        &quot;name_secteur&quot;: &quot;Technologie&quot;,
        &quot;nb_missions&quot;: 10,
        &quot;missions_actives&quot;: 3
    }
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
      data-authed="1"
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

                    <h2 id="business-profil-PUTapi-internal-terra-v1-business-profile">Mettre à jour le profil business</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-internal-terra-v1-business-profile">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/internal/terra/v1/business/profile" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name_business\": \"architecto\",
    \"prenom_business\": \"architecto\",
    \"phone_business\": \"architecto\",
    \"localisation_entreprise_business\": \"architecto\",
    \"description_business\": \"architecto\",
    \"city_id\": \"architecto\",
    \"country_id\": \"architecto\",
    \"secteur_id\": \"architecto\"
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
    "name_business": "architecto",
    "prenom_business": "architecto",
    "phone_business": "architecto",
    "localisation_entreprise_business": "architecto",
    "description_business": "architecto",
    "city_id": "architecto",
    "country_id": "architecto",
    "secteur_id": "architecto"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-internal-terra-v1-business-profile">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Profil mis &agrave; jour&quot;,
    &quot;data&quot;: {
        &quot;id_business&quot;: &quot;uuid&quot;,
        &quot;name_business&quot;: &quot;Yapi&quot;,
        &quot;prenom_business&quot;: &quot;Theodore&quot;
    }
}</code>
 </pre>
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
      data-authed="1"
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
               value="architecto"
               data-component="body">
    <br>
<p>Nom du responsable Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>prenom_business</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="prenom_business"                data-endpoint="PUTapi-internal-terra-v1-business-profile"
               value="architecto"
               data-component="body">
    <br>
<p>Prénom du responsable Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone_business</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone_business"                data-endpoint="PUTapi-internal-terra-v1-business-profile"
               value="architecto"
               data-component="body">
    <br>
<p>Numéro de téléphone Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>localisation_entreprise_business</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="localisation_entreprise_business"                data-endpoint="PUTapi-internal-terra-v1-business-profile"
               value="architecto"
               data-component="body">
    <br>
<p>Localisation Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description_business</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description_business"                data-endpoint="PUTapi-internal-terra-v1-business-profile"
               value="architecto"
               data-component="body">
    <br>
<p>Description Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>city_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="city_id"                data-endpoint="PUTapi-internal-terra-v1-business-profile"
               value="architecto"
               data-component="body">
    <br>
<p>UUID de la ville Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>country_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="country_id"                data-endpoint="PUTapi-internal-terra-v1-business-profile"
               value="architecto"
               data-component="body">
    <br>
<p>UUID du pays Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>secteur_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="secteur_id"                data-endpoint="PUTapi-internal-terra-v1-business-profile"
               value="architecto"
               data-component="body">
    <br>
<p>UUID du secteur Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="business-profil-POSTapi-internal-terra-v1-business-profile-logo">Upload du logo business</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-internal-terra-v1-business-profile-logo">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/business/profile/logo" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "logo=@C:\Users\theod\AppData\Local\Temp\php62B9.tmp" </code></pre></div>


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
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Logo mis &agrave; jour&quot;,
    &quot;data&quot;: {
        &quot;logo_url&quot;: &quot;https://example.com/storage/business/logos/logo.png&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Fichier invalide&quot;
}</code>
 </pre>
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
      data-authed="1"
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
<p>Image (jpeg, png, jpg, svg, webp, max 2MB) Example: <code>C:\Users\theod\AppData\Local\Temp\php62B9.tmp</code></p>
        </div>
        </form>

                <h1 id="business-reponses">Business Réponses</h1>

    

                                <h2 id="business-reponses-GETapi-internal-terra-v1-business-missions--id--reponses-export">Exporter les réponses en CSV</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Télécharge toutes les réponses d'une mission au format CSV.</p>

<span id="example-requests-GETapi-internal-terra-v1-business-missions--id--reponses-export">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/business/missions/architecto/reponses/export" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/architecto/reponses/export"
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
            <p>Example response (200, Succès):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;file&quot;: &quot;reponses_mission.csv&quot;
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
      data-authed="1"
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
               value="architecto"
               data-component="url">
    <br>
<p>ID mission Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="business-reponses-GETapi-internal-terra-v1-business-missions--id--reponses">Lister les réponses d&#039;une mission</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Récupère toutes les réponses associées à une mission.</p>

<span id="example-requests-GETapi-internal-terra-v1-business-missions--id--reponses">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/business/missions/8f3a-uuid/reponses?statut=valide&amp;agent_id=uuid-agent&amp;formulaire_id=uuid-form" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/8f3a-uuid/reponses"
);

const params = {
    "statut": "valide",
    "agent_id": "uuid-agent",
    "formulaire_id": "uuid-form",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

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
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: {
        &quot;data&quot;: [
            {
                &quot;id_reponse&quot;: &quot;uuid&quot;,
                &quot;statut&quot;: &quot;valide&quot;,
                &quot;nom_formulaire&quot;: &quot;Enqu&ecirc;te terrain&quot;,
                &quot;name_agent&quot;: &quot;Yapi&quot;,
                &quot;lastname_agent&quot;: &quot;Theo&quot;
            }
        ]
    }
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
      data-authed="1"
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
               value="8f3a-uuid"
               data-component="url">
    <br>
<p>ID de la mission. Example: <code>8f3a-uuid</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>statut</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="statut"                data-endpoint="GETapi-internal-terra-v1-business-missions--id--reponses"
               value="valide"
               data-component="query">
    <br>
<p>Filtrer par statut. Example: <code>valide</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>agent_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="agent_id"                data-endpoint="GETapi-internal-terra-v1-business-missions--id--reponses"
               value="uuid-agent"
               data-component="query">
    <br>
<p>Filtrer par agent. Example: <code>uuid-agent</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>formulaire_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="formulaire_id"                data-endpoint="GETapi-internal-terra-v1-business-missions--id--reponses"
               value="uuid-form"
               data-component="query">
    <br>
<p>Filtrer par formulaire. Example: <code>uuid-form</code></p>
            </div>
                </form>

                    <h2 id="business-reponses-GETapi-internal-terra-v1-business-missions--id--reponses--rid-">Détail d&#039;une réponse</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-internal-terra-v1-business-missions--id--reponses--rid-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/business/missions/architecto/reponses/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/architecto/reponses/architecto"
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
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: {
        &quot;id_reponse&quot;: &quot;uuid&quot;,
        &quot;statut&quot;: &quot;soumis&quot;,
        &quot;donnees&quot;: {
            &quot;nom&quot;: &quot;Jean&quot;,
            &quot;age&quot;: 25
        }
    }
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
      data-authed="1"
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
               value="architecto"
               data-component="url">
    <br>
<p>ID mission Example: <code>architecto</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>rid</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="rid"                data-endpoint="GETapi-internal-terra-v1-business-missions--id--reponses--rid-"
               value="architecto"
               data-component="url">
    <br>
<p>ID réponse Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="business-reponses-PUTapi-internal-terra-v1-business-missions--id--reponses--rid--valider">Valider une réponse</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Passe une réponse au statut "valide".</p>

<span id="example-requests-PUTapi-internal-terra-v1-business-missions--id--reponses--rid--valider">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/internal/terra/v1/business/missions/architecto/reponses/architecto/valider" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/architecto/reponses/architecto/valider"
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
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;R&eacute;ponse valid&eacute;e&quot;
}</code>
 </pre>
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
      data-authed="1"
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
               value="architecto"
               data-component="url">
    <br>
<p>ID mission Example: <code>architecto</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>rid</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="rid"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id--reponses--rid--valider"
               value="architecto"
               data-component="url">
    <br>
<p>ID réponse Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="business-reponses-PUTapi-internal-terra-v1-business-missions--id--reponses--rid--rejeter">Rejeter une réponse</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Passe une réponse au statut "rejete".</p>

<span id="example-requests-PUTapi-internal-terra-v1-business-missions--id--reponses--rid--rejeter">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/internal/terra/v1/business/missions/architecto/reponses/architecto/rejeter" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"motif\": \"Données incorrectes\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/business/missions/architecto/reponses/architecto/rejeter"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "motif": "Données incorrectes"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-internal-terra-v1-business-missions--id--reponses--rid--rejeter">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;R&eacute;ponse rejet&eacute;e&quot;
}</code>
 </pre>
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
      data-authed="1"
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
               value="architecto"
               data-component="url">
    <br>
<p>ID mission Example: <code>architecto</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>rid</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="rid"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id--reponses--rid--rejeter"
               value="architecto"
               data-component="url">
    <br>
<p>ID réponse Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>motif</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="motif"                data-endpoint="PUTapi-internal-terra-v1-business-missions--id--reponses--rid--rejeter"
               value="Données incorrectes"
               data-component="body">
    <br>
<p>Motif du rejet. Example: <code>Données incorrectes</code></p>
        </div>
        </form>

                <h1 id="diplomes-agent">Diplômes Agent</h1>

    

                                <h2 id="diplomes-agent-GETapi-internal-terra-v1-agent-diplomes">Liste des diplômes de l’agent</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
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
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: [
        {
            &quot;id_photo_diplome&quot;: &quot;uuid&quot;,
            &quot;recto_diplome&quot;: &quot;agents/diplomes/recto.jpg&quot;,
            &quot;verso_diplome&quot;: &quot;agents/diplomes/verso.jpg&quot;,
            &quot;recto_url&quot;: &quot;http://localhost/storage/agents/diplomes/recto.jpg&quot;,
            &quot;verso_url&quot;: &quot;http://localhost/storage/agents/diplomes/verso.jpg&quot;,
            &quot;created_at&quot;: &quot;2026-01-01 10:00:00&quot;,
            &quot;updated_at&quot;: &quot;2026-01-01 10:00:00&quot;
        }
    ]
}</code>
 </pre>
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Non authentifi&eacute;&quot;
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
      data-authed="1"
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

                    <h2 id="diplomes-agent-POSTapi-internal-terra-v1-agent-diplomes">Ajouter un diplôme</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-internal-terra-v1-agent-diplomes">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/agent/diplomes" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "recto_diplome=@C:\Users\theod\AppData\Local\Temp\php6041.tmp" \
    --form "verso_diplome=@C:\Users\theod\AppData\Local\Temp\php6042.tmp" </code></pre></div>


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
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Dipl&ocirc;me ajout&eacute;&quot;,
    &quot;data&quot;: {
        &quot;id_photo_diplome&quot;: &quot;uuid&quot;,
        &quot;recto_diplome&quot;: &quot;agents/diplomes/recto.jpg&quot;,
        &quot;verso_diplome&quot;: &quot;agents/diplomes/verso.jpg&quot;,
        &quot;recto_url&quot;: &quot;http://localhost/storage/agents/diplomes/recto.jpg&quot;,
        &quot;verso_url&quot;: &quot;http://localhost/storage/agents/diplomes/verso.jpg&quot;,
        &quot;created_at&quot;: &quot;2026-01-01 10:00:00&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Erreur de validation&quot;
}</code>
 </pre>
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
      data-authed="1"
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
<p>Image ou PDF (jpeg, png, jpg, pdf, max 3MB) Example: <code>C:\Users\theod\AppData\Local\Temp\php6041.tmp</code></p>
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
<p>Image ou PDF (jpeg, png, jpg, pdf, max 3MB) Example: <code>C:\Users\theod\AppData\Local\Temp\php6042.tmp</code></p>
        </div>
        </form>

                    <h2 id="diplomes-agent-PUTapi-internal-terra-v1-agent-diplomes--id-">Modifier un diplôme</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-internal-terra-v1-agent-diplomes--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/internal/terra/v1/agent/diplomes/architecto" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "recto_diplome=@C:\Users\theod\AppData\Local\Temp\php6054.tmp" \
    --form "verso_diplome=@C:\Users\theod\AppData\Local\Temp\php6055.tmp" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/diplomes/architecto"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('recto_diplome', document.querySelector('input[name="recto_diplome"]').files[0]);
body.append('verso_diplome', document.querySelector('input[name="verso_diplome"]').files[0]);

fetch(url, {
    method: "PUT",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-internal-terra-v1-agent-diplomes--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Dipl&ocirc;me mis &agrave; jour&quot;,
    &quot;data&quot;: {
        &quot;id_photo_diplome&quot;: &quot;uuid&quot;,
        &quot;recto_diplome&quot;: &quot;agents/diplomes/new_recto.jpg&quot;,
        &quot;verso_diplome&quot;: &quot;agents/diplomes/new_verso.jpg&quot;,
        &quot;recto_url&quot;: &quot;http://localhost/storage/agents/diplomes/new_recto.jpg&quot;,
        &quot;verso_url&quot;: &quot;http://localhost/storage/agents/diplomes/new_verso.jpg&quot;,
        &quot;updated_at&quot;: &quot;2026-01-01 12:00:00&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Dipl&ocirc;me introuvable&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Aucun fichier fourni&quot;
}</code>
 </pre>
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
      data-authed="1"
      data-hasfiles="1"
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
               value="architecto"
               data-component="url">
    <br>
<p>ID du diplôme. Exemple: uuid Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>recto_diplome</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="recto_diplome"                data-endpoint="PUTapi-internal-terra-v1-agent-diplomes--id-"
               value=""
               data-component="body">
    <br>
<p>Image ou PDF Example: <code>C:\Users\theod\AppData\Local\Temp\php6054.tmp</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>verso_diplome</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="verso_diplome"                data-endpoint="PUTapi-internal-terra-v1-agent-diplomes--id-"
               value=""
               data-component="body">
    <br>
<p>Image ou PDF Example: <code>C:\Users\theod\AppData\Local\Temp\php6055.tmp</code></p>
        </div>
        </form>

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
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: {
        &quot;id_agent&quot;: &quot;uuid&quot;,
        &quot;genre_agent&quot;: &quot;M&quot;,
        &quot;name_agent&quot;: &quot;Yapi&quot;,
        &quot;lastname_agent&quot;: &quot;Theodore&quot;,
        &quot;profession_agent&quot;: &quot;D&eacute;veloppeur&quot;,
        &quot;naissance_agent&quot;: &quot;1995-01-01&quot;,
        &quot;email_agent&quot;: &quot;test@mail.com&quot;,
        &quot;phone_agent&quot;: &quot;0700000000&quot;,
        &quot;image_agent&quot;: &quot;/storage/agents/photos/photo.jpg&quot;,
        &quot;longitude_agent&quot;: &quot;-4.0083&quot;,
        &quot;latitude_agent&quot;: &quot;5.3599&quot;,
        &quot;experience_mission_agent&quot;: &quot;oui&quot;,
        &quot;permis_agent&quot;: &quot;oui&quot;,
        &quot;status&quot;: &quot;active&quot;,
        &quot;id_diplome&quot;: &quot;uuid&quot;,
        &quot;name_diplome&quot;: &quot;Master&quot;,
        &quot;id_etude&quot;: &quot;uuid&quot;,
        &quot;name_etude&quot;: &quot;Licence&quot;,
        &quot;id_city&quot;: &quot;uuid&quot;,
        &quot;name_city&quot;: &quot;Abidjan&quot;,
        &quot;id_country&quot;: &quot;uuid&quot;,
        &quot;name_country&quot;: &quot;C&ocirc;te d&#039;Ivoire&quot;,
        &quot;id_commune&quot;: &quot;uuid&quot;,
        &quot;name_commune&quot;: &quot;Yopougon&quot;,
        &quot;langues&quot;: [
            {
                &quot;id_langue_agent&quot;: &quot;uuid&quot;,
                &quot;id_langue&quot;: &quot;uuid&quot;,
                &quot;name_langue&quot;: &quot;Fran&ccedil;ais&quot;
            },
            {
                &quot;id_langue_agent&quot;: &quot;uuid&quot;,
                &quot;id_langue&quot;: &quot;uuid&quot;,
                &quot;name_langue&quot;: &quot;Anglais&quot;
            }
        ],
        &quot;pieces&quot;: [
            {
                &quot;id_piece&quot;: &quot;uuid&quot;,
                &quot;recto_piece&quot;: &quot;/storage/pieces/recto.jpg&quot;,
                &quot;verso_piece&quot;: &quot;/storage/pieces/verso.jpg&quot;,
                &quot;created_at&quot;: &quot;2026-01-01 10:00:00&quot;
            }
        ],
        &quot;permis&quot;: [
            {
                &quot;id_permis&quot;: &quot;uuid&quot;,
                &quot;recto_permis&quot;: &quot;/storage/permis/recto.jpg&quot;,
                &quot;verso_permis&quot;: &quot;/storage/permis/verso.jpg&quot;,
                &quot;created_at&quot;: &quot;2026-01-01 10:00:00&quot;
            }
        ],
        &quot;diplomes&quot;: [
            {
                &quot;id_photo_diplome&quot;: &quot;uuid&quot;,
                &quot;recto_diplome&quot;: &quot;/storage/diplomes/recto.jpg&quot;,
                &quot;verso_diplome&quot;: &quot;/storage/diplomes/verso.jpg&quot;,
                &quot;created_at&quot;: &quot;2026-01-01 10:00:00&quot;
            }
        ]
    }
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

                <h1 id="formulaires-mission">Formulaires Mission</h1>

    

                                <h2 id="formulaires-mission-GETapi-internal-terra-v1-agent-missions--id--formulaire">Récupérer les formulaires d’une mission</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-internal-terra-v1-agent-missions--id--formulaire">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/agent/missions/architecto/formulaire" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/missions/architecto/formulaire"
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
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: [
        {
            &quot;id_formulaire&quot;: &quot;uuid&quot;,
            &quot;nom&quot;: &quot;Formulaire 1&quot;,
            &quot;champs&quot;: [
                {
                    &quot;id_champ_formulaire&quot;: &quot;uuid&quot;,
                    &quot;type_champ&quot;: &quot;nom&quot;,
                    &quot;label&quot;: &quot;Nom&quot;,
                    &quot;obligatoire&quot;: true
                }
            ]
        }
    ]
}</code>
 </pre>
            <blockquote>
            <p>Example response (403):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Acc&egrave;s refus&eacute; &agrave; cette mission&quot;
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
      data-authed="1"
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
               value="architecto"
               data-component="url">
    <br>
<p>ID de la mission Example: <code>architecto</code></p>
            </div>
                    </form>

                <h1 id="invitations-agent">Invitations Agent</h1>

    

                                <h2 id="invitations-agent-GETapi-internal-terra-v1-agent-invitations">Liste des invitations de l’agent</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-internal-terra-v1-agent-invitations">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/agent/invitations?statut=invite" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/invitations"
);

const params = {
    "statut": "invite",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

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
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: [
        {
            &quot;id_mission_agent&quot;: &quot;uuid&quot;,
            &quot;statut&quot;: &quot;invite&quot;,
            &quot;remuneration&quot;: 5000,
            &quot;objectif_agent&quot;: 100,
            &quot;date_invitation&quot;: &quot;2026-01-01 10:00:00&quot;,
            &quot;id_mission&quot;: &quot;uuid&quot;,
            &quot;nom_application&quot;: &quot;App X&quot;,
            &quot;type_mission&quot;: &quot;recensement&quot;,
            &quot;logo_url&quot;: &quot;url&quot;,
            &quot;date_debut&quot;: &quot;2026-01-01&quot;,
            &quot;date_fin&quot;: &quot;2026-02-01&quot;,
            &quot;entreprise_business&quot;: &quot;Entreprise&quot;,
            &quot;name_business&quot;: &quot;Nom Responsable&quot;
        }
    ]
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
      data-authed="1"
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
                            <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>statut</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="statut"                data-endpoint="GETapi-internal-terra-v1-agent-invitations"
               value="invite"
               data-component="query">
    <br>
<p>Filtrer par statut (invite, accepte, refuse, actif). Example: <code>invite</code></p>
            </div>
                </form>

                    <h2 id="invitations-agent-GETapi-internal-terra-v1-agent-invitations--id-">Détails d’une invitation</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-internal-terra-v1-agent-invitations--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/agent/invitations/uuid" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/invitations/uuid"
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
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: {
        &quot;id_mission_agent&quot;: &quot;uuid&quot;,
        &quot;statut&quot;: &quot;invite&quot;,
        &quot;remuneration&quot;: 5000,
        &quot;objectif_agent&quot;: 100,
        &quot;mission_id&quot;: &quot;uuid&quot;,
        &quot;nom_application&quot;: &quot;App X&quot;,
        &quot;type_mission&quot;: &quot;recensement&quot;,
        &quot;cible&quot;: &quot;personnes&quot;,
        &quot;logo_url&quot;: &quot;url&quot;,
        &quot;couleur_primaire&quot;: &quot;#FFFFFF&quot;,
        &quot;dark_mode&quot;: false,
        &quot;date_debut&quot;: &quot;2026-01-01&quot;,
        &quot;date_fin&quot;: &quot;2026-02-01&quot;,
        &quot;statut_mission&quot;: &quot;actif&quot;,
        &quot;entreprise_business&quot;: &quot;Entreprise&quot;,
        &quot;name_business&quot;: &quot;Nom Responsable&quot;,
        &quot;description_business&quot;: &quot;Description&quot;,
        &quot;pays&quot;: &quot;C&ocirc;te d&#039;Ivoire&quot;,
        &quot;ville&quot;: &quot;Abidjan&quot;,
        &quot;commune&quot;: &quot;Cocody&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Invitation introuvable&quot;
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
      data-authed="1"
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
               value="uuid"
               data-component="url">
    <br>
<p>ID de l’invitation (mission_agent). Example: <code>uuid</code></p>
            </div>
                    </form>

                    <h2 id="invitations-agent-POSTapi-internal-terra-v1-agent-invitations--id--accepter">Accepter une invitation de mission</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-internal-terra-v1-agent-invitations--id--accepter">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/agent/invitations/uuid/accepter" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/invitations/uuid/accepter"
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
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Invitation accept&eacute;e. Vous faites maintenant partie de la mission.&quot;,
    &quot;data&quot;: {
        &quot;mission_id&quot;: &quot;uuid&quot;,
        &quot;statut&quot;: &quot;accepte&quot;,
        &quot;remuneration&quot;: 5000,
        &quot;objectif_agent&quot;: 100,
        &quot;date_acceptation&quot;: &quot;2026-01-01 10:00:00&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Invitation introuvable ou d&eacute;j&agrave; trait&eacute;e&quot;
}</code>
 </pre>
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
      data-authed="1"
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
               value="uuid"
               data-component="url">
    <br>
<p>ID de l’invitation (mission_agent). Example: <code>uuid</code></p>
            </div>
                    </form>

                    <h2 id="invitations-agent-POSTapi-internal-terra-v1-agent-invitations--id--refuser">Refuser une invitation de mission</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-internal-terra-v1-agent-invitations--id--refuser">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/agent/invitations/uuid/refuser" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/invitations/uuid/refuser"
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
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Invitation refus&eacute;e&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Invitation introuvable ou d&eacute;j&agrave; trait&eacute;e&quot;
}</code>
 </pre>
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
      data-authed="1"
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
               value="uuid"
               data-component="url">
    <br>
<p>ID de l’invitation (mission_agent). Example: <code>uuid</code></p>
            </div>
                    </form>

                <h1 id="langues-agent">Langues Agent</h1>

    

                                <h2 id="langues-agent-GETapi-internal-terra-v1-agent-langues">Liste des langues de l’agent</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
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
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: [
        {
            &quot;id_langue_agent&quot;: &quot;uuid&quot;,
            &quot;id_langue&quot;: &quot;uuid&quot;,
            &quot;name_langue&quot;: &quot;Fran&ccedil;ais&quot;
        },
        {
            &quot;id_langue_agent&quot;: &quot;uuid&quot;,
            &quot;id_langue&quot;: &quot;uuid&quot;,
            &quot;name_langue&quot;: &quot;Anglais&quot;
        }
    ]
}</code>
 </pre>
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Non authentifi&eacute;&quot;
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
      data-authed="1"
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

                    <h2 id="langues-agent-POSTapi-internal-terra-v1-agent-langues">Ajouter une langue au profil</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-internal-terra-v1-agent-langues">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/agent/langues" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"langue_id\": \"architecto\"
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
    "langue_id": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-agent-langues">
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Langue ajout&eacute;e&quot;,
    &quot;data&quot;: {
        &quot;id_langue_agent&quot;: &quot;uuid&quot;,
        &quot;id_langue&quot;: &quot;uuid&quot;,
        &quot;name_langue&quot;: &quot;Fran&ccedil;ais&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Cette langue est d&eacute;j&agrave; ajout&eacute;e &agrave; votre profil&quot;
}</code>
 </pre>
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
      data-authed="1"
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
<small>uuid</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="langue_id"                data-endpoint="POSTapi-internal-terra-v1-agent-langues"
               value="architecto"
               data-component="body">
    <br>
<p>ID de la langue. Exemple: uuid Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="langues-agent-DELETEapi-internal-terra-v1-agent-langues--id-">Supprimer une langue du profil</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-internal-terra-v1-agent-langues--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/internal/terra/v1/agent/langues/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/langues/architecto"
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
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Langue supprim&eacute;e&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Langue introuvable&quot;
}</code>
 </pre>
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
      data-authed="1"
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
               value="architecto"
               data-component="url">
    <br>
<p>ID de la relation langue-agent. Exemple: uuid Example: <code>architecto</code></p>
            </div>
                    </form>

                <h1 id="missions-agent">Missions Agent</h1>

    

                                <h2 id="missions-agent-GETapi-internal-terra-v1-agent-missions-mes-missions">Liste des missions de l’agent connecté</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
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
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: [
        {
            &quot;id_mission_agent&quot;: &quot;uuid&quot;,
            &quot;statut_agent&quot;: &quot;actif&quot;,
            &quot;remuneration&quot;: 5000,
            &quot;objectif_agent&quot;: 100,
            &quot;date_acceptation&quot;: &quot;2026-01-01&quot;,
            &quot;id_mission&quot;: &quot;uuid&quot;,
            &quot;nom_application&quot;: &quot;App X&quot;,
            &quot;type_mission&quot;: &quot;recensement&quot;,
            &quot;statut&quot;: &quot;actif&quot;,
            &quot;entreprise_business&quot;: &quot;Entreprise&quot;
        }
    ]
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
      data-authed="1"
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

                    <h2 id="missions-agent-GETapi-internal-terra-v1-agent-missions">Liste des missions actives disponibles</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-internal-terra-v1-agent-missions">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/agent/missions?type=recrutement&amp;country_id=architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/missions"
);

const params = {
    "type": "recrutement",
    "country_id": "architecto",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

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
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: {
        &quot;current_page&quot;: 1,
        &quot;data&quot;: [
            {
                &quot;id_mission&quot;: &quot;uuid&quot;,
                &quot;type_mission&quot;: &quot;recrutement&quot;,
                &quot;cible&quot;: &quot;personnes&quot;,
                &quot;nom_application&quot;: &quot;App X&quot;,
                &quot;logo_url&quot;: &quot;url&quot;,
                &quot;couleur_primaire&quot;: &quot;#FFFFFF&quot;,
                &quot;date_debut&quot;: &quot;2026-01-01&quot;,
                &quot;date_fin&quot;: &quot;2026-02-01&quot;,
                &quot;statut&quot;: &quot;actif&quot;,
                &quot;entreprise_business&quot;: &quot;Entreprise&quot;,
                &quot;pays&quot;: &quot;C&ocirc;te d&#039;Ivoire&quot;,
                &quot;ville&quot;: &quot;Abidjan&quot;,
                &quot;commune&quot;: &quot;Cocody&quot;
            }
        ]
    }
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
      data-authed="1"
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
                            <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="type"                data-endpoint="GETapi-internal-terra-v1-agent-missions"
               value="recrutement"
               data-component="query">
    <br>
<p>Filtrer par type de mission. Example: <code>recrutement</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>country_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="country_id"                data-endpoint="GETapi-internal-terra-v1-agent-missions"
               value="architecto"
               data-component="query">
    <br>
<p>Filtrer par pays (UUID) Example: <code>architecto</code></p>
            </div>
                </form>

                    <h2 id="missions-agent-GETapi-internal-terra-v1-agent-missions--id-">Détails d’une mission</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-internal-terra-v1-agent-missions--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/agent/missions/uuid" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/missions/uuid"
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
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: {
        &quot;id_mission&quot;: &quot;uuid&quot;,
        &quot;nom_application&quot;: &quot;App X&quot;,
        &quot;mon_statut&quot;: &quot;actif&quot;,
        &quot;formulaires&quot;: []
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Mission introuvable&quot;
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
      data-authed="1"
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
               value="uuid"
               data-component="url">
    <br>
<p>ID de la mission. Example: <code>uuid</code></p>
            </div>
                    </form>

                    <h2 id="missions-agent-POSTapi-internal-terra-v1-agent-missions--id--rejoindre">Rejoindre une mission</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-internal-terra-v1-agent-missions--id--rejoindre">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/agent/missions/architecto/rejoindre" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/missions/architecto/rejoindre"
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
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Demande soumise. En attente de validation.&quot;,
    &quot;data&quot;: {
        &quot;id_mission_agent&quot;: &quot;uuid&quot;,
        &quot;statut&quot;: &quot;invite&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Mission introuvable ou non active&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Vous &ecirc;tes d&eacute;j&agrave; dans cette mission&quot;
}</code>
 </pre>
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
      data-authed="1"
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
               value="architecto"
               data-component="url">
    <br>
<p>ID de la mission Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="missions-agent-GETapi-internal-terra-v1-agent-missions--id--statistiques">Statistiques de mission pour l’agent</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-internal-terra-v1-agent-missions--id--statistiques">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/agent/missions/architecto/statistiques" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/missions/architecto/statistiques"
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
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: {
        &quot;mission_id&quot;: &quot;uuid&quot;,
        &quot;statut_agent&quot;: &quot;actif&quot;,
        &quot;remuneration&quot;: 5000,
        &quot;objectif_agent&quot;: 100,
        &quot;total_reponses&quot;: 20,
        &quot;reponses_validees&quot;: 15,
        &quot;reponses_rejetees&quot;: 2,
        &quot;en_attente&quot;: 3,
        &quot;progression&quot;: &quot;20%&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (403):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Non inscrit &agrave; cette mission&quot;
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
      data-authed="1"
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
               value="architecto"
               data-component="url">
    <br>
<p>ID de la mission Example: <code>architecto</code></p>
            </div>
                    </form>

                <h1 id="permis-agent">Permis Agent</h1>

    

                                <h2 id="permis-agent-GETapi-internal-terra-v1-agent-permis">Liste des permis de conduire de l’agent</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
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
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: [
        {
            &quot;id_permis&quot;: &quot;uuid&quot;,
            &quot;recto_permis&quot;: &quot;agents/permis/recto.jpg&quot;,
            &quot;verso_permis&quot;: &quot;agents/permis/verso.jpg&quot;,
            &quot;recto_url&quot;: &quot;http://localhost/storage/agents/permis/recto.jpg&quot;,
            &quot;verso_url&quot;: &quot;http://localhost/storage/agents/permis/verso.jpg&quot;,
            &quot;created_at&quot;: &quot;2026-01-01 10:00:00&quot;,
            &quot;updated_at&quot;: &quot;2026-01-01 10:00:00&quot;
        }
    ]
}</code>
 </pre>
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Non authentifi&eacute;&quot;
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
      data-authed="1"
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

                    <h2 id="permis-agent-POSTapi-internal-terra-v1-agent-permis">Ajouter un permis de conduire</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-internal-terra-v1-agent-permis">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/agent/permis" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "recto_permis=@C:\Users\theod\AppData\Local\Temp\php5FEB.tmp" \
    --form "verso_permis=@C:\Users\theod\AppData\Local\Temp\php5FEC.tmp" </code></pre></div>


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
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Permis ajout&eacute;&quot;,
    &quot;data&quot;: {
        &quot;id_permis&quot;: &quot;uuid&quot;,
        &quot;recto_permis&quot;: &quot;agents/permis/recto.jpg&quot;,
        &quot;verso_permis&quot;: &quot;agents/permis/verso.jpg&quot;,
        &quot;recto_url&quot;: &quot;http://localhost/storage/agents/permis/recto.jpg&quot;,
        &quot;verso_url&quot;: &quot;http://localhost/storage/agents/permis/verso.jpg&quot;,
        &quot;created_at&quot;: &quot;2026-01-01 10:00:00&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Erreur de validation&quot;
}</code>
 </pre>
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
      data-authed="1"
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
<p>Image ou PDF (jpeg, png, jpg, pdf, max 3MB) Example: <code>C:\Users\theod\AppData\Local\Temp\php5FEB.tmp</code></p>
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
<p>Image ou PDF (jpeg, png, jpg, pdf, max 3MB) Example: <code>C:\Users\theod\AppData\Local\Temp\php5FEC.tmp</code></p>
        </div>
        </form>

                    <h2 id="permis-agent-PUTapi-internal-terra-v1-agent-permis--id-">Modifier un permis de conduire</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-internal-terra-v1-agent-permis--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/internal/terra/v1/agent/permis/architecto" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "recto_permis=@C:\Users\theod\AppData\Local\Temp\php600E.tmp" \
    --form "verso_permis=@C:\Users\theod\AppData\Local\Temp\php600F.tmp" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/permis/architecto"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('recto_permis', document.querySelector('input[name="recto_permis"]').files[0]);
body.append('verso_permis', document.querySelector('input[name="verso_permis"]').files[0]);

fetch(url, {
    method: "PUT",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-internal-terra-v1-agent-permis--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Permis mis &agrave; jour&quot;,
    &quot;data&quot;: {
        &quot;id_permis&quot;: &quot;uuid&quot;,
        &quot;recto_permis&quot;: &quot;agents/permis/new_recto.jpg&quot;,
        &quot;verso_permis&quot;: &quot;agents/permis/new_verso.jpg&quot;,
        &quot;recto_url&quot;: &quot;http://localhost/storage/agents/permis/new_recto.jpg&quot;,
        &quot;verso_url&quot;: &quot;http://localhost/storage/agents/permis/new_verso.jpg&quot;,
        &quot;updated_at&quot;: &quot;2026-01-01 12:00:00&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Permis introuvable&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Aucun fichier fourni&quot;
}</code>
 </pre>
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
      data-authed="1"
      data-hasfiles="1"
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
               value="architecto"
               data-component="url">
    <br>
<p>ID du permis. Exemple: uuid Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>recto_permis</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="recto_permis"                data-endpoint="PUTapi-internal-terra-v1-agent-permis--id-"
               value=""
               data-component="body">
    <br>
<p>Image ou PDF Example: <code>C:\Users\theod\AppData\Local\Temp\php600E.tmp</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>verso_permis</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="verso_permis"                data-endpoint="PUTapi-internal-terra-v1-agent-permis--id-"
               value=""
               data-component="body">
    <br>
<p>Image ou PDF Example: <code>C:\Users\theod\AppData\Local\Temp\php600F.tmp</code></p>
        </div>
        </form>

                <h1 id="pieces-agent">Pièces Agent</h1>

    

                                <h2 id="pieces-agent-GETapi-internal-terra-v1-agent-pieces">Liste des pièces d’identité de l’agent</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
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
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: [
        {
            &quot;id_piece&quot;: &quot;uuid&quot;,
            &quot;recto_piece&quot;: &quot;agents/pieces/recto.jpg&quot;,
            &quot;verso_piece&quot;: &quot;agents/pieces/verso.jpg&quot;,
            &quot;recto_url&quot;: &quot;http://localhost/storage/agents/pieces/recto.jpg&quot;,
            &quot;verso_url&quot;: &quot;http://localhost/storage/agents/pieces/verso.jpg&quot;,
            &quot;created_at&quot;: &quot;2026-01-01 10:00:00&quot;,
            &quot;updated_at&quot;: &quot;2026-01-01 10:00:00&quot;
        }
    ]
}</code>
 </pre>
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Non authentifi&eacute;&quot;
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
      data-authed="1"
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

                    <h2 id="pieces-agent-POSTapi-internal-terra-v1-agent-pieces">Ajouter une pièce d’identité</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-internal-terra-v1-agent-pieces">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/agent/pieces" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "recto_piece=@C:\Users\theod\AppData\Local\Temp\php5FA4.tmp" \
    --form "verso_piece=@C:\Users\theod\AppData\Local\Temp\php5FA5.tmp" </code></pre></div>


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
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Pi&egrave;ce d&#039;identit&eacute; ajout&eacute;e&quot;,
    &quot;data&quot;: {
        &quot;id_piece&quot;: &quot;uuid&quot;,
        &quot;recto_piece&quot;: &quot;agents/pieces/recto.jpg&quot;,
        &quot;verso_piece&quot;: &quot;agents/pieces/verso.jpg&quot;,
        &quot;recto_url&quot;: &quot;http://localhost/storage/agents/pieces/recto.jpg&quot;,
        &quot;verso_url&quot;: &quot;http://localhost/storage/agents/pieces/verso.jpg&quot;,
        &quot;created_at&quot;: &quot;2026-01-01 10:00:00&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Erreur de validation&quot;
}</code>
 </pre>
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
      data-authed="1"
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
<p>Image ou PDF (jpeg, png, jpg, pdf, max 3MB) Example: <code>C:\Users\theod\AppData\Local\Temp\php5FA4.tmp</code></p>
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
<p>Image ou PDF (jpeg, png, jpg, pdf, max 3MB) Example: <code>C:\Users\theod\AppData\Local\Temp\php5FA5.tmp</code></p>
        </div>
        </form>

                    <h2 id="pieces-agent-PUTapi-internal-terra-v1-agent-pieces--id-">Modifier une pièce d’identité</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-internal-terra-v1-agent-pieces--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/internal/terra/v1/agent/pieces/architecto" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "recto_piece=@C:\Users\theod\AppData\Local\Temp\php5FB8.tmp" \
    --form "verso_piece=@C:\Users\theod\AppData\Local\Temp\php5FB9.tmp" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/pieces/architecto"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('recto_piece', document.querySelector('input[name="recto_piece"]').files[0]);
body.append('verso_piece', document.querySelector('input[name="verso_piece"]').files[0]);

fetch(url, {
    method: "PUT",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-internal-terra-v1-agent-pieces--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Pi&egrave;ce mise &agrave; jour&quot;,
    &quot;data&quot;: {
        &quot;id_piece&quot;: &quot;uuid&quot;,
        &quot;recto_piece&quot;: &quot;agents/pieces/new_recto.jpg&quot;,
        &quot;verso_piece&quot;: &quot;agents/pieces/new_verso.jpg&quot;,
        &quot;recto_url&quot;: &quot;http://localhost/storage/agents/pieces/new_recto.jpg&quot;,
        &quot;verso_url&quot;: &quot;http://localhost/storage/agents/pieces/new_verso.jpg&quot;,
        &quot;updated_at&quot;: &quot;2026-01-01 12:00:00&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Pi&egrave;ce introuvable&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Aucun fichier fourni&quot;
}</code>
 </pre>
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
      data-authed="1"
      data-hasfiles="1"
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
               value="architecto"
               data-component="url">
    <br>
<p>ID de la pièce. Exemple: uuid Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>recto_piece</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="recto_piece"                data-endpoint="PUTapi-internal-terra-v1-agent-pieces--id-"
               value=""
               data-component="body">
    <br>
<p>Image ou PDF Example: <code>C:\Users\theod\AppData\Local\Temp\php5FB8.tmp</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>verso_piece</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="verso_piece"                data-endpoint="PUTapi-internal-terra-v1-agent-pieces--id-"
               value=""
               data-component="body">
    <br>
<p>Image ou PDF Example: <code>C:\Users\theod\AppData\Local\Temp\php5FB9.tmp</code></p>
        </div>
        </form>

                <h1 id="profil-agent">Profil Agent</h1>

    

                                <h2 id="profil-agent-PUTapi-internal-terra-v1-agent-profile">Mettre à jour le profil de l’agent</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-internal-terra-v1-agent-profile">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/internal/terra/v1/agent/profile" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"genre_agent\": \"architecto\",
    \"name_agent\": \"architecto\",
    \"lastname_agent\": \"architecto\",
    \"profession_agent\": \"architecto\",
    \"naissance_agent\": \"architecto\",
    \"phone_agent\": \"architecto\",
    \"longitude_agent\": \"architecto\",
    \"latitude_agent\": \"architecto\",
    \"experience_mission_agent\": \"architecto\",
    \"permis_agent\": \"architecto\",
    \"city_id\": \"architecto\",
    \"country_id\": \"architecto\",
    \"commune_id\": \"architecto\",
    \"diplome_id\": \"architecto\",
    \"etude_id\": \"architecto\"
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
    "genre_agent": "architecto",
    "name_agent": "architecto",
    "lastname_agent": "architecto",
    "profession_agent": "architecto",
    "naissance_agent": "architecto",
    "phone_agent": "architecto",
    "longitude_agent": "architecto",
    "latitude_agent": "architecto",
    "experience_mission_agent": "architecto",
    "permis_agent": "architecto",
    "city_id": "architecto",
    "country_id": "architecto",
    "commune_id": "architecto",
    "diplome_id": "architecto",
    "etude_id": "architecto"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-internal-terra-v1-agent-profile">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Profil mis &agrave; jour avec succ&egrave;s&quot;,
    &quot;data&quot;: {
        &quot;id_agent&quot;: &quot;uuid&quot;,
        &quot;name_agent&quot;: &quot;Yapi&quot;,
        &quot;lastname_agent&quot;: &quot;Theodore&quot;,
        &quot;phone_agent&quot;: &quot;0700000000&quot;
    }
}</code>
 </pre>
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
      data-authed="1"
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
               value="architecto"
               data-component="body">
    <br>
<p>Exemple: M Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name_agent"                data-endpoint="PUTapi-internal-terra-v1-agent-profile"
               value="architecto"
               data-component="body">
    <br>
<p>Exemple: Yapi Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>lastname_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="lastname_agent"                data-endpoint="PUTapi-internal-terra-v1-agent-profile"
               value="architecto"
               data-component="body">
    <br>
<p>Exemple: Theodore Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>profession_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="profession_agent"                data-endpoint="PUTapi-internal-terra-v1-agent-profile"
               value="architecto"
               data-component="body">
    <br>
<p>Exemple: Développeur Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>naissance_agent</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="naissance_agent"                data-endpoint="PUTapi-internal-terra-v1-agent-profile"
               value="architecto"
               data-component="body">
    <br>
<p>Exemple: 1995-01-01 Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone_agent"                data-endpoint="PUTapi-internal-terra-v1-agent-profile"
               value="architecto"
               data-component="body">
    <br>
<p>Exemple: 0700000000 Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>longitude_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="longitude_agent"                data-endpoint="PUTapi-internal-terra-v1-agent-profile"
               value="architecto"
               data-component="body">
    <br>
<p>nullable Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>latitude_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="latitude_agent"                data-endpoint="PUTapi-internal-terra-v1-agent-profile"
               value="architecto"
               data-component="body">
    <br>
<p>nullable Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>experience_mission_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="experience_mission_agent"                data-endpoint="PUTapi-internal-terra-v1-agent-profile"
               value="architecto"
               data-component="body">
    <br>
<p>oui ou non Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>permis_agent</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="permis_agent"                data-endpoint="PUTapi-internal-terra-v1-agent-profile"
               value="architecto"
               data-component="body">
    <br>
<p>oui ou non Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>city_id</code></b>&nbsp;&nbsp;
<small>uuid</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="city_id"                data-endpoint="PUTapi-internal-terra-v1-agent-profile"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>country_id</code></b>&nbsp;&nbsp;
<small>uuid</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="country_id"                data-endpoint="PUTapi-internal-terra-v1-agent-profile"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>commune_id</code></b>&nbsp;&nbsp;
<small>uuid</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="commune_id"                data-endpoint="PUTapi-internal-terra-v1-agent-profile"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>diplome_id</code></b>&nbsp;&nbsp;
<small>uuid</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="diplome_id"                data-endpoint="PUTapi-internal-terra-v1-agent-profile"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>etude_id</code></b>&nbsp;&nbsp;
<small>uuid</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="etude_id"                data-endpoint="PUTapi-internal-terra-v1-agent-profile"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="profil-agent-POSTapi-internal-terra-v1-agent-profile-image">Upload photo de profil</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-internal-terra-v1-agent-profile-image">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/agent/profile/image" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "image=@C:\Users\theod\AppData\Local\Temp\php5F62.tmp" </code></pre></div>


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
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Photo mise &agrave; jour&quot;,
    &quot;data&quot;: {
        &quot;image_agent&quot;: &quot;http://localhost/storage/agents/photos/photo.jpg&quot;
    }
}</code>
 </pre>
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
      data-authed="1"
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
<p>Image (jpeg, png, jpg, webp, max 2MB) Example: <code>C:\Users\theod\AppData\Local\Temp\php5F62.tmp</code></p>
        </div>
        </form>

                <h1 id="referentiels">Référentiels</h1>

    

                                <h2 id="referentiels-GETapi-internal-terra-v1-referentiels-pays">Liste des pays</h2>

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
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: [
        {
            &quot;id_country&quot;: &quot;d8d79211-37a6-11f1-8ff3-089204256ed6&quot;,
            &quot;name&quot;: &quot;C&ocirc;te d&#039;Ivoire&quot;,
            &quot;image&quot;: &quot;&quot;,
            &quot;status&quot;: &quot;active&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        }
    ]
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

                    <h2 id="referentiels-GETapi-internal-terra-v1-referentiels-pays--id--villes">Liste des villes par pays</h2>

<p>
</p>



<span id="example-requests-GETapi-internal-terra-v1-referentiels-pays--id--villes">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/referentiels/pays/architecto/villes" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/referentiels/pays/architecto/villes"
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
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: [
        {
            &quot;id_city&quot;: &quot;b3f1c2a4-1234-5678-9101-abcdef123456&quot;,
            &quot;name_city&quot;: &quot;Abidjan&quot;,
            &quot;status&quot;: &quot;active&quot;,
            &quot;country_id&quot;: &quot;1&quot;,
            &quot;created_at&quot;: &quot;2026-01-01 10:00:00&quot;,
            &quot;updated_at&quot;: &quot;2026-01-01 10:00:00&quot;
        }
    ]
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

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
               value="architecto"
               data-component="url">
    <br>
<p>ID du pays. Exemple: 1 Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="referentiels-GETapi-internal-terra-v1-referentiels-villes--id--communes">Liste des communes par ville</h2>

<p>
</p>



<span id="example-requests-GETapi-internal-terra-v1-referentiels-villes--id--communes">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/referentiels/villes/architecto/communes" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/referentiels/villes/architecto/communes"
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
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: [
        {
            &quot;id_commune&quot;: &quot;a1b2c3d4-5678-9101-abcdef123456&quot;,
            &quot;name_commune&quot;: &quot;Yopougon&quot;,
            &quot;status&quot;: &quot;active&quot;,
            &quot;city_id&quot;: &quot;b3f1c2a4-1234&quot;,
            &quot;country_id&quot;: &quot;1&quot;,
            &quot;created_at&quot;: &quot;2026-01-01 10:00:00&quot;,
            &quot;updated_at&quot;: &quot;2026-01-01 10:00:00&quot;
        }
    ]
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

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
               value="architecto"
               data-component="url">
    <br>
<p>ID de la ville. Exemple: b3f1c2a4-1234 Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="referentiels-GETapi-internal-terra-v1-referentiels-etudes">Liste des niveaux d&#039;étude</h2>

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
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: [
        {
            &quot;id_etude&quot;: &quot;1111-2222-3333&quot;,
            &quot;name_etude&quot;: &quot;Licence&quot;,
            &quot;status&quot;: &quot;active&quot;,
            &quot;created_at&quot;: &quot;2026-01-01 10:00:00&quot;,
            &quot;updated_at&quot;: &quot;2026-01-01 10:00:00&quot;
        }
    ]
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

                    <h2 id="referentiels-GETapi-internal-terra-v1-referentiels-diplomes">Liste des diplômes</h2>

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
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: [
        {
            &quot;id_diplome&quot;: &quot;1111-2222-3333&quot;,
            &quot;name_diplome&quot;: &quot;Master&quot;,
            &quot;status&quot;: &quot;active&quot;,
            &quot;created_at&quot;: &quot;2026-01-01 10:00:00&quot;,
            &quot;updated_at&quot;: &quot;2026-01-01 10:00:00&quot;
        }
    ]
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

                    <h2 id="referentiels-GETapi-internal-terra-v1-referentiels-langues">Liste des langues</h2>

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
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: [
        {
            &quot;id_langue&quot;: &quot;1111-2222-3333&quot;,
            &quot;name_langue&quot;: &quot;Fran&ccedil;ais&quot;,
            &quot;status&quot;: &quot;active&quot;,
            &quot;created_at&quot;: &quot;2026-01-01 10:00:00&quot;,
            &quot;updated_at&quot;: &quot;2026-01-01 10:00:00&quot;
        }
    ]
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

                    <h2 id="referentiels-GETapi-internal-terra-v1-referentiels-secteurs">Liste des secteurs d&#039;activité</h2>

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
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: [
        {
            &quot;id_secteur&quot;: &quot;1111-2222-3333&quot;,
            &quot;name_secteur&quot;: &quot;Informatique&quot;,
            &quot;status&quot;: &quot;active&quot;,
            &quot;created_at&quot;: &quot;2026-01-01 10:00:00&quot;,
            &quot;updated_at&quot;: &quot;2026-01-01 10:00:00&quot;
        }
    ]
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

                <h1 id="reponses-agent">Réponses Agent</h1>

    

                                <h2 id="reponses-agent-POSTapi-internal-terra-v1-agent-missions--id--formulaire-soumettre">Soumettre une réponse à un formulaire</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-internal-terra-v1-agent-missions--id--formulaire-soumettre">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/agent/missions/architecto/formulaire/soumettre" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"formulaire_id\": \"architecto\",
    \"donnees\": [
        \"architecto\"
    ],
    \"longitude\": \"architecto\",
    \"latitude\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/missions/architecto/formulaire/soumettre"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "formulaire_id": "architecto",
    "donnees": [
        "architecto"
    ],
    "longitude": "architecto",
    "latitude": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-agent-missions--id--formulaire-soumettre">
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;R&eacute;ponse soumise avec succ&egrave;s&quot;,
    &quot;data&quot;: {
        &quot;id_reponse&quot;: &quot;uuid&quot;,
        &quot;statut&quot;: &quot;soumis&quot;,
        &quot;submitted_at&quot;: &quot;2026-01-01 10:00:00&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (403):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Acc&egrave;s refus&eacute; &agrave; cette mission&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Formulaire invalide pour cette mission&quot;
}</code>
 </pre>
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
      data-authed="1"
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
               value="architecto"
               data-component="url">
    <br>
<p>ID de la mission Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>formulaire_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="formulaire_id"                data-endpoint="POSTapi-internal-terra-v1-agent-missions--id--formulaire-soumettre"
               value="architecto"
               data-component="body">
    <br>
<p>UUID du formulaire Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>donnees</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="donnees[0]"                data-endpoint="POSTapi-internal-terra-v1-agent-missions--id--formulaire-soumettre"
               data-component="body">
        <input type="text" style="display: none"
               name="donnees[1]"                data-endpoint="POSTapi-internal-terra-v1-agent-missions--id--formulaire-soumettre"
               data-component="body">
    <br>
<p>Données du formulaire</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>longitude</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="longitude"                data-endpoint="POSTapi-internal-terra-v1-agent-missions--id--formulaire-soumettre"
               value="architecto"
               data-component="body">
    <br>
<p>Coordonnée GPS Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>latitude</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="latitude"                data-endpoint="POSTapi-internal-terra-v1-agent-missions--id--formulaire-soumettre"
               value="architecto"
               data-component="body">
    <br>
<p>Coordonnée GPS Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="reponses-agent-GETapi-internal-terra-v1-agent-missions--id--mes-reponses">Historique des réponses de l’agent sur une mission</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-internal-terra-v1-agent-missions--id--mes-reponses">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/agent/missions/architecto/mes-reponses" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/missions/architecto/mes-reponses"
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
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: {
        &quot;data&quot;: [
            {
                &quot;id_reponse&quot;: &quot;uuid&quot;,
                &quot;nom_formulaire&quot;: &quot;Formulaire 1&quot;,
                &quot;statut&quot;: &quot;soumis&quot;,
                &quot;submitted_at&quot;: &quot;2026-01-01 10:00:00&quot;
            }
        ]
    }
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
      data-authed="1"
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
               value="architecto"
               data-component="url">
    <br>
<p>ID de la mission Example: <code>architecto</code></p>
            </div>
                    </form>

                <h1 id="statistiques">Statistiques</h1>

    

                                <h2 id="statistiques-GETapi-internal-terra-v1-statistiques-dashboard">Dashboard global des statistiques</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Retourne les statistiques globales de la plateforme.</p>

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
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;missions_total&quot;: 120,
    &quot;missions_actives&quot;: 45,
    &quot;reponses_total&quot;: 5600,
    &quot;reponses_aujourd_hui&quot;: 120,
    &quot;agents_total&quot;: 300,
    &quot;missions_recentes&quot;: [],
    &quot;performance_mensuelle&quot;: []
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
      data-authed="1"
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

                    <h2 id="statistiques-GETapi-internal-terra-v1-statistiques-mission--missionId-">Statistiques d&#039;une mission</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Analyse complète des performances d'une mission spécifique.</p>

<span id="example-requests-GETapi-internal-terra-v1-statistiques-mission--missionId-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/statistiques/mission/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/statistiques/mission/architecto"
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
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;mission&quot;: {},
    &quot;reponses_total&quot;: 250,
    &quot;objectif_atteint&quot;: 75.5,
    &quot;progression_par_jour&quot;: [],
    &quot;top_agents&quot;: []
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Mission not found&quot;
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
      data-authed="1"
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
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="missionId"                data-endpoint="GETapi-internal-terra-v1-statistiques-mission--missionId-"
               value="architecto"
               data-component="url">
    <br>
<p>ID de la mission Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="statistiques-GETapi-internal-terra-v1-statistiques-agent--agentId-">Statistiques d&#039;un agent</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Analyse des performances individuelles d’un agent.</p>

<span id="example-requests-GETapi-internal-terra-v1-statistiques-agent--agentId-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/statistiques/agent/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/statistiques/agent/architecto"
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
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;agent&quot;: {},
    &quot;reponses_total&quot;: 120,
    &quot;reponses_validees&quot;: 100,
    &quot;missions_actives&quot;: 5,
    &quot;performance_7_jours&quot;: []
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
      data-authed="1"
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
               value="architecto"
               data-component="url">
    <br>
<p>ID de l'agent Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="statistiques-GETapi-internal-terra-v1-statistiques-performance">Analyse de performance globale</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Fournit une vue globale des performances de la plateforme.</p>

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
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;missions_par_type&quot;: [],
    &quot;reponses_par_statut&quot;: [],
    &quot;taux_completion&quot;: 85.4
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
      data-authed="1"
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

                <h1 id="wallet-agent">Wallet Agent</h1>

    

                                <h2 id="wallet-agent-GETapi-internal-terra-v1-agent-wallet">Informations du portefeuille agent</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
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
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: {
        &quot;id_wallet&quot;: &quot;uuid&quot;,
        &quot;solde&quot;: 15000,
        &quot;devise&quot;: &quot;XOF&quot;,
        &quot;total_gagne&quot;: 50000,
        &quot;total_retire&quot;: 20000
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Portefeuille introuvable&quot;
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
      data-authed="1"
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

                    <h2 id="wallet-agent-GETapi-internal-terra-v1-agent-wallet-transactions">Liste des transactions du portefeuille</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
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
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: {
        &quot;data&quot;: [
            {
                &quot;id_transaction&quot;: &quot;uuid&quot;,
                &quot;type&quot;: &quot;credit&quot;,
                &quot;montant&quot;: 5000,
                &quot;statut&quot;: &quot;complete&quot;,
                &quot;description&quot;: &quot;Gain mission&quot;,
                &quot;nom_application&quot;: &quot;App X&quot;,
                &quot;created_at&quot;: &quot;2026-01-01 10:00:00&quot;
            }
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Portefeuille introuvable&quot;
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
      data-authed="1"
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

                    <h2 id="wallet-agent-GETapi-internal-terra-v1-agent-wallet-transactions--id-">Détail d’une transaction</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-internal-terra-v1-agent-wallet-transactions--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/agent/wallet/transactions/uuid" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/wallet/transactions/uuid"
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
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: {
        &quot;id_transaction&quot;: &quot;uuid&quot;,
        &quot;type&quot;: &quot;credit&quot;,
        &quot;montant&quot;: 5000,
        &quot;statut&quot;: &quot;complete&quot;,
        &quot;description&quot;: &quot;Gain mission&quot;,
        &quot;nom_application&quot;: &quot;App X&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Transaction introuvable&quot;
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
      data-authed="1"
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
               value="uuid"
               data-component="url">
    <br>
<p>ID de la transaction. Example: <code>uuid</code></p>
            </div>
                    </form>

                    <h2 id="wallet-agent-POSTapi-internal-terra-v1-agent-wallet-retrait">Créer une demande de retrait</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-internal-terra-v1-agent-wallet-retrait">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/internal/terra/v1/agent/wallet/retrait" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"montant\": \"architecto\",
    \"provider\": \"architecto\",
    \"numero_compte\": \"architecto\"
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
    "montant": "architecto",
    "provider": "architecto",
    "numero_compte": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-internal-terra-v1-agent-wallet-retrait">
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Demande de retrait soumise avec succ&egrave;s&quot;,
    &quot;data&quot;: {
        &quot;id_retrait&quot;: &quot;uuid&quot;,
        &quot;montant&quot;: 10000,
        &quot;provider&quot;: &quot;wave&quot;,
        &quot;numero_compte&quot;: &quot;01020304&quot;,
        &quot;statut&quot;: &quot;en_attente&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Portefeuille introuvable&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Solde insuffisant&quot;
}</code>
 </pre>
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
      data-authed="1"
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
<small>numeric</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="montant"                data-endpoint="POSTapi-internal-terra-v1-agent-wallet-retrait"
               value="architecto"
               data-component="body">
    <br>
<p>Montant minimum 500 Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>provider</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="provider"                data-endpoint="POSTapi-internal-terra-v1-agent-wallet-retrait"
               value="architecto"
               data-component="body">
    <br>
<p>Moyen de paiement (wave, orange, mtn, moov, visa) Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>numero_compte</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="numero_compte"                data-endpoint="POSTapi-internal-terra-v1-agent-wallet-retrait"
               value="architecto"
               data-component="body">
    <br>
<p>Numéro de compte ou téléphone Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="wallet-agent-GETapi-internal-terra-v1-agent-wallet-retraits">Liste des retraits de l’agent</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
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
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: {
        &quot;data&quot;: [
            {
                &quot;id_retrait&quot;: &quot;uuid&quot;,
                &quot;montant&quot;: 10000,
                &quot;provider&quot;: &quot;wave&quot;,
                &quot;numero_compte&quot;: &quot;01020304&quot;,
                &quot;statut&quot;: &quot;en_attente&quot;,
                &quot;created_at&quot;: &quot;2026-01-01 10:00:00&quot;
            }
        ]
    }
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
      data-authed="1"
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

                    <h2 id="wallet-agent-GETapi-internal-terra-v1-agent-wallet-retraits--id-">Détail d’un retrait</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-internal-terra-v1-agent-wallet-retraits--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/internal/terra/v1/agent/wallet/retraits/uuid" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/wallet/retraits/uuid"
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
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: {
        &quot;id_retrait&quot;: &quot;uuid&quot;,
        &quot;montant&quot;: 10000,
        &quot;provider&quot;: &quot;wave&quot;,
        &quot;numero_compte&quot;: &quot;01020304&quot;,
        &quot;statut&quot;: &quot;en_attente&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Retrait introuvable&quot;
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
      data-authed="1"
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
               value="uuid"
               data-component="url">
    <br>
<p>ID du retrait. Example: <code>uuid</code></p>
            </div>
                    </form>

                    <h2 id="wallet-agent-DELETEapi-internal-terra-v1-agent-wallet-retraits--id-">Annuler une demande de retrait</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-internal-terra-v1-agent-wallet-retraits--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/internal/terra/v1/agent/wallet/retraits/uuid" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/internal/terra/v1/agent/wallet/retraits/uuid"
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
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Demande de retrait annul&eacute;e&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Retrait introuvable ou non annulable&quot;
}</code>
 </pre>
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
      data-authed="1"
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
               value="uuid"
               data-component="url">
    <br>
<p>ID du retrait. Example: <code>uuid</code></p>
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
