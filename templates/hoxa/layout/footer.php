<?php 

defined('_JEXEC') or die;


?>
		<?php require_once dirname(__FILE__).'/footer/'.$templateprofile.'.php'; ?>
		<?php //require_once dirname(__FILE__).'/footer/profile1.php'; ?>

		<?php if(!empty($customScriptLinks)) {
			echo '<!-- Template style js links -->';
			foreach ($customScriptLinks as $link) {
				echo '<script type="text/javascript" src="'.$link.'"></script>';
			}
		} ?>

		<?php if(!empty($customscriptcode)) {
		    echo $customscriptcode;
		}
		?>

	</body>
</html>

