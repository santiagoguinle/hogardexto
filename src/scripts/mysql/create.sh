cd /var/db/structure
cat $(ls) > /tmp/structure.sql
mysql -poiTSj.c5rj < /tmp/structure.sql
rm /tmp/structure.sql

cd /var/db/initial-data
cat $(ls) > /tmp/initial-data.sql
mysql -poiTSj.c5rj < /tmp/initial-data.sql
rm /tmp/initial-data.sql
