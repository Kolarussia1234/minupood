<?php
/*
* Default copyright laws apply.
* Veebipoed retains all rights to this source code and nobody else may reproduce, distribute
* or create derivative works from this work.
*
* Permitted:
* - Commercial Use
* This software and derivatives may be used for commercial purposes.
* - Private Use
* You may use and modify the software without distributing it.
*
* Forbidden:
* - Distribution
* You may not distribute this software.
* - Modification
* This software may not be modified.
* - Sublicensing
* You may not grant a sublicense to modify and distribute this software to third parties not included in the license.
*
*  @author    Veebipoed.ee
*  @copyright 2015 Veebipoed.ee
*  @license   Veebipoed.ee
*/

header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");

header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

header("Location: ../");
exit;
