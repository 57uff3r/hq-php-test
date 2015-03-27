# For reviewers

- I've just deployed everything to my test server: http://hq-test.57uff3r.net/
- Everything is based on Yii framework. I useed old version 1.1 cuz I spent lots of hours with this version, so it was fastest way for me to show you working app
- I put almost all code in one file https://github.com/57uff3r/hq-php-test/blob/master/project/backend/models/Order.php Not very cool solution, but again — I wanna  show everything as soon as possible
- All job with libraries is inside of one file. It's very easy to add some extra code in this file. But for real project I will use patters (eg Factory) — that's real way to write extendable code in this case
- I used TWIG template engine (which is really cool and looks like Djanto temlate language, which is also cool)
- I added Twitter Bootstrap with Bower package manager
- Template code is there https://github.com/57uff3r/hq-php-test/blob/master/project/backend/views/site/index.twig
- I added a couple of unit tests https://github.com/57uff3r/hq-php-test/blob/master/project/backend/tests/unit/OrderTest.php Yes, I can add more tests, but there is only couple  just to show  I know what is it :)
- DB config is there https://github.com/57uff3r/hq-php-test/blob/master/project/backend/config/main.php
- Some more configs is there https://github.com/57uff3r/hq-php-test/blob/master/project/backend/config/base.php including PayPal and Braintree access params
- You need  phpunit to run tests
- DB migrations is there https://github.com/57uff3r/hq-php-test/blob/master/project/backend/migrations/00-init.sql I'm using MariaDB so SQL has to be compatible with MySQL
- Controller is there https://github.com/57uff3r/hq-php-test/blob/master/project/backend/controllers/SiteController.php
- You can grab some test CC numbers here http://www.freeformatter.com/credit-card-number-generator-validator.html
- Braintree test cards are there https://support.braintreepayments.com/customer/portal/articles/1080452-testing-in-the-sandbox
- If you will try to run this code on your local computer
    - set write permissions to runtime dir
    - update db settings in config
    - Server root for this app has to be in www dir
- Yes, my code a bit straightforward and dirty (eg composer packages in repo, all logic in model file etc - I wrote this code after my current job :) )

Have a good friday && weekends :)