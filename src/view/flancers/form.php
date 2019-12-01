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
<form action="index.php?page=form" method="POST" class="job__form">
    <input type="hidden" name="action" value="createjob" class=""/>
    <input type="hidden" name="page" value="added"/>
    <label for="form__jobname">Name of the job</label>
    <input class="form__jobname padding--bottom" type="text" name="jobname" required />
    <label for="form__textarea">Describe your job offer</label>
    <textarea class="form__textarea" type="text" name="description" rows = "10" cols="100" required></textarea>
    <label for="form__price" class=>Budget</label>
    <input class="form__price" type="number" name="price" min=0 required />
    <label for="form__duration">Duration in days</label>
    <input class="form__duration" type="number" name="duration" min=0 required />
    <label for="form__location">Location</label>
    <input class="form__location" type="text" name="location" required />
    <label for="form__skills">Required skills</label>
    <input class="form__skills" type="text" name="skills" required />
    <button type="submit" class="button-blue">Next step</button>

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
