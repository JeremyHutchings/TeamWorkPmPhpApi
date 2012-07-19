<?php

require 'autoload.php';

$object = new TeamWorkPm_Response_XML();
$xml = '<project>
    <company>
        <name>{Projects Company Name}</name>
        <id type="integer">{Projects Company Id}</id>
    </company>
    <created-on type="date">{Date project was created in Datetime form}</created-on>
    <start-page>{Projects start page}</start-page>
    <starred type="boolean">{whether user has it starred}</starred>
    <name>{Project Name}</name>
    <show-announcement type="boolean">{Show project announcements}</show-announcement>
    <announcement>{Project Announcement}</announcement>
    <id type="integer">{Project Id}</id>
    <last-changed-on type="date">{Date last changed in datetime form}</last-changed-on>
    <status>[archived|active|deleted]</status>
</project>';

$object->parse($xml);
//print_r($project);
foreach ($object as $key=>$property) {
    if (is_object($property)) {
        foreach ($property as $k1=>$p) {
            echo $k1, ' = ', $p;
        }
    } else {
        echo $key, ' = ', $property, "\n";
    }
}