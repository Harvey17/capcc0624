<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
body {
	background-size:no-cover;
	background-image: url(image/login_bg.jpg);
}

</style>
<link href="../bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="login.css" rel="stylesheet" type="text/css" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--[if lt IE 9]>
				<script src="http://html5abim.goolecode.com/avn/trunk/html5.js"></script>
<![endif]-->
</head>

<body >
	<div class="container-fluid">	
		<div class="row-fluid">
			 <div class="col-md-4">
		  	  <div class="body_left" ><img src="image/logo.png" width="220" height="65" /></div>
		   </div>
		  
		   <div class="col-md-4  body_right" >
		   		  <div class="col-md-5">
	   					<h2 class="up_left">用户登录</h2>
	   				</div>
	   				<div class="col-md-1 col-md-offset-2">	
	   			    <h4 class="up_right"></h4>
	   			  </div>
	   		  
	   		  	<div class="col-md-12">
	   			  	<form  class="form-horizontal">
	 				 			<fieldset>
	   								  <div class="control-group side">
	          						 <!-- 账号-->
	         							 <label class="control-label" for="username" ><h3><strong>账号:</strong></h3></label><br />
					 							 <input class=" input-lg" type="text" placeholder='手机号/用户名/邮箱'>				 
	     								</div>			
											<div class="control-group side">
	          						<!-- 密码 -->
	          						<label class="control-label" for="code"><h3><strong>密码:</strong></h3></label><br />   
				    						<input class="input-lg" type="text" placeholder=''> 
	     							 	</div>
	                    <br />
	                    
	        					  <div class="control-group side">
	        					  	<!--div class="col-md-2"-->
	        	        		 <button type="button" class="btn btn-primary btn-lg">登录</button>
	        	        		<!--/div-->
	        	        		<!--div class="col-md-5 col-md-offset-1"--> 
	        	        		 <button type="button" class="btn btn-success btn-lg side">注册</button>
	        	        		<!--/div--> 
	        						</div>
	        				    <br />
	        						
	        							<div class="col-md-12">
	     								  <table cellspacing="0" cellpadding="0">
		        							<tr>
		          							<td ><h5>合作账号登录</h5></td>
	                          <td ><img src="image/hz1.gif" width="35" height="25" /></td>
	                          <td ><img src="image/hz3.gif" width="35" height="25" /></td>
	                          <td ><img src="image/hz2.gif" width="35" height="25" /></td>
	                          <td ><img src="image/hz4.gif" width="35" height="25" /></td>
		        							</tr>
	      							  </table>
	      							  </div>
	      							
	                   
	              </fieldset>
	            </form>     
	          </div>
		   </div>
		</div>
	</div>

<script src="../bootstrap/js/jquery-1.11.3.min.js"></script>
<script src="../bootstrap/js/bootstrap.js"></script>
</body>
</html>