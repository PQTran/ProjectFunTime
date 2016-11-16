# ProjectFunTime
CPSC 304 project - PHP webpage management system for database

## Steps to get this running on your system (Linux/MacOSX)

Make sure you have php version >=7.0.0 and composer version >=1.1.0

If upgrading to PHP version 7.0, update path in ~/.bash_profile by running:
    'sudo nano ~/.bash_profile'
adding this path: 
    export PATH=/usr/local/php5/bin:$PATH

Please use this link to get composer https://getcomposer.org/download/

Clone this repo

In the root folder, run 'composer update'. This will install project dependencies.

If composer command not found: find the location of composer.phar or redownload and run: 
    'sudo mv composer.phar /usr/local/bin/composer'

Navigate to public folder and run 'php -S localhost:8000'.

Goto localhost:8000 on your favorite web browser.
