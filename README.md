Provides a bridge to expose a service for the [Google Analytics Measurement Protocol Library][gamp-on-github] 
from the team at[The Iconic][theiconinc-on-github].  Currently, this is a module for developers
only.  Please see [the library instructions][gamp-on-github] for instructions on using the Measurement
Protocol. The service is available with `\Drupal::service('gamp')`.

Copyright (C) 2017 Chris Rockwell (@chrisrockwell)

# License

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License along
with this program; if not, write to the Free Software Foundation, Inc.,
51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.

# Installation

 1. Install module as per [standard procedure][drupal-module-install].
 2. This module has composer dependencies, see [instructions][composer-dependencies]
    for information on how to resolve these dependencies.
    
# Usage
 1. Visit /admin/config/services/ga_measurement_protocol and enter your 
 Universal Analytics Tracking ID
 
#Similar Modules
 There are modules that partially implement the Measurement Protocol; however, the Google Analytics Measurement
 Protocol fully supports all event types, this module simply provides the bridge.
 1. https://www.drupal.org/sandbox/nvahalik/2189881; Sandbox; 7.x only; appears to only support the Event type.
 2. https://www.drupal.org/project/ga_push; Requires google_analytics; currently doesn't support all types.
 3. https://www.drupal.org/project/commerce_google_analytics; requires google_analytics and ga_push; only supports 
 eCommerce type

[drupal-module-install]: https://www.drupal.org/docs/8/extending-drupal/installing-contributed-modules "Installing Contributed Modules"
[composer-dependencies]: https://www.drupal.org/docs/8/extending-drupal/installing-modules-composer-dependencies "Installing modules' Composer dependencies"
[gamp-on-github]: https://github.com/theiconic/php-ga-measurement-protocol "Google Analytics Measurement Protocol on Github"
[theiconinc-on-github]: https://github.com/theiconic "The Iconic on Github"