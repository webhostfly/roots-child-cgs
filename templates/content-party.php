<style>
	body {
		background: url(data:image/gif;base64,R0lGODdhBQC8AufOAP0AAv4AAP4BAP4CAf8DAv4EBf8FBv8HB/8ICP8KCf8LC/4MC/8NDP4ODf8PDv0REf4SEv8TE/8VFv8XF/8YGP8ZGf4aGf8bHP4cHf8dHv8fH/8gIf4iIv8jI/8lJP8mJf8nKP4oKP4qKf8rKv8sK/8tLv8vL/4wMP4yM/8zNP81Nf82Nv83N/85Ov46O/48PP89Pf8+P/5AQP9BQf9CQv9EQ/9FRv5GRv9ISP9ISv9JSP5KS/9MTf9NTf5OUP5QUf9RUv9TU/5UVP9VVf9XV/5YWP5aWf9bWv9bXP9dW/9eXP9fX/9gYP9hYP5jYf5kZP9lZf9nZv5oZ/9pav9ra/5sbP9tbf5ubv9vb/9wcP9ycf9zcv91df92dv93d/95ev96e/97fP99ff5+ff9/gP6Agf+Bgv+Dg/+FhP6Gh/+HiP+Jif6Kiv+Li/6MjP+Njf+Pjv+Qj/+RkP+Tk/6UlP+Vlf+XloC07YG15/+Yl32353236f+Zmv6amv6cm/+dnP+enf+foP+hof6io/6kpP+lpf+npv2pp/6qqv+rq/6trP+urf+vsP+wsf6ysv+zs/+0tP62t/+2t/64uP+5uf+7uv68vf+9vv++v/+/v/3Bwf7BwP7Cwv/Dw//FxP/Gxf/Hxv/Jyf/Kyv7Lyv/NzP/Pz//Q0P/R0f/S0v/T1P7U1f7W1v/X1//Z2P/Z2v/b2//d3P3e3P/f4P/g4f7i4f/j4v/k4//l5v7m5v3o5/7p6P7q6//r7P/s7f/t7f7u7v/u7v/v7/7w8P/x8f7y8v/z8/708//19P/39f74+P76+f38+v78/f7+/v///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////ywAAAAABQC8AgAI/gD1CBR4p2BBPAgR7lm4MIBDhwAiRhRAkeLDixgzatzIsaPHjyBDihxJsqTJkyhTqlzJsqXLlzBjypxJs6bNmzhz6tzJs6fPn0CDCh1KtKjRo0iTKl3KtOnMAVChEpg6tYBVqwayat16oGtXBGDBJhg7VoFZswvSpmXAlm2Dt28dyJX7oG5dCHjxRti7V4Lfv4AnCBZMoXDhCogRW1i8+IJjxxgiR85AmbKGy5c3aNbMobPnzx1Ch/ZAmvSH06dBqFYdonVrEbBhj5g9m4Rt2yVy695tonfvE8CBoxg+PIVx4yqSJ1/BnDmL59Cjt5g+3YV16y+yZ4fBnXuM7+DD/ssYP36GefM00qevwZ69jffvb8iXj6N+fR348efYv3+Hf/88BBhgDwQS6MOBB/6goIJANNhgEBBGKKEQFFI4xIUXEqGhhkV02KERIIJ4xIgjImGiiUmkmKISLLK4xIsvMiGjjE3UWKMTOOL4xI47QuGjj1EEKeSQUhRZ5BRIIknFkktW4aSTVkQZ5RVUUonFlVdmoaWWWnTZ5RZggsnFmGN2YaaZXqSp5ppftNkmGHDCGcacc4php51j5JknGXzyWcaff5ohqKBnFGrooWgkmmgajDKqxqOPriGppGxUWmkbmGLqxqabvuGpp3CEGmocpJIqx6mnzqGqqnS02mod/rDGKqsdtNKax6238qGrrn302qsfwAL7x7DDAmKssYEkq+yygjTb7CDQQkvItNMWYq21hmSr7baHdNstIuCCm8i44ypirrmLpJsuI+yy28i78MbryLzzPmKvvZDkm68k/PIbyb//TiKwwJQUXHAlCCessCUMM4zJJRBfksnEE29iscWacKIxJ5103LEnIIcs8ickkwzKySeHorLKorTc8igww0zKzDTXXMrNN5uis86n9NwzKkADncrQQ6titNGrJJ00K0w37XQrUEPtytRTv2K11bBknXUsXHMty9dfzyK22LSUXXYtaKNty9pr3+K227jEHXcudNOty91376L3cd568+K337304gswhAPzy+HBBCPM4osP47jjxEQeeTGUU27M5Zcfo7nmyHTeeTKghy66MqSTvszppzOjuurNtO76687ELvvstNdu++2456777rz37vvvwAcv/PDEF2/88cgnr/zyzDfv/PPQRy/98AEBADs=) repeat-x 0 42px !important;
	}
	#header h1 {
		color: whitesmoke !important;
		-webkit-text-shadow: 1px 2px 2px black;
		-moz-text-shadow: 1px 2px 2px black;
		-ms-text-shadow: 1px 2px 2px black;
		-o-text-shadow: 1px 2px 2px black;
		text-shadow: 1px 2px 2px black;
	}
</style>
<div class="row-fluid">
	<div class="span8">
		<div class="row-fluid">
			<div class="span6 news">
				<div class="well well-header party">
					<h1>组织介绍</h1>
				</div>
				<div class="div" id="content">
					<?php 
					$intro = get_page_by_path('party/cgs_party_intro'); 
					echo apply_filters( 'the_content', $intro->post_content );
					?>
				</div>
			</div>
			<div class="span6 news">
				<?php cgs_posts_list("cxzy_news", 10, "post", "party"); ?>
			</div>
		</div>
		<hr />
		<div class="row-fluid">
			<div class="span6 news">
				<?php cgs_posts_list("cxzy_news", 10, "post", "party"); ?>
			</div>
			<div class="span6">
				<div class="well well-header party">
					<h1>入党导航</h1>
				</div>
				<img src="http://dummyimage.com/570" alt="">
			</div>
		</div>
	</div>
	<div class="span4">
		<div class="well well-header party">
			<h1>党员先锋岗</h1>
		</div>
		<?php get_template_part("templates/content", "starlist"); ?>
	</div>
</div>

<hr />
<div class="row">
	<ul class="thumbnails pins">
		<li class="span2"><a href="" class="thumbnail">
				<img src="http://dummyimage.com/160x3:2" alt="">
				<p>title1</p>
			</a></li>
		<li class="span2"><a href="" class="thumbnail">
				<img src="http://dummyimage.com/160x3:2" alt="">
				<p>title2</p>
			</a></li>
		<li class="span2"><a href="" class="thumbnail">
				<img src="http://dummyimage.com/160x3:2" alt="">
				<p>title3</p>
			</a></li>
		<li class="span2"><a href="" class="thumbnail">
				<img src="http://dummyimage.com/160x3:2" alt="">
				<p>title4</p>
			</a></li>
		<li class="span2"><a href="" class="thumbnail">
				<img src="http://dummyimage.com/160x3:2" alt="">
				<p>title5</p>
			</a></li>
		<li class="span2"><a href="" class="thumbnail">
				<img src="http://dummyimage.com/160x3:2" alt="">
				<p>title6</p>
			</a></li>
	</ul>
</div>