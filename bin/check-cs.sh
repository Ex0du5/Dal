#!/bin/bash

CS=$(php php-cs-fixer fix -v ../)
EXIT=$?

if [[ $? = 1 ]];
then
    echo -e '\E[31m'"$CS\033[1m\033[0m";
    printf "\n";
    echo -e '\E[31;47m'"\033[1mCoding standards: fixer applied successfully !\033[0m"
    printf "\n";
else
    echo -e '\E[32m'"\033[1mCoding standards: nothing to do!\033[0m"
    printf "\n";
fi

echo -e $CS

exit $EXIT
