<%@ LANGUAGE="VBSCRIPT" %>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Rico LiveGrid-Example 2</title>

<%
session.contents("ex2")="select OrderID,CustomerID,ShipName,ShipCity,ShipCountry,OrderDate,ShippedDate from orders order by OrderID"
%>

<script src="../../src/prototype.js" type="text/javascript"></script>
<script src="../../src/rico.js" type="text/javascript"></script>
<link href="../client/css/demo.css" type="text/css" rel="stylesheet" />
<!-- #INCLUDE FILE = "chklang2.vbs" --> 
<script type='text/javascript'>
Rico.loadModule('LiveGridAjax','LiveGridMenu','greenHdg.css');

var orderGrid,buffer;

Rico.onLoad( function() {
  var opts = {  
    columnSpecs   : [,,,,,{type:'date'},{type:'date'}]
  };
  buffer=new Rico.Buffer.AjaxSQL('ricoXMLquery.asp', {TimeOut:<%=Session.Timeout%>});
  orderGrid=new Rico.LiveGrid ('ex2', buffer, opts);
  orderGrid.menu = new Rico.GridMenu();
});
</script>

<style type="text/css">
div.ricoLG_cell {
  white-space:nowrap;
}
</style>
</head>


<body>
<p class="ricoBookmark"><span id='ex2_timer' class='ricoSessionTimer'></span><span id="ex2_bookmark">&nbsp;</span></p>
<table id="ex2" class="ricoLiveGrid" cellspacing="0" cellpadding="0">
<colgroup>
<col style='width:40px;' >
<col style='width:60px;' >
<col style='width:150px;'>
<col style='width:120px;' >
<col style='width:90px;' >
<col style='width:100px;'>
<col style='width:100px;'>
</colgroup>
  <tr id='ex2_main'>
	  <th>Order#</th>
	  <th>Customer#</th>
	  <th>Ship Name</th>
	  <th>Ship City</th>
	  <th>Ship Country</th>
	  <th>Order Date</th>
	  <th>Ship Date</th>
  </tr>
</table>

</body>
</html>

