<style>

    /* Set height to 100% for body and html to enable the background image to cover the whole page: */
    body, html {
        height: 100%
    }

    .bgimg {
        /* Background image */
        background-image: url('3.jpg');
        /* Full-screen */
        height: 100vh;
        /* Center the background image */
        background-position: center;
        /* Scale and zoom in the image */
        background-size: cover;
        /* Add position: relative to enable absolutely positioned elements inside the image (place text) */
        position: relative;
        /* Add a white text color to all elements inside the .bgimg container */
        color: white;
        /* Add a font */
        font-family: "Courier New", Courier, monospace;
        /* Set the font-size to 25 pixels */
        font-size: 25px;
    }

    .middle {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }

    hr {
        margin: auto;
        width: 40%;
    }

</style>

<div class="bgimg">

    <div class="middle">
        <h1>Up-energy.fr</h1>
        <hr>
        <p>arrive bientôt !</p>
        <p><a href="login.php">Connexion</a></p>
    </div>

</div>