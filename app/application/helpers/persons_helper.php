<?php

function hasDisease($disease, $person)
{
    if (!isset($person) || !isset($person["diseases"])) {
        return false;
    }
    foreach ($person["diseases"] as $testDisease) {
        if ($testDisease == $disease["id"]) {
            return true;
        }
    }
}

