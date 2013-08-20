<?php
/**
 * @file
 *
 * Available template variables are:
 *
 * $research - An array of all research.
 * $schemes  - An array of research grant schemes, each of which contains an
 *             array of grants.
 * $year     - An array of years, each of which contains an array of grants
 *             for that year.
 */
?>

<?php if ($grants): ?>
  <h3>Investigator on</h3>
  <ul>
  <?php foreach ($grants as $grant): ?>
    <li><?php print $grant; ?></li>
  <?php endforeach; ?>
  </ul>
<?php endif; ?>
