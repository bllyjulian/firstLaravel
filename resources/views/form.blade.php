<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form method="post" action="/hasil">
        @csrf
        <label for="field1">Nama:</label>
        <input type="text" name="nama" id="nama"><br>

        <label for="field2">Prodi:</label>
        <input type="text" name="prodi" id="prodi"><br>


        <button type="submit">Submit</button>
    </form>
</body>
</html>