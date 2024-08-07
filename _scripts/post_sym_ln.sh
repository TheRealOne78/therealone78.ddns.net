# Chdir to _site
cd ./_site/ || exit 1

# Link
for d in "advguildRoot/" "gameRes/TIC TAC TOE" "mc/" "music.git/" "torrents/" "uploads/" ; do
    ln --symbolic --relative "../${d}" "${d}"
done
