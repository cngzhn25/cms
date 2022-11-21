<?php

function site_url($url = null)
{
      return URL . "/" . $url;
}

function public_url($url = null)
{
    return URL . "/public/" . $url;
}
