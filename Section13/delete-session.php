<?php

session_start();

//session_destroy(); //This removes all information in the session.

unset($_SESSION["name"]); //This will remove specific information.
unset($_SESSION["age"]);
