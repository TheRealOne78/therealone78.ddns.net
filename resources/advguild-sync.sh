#/bin/bash

printf "Syncing...\n"
lftp -f ./advguild-dl-sync.cfg
chmod 755 /var/www/html/advguildRoot/ -R
printf "Done!\n"
