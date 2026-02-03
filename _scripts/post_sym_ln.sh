# Chdir to _site
cd ./_site/ || exit 1

# Link
#for d in "advguildRoot" "gameRes/TIC TAC TOE" "mc" "music.git" "torrents" "uploads" ; do
for d in "advguildRoot" "gameRes/TIC TAC TOE" "torrents" "uploads" ; do
    ln --symbolic --relative "../${d}" "${d}"
done
