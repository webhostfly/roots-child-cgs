<footer id="content-info" class="container" role="contentinfo">
  <?php dynamic_sidebar('sidebar-footer'); ?>
  <p class="muted">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> <a href="http://www.miibeian.gov.cn/icp/publish/query/icpMemoInfo_login.action?id=4017256" target="_blank">京ICP备09086891号</a></p>
  <p class="muted">BEIJING CHINA SOUTHERN AIRLINES GROUND   SERVICES CO.,LTD</p>
</footer>

<?php if (GOOGLE_ANALYTICS_ID) : ?>
<script>
  var _gaq=[['_setAccount','<?php echo GOOGLE_ANALYTICS_ID; ?>'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
<?php endif; ?>

<?php wp_footer(); ?>
