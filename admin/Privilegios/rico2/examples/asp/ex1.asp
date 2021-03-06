<%@ LANGUAGE="VBSCRIPT" %>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Rico LiveGrid-Example 1</title>

<script src="../../src/prototype.js" type="text/javascript"></script>
<script src="../../src/rico.js" type="text/javascript"></script>
<!-- #INCLUDE FILE = "chklang2.vbs" --> 
<!-- #INCLUDE FILE = "settings.vbs" --> 

<link href="../client/css/demo.css" type="text/css" rel="stylesheet" />
<script type='text/javascript'>
Rico.loadModule('LiveGrid');
Rico.loadModule('LiveGridMenu');
<%
setStyle
%>

Rico.onLoad( function() {
  var opts = {
    <% GridSettingsScript %>,
    defaultWidth : 90,
    useUnformattedColWidth: false,
    columnSpecs  : ['specQty']
  };
  var grid = new Rico.LiveGrid ('ex1', new Rico.Buffer.Base($('ex1').tBodies[0]), opts);
  grid.menu = new Rico.GridMenu(<% GridSettingsMenu %>);
});
</script>

</head>

<body>
<table id='explanation' border='0' cellpadding='0' cellspacing='5' style='clear:both'><tr valign='top'><td>
<%  GridSettingsForm %>
</td><td>This example demonstrates a pre-filled grid (no AJAX data fetches). 
LiveGrid just provides scrolling, column resizing, filtering, and sorting capabilities.
The first column sorts numerically, the others sort in text order.
</td></tr></table>

<p class="ricoBookmark"><span id="ex1_bookmark">&nbsp;</span></p>
<table id="ex1" class="ricoLiveGrid" cellspacing="0" cellpadding="0" border="1">
<thead><tr>
<%
const numcol=15
for c=1 to numcol
  response.write "<th>Column " & c & "</th>"
next
%>
</tr></thead><tbody>
<%
for r=1 to 100
  response.write vbLf & "<tr>"
  response.write "<td>" & r & "</td>"
  for c=2 to numcol
    response.write "<td>Cell " & r & ":" & c & "</td>"
  next
  response.write "</tr>"
next
%>
</tbody></table>

</body>
</html>

