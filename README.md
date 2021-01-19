# Pi-hole-Domain-Blocker

## *** ABOUT ***
A simple PHP tool to add / remove websites to block in Pi-Hole (https://pi-hole.net/).

## *** CONFIGURATION ***
Upload blocked_domains.sql to your SQL Server and provide the details in config.php.

## *** TURN PROJECT ON / OFF ***
To activate / deactivate the system, edit $active = "y/n".
Project online: y
Project offline: n

## *** INFO ***
This tool does not tap into Pi-hole, and can not update the gravity list automaticly. This have to be manually.
To add the tool to Pi-hole, navigate to "Group Management" -> "Adlist" and add gravity.php (https://example.com/gravity.php)
