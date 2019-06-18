<?php
$ratings = $query->getAvgRatingForEachSchool($_GET['ID']);
$ratingK = round($ratings['AVG(canteen)']);
$ratingLU = round($ratings['AVG(learnenvironment)']);
$ratingL = round($ratings['AVG(teacher)']);
$ratingA = round($ratings['AVG(activitydiversity)']);
?>

<div class="feedbackDiv" id="feedbackDiv">
<form>
    <form>
        <fieldset id="rating_K">
    <span class="star-cb-group"> <p id="rating_A_Info" class="ratingLabel">Kantine <?=round($ratings['AVG(canteen)'],2)?>/5</p>
      <input type="radio" id="rating-5K" name="ratingK" value="5" <?php if($ratingK == 5):?> checked="checked" <?php endif?>/><label for="rating-5K">5</label>
      <input type="radio" id="rating-4K" name="ratingK" value="4" <?php if($ratingK == 4):?>checked="checked" <?php endif?>/><label for="rating-4K">4</label>
      <input type="radio" id="rating-3K" name="ratingK" value="3" <?php if($ratingK == 3):?> checked="checked" <?php endif?>/><label for="rating-3K">3</label>
      <input type="radio" id="rating-2K" name="ratingK" value="2" <?php if($ratingK == 2):?> checked="checked" <?php endif?>/><label for="rating-2K">2</label>
      <input type="radio" id="rating-1K" name="ratingK" value="1" <?php if($ratingK == 1):?> checked="checked" <?php endif?>/><label for="rating-1K">1</label>
      <input type="radio" id="rating-0K" name="ratingK" value="0" class="star-cb-clear"/><label for="rating-0K">0</label>

    </span>
        </fieldset>
    </form>
    <form>
        <fieldset id="rating_LU">
    <span class="star-cb-group"> <p id="rating_A_Info" class="ratingLabel">Lernumgebung <?=round($ratings['AVG(learnenvironment)'],2)?>/5</p>
      <input type="radio" id="rating-5LU" name="ratingLU" value="5"  <?php if($ratingLU == 5): echo 'checked="checked"'; endif?>/><label for="rating-5LU">5</label>
      <input type="radio" id="rating-4LU" name="ratingLU" value="4"  <?php if($ratingLU == 4): echo 'checked="checked"'; endif?>/><label for="rating-4LU">4</label>
      <input type="radio" id="rating-3LU" name="ratingLU" value="3"  <?php if($ratingLU == 3): echo 'checked="checked"'; endif?>/><label for="rating-3LU">3</label>
      <input type="radio" id="rating-2LU" name="ratingLU" value="2"  <?php if($ratingLU == 2): echo 'checked="checked"'; endif?>/><label for="rating-2LU">2</label>
      <input type="radio" id="rating-1LU" name="ratingLU" value="1"  <?php if($ratingLU == 1): echo 'checked="checked"'; endif?>/><label for="rating-1LU">1</label>
      <input type="radio" id="rating-0LU" name="ratingLU" value="0" class="star-cb-clear"/><label for="rating-0LU">0</label>

    </span>
        </fieldset>
    </form>
    <form>
        <fieldset id="rating_L">
    <span class="star-cb-group"> <p id="rating_A_Info" class="ratingLabel">Lehrer <?=round($ratings['AVG(teacher)'],2)?>/5</p>
      <input type="radio" id="rating-5L" name="ratingL" value="5"  <?php if($ratingL == 5): echo 'checked="checked"'; endif?>/><label for="rating-5L">5</label>
      <input type="radio" id="rating-4L" name="ratingL" value="4"  <?php if($ratingL == 4): echo 'checked="checked"'; endif?>/><label for="rating-4L">4</label>
      <input type="radio" id="rating-3L" name="ratingL" value="3"  <?php if($ratingL == 3): echo 'checked="checked"'; endif?>/><label for="rating-3L">3</label>
      <input type="radio" id="rating-2L" name="ratingL" value="2"  <?php if($ratingL == 2): echo 'checked="checked"'; endif?>/><label for="rating-2L">2</label>
      <input type="radio" id="rating-1L" name="ratingL" value="1"  <?php if($ratingL == 1): echo 'checked="checked"'; endif?>/><label for="rating-1L">1</label>
      <input type="radio" id="rating-0L" name="ratingL" value="0" class="star-cb-clear"/><label for="rating-0L">0</label>
    </span>
        </fieldset>
    </form>
    <form>
        <fieldset id="rating_A">
    <span class="star-cb-group"> <p id="rating_A_Info" class="ratingLabel">Aktivitäten Vielfalt <?=round($ratings['AVG(activitydiversity))'],2)?>/5</p>
      <input type="radio" id="rating-5A" name="ratingA" value="5" <?php if($ratingA == 5): echo 'checked="checked"'; endif?>/><label for="rating-5A">5</label>
      <input type="radio" id="rating-4A" name="ratingA" value="4" <?php if($ratingA == 4): echo 'checked="checked"'; endif?>/><label for="rating-4A">4</label>
      <input type="radio" id="rating-3A" name="ratingA" value="3" <?php if($ratingA == 3): echo 'checked="checked"'; endif?>/><label for="rating-3A">3</label>
      <input type="radio" id="rating-2A" name="ratingA" value="2" <?php if($ratingA == 2): echo 'checked="checked"'; endif?>/><label for="rating-2A">2</label>
      <input type="radio" id="rating-1A" name="ratingA" value="1" <?php if($ratingA == 1): echo 'checked="checked"'; endif?>/><label for="rating-1A">1</label>
      <input type="radio" id="rating-0A" name="ratingA" value="0"  class="star-cb-clear"/><label for="rating-0A">0</label>
    </span>
        </fieldset>
    </form>
    <div id="feedbackStatus"> </div>
    <input type="hidden" name="school_id" value="<?= $_GET['ID'] ?>" id="school_id_hidden" />
    <button class="default-button button-size" id="btn-feedback">Bewertung senden
    </button>
</form>
</div>
