<html>
<title>Modelo com relogio</title>
<script language="javascript"><!--W3e JAVAscript Preset
var timerID = null;
var timerRunning = false;
function stopclock()
{
    if(timerRunning)
        clearTimeout(timerID)
    timerRunning = false;
}

function startclock()
{
    stopclock();
    showtime();
}

function showtime()
{
    var now = new Date();
    var hours = now.getHours();
    var minutes = now.getMinutes();
    var seconds = now.getSeconds();
    var timeValue = "" + ((hours > 12) ? hours - 12 : hours);
    timeValue  += ((minutes < 10) ? ":0" : ":") + minutes;
    timeValue  += ((seconds < 10) ? ":0" : ":") + seconds;
    timeValue  += (hours >= 12) ? " P.M." : " A.M.";
    document.clock.face.value = timeValue;
    timerID = setTimeout("showtime()",1000);
    timerRunning = true;
}
//-->
</script>

  <input type="text" name="face" size="12">
<body>
<script>startclock();</script>

</body>
</html>