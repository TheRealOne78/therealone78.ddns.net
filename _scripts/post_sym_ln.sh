#!/usr/bin/env sh

## Copyright_notice ####################################################
#                                                                      #
# SPDX-License-Identifier: GPL-3.0-or-later                            #
#                                                                      #
# Copyright (C) 2020-2026 TheRealOne78 <bajcsielias78@gmail.com>       #
#                                                                      #
# This file is part of the therealone78.ddns.net website project       #
#                                                                      #
# This is free software: you can redistribute it and/or modify         #
# it under the terms of the GNU General Public License as published by #
# the Free Software Foundation, either version 3 of the License, or    #
# (at your option) any later version.                                  #
#                                                                      #
# This software is distributed in the hope that it will be useful,     #
# but WITHOUT ANY WARRANTY; without even the implied warranty of       #
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the        #
# GNU General Public License for more details.                         #
#                                                                      #
# You should have received a copy of the GNU General Public License    #
# along with this project.  If not, see <http://www.gnu.org/licenses/>.#
#                                                                      #
########################################################################

# Check if _site/ exists
[ -d "./_site/" ] || exit 1

# Link
for d in "advguildRoot" "gameRes/TIC TAC TOE" "torrents" "uploads" ; do
    { [ -f "$d" ] || [ -d "$d" ]; } && ln -s "../${d}" "./_site/${d}"
done
