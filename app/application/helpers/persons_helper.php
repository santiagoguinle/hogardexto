<?php

function hasDisease($disease, $person)
{
    if (!isset($person) || !isset($person["health"]) || !isset($person["health"]["diseases"])) {
        return false;
    }
    foreach ($person["health"]["diseases"] as $testDisease) {
        if ($testDisease["id"] == $disease["id"]) {
            return true;
        }
    }
}

