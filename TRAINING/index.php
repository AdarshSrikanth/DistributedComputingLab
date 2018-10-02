<html>
<head>
       <script type="text/javascript" language="javascript">

              </script>

    <style type="text/css">
        .maindiv {
            background-color: #ebcdcd;
            width: 900px;
            height: 1200px;
            border: solid blue;
        }

        body {
            background-image: url(../Images/accounts.jpg);
            background-size: cover;
        }

        body {
            font-family: Verdana, Arial, Helvetica, sans-serif;
            font-size: 16px;
            color: #333;
        }

        p {
            padding: 10px;
        }

        #wrapper {
            margin:0 auto;
            width: 1100px;
        }
           #in_wrapper1 {
            box-shadow: 12px 17px 13px #3B6AA0;
        }

        #headerleft {
            float: left;
            height: 100px;
            width: 550px;
            background: #0D4F8B;
            color: white;
            font-family: 'Times New Roman';
            font-weight: bold;
            font-size: 26px;
            vertical-align: central;
        }

        #headerright {
            float: left;
            height: 100px;
            width: 550px;
            background: #0D4F8B;
        }

        #navigation {
            float: left;
            height: 40px;
            width: 1080px;
            background: #1874CD;
            font-weight: bold;
            font-size: 18px;
            color: white;
            border: solid #0D4F8B 10px;
            border-bottom: solid #0D4F8B 10px;
        }


        #content {
            float: left;
            background: #0D4F8B;
            width: 850px;
            height: 350px;
        }

        #footer {
            height: 40px;
            width: 1100px;
            background: #0D4F8B;
            clear: both;
            color: white;
        }

        .footer {
            height: 60px;
            width: 1100px;
            background: #0D4F8B;
            clear: both;
            color: white;
            text-align: center;
        }

        .txtmar {
            margin-top: 5px;
            padding: 3px;
            border-radius: 4px;

        }

            .txtmar:hover {
                box-shadow: 1px 1px 10px #0EBFE9;
            }

            .txtmar:focus {
                box-shadow: 1px 1px 10px #FFCC11;
            }

        #psgtechlogo {
            margin-top: 15px;
            margin-left: 10px;
        }

        #headd {
            height: 100px;
        }
        /*#LnkButLogin {
            border-radius: 5px;
            margin-top: 5px;
            text-decoration:none;
            color:white;
            font-weight: bold;
  font-size: 16px;
  padding: 5px;
  background-color:#1874CD;
        }*/
        #btnLogin {
            font-family: arial;
            text-decoration: none;

            font-size: 12px;
            font-weight: bold;

            /*text-shadow: 1px 1px 0px #7CACDE;*/
            /*box-shadow: 2px 4px 2px #78B8F9;*/
            padding: 5px;
            -moz-border-radius: 5px;
            -webkit-border-radius: 10px;
            border-radius: 5px;
            margin-top: 5px;
        }

            #btnLogin:hover {
                color: #0D4F8B !important;
                box-shadow: 1px 1px 6px #05EDFF;
                background: linear-gradient(top, #FAFAFA, #F0F0F0);
                background: -ms-linear-gradient(top, #FAFAFA, #F0F0F0);
                background: -webkit-gradient(linear, left top, left bottom, from(#FAFAFA), to(#F0F0F0));
                background: -moz-linear-gradient(top, #FAFAFA, #F0F0F0);
            }

        #marquee_head {
            padding: 5px;
            height: 40px;
            vertical-align: middle;
        }
        /* menu */

        #templatemo_menu_wrapper {
            float: left;
            width: 250px;
            height: 350px;
            background: #0D4F8B;
            overflow: hidden;
            display:block
        }

        #templatemo_menu {
            padding: 14px 10px;
            background: #003F87;
            overflow: hidden;
            display:block
             }

         #templatemo_menu1 {
            padding: 14px 10px;
            background:  #003F87;
            overflow: hidden;
            height:100px;
             display:block;
        }

            #templatemo_menu ul {
                margin: 0;
                padding: 0;
                list-style: none;
            height: 129px;
        }

                #templatemo_menu ul li {
                    width: 200px;
                    height: 41px;
                    padding: 0 0 0 20px;
                    background: #003F87;
                    margin-bottom: 4px;
            margin-left: 0px;
            margin-right: 0px;
            margin-top: 0px;
        }

                    #templatemo_menu ul li:hover {
                        background: rgba(255, 255, 255, 0.81);
                    }

                    #templatemo_menu ul li a {
                        display: block;
                        width: 170px;
                        height: 33px;
                        padding: 10px 0 0 30px;
                        color: #9fa2a4;
                        font-size: 16px;
                        text-decoration: none;
                        font-weight: normal;
                        background: url(../images/templatemo_menu_list_icon.jpg) left center no-repeat;
                        outline: none;
                    }

            #templatemo_menu li .current {
                color: #ffffff;
            }

            #templatemo_menu li a:hover {
                color: #0D4F8B;
                font-weight: bold;
            }

            #templatemo_menu .last {
                margin-bottom: 0px;
            }

        #VSLogin, #Lblerror {
            padding: 5px 0px 0px 15px;
        }
        .margin {
            margin-right:500%;
        }
        /* end of menu*/
    </style>
<?php
if(isset($_POST["submit"]))
{
$id=$_POST["id"];
$pass=$_POST["pass"];
$hostname="localhost";
$conn=mysql_connect($hostname,"root",'');
if(!$conn)
{
  echo "<script> alert('could not connect');</script>";
}
$selected=mysql_select_db("staff_details",$conn);
$result=mysql_query("select eid from staff where eid='$id' and password='$pass'",$conn);
$count=mysql_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if($count==1){
	header("Location:trainreq.php");
}
else
{
	echo "<script> alert('Invalid Login');</script>";
}
 }
 unset($_POST['submit']);
?>
</head>
<body>
</div>
        <div id="wrapper">
            <div id="in_wrapper1">
                <div id="headd">
                    <div id="headerleft">
                        &nbsp;<img id="psgtechlogo" src="psgtechlogo.jpg" style="height: 68px; width: 79px" />
                        PSG College of Technology
                    </div>

                    <div id="headerright">

                    </div>

                </div>
                <div id="navigation">
                    <marquee id="marquee_head" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">Welcome to Department of Information Technology!</marquee>
                </div>


            <div id="templatemo_menu_wrapper">


        </div>

        <div id="content">
            	<div id="wowslider-container1" style="width: 653px; height:400px;float:left;">
	<div >
        <ul>


            <center>
			<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">

            <br /><br /><br />
                <span id="lblnamlog" style="color:Yellow;font-size:Medium;font-weight:bold;text-decoration:underline;">Faculty Login</span><br /><br />
                               &nbsp;&nbsp;&nbsp;
                                <span id="Lblrol" class="aspNetDisabled" style="color:White;font-size:Medium;font-weight:bold;">Staff id</span>
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input pattern="^[A-Z]\d{4}$" title="Invalid ID format" name="id" type="text" id="Txtstudid" required class="txtmar" />
                 <span id="txtstud" style="color:White;visibility:hidden;">* Enter Login Id</span>
            <br />
            <br />
        <span id="Lblpas" style="color:White;font-size:Medium;font-weight:bold;">Password</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input name="pass" type="password" id="TxtPasswd" title="Enter Your Students.Psgtech  Password" required class="txtmar" />
               <span id="txtpwd" style="color:White;visibility:hidden;">* Enter Password</span>
                <br />
            <br />
            <br />

            <input type="submit" name="submit" value="Login" align="center"  id="btnlogin" style="color:Black;font-size:Small;font-weight:bold;width:60px;align:center" />
			</form>
			&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
			<input type="submit" name="register" value="Register" align="center" onclick="location.href='register.php'" id="btnlogin" style="color:Black;font-size:Small;font-weight:bold;width:70px;align:center" />

                    &nbsp;&nbsp;&nbsp;

                &nbsp <br /><br />
            </bottom>

      </ul>
</div>
</body>
</html>
