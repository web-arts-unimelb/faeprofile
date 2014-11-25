<?php
/**
 * @file
 *
 * Available template variables are:
 *
 * $year     - An array of years, each of which contains an array of grants
 *             for that year.
 */
?>

<?php $year = $contract['year']; ?>
<?php if(isset($year) && is_array($year) && count($year) > 0): ?>
  <h3>Contract information</h3>
  <?php foreach($year as $each_year_key => $each_year): ?>
    <?php
      if(empty($each_year_key)) {
        $each_year_key_label = 'Other';
      }
      else {
        $each_year_key_label = $each_year_key;
      }
    ?>
    <h4><?php echo $each_year_key_label ?></h4>
    <ul>
      <?php foreach($each_year as $each_project): ?>
        <li class="faeprofile-block-research-list-item"><?php echo $each_project ?></li>
      <?php endforeach; ?>
    </ul>
  <?php endforeach; ?>
<?php endif; ?>


<p>&nbsp;</p>
<?php $year = $grant['year']; ?>
<?php if(isset($year) && is_array($year) && count($year) > 0): ?>
	<h3>Grant information</h3>
	<?php foreach($year as $each_year_key => $each_year): ?>
		<?php
      if(empty($each_year_key)) {
        $each_year_key_label = 'Other';
      }
      else {
        $each_year_key_label = $each_year_key;
      }
    ?>
    <h4><?php echo $each_year_key_label ?></h4>
    <ul>
      <?php foreach($each_year as $each_project): ?>
        <li class="faeprofile-block-research-list-item"><?php echo $each_project ?></li>
      <?php endforeach; ?>
    </ul>
	<?php endforeach; ?>
<?php endif; ?>


<?php $extra_text = $grant['extra_grant_text']; ?>
<?php if(!empty($extra_text)): ?>
  <h3>Additional grant information</h3>
  <?php echo $extra_text ?>
<?php endif; ?>
