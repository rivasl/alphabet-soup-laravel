# What is this about? #
This excercise is about to check the occurence of the word entered 
inside of one from 3 Alphabet Soups or matrices pre-loaded. 
More information about technical requirements in file "Test.pdf".

# How To #
Enter a word to search in a matrix, after select a matrix from matrices's panel and it will automatically show how many times the word appears in the selected matrix (occurrence).

# Installation guide #

## Dependencies ##
- **Apache**: 2.4.x
    - **rewrite_module**
- 
- **PHP**>= 7.0.0
    - **mcrypt**
- **Composer**: 1.1.3

## Installation ##
- Configure Apache virtual host for directory PATH_TO_PROJECT_IN_SERVER/public
- Copy project file to PATH_TO_PROJECT_IN_SERVER

```bash
cd PATH_TO_PROJECT_IN_SERVER
chmod -R 777 storage
chmod -R 777 bootstrap/cache
composer install
mv -v .env.example .env
php artisan key:generate
```

## Technology stack used ##
- **OS** Linux Mint 18.2 Sonya - Cinnamon 3.4.3
- **Apache** 2.4.18 (Ubuntu)1.5.6
- **PHP** 7.0.22-0ubuntu0.16.04.1 (cli) (NTS)
- **Laravel Framework** 5.5.28
- **Composer** 1.5.6
- **Twitter Bootstrap** 4.0
- **JQuery**
- **Inkscape** 0.91 r13725 (For logo development)
