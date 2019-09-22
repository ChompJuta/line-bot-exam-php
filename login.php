
  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
     <link href="https://fonts.googleapis.com/css?family=Mitr&display=swap&subset=thai" rel="stylesheet">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Compiled and minified CSS -->
    <style>
      body {
        font-family: 'Mitr', sans-serif;
             }


				*{
				  margin: 0;
				  padding: 0;
				  outline: none;
				  box-sizing: border-box;
				}

				body{ background: #00695c; }

				.cont{
				  position: relative;
				  width: 25%;
				  height: 400px;
				  padding: 10px 25px;
				  margin: 10vh auto;
				  background: #fff;
				  border-radius: 8px;
				}

				.form{ width: 100%; height: 100%; }

				h1, h2, .user, .pass{ 
				  text-align: center;
				  display: block;
				}

				h1{ 
				  color: #606060;
				  font-weight: bold;
				  font-size: 40px;
				  margin: 30px auto;
				}

				.user, .pass, .login{
				  width: 100%;
				  height: 45px;
				  border: none;
				  border-radius: 5px;
				  font-size: 20px;
				  font-weight: lighter;
				  margin-bottom: 20px;
				}

				.user, .pass{ background: #ecf0f1; }

				.login{
				  color: #fff;
				  cursor: pointer;
				  margin-top: 10px;
				  background: #00695c;
				  transition: background 0.4s ease;
				}

				.login:hover{ background: #004d40; }

				@media only screen and (min-width : 280px) {
				  .cont{ width: 90% }
				}

				@media only screen and (min-width : 480px) {
				  .cont{ width: 60% }
				}

				@media only screen and (min-width : 768px) {
				  .cont{ width: 40% }
				}

				@media only screen and (min-width : 992px) {
				  .cont{ width: 30% }
				}

    </style>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
    <div class="container">
    <center>
    	<h2 style="margin-top: 25px; color: #fff;">ซีพีเฟรชมาร์ท</h2>
        <h4>สาขาปากช่อง</h4>
	</center>

	<div class="cont" style="">
	  
	  <div class="form">
	    <form action="">
	      <center><span style="font-size: 24px; font-weight: bold; color: #606060;" >ลงทะเบียนลูกค้าใหม่</span></center>

	      <!-- <center><div style="width: 100px; height: 100px; background-color: #00695c; margin-top: 10px; border-radius: 100px;"> </div></center> -->

	      <input type="text"
	             class="user"
	             name="name"
	             placeholder="ชื่อ" style="color: #00695c; margin-top: 20px;" />
	      <!-- <input type="password" 
	             class="pass"
	             placeholder="Password"/> -->
	      <input type="text"
	             class="user"
	             name="phonenumber" 
	             placeholder="เบอร์ติดต่อ" style="color: #00695c;" />


			<select class="user" style="color: #00695c; text-align: center;">
			  <option selected >&nbsp;&nbsp;ประเภทธรุกิจ</option>
			  <option value="1">&nbsp;&nbsp;ร้านอาหาร</option>
			  <option value="2">&nbsp;&nbsp;โรงแรม</option>
			  <option value="3">&nbsp;&nbsp;อื่นๆ</option>
			</select>

	     


	      
	      <button  class="login" >ลงทะเบียน</button>

	    </form>
	  </div>
	  
	</div>
</div>

      <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script> -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <!-- Compiled and minified JavaScript -->
    </body>
  </html>



  
          
