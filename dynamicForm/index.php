<html lang="en">

<head>

    <title>Bootstrap Jquery Add More Field Example</title>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/b ootstrap.min.css">

</head>

<body>


<div class="container">

    <div class="panel panel-default">

        <div class="panel-heading">Bootstrap Jquery Add More Field Example</div>

        <div class="panel-body">


<!--            <form action="action.php" >-->
<!--                <form method="POST" action="action.php">-->
<!--                    <form action="http://localhost/action.php" method="POST">-->
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">


                <div class="input-group control-group after-add-more">

                    <input type="text" name="addmore[]" class="form-control" placeholder="Enter Name Here">

                    <div class="input-group-btn">

                        <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>

                    </div>

                </div>

                <input type="submit">
            </form>


            <!-- Copy Fields -->

            <div class="copy hide">

                <div class="control-group input-group" style="margin-top:10px">

                    <input type="text" name="addmore[]" class="form-control" placeholder="Enter Name Here">

                    <div class="input-group-btn">

                        <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>

                    </div>

                </div>

            </div>

<!--            <button type="submit">Save</button>-->



        </div>

    </div>

</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input fieldpr
    print 'babi cina';
    print_r($_POST['addmore']);
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>

<!--print_r($_REQUEST['addmore']);-->

<script type="text/javascript">


    $(document).ready(function() {


        $(".add-more").click(function(){

            var html = $(".copy").html();

            $(".after-add-more").after(html);

        });


        $("body").on("click",".remove",function(){

            $(this).parents(".control-group").remove();

        });


    });


</script>


</body>

</html>