<?php

include 'data.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UEFA Football Teams</title>
</head>

<style>
    .grid-container {
        display: grid;
        grid-template-columns: auto auto auto auto;
        gap: 40px;
    }

    .grid-container :hover {
        transform: scale(1.12);
    }

    .team-emblems img {
        max-width: 50%;
        height: auto;
    }

    .team-emblems {
        text-align: center;
        background-color: darkgray;
        border-radius: 5%;
    }


    h1 {
        text-align: center;
        font-size: 80px;
    }

    body {
        background-color: lightgrey;
        margin: 0%;
    }

    button {
        background-color: cornflowerblue;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: #002ead;
        transition: 0.7s;
    }

    footer {
        background-color: cornflowerblue;
        width: 100vw;
        height: 10vh;
    }
</style>