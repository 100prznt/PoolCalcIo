<?php
/**
 * Created by PhpStorm.
 * User: Ruemmler, Elias
 * Date: 22.03.2019
 * Time: 14:49
 */

require_once('MetaInfo.php');
require_once('PageBuilder.php');

$meta = new MetaInfo();
$builder = new PageBuilder($meta);

?>

<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#">

<?php
//Header
echo $builder->GetHeader();

?>

<body>

<?php
//Content

//Scripts

?>

</body>
</html>