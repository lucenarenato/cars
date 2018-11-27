#!/bin/bash

##ssh mudar versao php no mac

echo hello world    prints out “Ola Hackintosh” in the terminal

# Get SMART status of main drive
diskutil info disk0 | grep -i smart

# Get the model of the machine in question
system_profiler SPHardwareDataType | grep -i Identifier


sudo export PATH=/usr/local/php5/bin:$PATH

php -v


# Renato Lucena 11/2018
# chmod +x diagnostics.sh and use ./diagnostics.sh
# curl -s https://php-osx.liip.ch/install.sh | bash -s 7.2
# <?php phpinfo();?>

