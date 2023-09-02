#/bin/bash

RED="\e[31m"
GREEN="\e[32m"
YELLOW="\e[33m"
BLUE="\e[34m"
ENDCOLOR="\e[0m"

INFO="["$BLUE"i"$ENDCOLOR"]"
WARN="["$YELLOW"w"$ENDCOLOR"]"
ERR="["$RED"e"$ENDCOLOR"]"

printf "\n*** Syncing with advguild.myftp.org ...\n"
lftp -f ./advguild-dl-sync.cfg
printf "$(date)" > lastsync

printf "*** Changing directory permissions to '755' recursively ...\n"
chmod 755 /var/www/html/advguildRoot/ -R

printf "*** Generating a new 'advguild.html' file ...\n"
bash ./genhtml.sh

printf "${GREEN}Done!${ENDCOLOR}\n"
