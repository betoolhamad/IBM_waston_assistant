<!DOCTYPE html>
<html>

<head>
    <title>Control Base</title>
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        font-family: "Poppins", sans-serif;
    }

    body {

        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: #151515;
    }

    h1 {
        color: #999;
        font-family: "montserrat";
        margin-top: 30px;
        position: relative;
        bottom: 140px;
        left: 10px;
        letter-spacing: 2px;

    }

    .container {

        text-align: center;
        margin-top: 30px;

    }

    #btn1,
    #btn2,
    #btn3,
    #btn4,
    #btn5,
    #btn6 {
        color: #999;
    }

    #btn1:hover,
    #btn2:hover,
    #btn3:hover,
    #btn4:hover,
    #btn5:hover,
    #btn6:hover {
        color: #fff;
    }

    #btn1::before,
    #btn2::before,
    #btn3::before,
    #btn4::before,
    #btn5::before,
    #btn6::before {
        content: "";
        position: absolute;
        left: 0;
        width: 100%;
        height: 0%;
        background: #1f2756;
        z-index: -1;
        transition: 0.2s;
        top: 0;
        border-radius: 0 0 50% 50%;


    }

    #btn1:hover::before,
    #btn2:hover::before,
    #btn3:hover::before,
    #btn4:hover::before,
    #btn5:hover::before,
    #btn6:hover::before {
        height: 180%;
    }

    #btn1,
    #btn2,
    #btn3,
    #btn4,
    #btn5,
    #btn6 {
        border: 2px solid #1f2756;
        background: none;
        padding: 10px 20px;
        font-size: 15px;
        font-family: "montserrat";
        cursor: pointer;
        margin: 10px;
        transition: 0.2s;
        position: relative;
        overflow: hidden;

    }

    #btn1 {
        bottom: 30px;
        left: 110px;
        letter-spacing: 2px;
    }


    #btn2 {
        bottom: 30px;
        left: 270px;
        letter-spacing: 2px;
    }


    #btn3 {
        bottom: 30px;
        left: 35px;
    }

    #btn4 {

        right: 75px;
        bottom: 120px;
        letter-spacing: 1.3px;
    }

    #btn5 {

        right: 203px;
        top: 60px;
    }

    #btn6 {
        top: 120px;
        left: 210px;
    }
</style>


<body>

    <h1>Control Base</h1>
    <form action="Robot.php" method="post">


        <div class="container">
            <button id="btn1" name="L">Left</button>
            <button id="btn2" name="R">Right</button>
            <button id="btn3" name="S">Stop</button>
            <button id="btn4" name="F"> Forward </button>
            <button id="btn5" name="B">Backward</button>

        </div>

        <button id="btn6" name="Robot arm">Control Panel page</button>
    </form>

    <?php

    $conn = new mysqli('localhost', 'root', '', 'Control_Base');
    error_reporting(E_ALL & ~E_NOTICE);
    ini_set('display_errors', 1);



    if (isset($_POST["L"])) {
        $stmt = $conn->prepare("INSERT INTO BASE (id , Dierction) VALUES  (Null , 'Left')");
        $stmt->execute();
    }

    if (isset($_POST["R"])) {
        $stmt = $conn->prepare("INSERT INTO BASE (id , Dierction) VALUES  (Null , 'Right')");
        $stmt->execute();
    }

    if (isset($_POST["S"])) {
        $stmt = $conn->prepare("INSERT INTO BASE (id , Dierction) VALUES  (Null , 'Stop')");
        $stmt->execute();
    }

    if (isset($_POST["F"])) {
        $stmt = $conn->prepare("INSERT INTO BASE (id , Dierction) VALUES  (Null , 'Forward')");
        $stmt->execute();
    }

    if (isset($_POST["B"])) {
        $stmt = $conn->prepare("INSERT INTO BASE (id , Dierction) VALUES  (Null , 'Backward')");
        $stmt->execute();
    }


    ?>


    <script>
        window.watsonAssistantChatOptions = {
            integrationID: "9164f14a-7dc3-46a1-84cc-8e457503d1dc", // The ID of this integration.
            region: "eu-gb", // The region your integration is hosted in.
            serviceInstanceID: "00753dd8-8a89-405d-8fdd-46120da8b254", // The ID of your service instance.
            onLoad: function(instance) {
                instance.render();
            }
        };
        setTimeout(function() {
            const t = document.createElement('script');
            t.src = "https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
            document.head.appendChild(t);
        });
    </script>


</body>

</html>