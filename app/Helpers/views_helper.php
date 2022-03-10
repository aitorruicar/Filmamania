<?php

function loadViews($view = null, $data_header = [], $data = [])
{
    return ($view == null) 
    ? view('includes/header', $data_header). view('includes/navbar'). view('includes/footer')
    : view('includes/header', $data_header). view('includes/navbar'). view($view, $data). view('includes/footer');
}

