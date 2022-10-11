The «[**Backend Login Autocomplete**](https://mage2.pro/t/124)» module for Magento 2 makes the standard Magento 2 backend login form more useful in modern browsers (like Google Chrome).  
The module is **free** and **open source**.

The default Magento 2 backend login form behavior in Google Chrome is very odd and is shown below:

![](https://mage2.pro/uploads/default/original/1X/e88546cad209a8f0d0074aa9ed2da0de96ab1de1.png)

As you can see, the behavior is inconsistent: the «**Username**» field is not autocompleted, but the «**Password**» field is autocompleted (sometimes with a wrong value).

The «**Backend Login Autocomplete**» extension makes the backend login form behavior more consistent and configurable.
It adds an option to enable or disable autocomplete for the backend login form:

![](https://mage2.pro/uploads/default/original/1X/525b2a36af6b0cbfaee4a6f6f3c6b2a346574538.png)

![](https://mage2.pro/uploads/default/original/1X/9bb527ababb6b6d86ed5bee2381269b2f9a88ba1.png)

![](https://mage2.pro/uploads/default/original/1X/821d029ce8276012d9ef38b17070e33815135cbc.png)

## Video
https://www.youtube.com/watch?v=LRYGj0Q5rag

## How to install
[Hire me in Upwork](https://www.upwork.com/fl/mage2pro), and I will: 
- install and configure the module properly on your website
- answer your questions
- solve compatiblity problems with third-party checkout, shipping, marketing modules
- implement new features you need 

### 2. Self-installation
```
bin/magento maintenance:enable
rm -f composer.lock
composer clear-cache
composer require mage2pro/backend-login-autocomplete:*
bin/magento setup:upgrade
bin/magento cache:enable
rm -rf var/di var/generation generated/code
bin/magento setup:di:compile
rm -rf pub/static/*
bin/magento setup:static-content:deploy -f en_US <additional locales>
bin/magento maintenance:disable
```

## How to update
```
bin/magento maintenance:enable
composer remove mage2pro/backend-login-autocomplete
rm -f composer.lock
composer clear-cache
composer require mage2pro/backend-login-autocomplete:*
bin/magento setup:upgrade
bin/magento cache:enable
rm -rf var/di var/generation generated/code
bin/magento setup:di:compile
rm -rf pub/static/*
bin/magento setup:static-content:deploy -f en_US <additional locales>
bin/magento maintenance:disable
```
