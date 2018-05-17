<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Login</title>	
		<link rel="stylesheet" href="{{ asset('assets/css/core.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/css/menu.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/css/amazeui.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/css/component.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/css/page/form.css') }}" />
	</head>
	<body>
		<div class="account-pages">
			<div class="wrapper-page">
				<div class="text-center">
	                <a href="index.html" class="logo"><span>Login</span></a>
	            </div>
	            
	            <div class="m-t-40 card-box">
	            	<div class="text-center">
	                    <h4 class="text-uppercase font-bold m-b-0">Sign In</h4>
	                </div>
	                <div class="panel-body">
	                	<form class="am-form">
							{{ csrf_field() }}
							<div class="am-g">
	                			<div class="am-form-group">
							      <input type="email" name="username" class="am-radius"  placeholder="Username">
							    </div>
							
							    <div class="am-form-group form-horizontal m-t-20">
							      <input type="password" name="password" class="am-radius"  placeholder="Password">
							    </div>
							    
							    <div class="am-form-group ">
		                           	<label style="font-weight: normal;color: #999;">
								        <input type="checkbox" name="remember"> Remember me
								    </label>
		                        </div>
		                        
		                        <div class="am-form-group ">
		                        	<button type="button" class="am-btn am-btn-primary am-radius" style="width: 100%;height: 100%;">Log In</button>
		                        </div>
		                        
		                        <div class="am-form-group ">
		                        <a href="" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
		                        </div>
	                		</div>
	                	</form>
	                </div>
	            </div>
			</div>
		</div>
	</body>
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script type="text/javascript">
		$('button').click(function(){
            $.ajax({
                type: "POST",
                url: "{{ url('dologin') }}",
                data: $('form').serialize(),
                dataType: "json",
                success:function(re){
                }
            });
		});
	</script>
</html>