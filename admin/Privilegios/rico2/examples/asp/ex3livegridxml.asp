<%@ LANGUAGE="VBSCRIPT" %>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Rico LiveGrid Plus-Example 3</title>

<%
sqltext="select OrderID,CustomerID,ShipName,ShipCity,ShipCountry,OrderDate,ShippedDate from orders order by OrderID"
session.contents("ex3")=sqltext
%>

<script src="../../src/prototype.js" type="text/javascript"></script>
<script src="../../src/rico.js" type="text/javascript"></script>
<!-- #INCLUDE FILE = "chklang2.vbs" --> 

<link href="../client/css/demo.css" type="text/css" rel="stylesheet" />
<script type='text/javascript'>
Rico.loadModule('Effect','LiveGridAjax','LiveGridMenu','greenHdg.css');

var ex3,buffer;

Rico.onLoad( function() {
  // filterUI='t' --> text box
  // filterUI='s' --> select list
  var grid_options = {
    frozenColumns:  1,
    FilterLocation: -1,     // put filter on a new header row
    columnSpecs:  [,,{filterUI:'t',width:150},
                   {filterUI:'t',width:100}, {filterUI:'s',width:100},
                   {type:'date',width:90}, {type:'date',width:90}]
  };
  buffer=new Rico.Buffer.AjaxXML('ricoXMLquery.asp');
  ex3=new Rico.LiveGrid ('ex3', buffer, grid_options);
  ex3.menu=new Rico.GridMenu();
});

</script>


<style type="text/css">
input, select { font-weight:normal;font-size:8pt;}
tr.ex3_hdg2 div.ricoLG_cell { 
  height:     1.4em;   /* the text boxes require a little more height than normal */
  text-align: left;
  background-color: #deeecd;
}
.ricoLG_cell {
  white-space: nowrap;
}
</style>
</head>


<body>
<div id='explanation'>
This LiveGrid demonstrates how an AjaxXML buffer can be loaded from ricoXMLquery,
and still have filters applied as the user types.
The AjaxXML buffer will load all rows into the buffer at grid startup, as opposed to the
AjaxSQL buffer which loads data in chunks as needed.
Filtering is performed on the client -- responsiveness will vary with the speed of
the client computer, the number of rows in the grid, and the efficiency of the browser.
Note the "saveColumnInfo" option - filter settings are saved in a cookie and restored
when the user returns to the page.
<pre>
  buffer=new Rico.Buffer.AjaxXML('ricoXMLquery.asp');

  var grid_options = {
    frozenColumns:  1,
    FilterLocation: -1,     // put filter on a new header row
    saveColumnInfo: {width:true, filter:true, sort:true},
    columnSpecs:  [,,{filterUI:'t',width:150},
                   {filterUI:'t',width:100}, {filterUI:'s',width:100},
                   {type:'date',width:90}, {type:'date',width:90}]
  };
</pre>
</div>

<p class="ricoBookmark">
<a id='ex3_filterLink' href="#"></a>
<span id="ex3_bookmark">&nbsp;</span></p>
<table id="ex3" class="ricoLiveGrid" cellspacing="0" cellpadding="0">
<thead>
  <tr>
	  <th class='ricoFrozen'>ID</th>
	  <th>ID</th>
	  <th colspan='3'>Shipment</th>
	  <th colspan='2'>Date</th>
  </tr>
  <tr id='ex3_main'>
	  <th class='ricoFrozen'>Order</th>
	  <th>Customer</th>
	  <th>Name</th>
	  <th>City</th>
	  <th>Country</th>
	  <th>Order</th>
	  <th>Ship</th>
  </tr>
</thead>
</table>

</body>
</html>

