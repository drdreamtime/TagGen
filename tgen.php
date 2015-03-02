<?PHP require_once('header.php'); ?>
    <!-- Begin page content -->
    <div class="container">
      <div class="page-header">
        <h1>ASMR Tag Generator</h1>
      </div>
      <h4>[Talking Style][Audio Style][Gender][Accent][Theme][Sounds][Sounds][Sounds][Intention][Length]</h4>
      <p>&nbsp;</p>
      <form id="form1" name="form1" method="post" action="tgen.php">
  		<input type="hidden" name="validate" value="1" />
      <table width="100%" border="2" cellspacing="0" cellpadding="0" class="table table-condensed table-hover">
        <tr>
          <th width="9%" align="left" scope="row">Talk Style</th>
          <td width="24%">How do you speak to the viewers?</td>
          <td width="67%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <label><input type="checkbox" name="cb0" id="cb0" value="No Vocals"/>&nbsp;&nbsp;No Vocals</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label><input type="checkbox" name="cb1" id="cb1" value="Whispering"/>&nbsp;&nbsp;Whispering</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  			<label><input type="checkbox" name="cb2" id="cb2" value="Soft Spoken"/>&nbsp;&nbsp;Soft Spoken</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label><input type="checkbox" name="cb5" id="cb5" value="Role-Play"/>&nbsp;&nbsp;Role-Play</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  			<label><input type="checkbox" name="cb3" id="cb3" value="Inaudible"/>&nbsp;&nbsp;Inaudible</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
          </td>
        </tr>
        <tr>
          <th align="left" scope="row">Audio Style</th>
          <td>What type of audio setup is this video?</td>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <label><input type="checkbox" name="as1" id="as1" value="Ear To Ear"/>&nbsp;&nbsp;Ear To Ear</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  			<label><input type="checkbox" name="as2" id="as2" value="Stereo"/>&nbsp;&nbsp;Stereo</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  			<label><input type="checkbox" name="as3" id="as3" value="Binaural"/>&nbsp;&nbsp;Binaural</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  			<label><input type="checkbox" name="as4" id="as4" value="3D Sound"/>&nbsp;&nbsp;3D Sound</label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;            
            <label><input type="checkbox" name="as5" id="as5" value="Mouth Sounds"/>&nbsp;&nbsp;Mouth Sounds</label>
            </td>
        </tr>
        <tr>
          <th align="left" scope="row">Gender</th>
          <td>Male or Female?</td>
          <td>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                <input type="radio" name="gender" value="Male" id="gender_0">
                Male</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                <input type="radio" name="gender" value="Female" id="gender_1">
                Female</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="radio" name="gender" value="Other" id="gender_2">
                <input name="gend" type="text" size="10"></label>
          </td>
        </tr>
        <tr>
          <th align="left" scope="row">Accent</th>
          <td>What national accent do you have?</td>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="accent" id="accent">
            <option value="">Select One</option>
            <option value="American">American</option> 
  <option value="British">British</option> 
  <option value="English">English</option> 
  <option value="European">European</option>  
  <option value="French">French</option> 
  <option value="Australian">Australian</option> 
  <option value="Austrian">Austrian</option> 
  <option value="Canadian">Canadian</option> 
  <option value="German">German</option> 
  <option value="Indian">Indian</option> 
  <option value="Indonesian">Indonesian</option> 
  <option value="Italian">Italian</option> 
  <option value="Jamaican">Jamaican</option> 
  <option value="Japanese">Japanese</option> 
  <option value="Korean">Korean</option>  
  <option value="Mexican">Mexican</option> 
  <option value="MexNorwegian">Norwegian</option> 
  <option value="Slovakian">Slovakian</option> 
  <option value="Spainish">Spainish</option> 
  <option value="Swedish">Swedish</option> 
</select>
          </td>
        </tr>
        <tr>
          <th align="left" scope="row">Theme</th>
          <td>What is the general theme of your video?</td>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="theme" type="text" id="theme" maxlength="22" placeholder="Cranial Nerve Exam">
          
          </td>
        </tr>
        <tr>
          <th align="left" scope="row">Triggers</th>
          <td>List up to 6 triggers in the video.</td>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input name="sound1" type="text" id="theme" size="13" maxlength="14" placeholder="Crinkling">
          <input name="sound2" type="text" id="theme" size="13" maxlength="14" placeholder="Brushing">
          <input name="sound3" type="text" id="theme" size="13" maxlength="14" placeholder="Tapping">
          <input name="sound4" type="text" id="theme" size="13" maxlength="14" placeholder="Wood Blocks">
          <input name="sound5" type="text" id="theme" size="13" maxlength="14" placeholder="Water">
          <input name="sound6" type="text" id="theme" size="13" maxlength="14" placeholder="Light">
          
          </td>
        </tr>
        <tr>
          <th align="left" scope="row">Intention</th>
          <td>Is this video intentional?</td>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
            <select name="intent" id="intent">
              <option value="">Select One</option>
              <option value="Intentional">Yes</option>
              <option value="Unintentional">No</option>
            </select>
          </label>
          
          </td>
        </tr>
        <tr>
          <th align="left" scope="row">Length</th>
          <td>Enter the exact video length.</td>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="alength" type="text" id="alength" placeholder="MM" maxlength="2" size="2">:<input name="blength" type="text" id="blength" placeholder="SS" maxlength="2" size="2">
          
          </td>
        </tr>
        <tr align="left">
          
          <td colspan="2" class="text-center"><h4>Separator:
            <select name="sep" id="sep">
              <option value="1">[ ]</option>
              <option value="2">{ }</option>
              <option value="3">( )</option>
              <option value="4">< ></option>
          </select></h4> </td>
          <td class="text-center">
          <input name="submit" type="submit" value="Generate ASMR Tags" class="btn btn-lg btn-success">
          </td>
        </tr>
      </table>
        <hr>
  <div class="well well-sm">
  <h5><img src="../img/facts.png" width="64" height="64" alt="Did You Know...">
  <?PHP
  $rand=array(
  "Dreaming can help you learn.</h5>
<h6>If you’re studying for a test or trying to learn a new task, you might consider taking a nap or heading to bed early rather than hovering over a textbook an hour longer. Here’s why: When the brain dreams, it helps you learn and solve problems, say researchers at Harvard Medical School. In a study that appeared in a recent issue of Current Biology, researchers report that dreams are the brain’s way of processing, integrating and understanding new information. To improve the quality of your sleep—and your brain’s ability to learn—avoid noise in the bedroom, such as the TV, which may negatively impact the length and quality of dreams.</h6>",

"The most common dream? Your spouse is cheating.</h5>
<h6>If you’ve ever woken up in a cold sweat after dreaming about your husband’s extramarital escapade with your best friend, you’re not alone, says Lauri Quinn Loewenberg, a dream expert, author and media personality. “The most commonly reported dream is the one where your mate is cheating,” she says. Loewenberg conducted a survey of more than 5,000 people, and found that the infidelity dream is the nightmare that haunts most people—sometimes on a recurring basis. It rarely has anything to do with an actual affair, she explains, but rather the common and universal fear of being wronged or left alone.</h6>",

"You can’t read while dreaming, or tell the time.</h5>
<h6>If you are unsure whether you are dreaming or not, try reading something. The vast majority of people are incapable of reading in their dreams. The same goes for clocks: each time you look at a clock it will tell a different time and the hands on the clock won’t appear to be moving as reported by lucid dreamers.</h6>",

"Lucid dreaming</h5>
<h6>There is a whole subculture of people practicing what is called lucid or conscious dreaming. Using various techniques, these people have supposedly learned to assume control of their dreams and do amazing things like flying, passing through walls, and traveling to different dimensions or even back in time.</h6>",

"Inventions inspired by dreams:</h5>
<h6>Dreams are responsible for many of the greatest inventions of mankind. A few examples include:<br>
<ul><li>The idea for Google -Larry Page</li>
<li>Alternating current generator -Tesla</li>
<li>DNA’s double helix spiral form -James Watson</li>
<li>The sewing machine -Elias Howe</li>
<li>Periodic table -Dimitri Mendeleyev</li></ul></h6>",

"Sleep paralysis
</h5>
<h6>It’s the stuff of true nightmares. Two characteristics of sleep paralysis are the inability to move (hence paralysis) and a sense of an extremely evil presence in the room with you. It doesn’t feel like a dream, but 100% real. Studies show that during an attack, sleep paralysis sufferers show an overwhelming amygdala activity. The amygdala is responsible for the “fight or flight” instinct and the emotions of fear, terror and anxiety. Enough said!</h6>",

"REM sleep disorder
</h5>
<h6>In the state of REM (rapid-eye-movement) stage of your sleep your body is normally paralyzed. In rare cases, however, people act out their dreams. These have resulted in broken arms, legs, broken furniture, and in at least one reported case, a house burnt down.</h6>",

"Dream drug
</h5>
<h6>There are actually people who like dreaming and dreams so much that they never want to wake up. They want to continue on dreaming even during the day, so they take an illegal and extremely potent hallucinogenic drug called Dimethyltryptamine. It is actually only an isolated and synthetic form of the chemical our brains produce naturally during dreaming.</h6>",
);
echo $rand[rand(0,7)];
  ?>

  </div>
  <hr>
      <p class="lead"></p>
      <table width="95%" border="2" cellspacing="0" cellpadding="0" class="table  table-hover table-condensed">
  <tr>

  
    <td>
      <h4>Output</h4>
      <p>
        <input type="text" size="120" readonly value="<?php
if(strlen($_POST['validate'])){
	
	switch($_POST['sep']){
	case 1:
	$l="[";
	$r="]";
	break;
	
	case 2:
	$l="{";
	$r="}";
	break;
	
	case 3:
	$l="(";
	$r=")";
	break;
	
	case 4:
	$l="<";
	$r=">";
	break;
	}
if(strlen($_POST['cb0'])>2){echo $l.$_POST['cb0'].$r;}	
if(strlen($_POST['cb1'])>2){echo $l.$_POST['cb1'].$r;}
if(strlen($_POST['cb2'])>2){echo $l.$_POST['cb2'].$r;}
if(strlen($_POST['cb3'])>2){echo $l.$_POST['cb3'].$r;}
if(strlen($_POST['cb4'])>2){echo $l.$_POST['cb4'].$r;}
if(strlen($_POST['cb5'])>2){echo $l.$_POST['cb5'].$r;}
if(strlen($_POST['as1'])>2){echo $l.$_POST['as1'].$r;}
if(strlen($_POST['as2'])>2){echo $l.$_POST['as2'].$r;}
if(strlen($_POST['as3'])>2){echo $l.$_POST['as3'].$r;}
if(strlen($_POST['as4'])>2){echo $l.$_POST['as4'].$r;}
if(strlen($_POST['gender'])>2 and $_POST['gender']!="Other"){echo $l.$_POST['gender'].$r;}elseif(strlen($_POST['gender'])>2 and $_POST['gender']=="Other"){echo $l.$_POST['gend'].$r;}
if(strlen($_POST['accent'])>2){echo $l.$_POST['accent'].$r;}
if(strlen($_POST['theme'])>2){echo $l.$_POST['theme'].$r;}
if(strlen(htmlspecialchars($_POST['sound1']))>2){echo $l.htmlspecialchars($_POST['sound1']).$r;}
if(strlen($_POST['sound2'])>2){echo $l.$_POST['sound2'].$r;}
if(strlen($_POST['sound3'])>2){echo $l.$_POST['sound3'].$r;}
if(strlen($_POST['sound4'])>2){echo $l.$_POST['sound4'].$r;}
if(strlen($_POST['sound5'])>2){echo $l.$_POST['sound5'].$r;}
if(strlen($_POST['sound6'])>2){echo $l.$_POST['sound6'].$r;}
if(strlen($_POST['intent'])>2){echo $l.$_POST['intent'].$r;}
if(strlen($_POST['alength'])>1){echo $l.$_POST['alength'].":";}
if(strlen($_POST['blength'])>1){echo $_POST['blength'].$r;}
}
?>" class="text-capitalize">
    </p></td>
  </tr>
</table>

    </div>
<?PHP require_once('footer.php'); ?>
    