<?php

/**
 * Configuration for database connection
 *
 */

$host       = "mysql";
$username   = "adwordsBrain";
$password   = "khwff53TSf96@22";
$dbname     = "adwordsBrain";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );