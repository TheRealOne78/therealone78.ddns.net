#!/bin/sh

if [ "$#" -ne 1 ]; then
    echo "Usage: $0 <path_to_json_file>"
    exit 1
fi

json_file="$1"

if [ ! -f "$json_file" ]; then
    echo "Error: File '$json_file' does not exist."
    exit 1
fi

sed -i -e 's/ă/a/g' \
       -e 's/Ă/A/g' \
       -e 's/ș/s/g' \
       -e 's/Ș/S/g' \
       -e 's/ț/t/g' \
       -e 's/Ț/T/g' \
       -e 's/î/i/g' \
       -e 's/Î/I/g' \
       -e 's/â/a/g' \
       -e 's/Â/A/g' "$json_file"
