<?php

function alertMessageFirstProfile(){
    echo'
        <div class="alert alert-info" role="alert">
            <h4 class="alert-heading"><img src="..\draw\arrow_forward-24px.svg" Profile info!</h4>
            <p>This is a the first profile of the user\'s list!</p>
        </div>
    ';
}

function alertMessageLastProfile(){
    echo'
        <div class="alert alert-info" role="alert">
            <h4 class="alert-heading"><img src="..\draw\arrow_back-24px.svg" Profile info!</h4>
            <p>This is a the last profile of the user\'s list!</p>
        </div>
    ';
}