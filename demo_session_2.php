<?php

    session_start(); // Starting the session.

    echo "Favourite Color is: ". $_SESSION["favcolor"] . "<br>";
    echo "User Name is: ".$_SESSION["username"]."<br>";