#!/bin/bash

# GoAccess , an open source real time web log analyzer
# is being used to view the HTTP statistics of our webpage

ssh -t skafle@clabsql.clamv.jacobs-university.de 'tail -f -n +0 /var/log/apache2/access_log' | #to access the access.log file on clamv with file path 
zgrep -h '/~skafle/' |  # to access the access.log file part for username skafle
goaccess -o logdisplay.html --real-time-html --log-format=COMBINED # generates a real time logdisplay.html report 

#Reference: GoAccess Man page (https://goaccess.io/man)