<?php
/**
 * Supply the basis for the navbar as an array.
 */
return [
    [
        "text" => "Hem",
        "url" => "",
        "title" => "Första sidan, börja här.",
    ],
    [
        "text" => "Redovisning",
        "url" => "redovisning",
        "title" => "Redovisningstexter från kursmomenten.",
    ],
    [
        "text" => "Om",
        "url" => "om",
        "title" => "Om denna webbplats.",
    ],
];

/*
"kurser" => [
    "text"  =>"<i class=\"fa fa-graduation-cap\"></i> Kurser",
    "url"   => $this->di->get("url")->create("kurser"),
    "title" => "Jobba med kurserna",

    "submenu" => [
        "items" => [
            "python" => [
                "text"  =>"python",
                "url"   => $this->di->get("url")->create("kurser/python"),
                "title" => "Kursen python"
            ],
 */
