<?php

function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) { redirect(base_url('login/block')); }
}