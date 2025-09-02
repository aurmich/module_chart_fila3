#!/bin/bash
# This script finds all files with Git merge conflicts and resolves them
# by accepting the 'current' version of the file (--ours).

PROJECT_ROOT="/var/www/html/_bases/base_techplanner_fila3_mono"

# Change to the project root directory to ensure git commands work correctly
cd "$PROJECT_ROOT" || exit

echo "Searching for conflicted files..."

# Use grep to find files with conflict markers and process them
# The -l option prints only the names of files with matches
# The -r option searches recursively
# The --null option prints a null character after each filename to handle spaces
grep -lr '<<< HEAD' . | while IFS= read -r file; do
    if [ -f "$file" ]; then
        echo "Resolving conflict in $file by keeping the current version..."
        git checkout --ours "$file"
        git add "$file"
    fi
done

echo "Conflict resolution finished."
