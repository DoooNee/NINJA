<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/img/favicon.png" rel="shortcut icon" type="image/png">
    <title>Ninja huyền thoại</title>
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <!-- <script type="text/javascript" src="/jquery/jquery.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script type="text/javascript" src="/dang-ky/bootstrap/js/bootstrap.min.js"></script>
    <!--  -->


    
    <!-- main css -->
    <link rel="stylesheet" href="/dang-ky/css/style.css">
  
  <!-- CSS with media query -->
  <!-- <link rel="stylesheet" media="screen and (max-width: 760px)" href="/css/style_m.css"> -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <script type="text/javascript">
        var jsVer = 15;
        var phoneWidth = parseInt(window.screen.width);
        console.log(phoneWidth);
        var phoneScale = phoneWidth/640;

        if(phoneWidth < 768){
            var ua = navigator.userAgent;
            if (/Android (\d+\.\d+)/.test(ua)){
                var version = parseFloat(RegExp.$1);
                // andriod 2.3
                if(version>2.3){
                    document.write('<meta name="viewport" content="width=640, minimum-scale = '+phoneScale+', maximum-scale = '+phoneScale+', target-densitydpi=device-dpi">');
                }else{
                document.write('<meta name="viewport" content="width=640, target-densitydpi=device-dpi">');
                }

            } else {
                console.log( phoneWidth );
                document.write('<meta name="viewport" content="width=640, user-scalable=no, target-densitydpi=device-dpi">');
            }   

        }else{
            document.write('<meta name="viewport" content="width=768, minimum-scale =1, maximum-scale = 1, target-densitydpi=device-dpi">');
        }
    
    </script>

</head>
<body>

<?php 
    // include __DIR__ . '/preload_page.php'; 
?>

<div class="wrapper wrapper-pc">
<div class="container">
	<header class="header">
		<h1 id="title" class="text-center">Đăng ký</h1>

	</header>
	<div class="form-wrap">	
		<form method="POST" id="survey-form" onsubmit="return false">
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label id="username-label" for="username">Tên đăng nhập</label>
						<input type="text" name="username" id="username" placeholder="Nhập tên đăng nhập của bạn ..." class="form-control" required>
					</div>
				</div>

                <div class="col-md-12">
					<div class="form-group">
						<label id="password-label" for="password">Mật khẩu</label>
						<input type="password" name="password" id="password" placeholder="Nhập mật khẩu của bạn ..." class="form-control" required>
					</div>
				</div>

                <div class="col-md-12">
					<div class="form-group">
						<label id="rpassword-label" for="rpassword">Xác nhận mật khẩu</label>
						<input type="password" name="rpassword" id="rpassword" placeholder="Xác nhận khẩu của bạn ..." class="form-control" required>
					</div>
				</div>

				<div class="col-md-12">
					<div class="form-group">
						<label id="email-label" for="email">Email</label>
						<input type="email" name="email" id="email" placeholder="Nhập email của bạn" class="form-control" required>
					</div>
				</div>

                <div class="col-md-12">
					<div class="form-group">
						<label id="name-label" for="name">Họ tên</label>
						<input type="text" name="name" id="name" placeholder="Nhập họ tên của bạn ..." class="form-control" required>
					</div>
				</div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label >Ngày sinh :</label>
                        <SELECT class="birthday" id ="day" name = "dd" >
                        </SELECT>
                        
                        <SELECT class="birthday"  id ="month" name = "mm" onchange="change_month(this)">
                        </SELECT>

                        <SELECT class="birthday"  id ="year" name = "yyyy" onchange="change_year(this)">
                        </SELECT>

                        <label style="color:red; margin-top:10px">Yêu cầu trên 18 tuổi để đăng ký</label>

                    </div>
                </div>



                <div class="col-md-12">
					<div class="form-group">
						<label id="cmnd-label" for="cmnd">CMND / CCCD: </label>
						<input type="number" name="cmnd" id="cmnd" placeholder="Nhập cmnd hoặc cccd ..." class="form-control" required>
					</div>
				</div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Ngày cấp :</label>
                        <select class="birthday" id="day" name="dd">
                        <option value="day">Ngày</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>
                        
                        <select class="birthday" id="month" name="mm" onchange="change_month(this)">
                        <option value="month">tháng</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option></select>

                        <select class="birthday" id="year" name="yyyy" onchange="change_year(this)">
                        <option value="year">Năm</option><option value="1930">1930</option><option value="1931">1931</option><option value="1932">1932</option><option value="1933">1933</option><option value="1934">1934</option><option value="1935">1935</option><option value="1936">1936</option><option value="1937">1937</option><option value="1938">1938</option><option value="1939">1939</option><option value="1940">1940</option><option value="1941">1941</option><option value="1942">1942</option><option value="1943">1943</option><option value="1944">1944</option><option value="1945">1945</option><option value="1946">1946</option><option value="1947">1947</option><option value="1948">1948</option><option value="1949">1949</option><option value="1950">1950</option><option value="1951">1951</option><option value="1952">1952</option><option value="1953">1953</option><option value="1954">1954</option><option value="1955">1955</option><option value="1956">1956</option><option value="1957">1957</option><option value="1958">1958</option><option value="1959">1959</option><option value="1960">1960</option><option value="1961">1961</option><option value="1962">1962</option><option value="1963">1963</option><option value="1964">1964</option><option value="1965">1965</option><option value="1966">1966</option><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option></select>

                    </div>
                </div>

                <div class="col-md-12">
					<div class="form-group">
						<label id="noicap-label" for="noicap">Nơi cấp: </label>
						<input type="text" name="noicap" id="noicap" placeholder="Nhập nơi cấp cmnd hoặc cccd ..." class="form-control" required>
					</div>
				</div>

                <div class="col-md-12">
					<div class="form-group">
						<label id="sdt-label" for="sdt">Số điện thoại: </label>
						<input type="number" name="sdt" id="sdt" placeholder="Nhập số điện thoại ..." class="form-control" required>
					</div>
				</div>

                <div class="col-md-12">
					<div class="form-group">
						<label id="addr-label" for="addr">Địa chỉ: </label>
						<input type="text" name="addr" id="addr" placeholder="Nhập địa chỉ ..." class="form-control" required>
					</div>
				</div>

            
			</div>

			
			<div class="row">
				<div class="col-md-4">
					<button type="submit" id="submit" class="btn btn-primary btn-block" onclick="submit()">Đăng ký</button>
                    <!-- <input type="submit" class="submit_promise" name="button" value="" onclick="submit()"> -->
                </div>
			</div>

		</form>




            
	</div>
    
    <div class="footer">
            <p>Coppyright © 2021</p>
            <p>Đơn vị chủ quản: Công Ty Cổ Phần SolaPlay</p>


            <div class="footer-btn">
                <a href="#">Chính sách bảo mật</a> 
                |
                <a href="#">Điều khoản</a>

            </div>
        </div>
</div>
</div>





<script src="/dang-ky/js/main.js">


</script>



      

</body>
</html>
