<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<?php include "../scripts/header.html"; ?>
<h6><img src="http://musicfamily.org/realm/Factions/picks/TopPageUpgrade.png" alt="Sun Force" align="middle"></h6>
<h6>Sun Force</h6>
<p>Obtained by excavating both the Dawnstone and Duskstone lore artifacts. It has different effects depending on the time of day.
<p><img src="http://musicfamily.org/realm/Factions/picks/DawnstoneArtifact.png" alt="Dawnstone" align="middle"><b> Dawnstone</b></p>
<p><b>Description</b>: Only found during sunrise hours. Emits a faint glow.</p>
<p><b>Rewards</b>: With Both the Dawnstone and Duskstone artifact, awards the Sun Force upgrade, which grants different effects based on time of the day.</p>
<p><b>Requirement</b>: Excavate between 5:00am and 8:00am (Local Time)
<p><b>Chance</b>: (Excavation count / 10,000)%</p>
<p><img src="http://musicfamily.org/realm/Factions/picks/DuskstoneArtifact.png" alt="Duskstone" align="middle"><b> Duskstone</b></p>
<p><b>Description</b>: Only found during sunset hours. Absorbs light in a small radius.</p>
<p><b>Rewards</b>: With Both the Duskstone and Dawnstone artifacts, awards the Sun Force upgrade, which grants different effects based on time of the day. See details.</p>
<p><b>Requirement</b>: Excavate between 6:00pm and 9:00pm (Local Time)
<p><b>Chance</b>: (Excavation count / 10,000)%</p>
<h6>Sun Force</h6>
<p><b>Note</b>: All times are based on UTC time.
<p><b>Note</b>: Current 
        <a style="text-decoration: none" class="clock24" id="tz24-1509892643-tzutc-eyJob3VydHlwZSI6MTIsInNob3dkYXRlIjoiMCIsInNob3dzZWNvbmRzIjoiMSIsInNob3d0aW1lem9uZSI6IjEiLCJ0eXBlIjoiZCIsImxhbmciOiJlbiJ9">UTC Time</a>
<script type="text/javascript" src="//w.24timezones.com/l.js" async></script>
    <p><img src="http://musicfamily.org/realm/Factions/picks/SunForce12am6am.png" alt="SunForce12pm6pm" align="middle"><b><font color="red"> 12 AM - 6 AM</font></b></p>
    <p><b>Effect</b>: Gain additional assistants based on the amount of Gems you own.
    <p><b>Formula</b>: floor(ln(1+x) ^ 1.35).
    <p><img src="http://musicfamily.org/realm/Factions/picks/SunForce6am12pm.png" alt="SunForce12pm6pm" align="middle"><b><font color="red"> 6 AM - 12 PM</font></b></p>
    <p><b>Effect</b>: Multipicatively increase Faction Coin find chance based on the amount of assistants you own.
    <p><b>Formula</b>: floor(0.25 * X ^ (0.4 + 0.05 * A), where x is your assistants stat and A is Ascension count.
    <p><img src="http://musicfamily.org/realm/Factions/picks/SunForce12pm6pm.png" alt="SunForce12pm6pm" align="middle"><b><font color="red"> 12 PM - 6 PM</font></b></p>
    <p><b>Effect</b>: Increase the production of all buildings based on the amount of Faction Coins you collected in this game.
    <p><b>Formula</b>: log(1 + x) ^ (3 + 3 *A), where x is your total faction coins stat and A is Ascension count.
    <p><img src="http://musicfamily.org/realm/Factions/picks/SunForce6pm12am.png" alt="SunForce6pm12am" align="middle"><b><font color="red"> 6 PM - 12 AM</font></b></p>
    <p><b>Effect</b>: Increase offline production based on the amount of buildings you own.
    <p><b>Formula</b>: 10 * x ^ (0.85 + 0.15 * A), where x is the number of buildings you own and A is Ascension count.
<?php include "../scripts/footer.html"; ?>
