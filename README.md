# Akeneo badges

[![Build Status](https://travis-ci.org/jmleroux/akeneo-badges.svg?branch=master)](https://travis-ci.org/jmleroux/akeneo-badges)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/jmleroux/akeneo-badges/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/jmleroux/akeneo-badges/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/jmleroux/akeneo-badges/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/jmleroux/akeneo-badges/?branch=master)

Test application to enable Akeneo compatibility badges

Usage : to get a badge, you must request an svg image with a specific format {edition}-{version}-[compatibility]

| Image name | Badge                           |
|------------|---------------------------------|
| CE-1.5     | OK badge for Pim Community 1.5  |
| EE-1.5-ok  | OK badge for Pim Enterprise 1.5 |
| CE-1.5-ko  | KO badge for Pim Community 1.5  |

An example of requested URL : http://badges.akeneo.com/badge/CE-1.5.0-ok.svg
