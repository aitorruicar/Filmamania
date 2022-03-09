<?php

function loadViews($view = null, $data = [])
{
    return ($view == null) 
    ? view('includes/header'). view('includes/navbar'). view('includes/footer')
    : view('includes/header'). view('includes/navbar'). view($view, $data). view('includes/footer');
}

