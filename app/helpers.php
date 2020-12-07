<?php

function genNewsLink($slugCategory, $slugNews)
{
    return "/tin-tuc/$slugNews";
}

function genCatalogue($content)
{
    $regex = "/<h2>(.*)<\/h2>/";
    preg_match_all($regex, $content, $titles);

    $result = '';
    foreach ($titles[1] as $title) {
        $result .= "<li><a href='#'>$title</a></li>";
    }
    return $result;
}
