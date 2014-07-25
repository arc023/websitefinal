

<?php echo form_open('login'); ?>

   <h1>Admin Login</h1>
  <?php echo validation_errors(); ?>

   

     <label for="username">Username:</label>
     <input type="text" size="20" id="username" name="username"/>

     <br/>
     <label for="password">Password:</label>
     <input type="password" size="20" id="passowrd" name="password"/>
     <br/>
     <input type="submit" name="submit" value="submit"/>
     
   </form>