<?php
function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        $ci->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Login Terlebihi Dahulu!</div>');
        redirect('Auth');
    } else {
        $role = $ci->session->userdata('role');
        if ($role != "Admin") {
            redirect('User');
        }
    }
}

function is_logged_in2()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        $ci->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Login Terlebihi Dahulu!</div>');
        redirect('Auth');
    } else {
        $role = $ci->session->userdata('role');
        if ($role != "Desainer" && $role != "Admin") {
            redirect('Project');
        }
    }
}

function is_logged_in3()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        $ci->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Login Terlebihi Dahulu!</div>');
        redirect('Auth');
    } else {
        $role = $ci->session->userdata('role');
        if ($role != "User") {
            redirect('Auth');
        }
    }
}

