<html><head><title>online food management</title>
 <h1><font align='right'>(Sumaia_1104032)</font></h1><hr/>
 <h2><font align='left' color=#996600 size='6'>(Cuet Online food Shop)</font></h2></left> 			   
<!--HTML head including the title tag-->
</head><body style="background-color:gray;">
<!--HTML body including CSS and the HTML code.-->
<!--The beginning of the CSS code section. -->
<style  type="text/css" media="screen">
#horizontalmenu ul { padding: 0; margin:0; list-style: none; }
#horizontalmenu li { float: left; position: relative; padding-right: 20; display: block;
border: 3px solid #000033; border-style: inset; }
#horizontalmenu li ul { display: none; position: absolute; }
#horizontalmenu li:hover ul{ display: block; background: Gray;height: auto;
width: 8em; }
#horizontalmenu li ul li{ clear: both; border-style: none; }
</style>
<div id="horizontalmenu">
<ul>
<li><a href="home1.php">Home</a></li>
<li><a href="overview.php">Products</a></li>
<li><a href="product_details.php">Product's Deatils</a></li>
<li><a href="login.php">Order products</a></li>
<li><a href="#">Receipt</a>
  <ul>
  <li><a href="bill.php">Total_bill</a></li>
  <li><a href="bought.php">Bought_products_id</a></li>
   <li><a href="test.php">Bought_product_type</a></li>
   <li><a href="product_taken.php">products_taken</a></li>
  </ul>
</li>
<li><a href="insert.php">login/register</a></li>
</li>
</li>
<li><a href="admin.php">Admin Panel</a></li>
</li>
</ul>
</div>
 <div id="searchbox" class="topheader" align="right">
    <form  method="post" action="shopsearch.asp?search=Yes" id="search" name="search">Search
      <input class="searchfield" type="text" name="keyword" size="30" value="Enter your id" onclick="clearfield()" />
      <input name="b1" type="submit" value=" Find " class="greybtn" />
    </form>
  </div>
</body>
</html>