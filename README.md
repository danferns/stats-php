# stats-php
A tiny PHP script that saves page request statistics into a CSV file

Whenever a page with this script is requested, the script will collect the following data:
- The date and time the page was requested at (in the time zone that you set, or in GMT).
- The referrer of the page (where the visitor came from), if available.
- The country the visitor is from (based on their IP address, using https://ipinfo.io).

This data will be appended to stats.txt in this format:
```  
Year,Month,Day of month,Time,Page,Referrer,Country
```

You can then open this text file and view it with any CSV viewer like Microsoft Office or OpenOffice.
