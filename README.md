# stats-php
PHP script that collects basic view stats and prints it to a text file as CSV.

Whenever a page with this script is viewed, it will collect the following data:
- Date and time the page was viewed at (with respect to a time zone that you set, otherwise in GMT).
- The referrer of the page (where the visitor came from), if any.
- The country the viewer is from (based on their IP).

After collecting this, it will add it to stats.txt in CSV format in this format:
- Year,Month,Day of month,Time,Page,Referrer,Country

You can then open this text file and view it with any CSV viewer like Microsoft Office or OpenOffice.
