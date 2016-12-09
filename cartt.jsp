<%@ page import = "java.io.*"%>
<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
	<%@ page import = "java.sql.*" %> 
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>花花世界-我的購物車</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!--[if lte IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
	
	<meta name="keywwords" content="Shop Around - Great free html template for on-line shop. Use it as a start point for your on line business. The template can be easily implemented in many open source E-commerce platforms" />
	<meta name="description" content="Shop Around - Great free html template for on-line shop. Use it as a start point for your on line business. The template can be easily implemented in many open source E-commerce platforms" />
	
	<!-- JS -->
	<script src="js/jquery-1.4.1.min.js" type="text/javascript"></script>	
	<script src="js/jquery.jcarousel.pack.js" type="text/javascript"></script>	
	<script src="js/jquery-func.js" type="text/javascript"></script>	
	<!-- End JS -->
	
</head>
<body>
	
<!-- Shell -->	
<div class="shell">
	
	<!-- Header -->	
	<div id="header">
		<h1 id="logo"><a href="index.jsp">NBA球衣販售</a></h1>	
		
		<!-- Cart -->
			<div id="cart">
			<a href="buy.jsp" class="cart-link">前往購物</a>
			<div class="cl">&nbsp;</div>
			
		</div>
		<!-- End Cart -->
		
		<!-- Navigation -->
		<div id="navigation">
			<ul>
			    <li><a href="index.jsp" >首頁</a></li>
			    <li><a href="product.jsp" class="active">產品介紹</a></li>
			    <li><a href="accounting.jsp">我的帳戶</a></li>
			    <li><a href="board.jsp">留言板</a></li>
			    <li><a href="contact.jsp">連絡資訊</a></li>
			</ul>
		</div>
		<!-- End Navigation -->
	</div>
	<!-- End Header -->
	<!-- Main -->
	<div id="main">
		<div class="cl">&nbsp;</div>
		
		<!-- Content -->
		<div id="content">
		<div id="fade" style="width:450px; text-align:center;"></div>
		
		</div>
		<!-- End Content -->
		<!-- table border -->
		
		<%  	
        
//Step 1: 載入資料庫驅動程式 
        	Class.forName("com.mysql.jdbc.Driver");	  
        
//Step 2: 建立連線 
        	String url="jdbc:mysql://localhost/";
            Connection con=DriverManager.getConnection(url,"root","1234");  
//Step 3: 選擇資料庫	
                    con.createStatement().execute("USE test");		
//Step 4: 執行 SQL 指令 
                    String sql = "SELECT * FROM product" ;
                    ResultSet rs =  con.createStatement().executeQuery(sql);		
//Step 5: 顯示結果 				        
        %> 
<table align="center" border=1   width="850" height="80">
<td colspan="2" valign="top"  align="center">

      <div align="center">  
<center><font size="6" color="#000000" face="Dotum">我的購物車</font></b><br></center>
          <div align="center">

     <%
        String  interest[] = request.getParameterValues("Product_Id");
        int q=0;
        int tota=0;
        int g=interest.length;
		int left;
		 String leftString;
        
        while(rs.next())
        {  
  		  if(interest[q].equals(rs.getString(1)))
           {
			tota=tota+rs.getInt(3);
			leftString = rs.getString(4);
            left = Integer.parseInt(leftString);
            left = left - 1;
            leftString = String.valueOf(left);
            sql="INSERT cart(product_name, quantity, sum, account)";
			sql+="value('" + rs.getString(2) +"', ";
			sql+="'"+rs.getString(3)+"\', ";
			sql+="'1 \', ";
			sql+="' "+session.getAttribute("id")+"') ";
			con.createStatement().executeUpdate(sql);
            out.println("<tr><td align=center>"+rs.getString(2)+"---><font color='#FF0000'>"+rs.getString(3)+"</font>元</br></td></tr>"); 
             
			sql="UPDATE product set quantity ="+left+" WHERE product_id="+rs.getString(1);
			con.createStatement().execute(sql);
			

           
                        
            if(q+1<g)q++;
           }
		}
         out.println("<tr><br><td align=center>總價：<font size='4' color='#FF0000'>"+tota+"</font>元</br></tr></td>");
         session.setAttribute("total",tota);
		 
		 
     %>     
	
	 </table><P>
	 <form method="POST" action="buydata.jsp">
			<p align="center">
			<a href="buydata.jsp">
			<input name="Submit1" type="submit" align="center" value="結帳去" style="width:80px">
			</p>
		</form>
	  
            </div>
			<P><P>
    		
	  
	  
	  
	  
      </div>
 <%-- 右邊區塊 END --%>