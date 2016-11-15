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

function hasBenefit($benefit, $person)
{
    if (!isset($person) || !isset($person["benefits"])) {
        return false;
    }
    foreach ($person["benefits"] as $testBenefits) {
        if ($testBenefits == $benefit["id"]) {
            return true;
        }
    }
}
