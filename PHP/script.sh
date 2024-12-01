#!/bin/bash

for d in *; do
  if [[ "$d" != "script.sh" ]]; then
    FILE=$(basename $d .php)
    mkdir $FILE
    mv $d $FILE
  fi
done
  


