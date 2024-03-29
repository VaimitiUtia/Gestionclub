<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f4f4f4;
            color: #333;
        }

        h1,
        h2 {
            color: #0066cc;
        }

        p {
            line-height: 1.6;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        footer {
            margin-top: 30px;
            text-align: center;
            color: #777;
        }
    </style>
    <title><?php echo isset($nomClub) ? $nomClub : 'À propos'; ?> </title>
</head>

<body>

<header>
    <h1><?php echo isset($nomClub) ? $nomClub : 'Club de Vaa'; ?> </h1>
</header>

<section id="histoire">
    <h2>Notre Histoire</h2>
    <p>Fondé en <?php echo isset($anneeFondation) ? $anneeFondation : '2023'; ?>, le Club de Va'a <?php echo isset($nomClub) ? $nomClub : 'Club Vaa'; ?> est né de la passion partagée pour le va'a par un groupe de passionnés de sports nautiques. Depuis lors, nous avons travaillé dur pour promouvoir le va'a et participer activement à sa croissance dans notre communauté. Notre histoire est marquée par de nombreuses victoires, par le développement de talents et par notre engagement continu envers l'excellence sportive.</p>
</section>

<section id="mission">
    <h2>Notre Mission</h2>
    <p><?php echo isset($mission) ? $mission : "Notre mission principale est de promouvoir la pratique du va'a en offrant des opportunités d'apprentissage et de compétition pour les amateurs et les athlètes de tous niveaux. Nous nous efforçons de favoriser un environnement inclusif et accueillant où chacun peut se développer en tant que pagayeur tout en créant des liens forts avec d'autres passionnés."; ?></p>
</section>

<section id="valeurs">
    <h2>Nos Valeurs</h2>
    <ul>
        <li><strong>Passion</strong> : Nous sommes passionnés par le va'a et sommes déterminés à partager cette passion avec notre communauté.</li>
        <li><strong>Respect</strong> : Nous respectons nos membres, nos concurrents et l'environnement dans lequel nous évoluons.</li>
        <li><strong>Esprit d'Équipe</strong> : Nous favorisons la collaboration, l'entraide et la camaraderie au sein de notre club.</li>
        <li><strong>Excellence</strong> : Nous aspirons constamment à l'excellence dans notre pratique sportive et dans notre gestion de club.</li>
    </ul>
</section>

<section id="engagement">
    <h2>Notre Engagement Communautaire</h2>
    <p>En tant que club de va'a, nous croyons en l'importance de redonner à la communauté. Nous sommes fiers de participer à des initiatives locales, de soutenir des causes sociales et de promouvoir un mode de vie actif et sain. Notre engagement s'étend au-delà des eaux où nous pagayons.</p>
</section>

<section id="contact">
    <h2>Nous Contacter</h2>
    <p>Si vous souhaitez en savoir plus sur le Club de Va'a <?php echo isset($nomClub) ? $nomClub : 'Club Vaa'; ?>, devenir membre, sponsoriser notre club ou simplement nous contacter, n'hésitez pas à utiliser les informations de contact fournies sur notre page de contact. Nous serions ravis de discuter avec vous.</p>
</section>

<footer>
    &copy; <?php echo date('Y'); ?> <?php echo isset($nomClub) ? $nomClub : 'Club Vaa'; ?> - Club de Va'a. Tous droits réservés.
</footer>

</body>

</html>
