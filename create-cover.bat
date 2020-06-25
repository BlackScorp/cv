@ECHO on
start "" "C:\Program Files\wkhtmltopdf\bin\wkhtmltopdf.exe" -R 0 -L 0 -T 0 -B 0 --disable-smart-shrinking --viewport-size 794x1123 http://localhost:8000/?onlyCover %~dp0cover.pdf
start "" "C:\Program Files\wkhtmltopdf\bin\wkhtmltopdf.exe" -R 0 -L 0 -T 0 -B 0 --disable-smart-shrinking --viewport-size 794x1123 http://localhost:8000/?onlyCV %~dp0cv.pdf
exit
