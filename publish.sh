#!/bin/bash

	host='neroserver3';	
	user='root';
	path='/var/www/eumate.com/test';
	first='FALSE';

usage="$(basename $0) [-h] [-f]  -- PUBLISH ONLINE FOR PFF
	
	this file must be in app directory!!
	works only with ssh and unix server.
	
    where:

        -h  show this help text
        -f  first pulic (include all config).

      ";

    while getopts ':hf' option; do
      case "$option" in
        h) echo "$usage"
           exit
           ;;
        f) first='TRUE'
			;;
        ?) printf "illegal option: '%s'\n" "$OPTARG" >&2
           echo "$usage" >&2
           exit 1
           ;;
      esac
    done



cd ..

cmd=" rsync -lrtDvz  ";

if [ $first = "FALSE" ]; then
cmd="$cmd --exclude 'app/config/config.user.php' --exclude 'app/public/admin/include/dbcommon.php' ";
fi 

cmd="$cmd --exclude '.git*' --exclude '.git/*' --exclude '.svn*' --exclude '.svn/*' --exclude 'app/.git*' --exclude 'app/.git/*' --exclude 'app/views/smarty/compiled_templates/*' --exclude 'app/autoload.php' . $user@$host:$path/ ";

eval $cmd

ssh $user@$host "chown -R root:www-data $path" 
ssh $user@$host "chmod -R 770 $path/app/proxies"
ssh $user@$host "chmod -R 770 $path/app/views/smarty/compiled_templates"
ssh $user@$host "chmod -R 770 $path/app/public"

ssh $user@$host "cd $path/scripts/ && ./doctrine orm:generate-proxies"
ssh $user@$host "cd $path/scripts/ && ./generateAutoload.sh"

echo "Finito!"

