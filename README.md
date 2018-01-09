CodeIgniter-Imgix-Helper
=========================

Powerful image processing, simple API
Helper to optimize, deliver, and cache your entire image library for fast-loading, stress-free websites and apps

Requirements
------------
* CodeIgniter should be configured to load `url_helper` automatically.

Installation
------------
Copy `imgix_helper.php` into the `applications/helpers` directory.

Configuration
-------------
You need to set the imgix helper to run on codeigniter . See `applications/config/autoload.php` 
search code $autoload ['helper'] = array(''); and add imgix inside the helper
example :
> $autoload ['helper'] = array('imgix');


```php
function imgix($url, $params = array()) {
        $url = trim(str_replace(array(base_url()), '', $url), '/');
		//change with your domain name
        if(base_url()=="https://yourwebsite.com/"){
		//change with the domain name you registered in imgix
            $url = 'https://yourwebsite.imgix.net/' . $url . '?' . http_build_query($params);
        }
        return $url;
    }
```

Register imgix
=====
https://dashboard.imgix.com/signup

Usage
=====

you can use by calling imgix function :
-----------------------------------

```php
imgix('imagefiledirectory/image.png,array(''));

# Results in
https://yourwebsite.imgix.net/imagefiledirectory/image.png
<img src="<?php echo imgix('imagefiledirectory/image.png',array('')); ?>">
```
imgix with size
```php
imgix('imagefiledirectory/image.png,array('w' => 100));

# Results in
https://yourwebsite.imgix.net/imagefiledirectory/image.png?w=100
```
```php
imgix('imagefiledirectory/image.png,array('w' => 100,'h'=>100));

# Results in
https://yourwebsite.imgix.net/imagefiledirectory/image.png?w=100&h=100
```

imgix ellipse
```php
imgix('imagefiledirectory/image.png,array('mask'=> 'ellipse', 'w' => 100,'h'=>100));

# Results in
https://yourwebsite.imgix.net/assets/images/placeholder.jpg?mask=ellipse&w=100&h=100
```
for more complete reference https://docs.imgix.com/apis/url 
You probably got the hang of it.
