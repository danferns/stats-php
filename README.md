# stats-php
A tiny PHP script that saves page request statistics into a CSV file

Whenever a page with this script is requested, the script will collect the following data:
- Date and time the page was viewed at (with respect to a time zone that you set, otherwise in GMT).
- The referrer of the page (where the visitor came from), if any.
- The country the viewer is from (based on their IP).

After collecting this, it will add it to stats.txt in this format:
```  
Year,Month,Day of month,Time,Page,Referrer,Country
```

You can then open this text file and view it with any CSV viewer like Microsoft Office or OpenOffice.
