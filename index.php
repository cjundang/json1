<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>
<body>
 
    <table>
        <thead>
            <tr>
                <th>ID</th><th>First Name</th><th>Last Name</th>
            </tr>
        </thead>
        <tbody id="tblStudent">
        </tbody>
    </table>
</body>
<script>
 
function loadJSON(){
    
    fetch('https://jsonplaceholder.typicode.com/posts/1')
  .then((response) => response.json())
  .then((json) => console.log(json));
}

$(()=>{
    loadJSON();
});
</script>
</html>
