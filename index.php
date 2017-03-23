<?php
$t = $_GET['t'];
if($t>5) {
?>                          ,     \    /      
                         / \    )\__/(     / \   
                        /   \  (_\  /_)   /   \               
     __________________/_____\__\@  @/___/_____\_________________
     |                          |\../|                          |
     |                           \VV/                           |
     |          Hello. Do you like FSG-DataProtocol?            |
     |                                                          |
     |              Please star us. Thank you.                  |
     |                            <p>&#55357;&#56834;</p>                            |
     |__________________________________________________________|
                   |    /\ /      \\       \ /\    |
                   |  /   V        ))       V   \  |
                   |/     `       //        '     \|
                   `              V                ' 
<?php
else {
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>FSG-DataProtocol</title>
		<meta name="description" content="Data-Transfer-Protocol made by the FSG-Pfullingen Computer Science Club 2017." />
		<meta name="keywords" content="python, github, raspberry pi, transver, protocol, data, fsg pfullingen, computer science club" />
		<meta name="author" content="PartyGuy01" />
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="script.js"></script>
        <link href="style.css" type="text/css" rel="stylesheet">
	</head>
	<body>
	<div class="wrapper">
		    <a href="https://github.com/GQdeltex/FSG-DataProtocol"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/38ef81f8aca64bb9a64448d0d70f1308ef5341ab/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f6461726b626c75655f3132313632312e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png"></a>
		<div class="ph" style="height: 376px;"></div>
		<center><div class="block-reveal">
		    <div class="block"></div>
		    <h1>FSG-DataProtocol</h1>
		</div></center>
<div><div class="arrow animated bounce"></div></div>
		<script type="text/javascript">
var firstTime = true;
var message = "Cool. You tried it!";
var later = "\n\nThis is the real easter egg.\n\nThe first message isn't a real easter egg because the web page says what to do.\n\nThis one, however, is a message revealed only if the number '3' is hovered over more than once.\n\n "
function MouseoverMessageInAlertBox()
{
   if(firstTime) { alert(message); }
   else { alert(later); }
   firstTime = false;
}
</script>




		
</div>
<div class="footer">
	The Data-Transfer-Protocol made by the <a href="http://fsg-pfullingen.de/" target="_blank">FSG-Pfullingen</a> Computer Science Club 2017.<br>
	<a href="https://badge.fury.io/gh/GQdeltex%2FFSG-DataProtocol"><img src="https://badge.fury.io/gh/GQdeltex%2FFSG-DataProtocol.svg" alt="More infos on GitHub"></a>
	<br>
	
<!-- LikeBtn.com BEGIN -->
<span class="likebtn-wrapper" data-theme="disk" data-i18n_like="Like" data-white_label="true" data-identifier="fsgdp01" data-dislike_enabled="false" data-icon_dislike_show="false" data-voting_frequency="555555" data-counter_frmt="km" data-item_url="http://partyguy01.github.io/fsg-dataprotocol-website" data-item_title="FSG-DataProtocol" data-item_description="The Data-Transfer-Protocol made by the FSG-Pfullingen Computer Science Club 2017."></span>
<script>(function(d,e,s){if(d.getElementById("likebtn_wjs"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id="likebtn_wjs";a.src=s;m.parentNode.insertBefore(a, m)})(document,"script","//w.likebtn.com/js/w/widget.js");</script>
<!-- LikeBtn.com END -->
	<small><a href="http://fsgdp.gq/?t=<?php echo $t++; ?>">Back to top</a></small>
	<br><script type="text/javascript" src="http://counter.websiteout.net/js/35/0/0/0"></script>
</div>

	</body>
</html>
<?php } ?>
