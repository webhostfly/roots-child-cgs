<div class="row-fluid">
	<div class="span4">
		<div class="well well-header party">
			<h1>前言</h1>
		</div>
		<p>按照党的十七大部署，中央决定从2010年上半年起，用两年时间在全党深入开展创先争优活动。为更好体现以人为本、执政为民的理念，突出为民服务这个重点，深化创先争优活动，2011年8月中央决定在全国窗口单位和服务行业开展“为民服务创先争优”活动。南航司献民总经理、谭万庚书记、张子芳书记在南航“为民服务创先争优”活动布置中要求：要把深入开展“为民服务创先争优”活动作为南航履行央企社会责任，为党和国家分忧、为人民群众服务的重要政治使命，作为提升品牌形象和服务水平的重要机遇，促进科学发展上台阶，培育具有国际竞争力的世界一流企业。要以更大的力度推动活动深入。始终坚持“为顾客服务、为员工服务”的方针，始终把握“创行业之先、争央企之优”的目标，着力化解一批内外部服务中的焦点矛盾和难点问题，着力打造一批内外部服务的品牌项和示范点，着力培养一批服务明星团队和明星员工，着力形成全公司为民服务、创先争优的浓厚氛围。要通过活动，使顾客呼叫服务更加便利、中转服务更加顺畅、高端服务更有品位、行李运输更少差错、航延服务更加到位。</p>
	</div>
	<div class="span8">
		<div class="row-fluid">
			<div class="span6 news">
				<?php cgs_posts_list("cxzy_news", 10, "post", "party"); ?>
			</div>
			<div class="span6 news">
				<div class="well well-header party">
					<h1>工作简报</h1>
				</div>
				<?php echo do_shortcode( '[wpfilebase tag=list id=3 tpl=ul num=9 /]' ); ?>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span6 news">
				<?php cgs_posts_list("cxzy_story", 10, "post", "party"); ?>
			</div>
			<div class="span6">
				<div class="well well-header party">
					<h1>服务明星</h1>
				</div>
				<?php get_template_part("templates/content", "star"); ?>
			</div>
		</div>
	</div>
</div>