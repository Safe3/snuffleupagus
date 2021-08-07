--TEST--
Broken configuration, cidr for ipv6 is too big, that will `mod` to 25.
(13337%128 = 25)
--SKIPIF--
<?php if (!extension_loaded("snuffleupagus")) print "skip"; ?>
<?php if (PHP_VERSION_ID >= 80000) print "skip"; ?>
--INI--
sp.configuration_file={PWD}/config/broken_conf_invalid_cidr6_too_big.ini
--FILE--
--EXPECT--

Fatal error: [snuffleupagus][0.0.0.0][config][log] Invalid configuration file in Unknown on line 0
Could not startup.