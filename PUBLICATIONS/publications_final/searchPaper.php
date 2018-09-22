<html>
    <head>
        <link rel="stylesheet" href="css/style4.css">
        <style>
        .button {
          width:150px;
          border-radius: 4px;
          background-color:#d55555;
          border: none;
          color: #FFFFFF;
          text-align: center;
          font-size: 17px;
          padding: 10px;

          transition: all 0.5s;
          cursor: pointer;
          margin-left:0px;
        }
        .button:hover
        {
         box-shadow: 3px 3px grey;
        }

        .button span {
          cursor: pointer;
          display: inline-block;
          position: relative;
          transition: 0.5s;
        }

        .button span:after {
          content: '\00bb';
          position: absolute;
          opacity: 0;
          top: 0;
          right: -15px;
          transition: 0.5s;
        }

        .button:hover span {
          padding-right: 25px;
        }

        .button:hover span:after {
          opacity: 1;
          right: 0;
        }

        	</style>
        <script>
        $(document).ready(function(){
          load_data();
          function load_data(query)
          {
            $.ajax({
              url:"fetch1.php",
              method:"post",
              data:{query:query},
              success:function(data)
              {
                $('#search_text').html(data);
              }
            });
          }

          $('#search_text').keyup(function(){
            var search = $(this).val();
            if(search != '')
            {
              load_data(search);
            }
            else
            {
              load_data();
            }
          });
        });
        </script>
    </head>
<body>
  <a href="index.php"> <button type="button" name="submit" class="button" style="float:left;"><span>Go Back</span></button></a>
  <div class="container">
    <center>
        <h2>Search Publications</h2>

    <?php
            // Create connection
        $conn = new mysqli("localhost", "Adarsh", "",'Publication');

    ?>
        <form action="displaySearch.php" method="post">
            <h4>Search By Author:</h3>
        <select name="author" size="1" style="width:100%;">
            <option value="none" selected>Select Author</option>
        <?php
            $staffquery = "SELECT * from staff";
            $staffs = $conn->query($staffquery);

            foreach ($staffs as $staff){
                echo '<option value='.$staff['eid'].'>'.$staff['name'].'</option>';
            }
        ?>
        </select><br/><br/>
        <h4>Search by Year:</h4>
          <div class="input-group input-group-icon">
          <input type="text" list="search_text" name="year" placeholder="YYYY"/>
          <datalist name="search_text" id="search_text"/></datalist>
          </div>

          <br/><br/>
          <button type="submit" name="submit" class="button" style="float:right;margin-right:0px;background-color:green"><span>Submit</span></button>
        </center>
      </div>
</body>
</html>
