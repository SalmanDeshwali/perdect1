<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table, th, td {
  background: whitesmoke;
  border: 2px solid black;
  border-collapse: collapse ;
}

table.center {
  margin-left: auto; 
  margin-right: auto;
}
</style>
</head>
<body>
<table class="center" >
  <tbody>
  <tr>
    <th colspan="3">PHP_______STRING______FUNCTION</th>
  </tr>
 <tr>
    <th>Name</th>
    <th>Code</th> 
  </tr>
<tr>
  <td><b>ord()</b></td>
  <td>"a"</td>
</tr>
<tr>
  <td colspan="2"><?php echo ord("a") ?></td>
</tr>
<tr>
  <td>number_format()</td>
  <td>("100100100100",2)</td>
</tr>
<tr>
  <td colspan="2"><?php echo number_format("100100100100",2);?> </td>
</tr>
<tr>
  <td>join()</td>
  <td>array('khan','Dehwali','Merta')</td>
</tr>
<tr>
  <td colspan="2"><?php $arr = array('khan','Dehwali','Merta'); echo join(" ",$arr); ?></td>
</tr>
<tr>
  <td>implode()</td>
  <td>array('Hello','World!','Beautiful','Day!');</td>
</tr>
<tr>
  <td colspan="2"><?php $ary=array('Hello','World!','Beautiful','Day!'); echo implode(" ",$ary); ?></td>
</tr>
<tr>
  <td>html_entity_decode()</td>
  <td>'&lt;a href=&quot;https://www.w3schools.com&quot;&gt;w3schools.com&lt;/a&gt;';
</td>
</tr>
<tr>
  <td colspan="2"><?php
$str = '&lt;a href=&quot;https://www.w3schools.com&quot;&gt;w3schools.com&lt;/a&gt;';
echo html_entity_decode($str);
?>
</td>
</tr>
<tr>
  <td>htmlentities()</td>
  <td>'a href="https://www.w3schools.com">Go to w3schools.com/a';
</td>
</tr>
<tr>
  <td colspan="2"><?php
$str = '<a href="https://www.w3schools.com">Go to w3schools.com</a>';
echo htmlentities($str);
?></td>
</tr>
<tr>
  <td>htmlspecialchars_decode()</td>
  <td>"This is some &lt;b&gt;bold&lt;/b&gt; text.";
</td>
</tr>
<tr>
  <td colspan="2"><?php
$str = "This is some &lt;b&gt;bold&lt;/b&gt; text.";
echo htmlspecialchars_decode($str);
?></td>
</tr>
<tr>
  <td>str_pad()</td>
  <td>"jaipur";
</td>
</tr>
<tr>
  <td colspan="2"><?php
$str = "jaipur";
echo str_pad($str,10,"0");
?>
</td>
</tr>
<tr>
  <td>str_repeat()</td>
  <td>("perdect.",4)</td>
</tr>
<tr>
  <td colspan="2"><?php
echo str_repeat("perdect.",4);
?>
</td>
</tr>
<tr>
  <td>str_word_count()</td>
  <td>("Perdect Jaipur!");
</td>
</tr>
<tr>
  <td colspan="2"><?php
echo str_word_count("Perdect Jaipur!");
?>
</td>
</tr>
<tr>
  <td>strcmp()</td>
  <td>("Hello world!","world");</td>
</tr>
<tr>
  <td colspan="2"><?php
echo strchr("Hello world!","world");
?></td>
</tr>
<tr>
  <td><b>strcmp()</b></td>
  <td>("ABC","AB");
</td>
</tr>
<tr>
  <td colspan="2"><?php
echo strcmp("ABC","AB");
?>
</td>
</tr>
<tr>
  <td><b>strip_tags()</b></td>
  <td>("Hello <b>world!</b>");
</td>
</tr>
<tr>
  <td colspan="2"><?php
echo strip_tags("Hello <b>world!</b>");
?>
</td>
</tr>
<tr>
  <td><b>stripcslashes()</b></td>
  <td>("Hello \World!");</td>
</tr>
<tr>
  <td colspan="2"><?php
echo stripcslashes("Hello \World!");
?>
</td>
</tr>
<tr>
  <td><b>addslashes()</b></td>
  <td>('What does "yolo" mean?');</td>
</tr>
<tr>
  <td colspan="2"><?php
$str = addslashes('What does "yolo" mean?');
echo($str);
?>
</td>
</tr>
<tr>
  <td><b>stristr()</b></td>
  <td>("Hello world!","WORLD")</td>
</tr>
<tr>
  <td colspan="2"><?php
echo stristr("Hello world!","WORLD");
?>
</td>
</tr>
<tr>
  <td><b>substr_replace()</b></td>
  <td>("Hello","world",0);</td>
</tr>
<tr>
  <td colspan="2"><?php
echo substr_replace("Hello","world",0);
?>
</td>
</tr>
<tr>
  <td><b>ucfirst()</b></td>
  <td>("hello world!");</td>
</tr>
<tr>
  <td colspan="2"><?php
echo ucfirst("hello world!");
?></td>
</tr>
<tr>
  <td><b>vprintf()</b></td>
  <td>$number = 9;
$str = "Beijing";
vprintf("There are %u million bicycles in %s.",array($number,$str));</td>
</tr>
<tr>
  <td colspan="2"><?php
$number = 9;
$str = "Beijing";
vprintf("There are %u million bicycles in %s.",array($number,$str));
?>
</td>
</tr>
<tr>
  <td><b>printf()</b></td>
  <td>$number = 9;
$str = "Beijing";
printf("There are %u million bicycles in %s.",$number,$str);</td>
</tr>
<tr>
  <td colspan="2"><?php
$number = 9;
$str = "Beijing";
printf("There are %u million bicycles in %s.",$number,$str);
?>
</td>
</tr>
<tr>
  <td><b>wordwrap()</b></td>
  <td>"An example of a long word is: Supercalifragulistic";
</td>
</tr>
<tr>
  <td colspan="2"><?php
$str = "An example of a long word is: Supercalifragulistic";
echo wordwrap($str,15,"<br>\n");
?></td>
</tr>
</table>
</tbody>
</body>
</html>