<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php if ($this->is('index')) : ?>
   <footer class="layoutSingleColumn layoutSingleColumn--wide footer" role="contentinfo"> 
    <div class="site-info"> 
     <p>blog since 2015.&nbsp;&nbsp;&nbsp;&nbsp; Theme <a href="https://github.com/jozhn/Bigfa" target="_blank">Bigfa</a>
		by <a href="https://dearjohn.cn/" target="_blank"><span class="cute">John</span></a>.
		&nbsp;&nbsp;&nbsp;&nbsp; 
		<a href="http://www.miitbeian.gov.cn"  target="_blank"><?php echo $this->options->beian;?></a>
    </div>
   </footer> 
<?php else: ?>
<footer class="footer--empty"></footer>
<?php endif; ?>
  </div> <!-- 对应site-main surface-container -->
<div class="loadingBar"></div>
<?php $this->footer(); ?>
	<?php if ($this->options->highlightjs == 'able'):?>
	<script type="text/javascript" src="https://cdn.bootcss.com/highlight.js/9.12.0/highlight.min.js"></script>
	<?php endif; ?>
    <script>
		$("pre code").each(function(i, block) {hljs.highlightBlock(block);});
		<?php if ($this->options->aplayer == 'able'):?>
		if (typeof aplayers !== 'undefined'){
			for (var i = 0; i < aplayers.length; i++) {
				try {aplayers[i].destroy()} catch(e){}
			}
		}
		loadMeting();
		<?php endif; ?>
		jQuery(document).ready(function () {
			$.lately({
				'target' : '.lately-a,.lately-b,.lately-c'
			});
		});
    </script>
	
	<?php if($this->options->Analytics): ?>
	<script>
	<?php echo $this->options->Analytics; ?>
	</script>
	<?php endif; ?>
</body>
</html>
