<!--  files -->
<?php
// 1. (warning)if file not found warning not stop script
include_once "index.php";
// 2. (notice , informational,warning) not stop script
echo $name;
// 3. (syntax,parse   forget({} , " ' ; )) stop script

// 4. (fetal) if file not found or function not found disappear warning + fetal    stop script
require_once "index.php";
