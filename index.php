<!DOCTYPE html>
<html>
  <meta charset="utf-8">
  <head>
      <title>Parse The Directory</title>
  </head>
  <body>
      <h1>Select school to access it's directory:<h1>
      <form method="POST" action="directory.php" >
        <select name="school" >
          <option value="el" >Ηλεκτρολόγοι</option>
          <option value="mc" >Μηχανολόγοι </option>
          <option value="rs" >Τοπογράφοι</option>
          <option value="ar" >Αρχιτέκτονες</option>
          <option value="ge" >ΣΕΜΦΕ</option>
        </select>

        <input type="submit" value="Submit" />
      </form>
  </body>
</html>
