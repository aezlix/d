<form action="contact.php" method="POST">
<fieldset>
<legend>Your contact information</legend>
<p style="margin-left:70px;">
<label><strong>Name:</strong></label>(required)<br />
<input type="text" name="name" value="" />
</p>
<p style="margin-left:70px;">
<label><strong>E-mail:</strong></label>(required)<br />
<input type="text" name="email" value="" />
</p>
<p style="margin-left:70px;">
<label><strong>Subject:</strong></label>(required)<br />
<input type="text" name="subject" value="" />
</p><br />
</fieldset>
<fieldset>
<legend>Your message</legend>
<p style="margin-left:70px;">
<label><strong>Message:</strong></label>(required)<br />
<textarea name="comments" rows="7" cols="50" ></textarea>
</p>
<p style="margin-left:70px;">Security code : <strong>56728</strong><br />
<label><strong>Please enter the code you see above :</strong></label>(required)<br />
<input type="text" name="spam" value="" />
</p>
<p style="margin-left:70px;">
<input class="button" name="submit" type="submit" value="Send" />
</p>
</fieldset>
</form>
