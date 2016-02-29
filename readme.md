# Repo created related to strange caching issues using gettext & nginx
This package: https://github.com/xinax/laravel-gettext

Theese issues:

 - https://github.com/xinax/laravel-gettext/issues/61
 - https://github.com/xinax/laravel-gettext/issues/20

# How to install this repo to reproduce the error

 - cd into your projects folder
 - git clone https://github.com/canfiax/laravel-gettext-cache-issue
 - edit your homestead.yaml file (running `homestead edit` should bring this up) to point 'test.app' to laravel-gettext-cache-issue folder
 - edit your hosts file to point test.app to your homestead server (on osx you can write `sudo nano /etc/hosts` and add this line: `192.168.10.10 test.app`)
 - run `homestead halt && homestead up --provision` to add provision the test.app project
 - run `homestead ssh` and cd into the `laravel-gettext-cache-issue` folder.
 - run `composer install`
 - You should now be able to see the welcome screen of `http://test.app`

# How to reproduce the error
 - Navigate to `http://test.app/`. The content should be in english and say "Laravel 5"
 - Now click Danish below the header. You should now be navigated to `http://test.app/da_DK` and the header should say `Laravel 5 på dansk'. Hurray! Gettext seems to be working
 - Now refresh the page, using CMR+R on OSX or F5 on Windows. The string is back to english. What happend?
 - If you switch back to english, and then click danish again, the correct translation will show up.