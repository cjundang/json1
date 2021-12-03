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
    <input type="number" name="" id="x" />
    <input type="number" name="" id="y" />
    <span id="txtResult"> - </span> 
    <button  id="get1"> GET </button>
    <button  id="get2"> GET </button>
    <hr>
    <button  id="json1"> JSON1 </button>





</body>
<script>
    $(()=>{
        $("#get1").click(()=>{
            var x = $("#x").val();
            var y = $("#y").val();
            var url = "http://cj-android-demon.herokuapp.com/add.php?x="+x+"&y=" + y;
            console.log(url);
            $.get(url, (data, status)=>{
                console.log(data);
                console.log(status);
                $("#txtResult").text(data);
            })
        });
        $("#get2").click(()=>{
            var x = $("#x").val();
            var y = $("#y").val();
            var url = "http://cj-android-demon.herokuapp.com/add2.php";
            console.log(url);
            $.post(url, {
                "x": x,
                "y": y
            }, (data, status)=>{
                console.log(data);
                console.log(status);
                $("#txtResult").text(data);
            });
           
        });

        $("#json1").click(()=>{
         
            var url = "http://127.0.0.1/data.json";
            console.log(url);
            $.get(url, (data, status)=>{
                console.log(data);
                
            })
        });

    });
</script>
</html>
