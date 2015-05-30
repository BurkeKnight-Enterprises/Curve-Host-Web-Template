<?
include('geturl.php');
?>

<script type="text/javascript">

function ismaxlength(obj){
var mlength=obj.getAttribute? parseInt(obj.getAttribute("maxlength")) : ""
if (obj.getAttribute && obj.value.length>mlength)
obj.value=obj.value.substring(0,mlength)
}

</script>

<?PHP
$id = md5(rand(6000,99999999999999991000));
?>

<td style="text-align: left;" colspan="21">
<font size="-1"><span style="font-family: Helvetica,Arial,sans-serif;">
<form method=post action="http://securesignup.net/register2.php">
<table align="center">
<tr><th style="text-align: left;">Username<td><input type=text name=username size=30 value=""  maxlength="16" onkeyup="return ismaxlength(this)">
<tr><th>&nbsp;<td>&nbsp;
<tr><th style="text-align: left;">Password<td><input type=password name=password size=30 maxlength="8" onkeyup="return ismaxlength(this)">
<tr><th>&nbsp;<td>&nbsp;
<tr><th style="text-align: left;">Email Address<td><input type=text name=email size=30 value="">
<tr><th style="text-align: left;"><td>
<tr><th>&nbsp;<td>
<tr><th style="text-align: left;">Auto-Install Script<td>
<select size="1" name="script">
                                    <optgroup label="No script">
                                       <option value="" selected="selected">Do not install a script</option>
                                    </optgroup>
                                    <optgroup label="Blog / CMS">
                                       <option value="wordpress">WordPress Blog</option>
                                       <option value="joomla">Joomla! CMS</option>
                                       <option value="drupal">Drupal CMS</option>
                                       <option value="bigace">BigAce CMS</option>
                                       <option value="nucleus">Nucleus CMS</option>
                                       <option value="typo3">Typo3 CMS</option>
                                       <option value="b2evolution">B2Evolution Blog & CMS</option>
                                       <option value="geeklog">GeekLog CMS</option>
                                       <option value="kajona">Kajona CMS</option>
                                       <option value="concrete5">Concrete5 CMS</option>
                                       <option value="pivot">Pivot Blog & CMS</option>
                                       <option value="textpattern">TextPattern CMS</option>
                                       <option value="tikiwikigroup">Tiki Wiki CMS Groupware</option>
                                       <option value="modxrevo">MODX Revolution CMS</option>
                                       <option value="pligg">Pligg CMS</option>
                                    </optgroup>
                                    <optgroup label="Forum">
                                       <option value="phpbb">phpBB Forum</option>
                                       <option value="mybb">MyBB Forum</option>
                                       <option value="vanilla">Vanilla Forum</option>
                                    </optgroup>
                                    <optgroup label="E-Commerce">
                                       <option value="opencart">OpenCart E-commerce Shop</option>
                                       <option value="oscommerce">OsCommerce E-commerce Shop</option>
                                       <option value="zencart">ZebCart E-commerce Shop</option>
                                       <option value="hhgmultistore">HHG MultiStore E-commerce Shop</option>
                                       <option value="cubecart">CubeCard E-commerce Shop</option>
                                    </optgroup>
                                    <optgroup label="Others">
                                        <option value="webauction">Web Auction</option>
                                        <option value="faqmaster">FAQ Master</option>
                                    </optgroup>
                                 </select></td>
<tr><th>&nbsp;<td>
<tr><th style="text-align: left;">Site Category<td><select size="1" name="website_category">
<option>Personal</option>
<option>Business</option>
<option>Hobby</option>
<option>Forum</option>
<option>Adult</option>
<option>Dating</option>
<option>Software / Download</option>
</select>
</td>
<tr><th style="text-align: left;"><td>
<tr><th>&nbsp;<td>
<tr><th style="text-align: left;">Site Language<td>
<select size="1" name="website_language">
<option>English</option>
<option>Non-English</option>
</select>
</td>
<tr><th>&nbsp;<td>&nbsp;
<input type=hidden name=id value="<?PHP echo $id; ?>">
<tr><th style="text-align: left;">Security Code<td><img src="http://securesignup.net/image.php?id=<?PHP echo $id; ?>">
<tr><th>&nbsp;<td>&nbsp;
<tr><th style="text-align: left;">Enter Security Code<td><input type=text name=number size=30>
<tr><th>&nbsp;<td>&nbsp;
<tr><th colspan=2><input type=submit value="Register" name=submit>
</table>
</form>
</span>
<br style="font-family: Helvetica,Arial,sans-serif;">
</font>
<br style="font-family: Helvetica,Arial,sans-serif;">
</span></font>
<center><font size="-1"><span style="font-family: Helvetica,Arial,sans-serif;">By signing up for <? echo "$yourdomain" ;?> free hosting, you accept and agree to our <a href="terms.php">Terms of Service</a></span></font></center>

</td>
