<section class="header">
<a href="index.php?page=dashboard"><img src="../images/logo.svg" alt="Flancer logo" width="150"></a>
</section>

<section class="title__section padding--bottom">
  <div class="title">
    <h1 class="padding--bottom">Add a job</h1>
    <p>please fill in the form</p>
  </div>
</section>

<section>
<form action="index.php?page=form" method="POST">
    <input type="hidden" name="action" value="createjob"/>
    <input type="hidden" name="page" value="added"/>
    <input type="text" name="jobname" required />
    <input type="text" name="description" required />
    <input type="number" name="price" min=0 required />
    <input type="number" name="duration" min=0 required />
    <input type="text" name="location" required />
    <input type="text" name="skills" required />
    <?php
    if(empty($_POST)){
    echo '<input type="submit" value="Request job" class="button button--orange">';
    }
    ?>s

  </form>
</section>
<?php
if(!empty($_POST)){
?>
<section class="padding--bottom">
  <a href="index.php?page=added" class="button-blue">Next</a>
</section>
<?php
}
?>
