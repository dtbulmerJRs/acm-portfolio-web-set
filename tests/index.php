<?php
	define("FILEROOT", dirname(dirname(__FILE__)));
	define("APPROOT", FILEROOT . "/app/");

    include_once "./inc/tester.php"; 
	include_once APPROOT . "helper.php";

	rx_includeAll(APPROOT . '/util/base/');
	rx_includeAll(APPROOT . '/util/');
	rx_includeAll(APPROOT . '/model/');
	rx_includeAll(APPROOT . '/core/');
	rx_includeAll(APPROOT . '/core/handler/');
	rx_includeAll(APPROOT . '/core/template/');

	rx_includeAll(dirname(__FILE__) . '/ut/');
	rx_includeAll(dirname(__FILE__) . '/ut/core/handler');
	rx_includeAll(dirname(__FILE__) . '/ut/core/template');
	rx_includeAll(dirname(__FILE__) . '/ut/core/config');
	rx_includeAll(dirname(__FILE__) . '/ut/model');
	rx_includeAll(dirname(__FILE__) . '/ut/util');
	rx_includeAll(dirname(__FILE__) . '/ut/util/base');

	use Tester\Tester as Tester;
?>

<html>
	<head>
		<style type="text/css">
			body { background: #ddd; font-family: Helvetica, sans-serif;}
			ul { width:960px; margin:0 auto; padding:0; }
			ul li {
				width:100%;
				margin:0 0 10px 0;
				border-radius: 7px;
				list-style: none;	
				font-size:14px;	
				background: #fff;	
				padding:3px 10px;
				color:#fff;		
				box-shadow: rgba(55, 45, 45, .5) 0px -7px 60px inset, rgba(55, 45, 45, .5) 0px 2px 3px;
				text-shadow: rgba(0,0,0, .6) 0px 2px 0px;
			}
			ul li h2 {
				margin:0;
				padding:5px 0px;
				border-bottom:1px solid rgba(255, 255, 255, .4);
				font-size:18px;
			}
			ul li p {
				padding:5px 0;	
				margin:0;
			}
			.pass {
				background: #5F9F5F;
			}

			.fail {
				background: #f33;
			}

			div.note	
			{
				-webkit-transform:rotate(-1deg);
				margin:30px auto;
				width:340px;
				padding: 30px;
				box-shadow:rgba(0,0,0, .2) 0px 7px 12px;
				border-radius: 15px;
				font-family:Arial, Helvetica, sans-serif;
				background: #fff;
				text-align: center;
				border:1px #ddd solid;
			}			
		</style>
	</head>
	<body>
		<div class="note">
		<?php if(Tester::getTestPass()): ?>
				<h1 style="font-weight:normal;">Yes, everything works.</h1>
				<p><small>Move on, nothing to see here.</small></p>	
		<?php else: ?>	
				<h1 style="font-weight:normal;">!!, Something went wrong.</h1>
				<p><small>Don't be sad, be mad.</small></p>	
		<?php endif ?>		
		</div>
		<ul>
			<?php foreach (Tester::getMessages() as $m):?>
				<?php Tester::print_message($m); ?>
			<?php endforeach ?>
		</ul>
	</body>	
</html>