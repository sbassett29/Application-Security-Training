# Application Security Training

Some lab/example files to be used with a basic application security training
session.  It should go without saying that this code exhibits vulnerabilities
and should be used for demonstration purposes only.  It should **never** be run 
in any kind of production capacity with exposure to anyone outside of a 
targeted audidence (i.e. individuals receiving said security training).

## Getting Started

Simply clone this repo into the web root of a LAMP, LEMP or similar PHP
environment.  Tested with various flavors of of PHP 7.x (7.1.16, 7.2.12).

## Deployment

1. Install a LAMP, LEMP or similar stack (the [greyltc/lamp Docker image](https://hub.docker.com/r/greyltc/lamp/) works
nicely IMO).
2. Clone the code into the document root of the environment from (1):
```
git clone https://github.com/sbassett29/Application-Security-Training.git .
```
3. Step through examples as listed at `secdemos/index.php` - not that certain
files have helpful one-line comments near the top as to whether they should be
run in the browser or via the cli.

## Authors

* **Scott Bassett** - [sbassett29](https://github.com/sbassett29)

## License

This project is licensed under the GNU General Public License v3.0 - see the
[LICENSE](LICENSE) file for details.

## Additional code used for demonstrations

* MediaWiki Core [License](https://gerrit.wikimedia.org/r/plugins/gitiles/mediawiki/core/+/refs/heads/master/COPYING)
* jQuery [License](https://jquery.org/license/)
* StackOverflow [Reference](https://stackoverflow.com/questions/25844354/timing-attack-in-php)
