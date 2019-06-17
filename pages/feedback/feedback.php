<form>
    <form>
        <fieldset>
    <span class="star-cb-group">
      <input type="radio" id="rating-5K" name="ratingK" value="5"/><label for="rating-5K">5</label>
      <input type="radio" id="rating-4K" name="ratingK" value="4" checked="checked"/><label for="rating-4K">4</label>
      <input type="radio" id="rating-3K" name="ratingK" value="3"/><label for="rating-3K">3</label>
      <input type="radio" id="rating-2K" name="ratingK" value="2"/><label for="rating-2K">2</label>
      <input type="radio" id="rating-1K" name="ratingK" value="1"/><label for="rating-1K">1</label>
      <input type="radio" id="rating-0K" name="ratingK" value="0" class="star-cb-clear"/><label
                for="rating-0K">0</label>
    </span>
        </fieldset>
    </form>
    <form>
        <fieldset>
    <span class="star-cb-group">
      <input type="radio" id="rating-5LU" name="ratingLU" value="5"/><label for="rating-5LU">5</label>
      <input type="radio" id="rating-4LU" name="ratingLU" value="4" checked="checked"/><label for="rating-4LU">4</label>
      <input type="radio" id="rating-3LU" name="ratingLU" value="3"/><label for="rating-3LU">3</label>
      <input type="radio" id="rating-2LU" name="ratingLU" value="2"/><label for="rating-2LU">2</label>
      <input type="radio" id="rating-1LU" name="ratingLU" value="1"/><label for="rating-1LU">1</label>
      <input type="radio" id="rating-0LU" name="ratingLU" value="0" class="star-cb-clear"/><label
                for="rating-0LU">0</label>
    </span>
        </fieldset>
    </form>
    <form>
        <fieldset>
    <span class="star-cb-group">
      <input type="radio" id="rating-5L" name="ratingL" value="5"/><label for="rating-5L">5</label>
      <input type="radio" id="rating-4L" name="ratingL" value="4" checked="checked"/><label for="rating-4L">4</label>
      <input type="radio" id="rating-3L" name="ratingL" value="3"/><label for="rating-3L">3</label>
      <input type="radio" id="rating-2L" name="ratingL" value="2"/><label for="rating-2L">2</label>
      <input type="radio" id="rating-1L" name="ratingL" value="1"/><label for="rating-1L">1</label>
      <input type="radio" id="rating-0L" name="ratingL" value="0" class="star-cb-clear"/><label
                for="rating-0L">0</label>
    </span>

        </fieldset>
    </form>
    <form>
        <fieldset>
    <span class="star-cb-group">
      <input type="radio" id="rating-5A" name="ratingA" value="5"/><label for="rating-5A">5</label>
      <input type="radio" id="rating-4A" name="ratingA" value="4" checked="checked"/><label for="rating-4A">4</label>
      <input type="radio" id="rating-3A" name="ratingA" value="3"/><label for="rating-3A">3</label>
      <input type="radio" id="rating-2A" name="ratingA" value="2"/><label for="rating-2A">2</label>
      <input type="radio" id="rating-1A" name="ratingA" value="1"/><label for="rating-1A">1</label>
      <input type="radio" id="rating-0A" name="ratingA" value="0" class="star-cb-clear"/><label
                for="rating-0A">0</label>
    </span>
        </fieldset>
    </form>
    <div id="feedbackStatus"> </div>

    <button class="default-button button-size" type="submit"
            onclick="addRating(<?= $_GET['ID'] ?>,<?= $_SESSION['user_ID'] ?>)">Bewertung senden
    </button>
</form>
