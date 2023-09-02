#!/bin/bash

# =COLORS========================== #

RED="\e[31m"
GREEN="\e[32m"
YELLOW="\e[33m"
BLUE="\e[34m"
ENDCOLOR="\e[0m"

INFO="["$BLUE"i"$ENDCOLOR"]"
WARN="["$YELLOW"w"$ENDCOLOR"]"
ERR="["$RED"e"$ENDCOLOR"]"

# =GLOBAL VARIABLES================ #

HTTPD_ROOT_ABSOLUTE_PATH="/var/www/html/"
ADVGUILD_ABSOLUTE_PATH="${HTTPD_ROOT_ABSOLUTE_PATH}advguildRoot/"

ADVGUILD_HTTP_PATH="/advguildRoot"

TEMP_GEN_FILENAME="advguild.html.notcomplete"
FINAL_GEN_FILENAME="advguild.html"

HEADER_TEMPLATE_PATH="./templates/head.html"
FOOTER_TEMPLATE_PATH="./templates/footer.html"

DIR_DEPTH=0
FILE_NAME_JSON=""

ADVGUILD_URL_BASE="${ADVGUILD_HTTP_PATH}"

TEMP_GEN_FILENAME=""
ADVGUILD_JSON=""

OWNER="therealone:therealone"
PERMISSIONS="755"

# =FUNCTIONS======================= #

checkerr() {
  if [ "${exitcode}" -ne "0" ]; then
		printf "$ERR Error: Non-zero exit code \`${exitcode}'. Exiting...\n";
		exit ${exitcode}
	else
		return 0;
	fi
}

genparse() {
  find . -mindepth 1 -maxdepth 1 -print0 | while IFS= read -r -d '' file; do
	  exitcode=$?; checkerr;

		# Print container opener

		## Directory
		if [ -d "${file}" ]; then
		  echo "<div class=\"dir file-shower\">" >> "${TEMP_GEN_FILENAME}"
		else
		  # Check by extention
		  extension=${file##*.}
			extension=$(echo ${extension} | tr '[:upper:]' '[:lower:]')
      case "${extension}" in

				## Archives
				"tar" | "gz" | "xz" | "bz" | "bz2" | "lz" | "lz4" | "lzma" | "lzo" | "zip" | "7z" | "rar" | "iso" | "br" | "sz" | "zst")
				echo "<div class=\"archive file-shower\">" >> "${TEMP_GEN_FILENAME}"
				filetype="Archive"
				;;

        ## Executables (except Java JAR)
				"appimage" | "run" | "sh" | "py" | "exe" | "dmg" | "apk" | "out" | "app" | "cmd" | "bat" | "command" | "vbs" | "ps1")
				echo "<div class=\"exe file-shower\">" >> "${TEMP_GEN_FILENAME}"
				filetype="Executable" ;;

				## Audio
				"pcm" | "wav" | "aiff" | "mp3" | "aac" | "ogg" | "wma" | "flac" | "alac")
				echo "<div class=\"audio file-shower\">" >> "${TEMP_GEN_FILENAME}"
				filetype="Audio media"
				;;

				## Video
				"mp4" | "mov" | "avi" | "flv" | "mkv" | "wmv" | "avchd" | "webm" | "mpeg" | "m4a")
				echo "<div class=\"video file-shower\">" >> "${TEMP_GEN_FILENAME}"
				filetype="Video media"
				;;

				## Java JAR
				"jar")
				echo "<div class=\"jar file-shower\">" >> "${TEMP_GEN_FILENAME}"
				filetype="Java executable"
				;;

				## Default
				*)
				echo "<div class=\"file file-shower\">" >> "${TEMP_GEN_FILENAME}"
				filetype="File"
				;;
		  esac
			unset extension
		fi
	  EXITCODE=$?; checkerr;

		# Print title
		printf "<a href=\"${ADVGUILD_URL_BASE}/${file}\"><b>$(basename "${file}")</b></a><br>\n" >> "${TEMP_GEN_FILENAME}"

		# Print description
		toprint="$(jq -r "${FILE_NAME_JSON}.\"$(basename "${file}")\".Description" ${ADVGUILD_JSON})"
		if [ "${toprint}" != "null" ]; then
		  printf "<br>\n${toprint}\n<br>\n" >> ${TEMP_GEN_FILENAME}
		fi

		# Print archive message if archive.
		if [ -f "${file}" ] && [ "${filetype}" = "Archive" ]; then
      printf "<br>\nTo access the contents of this archive file, decompress it with a tool like <a href=\"https://www.7-zip.org/\"><b>7-zip</b></a>.<br>" >> "${TEMP_GEN_FILENAME}"
		fi

		# Misc breaks for files
		printf "\n<br>\n" >> "${TEMP_GEN_FILENAME}"

		if [ -d "${file}" ]; then
			ADVGUILD_URL_BASE="${ADVGUILD_URL_BASE}/${file}"
			FILE_NAME_JSON="${FILE_NAME_JSON}.\"$(basename "${file}")\""
			cd "${file}"
			((DIR_DEPTH++))
			genparse
			cd ..
			((DIR_DEPTH--))
			ADVGUILD_URL_BASE="$(dirname "${ADVGUILD_URL_BASE}")"
			FILE_NAME_JSON="${FILE_NAME_JSON%.*}"
		fi


		# File details
		if [ -f "${file}" ]; then
			printf "<a href=\"${ADVGUILD_URL_BASE}/${file}\" download>Download</a> | " >> "${TEMP_GEN_FILENAME}"
			printf "Type: ${filetype} | " >> "${TEMP_GEN_FILENAME}"
		  printf "Date and time: $(stat -c "%y" "${file}" | awk '{split($2,a,"."); print $1, a[1]}')" >> "${TEMP_GEN_FILENAME}"
		fi

		# Close container tag
		printf "</div>\n<br>\n\n" >> "${TEMP_GEN_FILENAME}"
	done
}

generate() {
	curdir="$(pwd)"

	# CHDIR into advguild root directory
  cd "${ADVGUILD_ABSOLUTE_PATH}"
	exitcode=$?; checkerr;

	# Now generate stuff
	genparse

	cd "${curdir}"
  unset curdir
}

main() {
	TEMP_GEN_FILENAME="$(pwd)/advguild.html.notcomplete"
	ADVGUILD_JSON="$(pwd)/advguild.json"

	printf "$INFO Reading \`${HEADER_TEMPLATE_PATH}'...\n"
	echo "<!DOCTYPE HTML>" > "${TEMP_GEN_FILENAME}"
	cat "${HEADER_TEMPLATE_PATH}" >> "${TEMP_GEN_FILENAME}"
	exitcode=$?; checkerr;

	printf "$INFO Starting to generate HTML code...\n"
	echo "<!--Beginning of generated HTML code-->" >> "${TEMP_GEN_FILENAME}"
	exitcode=$?; checkerr;

	generate

	echo "<br>Last synced on $(cat "./lastsync"). This page was generated on $(date) by $(hostname).<br>" >> "${TEMP_GEN_FILENAME}"
	exitcode=$?; checkerr;

	echo "<!--End of generated HTML code-->" >> "${TEMP_GEN_FILENAME}"
	exitcode=$?; checkerr;
	printf "$INFO Done generating HTML code.\n"

	printf "$INFO Reading \`${FOOTER_TEMPLATE_PATH}'...\n"
	cat "${FOOTER_TEMPLATE_PATH}" >> "${TEMP_GEN_FILENAME}"
	exitcode=$?; checkerr;

	printf "$INFO Moving \'${TEMP_GEN_FILENAME}' to final destination, \'${HTTPD_ROOT_ABSOLUTE_PATH}${FINAL_GEN_FILENAME}'...\n"
	mv "${TEMP_GEN_FILENAME}" "${HTTPD_ROOT_ABSOLUTE_PATH}${FINAL_GEN_FILENAME}"
	exitcode=$?; checkerr;

	printf "$INFO Changing file permissions as ${PERMISSIONS}...\n"
	chmod "${PERMISSIONS}" "${HTTPD_ROOT_ABSOLUTE_PATH}${FINAL_GEN_FILENAME}"
	exitcode=$?; checkerr;

	printf "$INFO Changing file group and owner as ${OWNER}...\n"
	chown "${OWNER}" "${HTTPD_ROOT_ABSOLUTE_PATH}${FINAL_GEN_FILENAME}"
	exitcode=$?; checkerr;

	printf "$INFO Done.\n";
	return 0
}

main
