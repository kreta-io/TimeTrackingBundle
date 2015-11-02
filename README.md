#KretaTimeTrackingBundle
>Time Tracking bundle of Kreta

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/920b3161-137d-41b5-a886-b982fab1ef95/mini.png)](https://insight.sensiolabs.com/projects/920b3161-137d-41b5-a886-b982fab1ef95)
[![Build Status](https://travis-ci.org/kreta-plugins/TimeTrackingBundle.svg?branch=master)](https://travis-ci.org/kreta-plugins/TimeTrackingBundle)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/kreta-plugins/TimeTrackingBundle/badges/quality-sTimeTrackingBundle.png?b=master)](https://scrutinizer-ci.com/g/kreta-plugins/TimeTrackingBundle/?branch=master)
[![Total Downloads](https://poser.pugx.org/kreta/time-tracking-bundle/downloads)](https://packagist.org/packages/kreta/time-tracking-bundle)
[![Latest Stable Version](https://poser.pugx.org/kreta/time-tracking-bundle/v/stable.svg)](https://packagist.org/packages/kreta/time-tracking-bundle)
[![Latest Unstable Version](https://poser.pugx.org/kreta/time-tracking-bundle/v/unstable.svg)](https://packagist.org/packages/kreta/time-tracking-bundle)

##Tests
This bundle is completely tested by **[PHPSpec][1], SpecBDD framework for PHP**.

Because you want to contribute or simply because you want to throw the tests, you have to type the following command
in your terminal.
```
$ vendor/bin/phpspec run -fpretty
```
##Contributing
This bundle follows PHP coding standards, so pull requests need to execute the Fabien Potencier's [PHP-CS-Fixer][5]
and Marc Morera's [PHP-Formatter][6]. Furthermore, if the PR creates some not-PHP file remember that you have to put
the license header manually. In order to simplify we provide a Composer script that wraps all the commands related with
this process.
```bash
$ composer run-script cs
```

There is also a policy for contributing to this project. Pull requests must be explained step by step to make the
review process easy in order to accept and merge them. New methods or code improvements must come paired with
[PHPSpec][1] tests.

If you would like to contribute it is a good point to follow Symfony contribution standards, so please read the
[Contributing Code][2] in the project documentation. If you are submitting a pull request, please follow the guidelines
in the [Submitting a Patch][3] section and use the [Pull Request Template][4].

If you have any doubt or maybe you want to share some opinion, you can use our **Gitter chat**.

[![Gitter](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/kreta/kreta?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

##Credits
Kreta time tracking bundle is created by:
>
**@benatespina** - [benatespina@gmail.com](mailto:benatespina@gmail.com)<br>
**@gorkalaucirica** - [gorka.lauzirika@gmail.com](mailto:gorka.lauzirika@gmail.com)

##Licensing Options
[![License](https://poser.pugx.org/kreta/time-tracking-bundle/license.svg)](https://github.com/kreta-plugins/TimeTrackingBundle/blob/master/LICENSE)

[1]: http://www.phpspec.net/
[2]: http://symfony.com/doc/current/contributing/code/index.html
[3]: http://symfony.com/doc/current/contributing/code/patches.html#check-list
[4]: http://symfony.com/doc/current/contributing/code/patches.html#make-a-pull-request
[5]: http://cs.sensiolabs.org/
[6]: https://github.com/mmoreram/php-formatter
