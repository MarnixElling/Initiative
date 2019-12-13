<
script type = "text/javascript" >
    var arrLang = {
        'en': {

            //header.php
            'vaardigheden': 'skills',
            'over': 'about us ',
            'partners': 'Partners',
            'email': 'e-mail',
            'telefoon': 'phone',
            'settings': 'settings',
            'kleuren': 'color Scheme',
            'business': 'business',
            'friendly': 'friendly',
            'warm': 'Warm',
            'taal': 'language',
            'slogan': 'because with teamwork you get the furthest!',
            'start': 'start immediately'
            //home.php
            'zie': 'See more',
            'prof': 'Professionality',
            'kennis': 'The knowledge that we possess to make what you need.',
            'wie': 'Who are we?',
            'team': 'the Team',
            'Email sturen': 'send email:',
            'voornaam': 'forname',
            'achternaam': 'lastname',
            'herhaal': 'repeat Email',
            'bericht': 'message',
            //footer.php
            'vragen': 'Frequently Asked Questions',
            'domein': 'Can I buy a domain through INITIATIVE?',
            'hosten': 'Is it possible to host my website through INITIATIVE?',
            'ergens anders': 'What if I want to host my website somewhere else?',
            'bekijk': 'view more',
            'bellen': 'Id like to call',
            'email sturen': 'I would like to send an email',
            'support email': 'I want to send a support email',
            'partnership': 'I would like to discuss a partnership',
            'zaken doen': 'I would like to do business',
            'copyright': 'copyright © 2020 INITIATIVE. All rights reserved.'


        },
        'nl': {

            //header.php
            'vaardigheden': 'vaardigheden',
            'over': 'over ons',
            'partners': 'Partners',
            'email': 'Email',
            'telefoon': 'Telefoon',
            'settings': 'instellingen',
            'kleuren': 'Kleuren Schema',
            'business': 'Zakelijk',
            'friendly': 'Vriendelijk',
            'warm': 'Warm',
            'taal': 'Taal',
            'slogan': 'Want met teamwork kom je het verst!',
            'start': 'Start Meteen'
            //home.php
            'zie': 'Zie meer',
            'prof': 'Professionaliteit',
            'kennis': 'De kennis die wij bezitten om te maken wat jij nodig hebt.',
            'wie': 'Wie zijn wij?',
            'team': 'Het Team',
            'Email sturen': 'Email sturen:',
            'voornaam': 'Voornaam',
            'achternaam': 'Achternaam',
            'herhaal': 'Herhaal Email',
            'bericht': 'Bericht',
            //footer.php
            'vragen': 'Veel gestelde vragen',
            'domein': 'Kan ik een domein kopen via INITIATIVE?',
            'hosten': 'Is het mogelijk om mijn website hosten via INITIATIVE?',
            'ergens anders': 'Wat als ik mijn website ergens anders wil hosten?',
            'bekijk': 'Bekijk meer',
            'bellen': 'Ik wil graag bellen',
            'email sturen': 'Ik wil graag een email sturen',
            'support email': 'Ik wil een support email sturen',
            'partnership': 'Ik zou een partnership willen bespreken',
            'zaken doen': 'Ik zou graag zaken willen doen',
            'copyright': 'auteursrechten © 2020 INITIATIVE. Alle rechten voorbehouden.'

        },
        'de': {

            //header.php
            'vaardigheden': 'Fähigkeiten',
            'over': 'über uns',
            'partners': 'Partner',
            'email': 'E-Mail',
            'telefoon': 'Telefon',
            'settings': 'Institutionen',
            'kleuren': 'Farbschema',
            'business': 'sachlich',
            'friendly': 'freundlich',
            'warm': 'Warm',
            'taal': 'sprache',
            'slogan': 'Denn mit Teamwork kommen Sie am weitesten!',
            'start': 'starte sofort'
            //home.php
            'zie': 'mehr sehen',
            'prof': 'Professionalität',
            'kennis': 'Das Wissen, das wir besitzen, um das zu machen, was Sie brauchen.',
            'wie': 'Wer wir sind?',
            'team': 'Das Team',
            'Email sturen': 'E-Mail senden:',
            'voornaam': 'Vorname',
            'achternaam': 'Nachname',
            'herhaal': 'Email wiederholen',
            'bericht': 'Nachricht',
            //footer.php
            'vragen': 'häufig gestellte fragen',
            'domein': 'Kann ich über INITIATIVE eine Domain kaufen?',
            'hosten': 'Ist es möglich, meine Website über INITIATIVE zu hosten?',
            'ergens anders': 'Was ist, wenn ich meine Website woanders hosten möchte?',
            'bekijk': 'Was ist, wenn ich meine Website woanders hosten möchte?',
            'bellen': 'Ich würde gerne anrufen',
            'email sturen': 'Ich möchte eine E-Mail senden',
            'support email': 'Ich möchte eine Support-E-Mail senden',
            'partnership': 'Ich möchte eine Partnerschaft besprechen',
            'zaken doen': 'Ich würde gerne Geschäfte machen',
            'copyright': 'Urheberrecht  © 2020 INITIATIVE. Alle rechte vorbehalten.'
        }
    };
// Process translation
$(function () {
    $('.translate').click(function () {
        var lang = $(this).attr('id');

        $('.lang').each(function (index, item) {
            $(this).text(arrLang[lang][$(this).attr('key')]);
        });
    });
}); <
/script>