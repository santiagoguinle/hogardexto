cd /var/db/structure
cat $(ls -t) > /tmp/structure.sql
mysql -poiTSj.c5rj < /tmp/structure.sql
rm /tmp/structure.sql