<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
    <link href="style.css" rel="stylesheet">
</head>
<html>
<body>
<div id="logout">
    <p><a href="index.php">Déconnexion</a></p>
</div>
<div id="content">

    <h1>Salutation mon cher <i>admin</i> !</h1>
    <div class="dialog">
        <img class="robot" src="small-robot.png"/>
        <p class="robot">Bon ! Tu as passé toutes les barrières de sécurité, je te fais confiance. Voici le contenu de l'application c:</p>

        <br>
    </div>
    <details id="contenu_details">
        <summary onclick="myFunction_contenu()">Contenu (1)</summary>
        <video id="contenu_video" width="640" height="360" controls autoplay muted>
            <source src="never_gonna_give_you_up.mp4" type="video/mp4">
        </video>
<!--        <img src="eivrfgye2022.jpg" />-->
    </details>
    <details id="images_details">
        <summary onclick="myFunction_images()">Images (0)</summary>
        <video id="images_video" width="640" height="360" controls autoplay muted>
            <source src="never_gonna_give_you_up.mp4" type="video/mp4">
        </video>
    </details>
    <details id="videos_details">
        <summary onclick="myFunction_videos()">Videos (2)</summary>
        <video id="videos_video" width="640" height="360" controls autoplay muted>
            <source src="never_gonna_give_you_up.mp4" type="video/mp4">
        </video>
    </details>
</div>

<div class="flags">
    <table>
        <tr>
            <td class="page"><a href="index.php">index</a></td>
        </tr>
        <tr>
            <td class="page"><a href="page1-erdtfyuozefizickoecco89.php">Authentification 1</a></td>
            <td class="flag">SecDevOps{dur4nd_g4m1ng}</td>
        </tr>
        <tr>
            <td class="page"><a href="page2-gibregibfrehzifbhu.php">Authentification 2</a></td>
            <td class="flag">SecDevOps{admin}</td>
        </tr>
        <tr>
            <td class="page"><a href="page3-iffuerifreoifjrekopcde8.php">Authentification 3</a></td>
            <td class="flag">SecDevOps{MonSuperMotDePasseDesEnfers456}</td>
        </tr>
        <tr>
            <td class="page"><a href="page4-euyruieozpugfeopufjfe1.php">Authentification 4</a></td>
            <td class="flag">SecDevOps{Pr15_3N_FL4G_gg_ez}</td>
        </tr>
        <tr>
            <td class="page"><a href="page5-detrfyguioytdrtfyui552.php">Authentification 5</a></td>
            <td class="flag">SecDevOps{Granola}</td>
        </tr>
    </table>
</div>
<script>


    const video_contenu = document.getElementById("contenu_video");

    function myFunction_contenu(){
        var delayInMilliseconds = 10; //1 second
        setTimeout(function () {
                video_contenu.muted = !video_contenu.muted;
        }, delayInMilliseconds);
    }


    const video_images = document.getElementById("images_video");

    function myFunction_images(){
        var delayInMilliseconds = 10; //1 second
        setTimeout(function () {
            video_images.muted = !video_images.muted;
        }, delayInMilliseconds);
    }


    const video_videos = document.getElementById("videos_video");

    function myFunction_videos(){
        var delayInMilliseconds = 10; //1 second
        setTimeout(function () {
            video_videos.muted = !video_videos.muted;
        }, delayInMilliseconds);
    }



</script>
</body>
</html>
