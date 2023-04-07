
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="LOL League of legends damage calculator for patch notes 12.23.">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Lol damage calculator - ADC or Auto attackers</title>
</head>
<body>
    <a href="../index.html"><p>Home Page</p></a>
    <!-- <div>
        <a href="../fille/Spell-casters.html"><p>Spell-casters</p></a>
        <a href="../fille/Supports.html"><p>Supports</p></a>
        <a href="../fille/Tanks.html"><p>Tanks</p></a>
    </div>
    <p>
        When it comes to auto attacks, it's easy to calculate the dps, however, it doesn't necessarily represent how much you're gonna deal in teamfight<br/>
        , chase or kiting because of the dps windows (representing the moment when you are in range and able to attack)
    </p>
    <a href="https://leagueoflegends.fandom.com/wiki/Category:Marksman_champion_(Legacy)" target="_blank">Adc list</a> -->
    <div class="calc">
        <div>
        <form method="POST" action="">
            <div class="guessbox" champions="Aatrox,Ahri,Akali,Akshan,Alistar,Amumu,Anivia,Annie,Aphelios,Ashe,Aurelion Sol,Azir,Bard,Bel'Veth,Blitzcrank,Brand,Braum,Caitlyn,Camille,Cassiopeia,Cho'Gath,Corki,Darius,Diana,Dr. Mundo,Draven,Ekko,Elise,Evelynn,Ezreal,Fiddlesticks,Fiora,Fizz,Galio,Gangplank,Garen,Gnar,Gragas,Graves,Gwen,Hecarim,Heimerdinger,Illaoi,Irelia,Ivern,Janna,Jarvan IV,Jax,Jayce,Jhin,Jinx,K'Sante,Kai'Sa,Kalista,Karma,Karthus,Kassadin,Katarina,Kayle,Kayn,Kennen,Kha'Zix,Kindred,Kled,Kog'Maw,LeBlanc,Lee Sin,Leona,Lillia,Lissandra,Lucian,Lulu,Lux,Malphite,Malzahar,Maokai,Master Yi,Miss Fortune,Mordekaiser,Morgana,Nami,Nasus,Nautilus,Neeko,Nidalee,Nilah,Nocturne,Nunu & Willump,Olaf,Orianna,Ornn,Pantheon,Poppy,Pyke,Qiyana,Quinn,Rakan,Rammus,Rek'Sai,Rell,Renata Glasc,Renekton,Rengar,Riven,Rumble,Ryze,Samira,Sejuani,Senna,Seraphine,Sett,Shaco,Shen,Shyvana,Singed,Sion,Sivir,Skarner,Sona,Soraka,Swain,Sylas,Syndra,Tahm Kench,Taliyah,Talon,Taric,Teemo,Thresh,Tristana,Trundle,Tryndamere,Twisted Fate,Twitch,Udyr,Urgot,Varus,Vayne,Veigar,Vel'Koz,Vex,Vi,Viego,Viktor,Vladimir,Volibear,Warwick,Wukong,Xayah,Xerath,Xin Zhao,Yasuo,Yone,Yorick,Yuumi,Zac,Zed,Zeri,Ziggs,Zilean,Zoe,Zyra"></div>
            <input type="text" list="champions" name="champion1"/>
            <datalist id="champions">
                <option value="Aatrox">
                <option value="Ahri">
                <option value="Akali">
                <option value="Akshan">
                <option value="Alistar">
                <option value="Amumu">
                <option value="Anivia">
                <option value="Annie">
                <option value="Aphelios">
                <option value="Ashe">
                <option value="Aurelion Sol">
                <option value="Azir">
                <option value="Bard">
                <option value="Bel'Veth">
                <option value="Blitzcrank">
                <option value="Brand">
                <option value="Braum">
                <option value="Caitlyn">
                <option value="Camille">
                <option value="Cassiopeia">
                <option value="Cho'Gath">
                <option value="Corki">
                <option value="Darius">
                <option value="Diana">
                <option value="Dr. Mundo">
                <option value="Draven">
                <option value="Ekko">
                <option value="Elise">
                <option value="Evelynn">
                <option value="Ezreal">
                <option value="Fiddlesticks">
                <option value="Fiora">
                <option value="Fizz">
                <option value="Galio">
                <option value="Gangplank">
                <option value="Garen">
                <option value="Gnar">
                <option value="Gragas">
                <option value="Graves">
                <option value="Gwen">
                <option value="Hecarim">
                <option value="Heimerdinger">
                <option value="Illaoi">
                <option value="Irelia">
                <option value="Ivern">
                <option value="Janna">
                <option value="Jarvan IV">
                <option value="Jax">
                <option value="Jayce">
                <option value="Jhin">
                <option value="Jinx">
                <option value="K'Sante">
                <option value="Kai'Sa">
                <option value="Kalista">
                <option value="Karma">
                <option value="Karthus">
                <option value="Kassadin">
                <option value="Katarina">
                <option value="Kayle">
                <option value="Kayn">
                <option value="Kennen">
                <option value="Kha'Zix">
                <option value="Kindred">
                <option value="Kled">
                <option value="Kog'Maw">
                <option value="LeBlanc">
                <option value="Lee Sin">
                <option value="Leona">
                <option value="Lillia">
                <option value="Lissandra">
                <option value="Lucian">
                <option value="Lulu">
                <option value="Lux">
                <option value="Malphite">
                <option value="Malzahar">
                <option value="Maokai">
                <option value="Master Yi">
                <option value="Miss Fortune">
                <option value="Mordekaiser">
                <option value="Morgana">
                <option value="Nami">
                <option value="Nasus">
                <option value="Nautilus">
                <option value="Neeko">
                <option value="Nidalee">
                <option value="Nilah">
                <option value="Nocturne">
                <option value="Nunu & Willump">
                <option value="Olaf">
                <option value="Orianna">
                <option value="Ornn">
                <option value="Pantheon">
                <option value="Poppy">
                <option value="Pyke">
                <option value="Qiyana">
                <option value="Quinn">
                <option value="Rakan">
                <option value="Rammus">
                <option value="Rek'Sai">
                <option value="Rell">
                <option value="Renata Glasc">
                <option value="Renekton">
                <option value="Rengar">
                <option value="Riven">
                <option value="Rumble">
                <option value="Ryze">
                <option value="Samira">
                <option value="Sejuani">
                <option value="Senna">
                <option value="Seraphine">
                <option value="Sett">
                <option value="Shaco">
                <option value="Shen">
                <option value="Shyvana">
                <option value="Singed">
                <option value="Sion">
                <option value="Sivir">
                <option value="Skarner">
                <option value="Sona">
                <option value="Soraka">
                <option value="Swain">
                <option value="Sylas">
                <option value="Syndra">
                <option value="Tahm Kench">
                <option value="Taliyah">
                <option value="Talon">
                <option value="Taric">
                <option value="Teemo">
                <option value="Thresh">
                <option value="Tristana">
                <option value="Trundle">
                <option value="Tryndamere">
                <option value="Twisted Fate">
                <option value="Twitch">
                <option value="Udyr">
                <option value="Urgot">
                <option value="Varus">
                <option value="Vayne">
                <option value="Veigar">
                <option value="Vel'Koz">
                <option value="Vex">
                <option value="Vi">
                <option value="Viego">
                <option value="Viktor">
                <option value="Vladimir">
                <option value="Volibear">
                <option value="Warwick">
                <option value="Wukong">
                <option value="Xayah">
                <option value="Xerath">
                <option value="Xin Zhao">
                <option value="Yasuo">
                <option value="Yone">
                <option value="Yorick">
                <option value="Yuumi">
                <option value="Zac">
                <option value="Zed">
                <option value="Zeri">
                <option value="Ziggs">
                <option value="Zilean">
                <option value="Zoe">
                <option value="Zyra">
            </datalist>
            <input type="text" list="champions" id="champion2"/>
            <datalist id="champions">
                <option value="Aatrox">
                <option value="Ahri">
                <option value="Akali">
                <option value="Akshan">
                <option value="Alistar">
                <option value="Amumu">
                <option value="Anivia">
                <option value="Annie">
                <option value="Aphelios">
                <option value="Ashe">
                <option value="Aurelion Sol">
                <option value="Azir">
                <option value="Bard">
                <option value="Bel'Veth">
                <option value="Blitzcrank">
                <option value="Brand">
                <option value="Braum">
                <option value="Caitlyn">
                <option value="Camille">
                <option value="Cassiopeia">
                <option value="Cho'Gath">
                <option value="Corki">
                <option value="Darius">
                <option value="Diana">
                <option value="Dr. Mundo">
                <option value="Draven">
                <option value="Ekko">
                <option value="Elise">
                <option value="Evelynn">
                <option value="Ezreal">
                <option value="Fiddlesticks">
                <option value="Fiora">
                <option value="Fizz">
                <option value="Galio">
                <option value="Gangplank">
                <option value="Garen">
                <option value="Gnar">
                <option value="Gragas">
                <option value="Graves">
                <option value="Gwen">
                <option value="Hecarim">
                <option value="Heimerdinger">
                <option value="Illaoi">
                <option value="Irelia">
                <option value="Ivern">
                <option value="Janna">
                <option value="Jarvan IV">
                <option value="Jax">
                <option value="Jayce">
                <option value="Jhin">
                <option value="Jinx">
                <option value="K'Sante">
                <option value="Kai'Sa">
                <option value="Kalista">
                <option value="Karma">
                <option value="Karthus">
                <option value="Kassadin">
                <option value="Katarina">
                <option value="Kayle">
                <option value="Kayn">
                <option value="Kennen">
                <option value="Kha'Zix">
                <option value="Kindred">
                <option value="Kled">
                <option value="Kog'Maw">
                <option value="LeBlanc">
                <option value="Lee Sin">
                <option value="Leona">
                <option value="Lillia">
                <option value="Lissandra">
                <option value="Lucian">
                <option value="Lulu">
                <option value="Lux">
                <option value="Malphite">
                <option value="Malzahar">
                <option value="Maokai">
                <option value="Master Yi">
                <option value="Miss Fortune">
                <option value="Mordekaiser">
                <option value="Morgana">
                <option value="Nami">
                <option value="Nasus">
                <option value="Nautilus">
                <option value="Neeko">
                <option value="Nidalee">
                <option value="Nilah">
                <option value="Nocturne">
                <option value="Nunu & Willump">
                <option value="Olaf">
                <option value="Orianna">
                <option value="Ornn">
                <option value="Pantheon">
                <option value="Poppy">
                <option value="Pyke">
                <option value="Qiyana">
                <option value="Quinn">
                <option value="Rakan">
                <option value="Rammus">
                <option value="Rek'Sai">
                <option value="Rell">
                <option value="Renata Glasc">
                <option value="Renekton">
                <option value="Rengar">
                <option value="Riven">
                <option value="Rumble">
                <option value="Ryze">
                <option value="Samira">
                <option value="Sejuani">
                <option value="Senna">
                <option value="Seraphine">
                <option value="Sett">
                <option value="Shaco">
                <option value="Shen">
                <option value="Shyvana">
                <option value="Singed">
                <option value="Sion">
                <option value="Sivir">
                <option value="Skarner">
                <option value="Sona">
                <option value="Soraka">
                <option value="Swain">
                <option value="Sylas">
                <option value="Syndra">
                <option value="Tahm Kench">
                <option value="Taliyah">
                <option value="Talon">
                <option value="Taric">
                <option value="Teemo">
                <option value="Thresh">
                <option value="Tristana">
                <option value="Trundle">
                <option value="Tryndamere">
                <option value="Twisted Fate">
                <option value="Twitch">
                <option value="Udyr">
                <option value="Urgot">
                <option value="Varus">
                <option value="Vayne">
                <option value="Veigar">
                <option value="Vel'Koz">
                <option value="Vex">
                <option value="Vi">
                <option value="Viego">
                <option value="Viktor">
                <option value="Vladimir">
                <option value="Volibear">
                <option value="Warwick">
                <option value="Wukong">
                <option value="Xayah">
                <option value="Xerath">
                <option value="Xin Zhao">
                <option value="Yasuo">
                <option value="Yone">
                <option value="Yorick">
                <option value="Yuumi">
                <option value="Zac">
                <option value="Zed">
                <option value="Zeri">
                <option value="Ziggs">
                <option value="Zilean">
                <option value="Zoe">
                <option value="Zyra">
            </datalist>
        </div>
        </form>
    <?php

// // On récupère les infos de l'API
$data = file_get_contents('http://ddragon.leagueoflegends.com/cdn/13.4.1/data/en_US/champion.json');
// // On décode le json
$data = json_decode($data);
// // On boucle pour récupérer les données
// foreach($data->data as $perso => $d)
// {
//     echo $d->name;
//     echo $d->key;
//     echo $d->stats->hp;
    
// }

    $perso1 = $_POST['name'];
    $joueur = $data->data->$perso1;

echo "<br/>Les stats de tristana <br/>";
// on recupere tristana
$tristana = $data->data->Tristana;

$statsTristana = $tristana->stats;

echo "Hp =".$statsTristana->hp."<br/>";
echo "Armor=".$statsTristana->armor."<br/>";
echo "crit=".$statsTristana->crit."<br/>";
echo "Damage=".$statsTristana->attackdamage."<br/>";
echo "Attack speed=".$statsTristana->attackspeed."<br/>";



echo "<br/> Les stats de Ornn <br/>";
// on recupere ornn
$ornn = $data->data->Ornn;

$statsOrnn = $ornn->stats;

echo "Hp =".$statsOrnn->hp."<br/>";
echo "Armor=".$statsOrnn->armor."<br/>";
echo "crit=".$statsOrnn->crit."<br/>";
echo "Damage=".$statsOrnn->attackdamage."<br/>";
echo "Attack speed=".$statsOrnn->attackspeed."<br/>";

?>
    </div>
</body>
</html>